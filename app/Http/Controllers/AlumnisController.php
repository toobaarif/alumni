<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\User; // Add this line to import the User model
use PDF; // Import the PDF facade
use App\Models\BasicInfo;
use App\Models\WorkExperience;
use App\Models\EducationDetail;


class AlumnisController extends Controller
{
    public function index(){
        $users = User::with('department', 'program')->where('user_role', 0)->get();
        return view('admin.alumni.alumnis', compact('users'));
    }


    public function getPrograms($departmentId)
    {
        // Fetch programs based on the department ID
        $programs = Program::where('department_id', $departmentId)->get();

        // Return JSON response
        return response()->json($programs);
    }

    // public function alumnisProfiles(){
    //     return view('admin.alumni.profiles');
    // }


    public function generatePdf($alumniId)
    {
        // Fetch alumni details using the provided alumni ID
        $alumni = User::find($alumniId); // Assuming you have a User model for alumni
    
        if (!$alumni) {
            abort(404, 'Alumni not found');
        }
    
        // Fetch related data for the alumni
        $basicInfo = BasicInfo::where('user_id', $alumni->id)->first();
        $workExperiences = WorkExperience::where('user_id', $alumni->id)->get();
        $educationDetails = EducationDetail::where('user_id', $alumni->id)->get();
    
        // Load the PDF view and pass data to it
        $pdf = PDF::loadView('admin.alumni.profiles', compact('alumni', 'basicInfo', 'workExperiences', 'educationDetails'));
    
        // Return the generated PDF in a new tab
        return $pdf->stream('alumni_profile.pdf');
    }
    
}
