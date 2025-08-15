<?php

namespace App\Filament\Resources\Applications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('vacancy_id')
                    ->required()
                    ->numeric(),
                TextInput::make('applied_branch')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('date_of_birth_bs')
                    ->required(),
                TextInput::make('date_of_birth_ad')
                    ->required(),
                TextInput::make('nationality')
                    ->required(),
                TextInput::make('marital_status')
                    ->required(),
                TextInput::make('gender')
                    ->required(),
                TextInput::make('citizenship_no')
                    ->default(null),
                TextInput::make('p_state')
                    ->required(),
                TextInput::make('p_district')
                    ->required(),
                TextInput::make('p_city')
                    ->required(),
                TextInput::make('p_locality')
                    ->required(),
                TextInput::make('p_ward')
                    ->required(),
                TextInput::make('p_landmark')
                    ->required(),
                TextInput::make('c_state')
                    ->required(),
                TextInput::make('c_district')
                    ->required(),
                TextInput::make('c_city')
                    ->required(),
                TextInput::make('c_locality')
                    ->required(),
                TextInput::make('c_ward')
                    ->required(),
                TextInput::make('c_landmark')
                    ->required(),
                TextInput::make('academic_degree_type')
                    ->default(null),
                TextInput::make('highest_qualification')
                    ->default(null),
                TextInput::make('institution_name')
                    ->default(null),
                TextInput::make('grading')
                    ->default(null),
                TextInput::make('completed_year_bs')
                    ->default(null),
                TextInput::make('expected_salary')
                    ->numeric()
                    ->default(null),
                TextInput::make('org_name')
                    ->default(null),
                TextInput::make('org_type')
                    ->default(null),
                TextInput::make('position_title')
                    ->default(null),
                TextInput::make('joining_date_type')
                    ->default(null),
                DatePicker::make('joining_date'),
                DatePicker::make('clearance_date'),
                TextInput::make('cv_path')
                    ->required(),
                TextInput::make('cover_letter_path')
                    ->required(),
                TextInput::make('qualification_path')
                    ->required(),
                TextInput::make('photo_path')
                    ->required(),
                TextInput::make('citizenship_path')
                    ->default(null),
                TextInput::make('other_files_path')
                    ->default(null),
                Textarea::make('additional_info')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
