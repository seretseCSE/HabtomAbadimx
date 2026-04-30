<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Setting Information')
                    ->components([
                        TextInput::make('key')
                            ->label('Setting Key')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->helperText('Unique identifier for this setting'),
                    ]),
                Section::make('Setting Value')
                    ->components([
                        Textarea::make('value')
                            ->label('Value')
                            ->required()
                            ->helperText('The actual value of the setting')
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('Description')
                            ->helperText('What this setting controls')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
