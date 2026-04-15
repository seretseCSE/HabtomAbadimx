<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\BlogPost;
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
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class BlogResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Blog';

    protected static ?string $modelLabel = 'Blog Post';

    protected static ?string $pluralModelLabel = 'Blog Posts';

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Section::make('Blog Post Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('URL-friendly version of the title')
                            ->columnSpan(2),

                        Forms\Components\Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->columnSpan(2),

                        Forms\Components\TextInput::make('author')
                            ->label('Author')
                            ->default(auth()->user()->name ?? 'Admin')
                            ->required()
                            ->columnSpan(2),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Featured')
                            ->helperText('Featured posts will be highlighted on homepage')
                            ->columnSpan(1),

                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft' => 'Draft',
                                'scheduled' => 'Scheduled',
                                'published' => 'Published',
                            ])
                            ->required()
                            ->default('draft')
                            ->columnSpan(1),
                    ])
                    ->columns(4),

                Section::make('Content')
                    ->schema([
                        Forms\Components\TextInput::make('excerpt')
                            ->label('Excerpt')
                            ->maxLength(255)
                            ->helperText('Brief description for blog listings and social media')
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('content')
                            ->label('Content')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'bulletList',
                                'orderedList',
                                'link',
                                'codeBlock',
                                'table',
                                'h1',
                                'h2',
                                'h3',
                                'blockquote',
                            ]),
                    ])
                    ->collapsible(),

                Section::make('Featured Image')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->collection('featured_image')
                            ->image()
                            ->imageEditor()
                            ->directory('blog')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->helperText('Recommended size: 1200x630px')
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),

                Section::make('SEO Settings')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(60)
                            ->helperText('SEO title (max 60 characters)')
                            ->columnSpan(2),

                        Forms\Components\Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(160)
                            ->rows(3)
                            ->helperText('SEO description (max 160 characters)')
                            ->columnSpan(2),

                        Forms\Components\TagsInput::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->placeholder('Add keywords...')
                            ->separator(',')
                            ->helperText('Comma-separated keywords for SEO')
                            ->columnSpan(2),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publish Date')
                            ->helperText('Schedule when this post should go live')
                            ->default(now())
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
                Tables\Columns\ImageColumn::make('featured_image')
                    ->label('Image')
                    ->size(60)
                    ->circular()
                    ->defaultImageUrl(url('/images/placeholder-blog.jpg')),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(70)
                    ->tooltip(fn ($record): string => $record->title),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'scheduled' => 'warning',
                        'published' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Published')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->tooltip(fn ($record): string => $record->formatted_published_at),

                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Featured')
                    ->sortable(),
            ])
            ->defaultSort('published_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'scheduled' => 'Scheduled',
                        'published' => 'Published',
                    ])
                    ->label('Status'),

                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Category'),

                Tables\Filters\TernaryFilter::make('is_featured')
                    ->placeholder('All posts')
                    ->trueLabel('Featured only')
                    ->falseLabel('Not featured')
                    ->queries(
                        true: fn (Builder $query): Builder => $query->where('is_featured', true),
                        false: fn (Builder $query): Builder => $query->where('is_featured', false),
                    ),
            ])
            ->actions([
                Actions\ViewAction::make(),
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
                Actions\BulkAction::make('publish')
                    ->label('Publish Posts')
                    ->icon('heroicon-o-check')
                    ->action(fn (array $records) => $records->each->update(['status' => 'published', 'published_at' => now()]))
                    ->deselectRecordsAfterCompletion()
                    ->color('success')
                    ->requiresConfirmation(),
                Actions\BulkAction::make('unpublish')
                    ->label('Unpublish Posts')
                    ->icon('heroicon-o-x-mark')
                    ->action(fn (array $records) => $records->each->update(['status' => 'draft']))
                    ->deselectRecordsAfterCompletion()
                    ->color('danger')
                    ->requiresConfirmation(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'view' => Pages\ViewBlog::route('/{record}'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
