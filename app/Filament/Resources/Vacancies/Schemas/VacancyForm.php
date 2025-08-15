<?php

namespace App\Filament\Resources\Vacancies\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VacancyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('location')
                    ->required(),
                TextInput::make('type')
                    ->required()
                    ->default('Full-time'),
                DatePicker::make('deadline')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
