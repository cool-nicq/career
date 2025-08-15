<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobPortalController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::where('is_active', true)
            ->where('deadline', '>=', now())
            ->get();

        return view('welcome', compact('vacancies'));
    }

    public function apply($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        return view('apply', compact('vacancy'));
    }

    public function storeApplication(Request $request, $id)
    {
        // dd($request->all());
        $vacancy = Vacancy::findOrFail($id);

        $request->validate([
            // Application Details
            'appliedBranch' => 'required|string|max:255',

            // Personal Information
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'dateOfBirthBS' => 'required|string|max:10',
            'dateOfBirthAD' => 'required|string|max:10',
            'nationality' => 'required|string|max:255',
            'maritalStatus' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'citizenshipNo' => 'nullable|string|max:255',

            // Permanent Address
            'pstate' => 'required|string|max:255',
            'pdistrict' => 'required|string|max:255',
            'pcity' => 'required|string|max:255',
            'plocality' => 'required|string|max:255',
            'pward' => 'required|numeric',
            'plandmark' => 'required|string|max:255',

            // Current Address
            'cstate' => 'required|string|max:255',
            'cdistrict' => 'required|string|max:255',
            'ccity' => 'required|string|max:255',
            'clocality' => 'required|string|max:255',
            'cward' => 'required|numeric',
            'clandmark' => 'required|string|max:255',

            // Academic & Professional Details
            'academic_degree_type' => 'nullable|string|max:255',
            'highestQualification' => 'required|string|max:255',
            'institutionName' => 'required|string|max:255',
            'grading' => 'nullable|string|max:255',
            'completedYearBS' => 'required|numeric',
            'expectedSalary' => 'nullable|numeric',
            'orgName' => 'nullable|string|max:255',
            'orgType' => 'nullable|string|max:255',
            'positionTitle' => 'nullable|string|max:255',
            'joinDateIn' => 'nullable|string|max:255',
            'joiningDate' => 'nullable|date',
            'clearanceDate' => 'nullable|date',
            'totalExperience' => 'nullable|numeric', // ADDED: Validation for totalExperience

            // Attachments
            // 'cv_path' => 'required|file|mimes:pdf,doc,docx|max:6144',
            // 'cover_letter_path' => 'required|file|mimes:pdf,doc,docx|max:6144',
            // 'qualificationFile' => 'required|file|mimes:pdf,jpeg,jpg,png|max:6144',
            // 'photoFile' => 'required|file|mimes:jpg,png,jpeg|max:6144',
            // 'citizenshipFile' => 'nullable|file|mimes:pdf,jpeg,jpg,png|max:6144',
            // 'otherFiles' => 'nullable|array',
            // 'otherFiles.*' => 'file|mimes:pdf,jpeg,jpg,png,docx,doc|max:6144',
        ]);

        $applicantName = Str::slug($request->first_name.' '.$request->last_name);
        $timestamp = now()->timestamp;
        // $vacancyFolder = "vacancies/{$vacancy->id}/{$applicantName}";
        $vacancyFolder = "vacancies/{$vacancy->id}/{$applicantName}_{$timestamp}";

        // Handle all file uploads
        $cvPath = $request->file('cv_path')->storeAs(
            $vacancyFolder,
            "{$applicantName}_{$timestamp}_cv.{$request->file('cv_path')->getClientOriginalExtension()}",
            'public'
        );
        $coverLetterPath = $request->file('cover_letter_path')->storeAs(
            $vacancyFolder,
            "{$applicantName}_{$timestamp}_cover_letter.{$request->file('cover_letter_path')->getClientOriginalExtension()}",
            'public'
        );
        $qualificationPath = $request->file('qualificationFile')->storeAs(
            $vacancyFolder,
            "{$applicantName}_{$timestamp}_qualification.{$request->file('qualificationFile')->getClientOriginalExtension()}",
            'public'
        );
        $photoPath = $request->file('photoFile')->storeAs(
            $vacancyFolder,
            "{$applicantName}_{$timestamp}_photo.{$request->file('photoFile')->getClientOriginalExtension()}",
            'public'
        );
        $citizenshipPath = $request->hasFile('citizenshipFile') ? $request->file('citizenshipFile')->storeAs(
            $vacancyFolder,
            "{$applicantName}_{$timestamp}_citizenship.{$request->file('citizenshipFile')->getClientOriginalExtension()}",
            'public'
        ) : null;
        $otherFilesPaths = null;
        if ($request->hasFile('otherFiles')) {
            $otherFilesPaths = [];
            foreach ($request->file('otherFiles') as $file) {
                $otherFilesPaths[] = $file->storeAs(
                    $vacancyFolder,
                    "{$applicantName}_{$timestamp}_other_file_{$loop->index}.{$file->getClientOriginalExtension()}",
                    'public'
                );
            }
            $otherFilesPaths = json_encode($otherFilesPaths);
        }

        Application::create([
            'vacancy_id' => $vacancy->id,
            'applied_branch' => $request->appliedBranch,

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_of_birth_bs' => $request->dateOfBirthBS,
            'date_of_birth_ad' => $request->dateOfBirthAD,
            'nationality' => $request->nationality,
            'marital_status' => $request->maritalStatus,
            'gender' => $request->gender,
            'citizenship_no' => $request->citizenshipNo,

            'p_state' => $request->pstate,
            'p_district' => $request->pdistrict,
            'p_city' => $request->pcity,
            'p_locality' => $request->plocality,
            'p_ward' => $request->pward,
            'p_landmark' => $request->plandmark,

            'c_state' => $request->cstate,
            'c_district' => $request->cdistrict,
            'c_city' => $request->ccity,
            'c_locality' => $request->clocality,
            'c_ward' => $request->cward,
            'c_landmark' => $request->clandmark,

            'academic_degree_type' => $request->academic_degree_type,
            'highest_qualification' => $request->highestQualification,
            'institution_name' => $request->institutionName,
            'grading' => $request->grading,
            'completed_year_bs' => $request->completedYearBS,
            'expected_salary' => $request->expectedSalary,

            'org_name' => $request->orgName,
            'org_type' => $request->orgType,
            'position_title' => $request->positionTitle,
            'joining_date_type' => $request->joinDateIn,
            'joining_date' => $request->joiningDate,
            'clearance_date' => $request->clearanceDate,
            'total_experience' => $request->totalExperience, // ADDED: Saving the new field

            'cv_path' => $cvPath,
            'cover_letter_path' => $coverLetterPath,
            'qualification_path' => $qualificationPath,
            'photo_path' => $photoPath,
            'citizenship_path' => $citizenshipPath,
            'other_files_path' => $otherFilesPaths,

            'additional_info' => $request->additional_info,
        ]);

        return redirect()->route('job.index')->with('success', 'Application submitted successfully!');
    }
}
