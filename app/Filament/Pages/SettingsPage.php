<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions;
use Illuminate\Support\Facades\Storage;

class SettingsPage extends Page
{
    protected static ?int $navigationSort = 10;

    public function getTitle(): string
    {
        return 'Site Settings';
    }

    public static function canAccess(): bool
    {
        return auth()->user()->is_admin ?? false;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('General Settings')
                    ->schema([
                        Forms\Components\TextInput::make('site_name')
                            ->label('Site Name')
                            ->required()
                            ->maxLength(255)
                            ->default('Habtom Abadi Import Export'),
                        Forms\Components\TextInput::make('contact_email')
                            ->label('Contact Email')
                            ->email()
                            ->default('info@habtomabadimx.com'),
                        Forms\Components\TextInput::make('contact_phone')
                            ->label('Contact Phone')
                            ->tel()
                            ->default('+251 XXX XXX XXX'),
                    ])
                    ->columns(2),
            ]);
    }

    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('save')
                ->label('Save Settings')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            Setting::setValue($key, $value);
        }

        $this->notify('success', 'Site settings have been saved successfully.');
    }

    public function mount(): void
    {
        $this->form->fill($this->getExistingSettings());
    }

    protected function getExistingSettings(): array
    {
        return Setting::pluck('value', 'key')->toArray();
    }
}
