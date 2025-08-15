<?php

namespace App\Filament\Resources\Applications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ExportBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class ApplicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vacancy_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('applied_branch')->searchable()->sortable(),
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('email')
                    ->label('Email address'),
                TextColumn::make('phone'),
                // TextColumn::make('date_of_birth_bs'),
                // TextColumn::make('date_of_birth_ad')
                //     ,
                // TextColumn::make('nationality')->searchable(),
                // TextColumn::make('marital_status')->searchable(),
                // TextColumn::make('gender')->searchable(),
                // TextColumn::make('citizenship_no'),
                // TextColumn::make('p_state')->searchable(),
                // TextColumn::make('p_district')->searchable(),
                // TextColumn::make('p_city')->searchable(),
                // TextColumn::make('p_locality'),
                // TextColumn::make('p_ward'),
                // TextColumn::make('p_landmark'),
                // TextColumn::make('c_state')->searchable(),
                // TextColumn::make('c_district')->searchable(),
                // TextColumn::make('c_city')->searchable(),
                // TextColumn::make('c_locality'),
                // TextColumn::make('c_ward'),
                // TextColumn::make('c_landmark'),
                TextColumn::make('academic_degree_type'),
                TextColumn::make('highest_qualification'),
                TextColumn::make('institution_name'),
                // TextColumn::make('grading'),
                // TextColumn::make('completed_year_bs'),
                // TextColumn::make('expected_salary')
                // ->numeric(),
                TextColumn::make('org_name')->searchable(),
                TextColumn::make('org_type')->searchable(),
                // TextColumn::make('position_title'),
                // TextColumn::make('joining_date_type'),
                // TextColumn::make('joining_date')
                // ->date(),
                // TextColumn::make('clearance_date')
                // ->date(),
                TextColumn::make('cv_path')
                    ->label('CV')
                    ->formatStateUsing(function ($state) {
                        return $state ? '<a href="'.Storage::url($state).'" >Download</a>' : '-';
                    })
                    ->html(),
                TextColumn::make('cover_letter_path')
                ->label('cover_letter')
                ->formatStateUsing(function ($state) {
                    return $state ? '<a href="'.Storage::url($state).'" >Download</a>' : '-';
                })
                ->html(),
                TextColumn::make('qualification_path')
                ->label('qualification')
                ->formatStateUsing(function ($state) {
                    return $state ? '<a href="'.Storage::url($state).'" >Download</a>' : '-';
                })
                ->html(),
                // Use ImageColumn for the photo
                // TextColumn::make('photo_path'),
                // Use this ImageColumn for the applicant's photo
                TextColumn::make('citizenship_path')
                ->label('citizenship')
                ->formatStateUsing(function ($state) {
                    return $state ? '<a href="'.Storage::url($state).'" >Download</a>' : '-';
                })
                ->html(),
                TextColumn::make('other_files_path')
                ->label('other_files')
                ->formatStateUsing(function ($state) {
                    return $state ? '<a href="'.Storage::url($state).'" >Download</a>' : '-';
                })
                ->html(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
            ])
            ->recordActions([
                ViewAction::make(),
                // EditAction::make(),
            ])
            // ->headerActions([
            //     ExportAction::make()
            //         ->exporter(ApplicationExporter::class),
            // ])
            ->toolbarActions([
                BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                    ExportBulkAction::make(),
                ]),
            ]);
    }
}
