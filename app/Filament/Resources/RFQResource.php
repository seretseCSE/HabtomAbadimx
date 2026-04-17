<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RFQResource\Pages;
use App\Models\RFQ;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions;
use Filament\Schemas\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use BackedEnum;
use UnitEnum;
use Filament\Schemas\Schema;

class RFQResource extends Resource
{
    protected static ?string $model = RFQ::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'RFQs';

    protected static ?string $modelLabel = 'RFQ';

    protected static ?string $pluralModelLabel = 'RFQs';

    protected static string|UnitEnum|null $navigationGroup = 'Sales';

    protected static ?int $navigationSort = 3;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Section::make('RFQ Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Contact Name')
                            ->required()
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('company')
                            ->label('Company Name')
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('phone')
                            ->label('Phone')
                            ->tel()
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('country')
                            ->label('Country')
                            ->columnSpan(2),
                    ])
                    ->columns(4),

                Section::make('Product Details')
                    ->schema([
                        Forms\Components\TextInput::make('product_interest')
                            ->label('Product of Interest')
                            ->required()
                            ->columnSpan(2),

                        Forms\Components\Textarea::make('product_description')
                            ->label('Product Description')
                            ->rows(3)
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('quantity')
                            ->label('Quantity')
                            ->columnSpan(1),

                        Forms\Components\TextInput::make('unit')
                            ->label('Unit')
                            ->placeholder('e.g., kg, tons, units')
                            ->columnSpan(1),
                    ])
                    ->columns(4),

                Section::make('Status & Notes')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'New' => 'New',
                                'In Review' => 'In Review',
                                'Quoted' => 'Quoted',
                                'Closed' => 'Closed',
                            ])
                            ->required()
                            ->columnSpan(2),

                        Forms\Components\Textarea::make('notes')
                            ->label('Internal Notes')
                            ->rows(3)
                            ->columnSpan(2),

                        Forms\Components\Toggle::make('is_archived')
                            ->label('Archived')
                            ->columnSpan(2),
                    ])
                    ->columns(4),

                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Contact Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('company')
                    ->label('Company')
                    ->searchable()
                    ->sortable()
                    ->limit(30),

                Tables\Columns\TextColumn::make('product_interest')
                    ->label('Product Interest')
                    ->searchable()
                    ->sortable()
                    ->limit(30),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Email address copied')
                    ->copyMessageDuration(1500),

                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->sortable()
                    ->placeholder('N/A')
                    ->limit(20)
                    ->tooltip(fn ($record): string => $record->phone ?? 'N/A'),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'New' => 'danger',
                        'In Review' => 'warning',
                        'Quoted' => 'info',
                        'Closed' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->alignEnd(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'New' => 'New',
                        'In Review' => 'In Review',
                        'Quoted' => 'Quoted',
                        'Closed' => 'Closed',
                    ])
                    ->label('Status'),
            ])
            ->actions([
                Actions\ViewAction::make(),
                Actions\Action::make('send_email')
                    ->label('Send Email')
                    ->icon('heroicon-o-envelope')
                    ->color('primary')
                    ->url(fn ($record): string => 'mailto:' . $record->email . '?subject=Re: Your RFQ Request')
                    ->openUrlInNewTab(),
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
                Actions\BulkAction::make('mark_in_review')
                    ->label('Mark as In Review')
                    ->icon('heroicon-o-eye')
                    ->action(fn (array $records) => $records->each->update(['status' => 'In Review']))
                    ->deselectRecordsAfterCompletion()
                    ->color('warning')
                    ->requiresConfirmation(),
                Actions\BulkAction::make('mark_quoted')
                    ->label('Mark as Quoted')
                    ->icon('heroicon-o-check')
                    ->action(fn (array $records) => $records->each->update(['status' => 'Quoted']))
                    ->deselectRecordsAfterCompletion()
                    ->color('info')
                    ->requiresConfirmation()
                    ->modalHeading('Are you sure you want to mark these RFQs as Quoted?'),
                Actions\BulkAction::make('mark_closed')
                    ->label('Mark as Closed')
                    ->icon('heroicon-o-x-mark')
                    ->action(fn (array $records) => $records->each->update(['status' => 'Closed']))
                    ->deselectRecordsAfterCompletion()
                    ->color('success')
                    ->requiresConfirmation(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRFQs::route('/'),
            'view' => Pages\ViewRFQ::route('/{record}'),
            'edit' => Pages\EditRFQ::route('/{record}/edit'),
        ];
    }
}
