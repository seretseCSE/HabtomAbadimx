<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SettingsPage extends Page
{
    protected static ?int $navigationSort = 10;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?string $slug = 'site-settings';

    protected string $view = 'filament.pages.site-settings-page';

    public ?array $data = [];

    public function getTitle(): string
    {
        return 'Site Settings';
    }

    public static function canAccess(): bool
    {
        return auth()->user()?->is_admin ?? false;
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Settings')
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Site Name')
                            ->required()
                            ->maxLength(255)
                            ->default('Habtom Abadi Import Export'),
                        TextInput::make('contact_email')
                            ->label('Contact Email')
                            ->email()
                            ->default('info@habtomabadimx.com'),
                        TextInput::make('contact_phone')
                            ->label('Contact Phone')
                            ->tel()
                            ->default('+251 XXX XXX XXX'),
                    ])
                    ->columns(2),
            ])
            ->statePath('data');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('save')
                ->label('Save Settings')
                ->action('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            Setting::setValue($key, $value);
        }

        Notification::make()
            ->success()
            ->title('Site settings have been saved successfully.')
            ->send();
    }

    public function mount(): void
    {
        $this->form->fill(Setting::getAllSettings());
    }
}
