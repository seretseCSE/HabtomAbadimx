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
                        TextInput::make('type')
                            ->label('Setting Type')
                            ->required()
                            ->default('text')
                            ->helperText('Type of value this setting holds (text, number, boolean, json, email, url)'),
                    ])
                    ->columns(2),
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
