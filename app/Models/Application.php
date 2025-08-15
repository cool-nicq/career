<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'vacancy_id',
        'applied_branch',
        'first_name',
        'last_name',
        'email',
        'phone',
        'date_of_birth_bs',
        'date_of_birth_ad',
        'nationality',
        'marital_status',
        'gender',
        'citizenship_no',
        'p_state',
        'p_district',
        'p_city',
        'p_locality',
        'p_ward',
        'p_landmark',
        'c_state',
        'c_district',
        'c_city',
        'c_locality',
        'c_ward',
        'c_landmark',
        'academic_degree_type',
        'highest_qualification',
        'institution_name',
        'grading',
        'completed_year_bs',
        'expected_salary',
        'org_name',
        'org_type',
        'position_title',
        'joining_date_type',
        'joining_date',
        'clearance_date',
        'cv_path',
        'cover_letter_path',
        'qualification_path',
        'photo_path',
        'citizenship_path',
        'other_files_path',
        'additional_info',
    ];
}
