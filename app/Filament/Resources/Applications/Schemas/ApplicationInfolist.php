<?php

namespace App\Filament\Resources\Applications\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ApplicationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('vacancy_id')
                    ->numeric(),
                TextEntry::make('applied_branch'),
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone'),
                TextEntry::make('date_of_birth_bs'),
                TextEntry::make('date_of_birth_ad'),
                TextEntry::make('nationality'),
                TextEntry::make('marital_status'),
                TextEntry::make('gender'),
                TextEntry::make('citizenship_no'),
                TextEntry::make('p_state'),
                TextEntry::make('p_district'),
                TextEntry::make('p_city'),
                TextEntry::make('p_locality'),
                TextEntry::make('p_ward'),
                TextEntry::make('p_landmark'),
                TextEntry::make('c_state'),
                TextEntry::make('c_district'),
                TextEntry::make('c_city'),
                TextEntry::make('c_locality'),
                TextEntry::make('c_ward'),
                TextEntry::make('c_landmark'),
                TextEntry::make('academic_degree_type'),
                TextEntry::make('highest_qualification'),
                TextEntry::make('institution_name'),
                TextEntry::make('grading'),
                TextEntry::make('completed_year_bs'),
                TextEntry::make('expected_salary')
                    ->numeric(),
                TextEntry::make('org_name'),
                TextEntry::make('org_type'),
                TextEntry::make('position_title'),
                TextEntry::make('joining_date_type'),
                TextEntry::make('joining_date')
                    ->date(),
                TextEntry::make('clearance_date')
                    ->date(),
                TextEntry::make('cv_path'),
                TextEntry::make('cover_letter_path'),
                TextEntry::make('qualification_path'),
                TextEntry::make('photo_path'),
                TextEntry::make('citizenship_path'),
                TextEntry::make('other_files_path'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
