<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificationResource\Pages;
use App\Models\Certification;
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
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class CertificationResource extends Resource
{
    protected static ?string $model = Certification::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Certifications';

    protected static ?string $modelLabel = 'Certification';

    protected static ?string $pluralModelLabel = 'Certifications';

    protected static string|UnitEnum|null $navigationGroup = 'Company';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Section::make('Certification Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Certification Name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('issuing_body')
                            ->label('Issuing Body')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('certificate_number')
                            ->label('Certificate Number')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        Forms\Components\DatePicker::make('issue_date')
                            ->label('Issue Date')
                            ->required()
                            ->native(false)
                            ->columnSpan(2),

                        Forms\Components\DatePicker::make('expiry_date')
                            ->label('Expiry Date')
                            ->native(false)
                            ->helperText('Leave blank if certification does not expire')
                            ->columnSpan(2),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Featured')
                            ->helperText('Featured certifications will be highlighted on homepage')
                            ->columnSpan(1),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('Inactive certifications will not be displayed')
                            ->default(true)
                            ->columnSpan(1),

                        Forms\Components\TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first')
                            ->columnSpan(2),
                    ])
                    ->columns(4),

                Section::make('Certificate Document')
                    ->schema([
                        Forms\Components\FileUpload::make('document_file')
                            ->label('Certificate Document')
                            ->helperText('Upload PDF or image of the certificate')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'image/jpeg',
                                'image/jpg', 
                                'image/png',
                                'image/webp'
                            ])
                            ->maxSize(10240) // 10MB
                            ->directory('certifications')
                            ->disk('public')
                            ->visibility('public')
                            ->columnSpan(2),

                        SpatieMediaLibraryFileUpload::make('logo')
                            ->label('Certification Logo')
                            ->helperText('Upload logo of the issuing organization')
                            ->collection('certification_logos')
                            ->conversion('thumb')
                            ->columnSpan(2),
                    ])
                    ->columns(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo_url')
                    ->label('Logo')
                    ->size(60)
                    ->circular()
                    ->defaultImageUrl(url('/images/placeholder-certification.jpg')),

                Tables\Columns\TextColumn::make('name')
                    ->label('Certification')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50)
                    ->tooltip(fn ($record): string => $record->name),

                Tables\Columns\TextColumn::make('issuing_body')
                    ->label('Issuing Body')
                    ->searchable()
                    ->sortable()
                    ->limit(40)
                    ->tooltip(fn ($record): string => $record->issuing_body),

                Tables\Columns\TextColumn::make('certificate_number')
                    ->label('Certificate #')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Certificate number copied')
                    ->copyMessageDuration(1500),

                Tables\Columns\TextColumn::make('issue_date')
                    ->label('Issue Date')
                    ->date('M j, Y')
                    ->sortable()
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('expiry_date')
                    ->label('Expiry Date')
                    ->date('M j, Y')
                    ->sortable()
                    ->alignCenter()
                    ->formatStateUsing(fn ($state) => $state ? $state->format('M j, Y') : 'No Expiry'),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'valid' => 'success',
                        'expiring-soon' => 'warning',
                        'expired' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn ($record): string => $record->calculateStatus())
                    ->sortable()
                    ->alignCenter(),

                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Active')
                    ->sortable()
                    ->alignCenter(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'valid' => 'Valid',
                        'expiring-soon' => 'Expiring Soon',
                        'expired' => 'Expired',
                    ])
                    ->label('Status'),

                Tables\Filters\SelectFilter::make('is_active')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ])
                    ->label('Active Status'), 
            ])
            ->actions([
                Actions\ViewAction::make(),
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
                Actions\BulkAction::make('activate')
                    ->label('Activate Certifications')
                    ->icon('heroicon-o-check')
                    ->action(fn (array $records) => $records->each->update(['is_active' => true]))
                    ->deselectRecordsAfterCompletion()
                    ->color('success'),
                Actions\BulkAction::make('deactivate')
                    ->label('Deactivate Certifications')
                    ->icon('heroicon-o-x-mark')
                    ->action(fn (array $records) => $records->each->update(['is_active' => false]))
                    ->deselectRecordsAfterCompletion()
                    ->color('danger'),
                Actions\BulkAction::make('toggle_featured')
                    ->label('Toggle Featured')
                    ->icon('heroicon-o-star')
                    ->action(function (array $records) {
                        foreach ($records as $record) {
                            $record->update(['is_featured' => !$record->is_featured]);
                        }
                    })
                    ->deselectRecordsAfterCompletion()
                    ->color('warning'),
            ])
            ->emptyStateActions([
                Actions\CreateAction::make(),
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
            'index' => Pages\ListCertifications::route('/'),
            'create' => Pages\CreateCertification::route('/create'),
            'view' => Pages\ViewCertification::route('/{record}'),
            'edit' => Pages\EditCertification::route('/{record}/edit'),
        ];
    }
}
