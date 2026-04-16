<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactInquiryResource\Pages;
use App\Models\ContactInquiry;
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

class ContactInquiryResource extends Resource
{
    protected static ?string $model = ContactInquiry::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Contact Inquiries';

    protected static ?string $modelLabel = 'Contact Inquiry';

    protected static ?string $pluralModelLabel = 'Contact Inquiries';

    protected static string|UnitEnum|null $navigationGroup = 'Sales';

    protected static ?int $navigationSort = 8;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Section::make('Contact Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Name')
                            ->disabled()
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->disabled()
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('phone')
                            ->label('Phone')
                            ->tel()
                            ->disabled()
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('company')
                            ->label('Company')
                            ->disabled()
                            ->columnSpan(2),
                    ])
                    ->columns(4),

                Section::make('Inquiry Details')
                    ->schema([
                        Forms\Components\TextInput::make('subject')
                            ->label('Subject')
                            ->disabled()
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('message')
                            ->label('Message')
                            ->rows(6)
                            ->disabled()
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),

                Section::make('Status & Management')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'new' => 'New',
                                'in-progress' => 'In Progress',
                                'responded' => 'Responded',
                                'resolved' => 'Resolved',
                                'closed' => 'Closed',
                            ])
                            ->required()
                            ->columnSpan(2),

                        Forms\Components\Toggle::make('is_read')
                            ->label('Read')
                            ->helperText('Mark as read/unread')
                            ->columnSpan(2),

                        Forms\Components\Toggle::make('is_starred')
                            ->label('Starred')
                            ->helperText('Important inquiry')
                            ->columnSpan(2),

                        Forms\Components\DateTimePicker::make('responded_at')
                            ->label('Responded At')
                            ->disabled()
                            ->columnSpan(2),

                        Forms\Components\DateTimePicker::make('closed_at')
                            ->label('Closed At')
                            ->disabled()
                            ->columnSpan(2),

                        Forms\Components\Textarea::make('internal_notes')
                            ->label('Internal Notes')
                            ->rows(4)
                            ->helperText('Internal notes for team members')
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(30)
                    ->tooltip(fn ($record): string => $record->name),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Email copied')
                    ->copyMessageDuration(1500)
                    ->limit(25)
                    ->tooltip(fn ($record): string => $record->email),

                Tables\Columns\TextColumn::make('company')
                    ->label('Company')
                    ->searchable()
                    ->sortable()
                    ->limit(20)
                    ->tooltip(fn ($record): string => $record->company),

                Tables\Columns\TextColumn::make('subject')
                    ->label('Subject')
                    ->searchable()
                    ->sortable()
                    ->limit(40)
                    ->tooltip(fn ($record): string => $record->subject),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'danger',
                        'in-progress' => 'warning',
                        'responded' => 'info',
                        'resolved' => 'success',
                        'closed' => 'gray',
                        default => 'gray',
                    })
                    ->sortable()
                    ->alignCenter(),

                Tables\Columns\IconColumn::make('is_read')
                    ->label('Read')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->sortable()
                    ->alignCenter(),

                Tables\Columns\IconColumn::make('is_starred')
                    ->label('Starred')
                    ->boolean()
                    ->trueIcon('heroicon-o-star')
                    ->falseIcon('heroicon-o-star')
                    ->trueColor('warning')
                    ->falseColor('gray')
                    ->sortable()
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('M j, Y g:i A')
                    ->sortable()
                    ->tooltip(fn ($record): string => $record->created_at->format('M j, Y \a\t g:i A')),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'New',
                        'in-progress' => 'In Progress',
                        'responded' => 'Responded',
                        'resolved' => 'Resolved',
                        'closed' => 'Closed',
                    ])
                    ->label('Status'),

                Tables\Filters\TernaryFilter::make('is_read')
                    ->placeholder('All inquiries')
                    ->trueLabel('Read only')
                    ->falseLabel('Unread only')
                    ->queries(
                        true: fn (Builder $query): Builder => $query->where('is_read', true),
                        false: fn (Builder $query): Builder => $query->where('is_read', false),
                    ),

                Tables\Filters\TernaryFilter::make('is_starred')
                    ->placeholder('All inquiries')
                    ->trueLabel('Starred only')
                    ->falseLabel('Not starred')
                    ->queries(
                        true: fn (Builder $query): Builder => $query->where('is_starred', true),
                        false: fn (Builder $query): Builder => $query->where('is_starred', false),
                    ),
            ])
            ->actions([
                Actions\ViewAction::make(),
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
                Actions\BulkAction::make('mark_as_read')
                    ->label('Mark as Read')
                    ->icon('heroicon-o-check-circle')
                    ->action(fn (array $records) => $records->each->update(['is_read' => true]))
                    ->deselectRecordsAfterCompletion()
                    ->color('success')
                    ->requiresConfirmation(),
                Actions\BulkAction::make('mark_as_unread')
                    ->label('Mark as Unread')
                    ->icon('heroicon-o-x-circle')
                    ->action(fn (array $records) => $records->each->update(['is_read' => false]))
                    ->deselectRecordsAfterCompletion()
                    ->color('warning')
                    ->requiresConfirmation(),
                Actions\BulkAction::make('update_status')
                    ->label('Update Status')
                    ->icon('heroicon-o-pencil')
                    ->form([
                        Forms\Components\Select::make('status')
                            ->label('New Status')
                            ->options([
                                'new' => 'New',
                                'in-progress' => 'In Progress',
                                'responded' => 'Responded',
                                'resolved' => 'Resolved',
                                'closed' => 'Closed',
                            ])
                            ->required(),
                    ])
                    ->action(fn (array $data, array $records) => $records->each->update(['status' => $data['status']]))
                    ->deselectRecordsAfterCompletion()
                    ->color('info')
                    ->requiresConfirmation(),
                Actions\BulkAction::make('toggle_starred')
                    ->label('Toggle Starred')
                    ->icon('heroicon-o-star')
                    ->action(function (array $records) {
                        foreach ($records as $record) {
                            $record->update(['is_starred' => !$record->is_starred]);
                        }
                    })
                    ->deselectRecordsAfterCompletion()
                    ->color('warning'),
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
            'index' => Pages\ListContactInquiries::route('/'),
            'view' => Pages\ViewContactInquiry::route('/{record}'),
            'edit' => Pages\EditContactInquiry::route('/{record}/edit'),
        ];
    }
}
