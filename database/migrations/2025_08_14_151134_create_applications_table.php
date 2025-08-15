<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('applications', function (Blueprint $table) {
//             $table->id();
//             $table->foreignId('vacancy_id')->constrained()->onDelete('cascade');
//             $table->string('first_name');
//             $table->string('last_name');
//             $table->string('email');
//             $table->string('phone')->nullable();
//             $table->string('cv_path')->nullable();
//             $table->string('cover_letter_path')->nullable();
//             $table->text('additional_info')->nullable();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('applications');
//     }
// };

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vacancy_id')->constrained()->onDelete('cascade');
            $table->string('applied_branch');

            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('date_of_birth_bs');
            $table->string('date_of_birth_ad');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('gender');
            $table->string('citizenship_no')->nullable();

            // Permanent Address
            $table->string('p_state');
            $table->string('p_district');
            $table->string('p_city');
            $table->string('p_locality');
            $table->string('p_ward');
            $table->string('p_landmark');

            // Current Address
            $table->string('c_state');
            $table->string('c_district');
            $table->string('c_city');
            $table->string('c_locality');
            $table->string('c_ward');
            $table->string('c_landmark');

            // Academic & Professional Details
            $table->string('academic_degree_type')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('grading')->nullable();
            $table->string('completed_year_bs')->nullable();
            $table->integer('expected_salary')->nullable();
            $table->string('org_name')->nullable();
            $table->string('org_type')->nullable();
            $table->string('position_title')->nullable();
            $table->string('joining_date_type')->nullable(); // Stores whether date is AD or BS
            $table->date('joining_date')->nullable();
            $table->date('clearance_date')->nullable();

            // Attachments
            $table->string('cv_path');
            $table->string('cover_letter_path');
            $table->string('qualification_path');
            $table->string('photo_path');
            $table->string('citizenship_path')->nullable();
            $table->string('other_files_path')->nullable();

            $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
