<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasicInfo;
use App\Models\WorkExperience;
use App\Models\EducationDetail;
use Illuminate\Support\Facades\Auth;



class UserDetails extends Controller
{

    // basic details
    public function basicDetails(){
        return view('user-details.basic-information');
    }


    public function storeDetails(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
            'gender' => 'required|string|max:10',
            'birthdate' => 'required|date',
        ]);

        // Check if the user already has a basic info record
        $basicInfo = BasicInfo::where('user_id', auth()->id())->first();

        if ($basicInfo) {
            // Update the existing record
            $basicInfo->update([
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'gender' => $request->gender,
                'birthdate' => $request->birthdate,
            ]);
        } else {
            // Create a new record
            BasicInfo::create([
                'user_id' => auth()->id(),
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'gender' => $request->gender,
                'birthdate' => $request->birthdate,
            ]);
        }

        return redirect('/work-experience')->with('success', 'Basic details added successfully!');
    }




    // work experience
    public function workExperience(){
        return view('user-details.work-experience');
    }


    public function storeWorkExperience(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'job_description' => 'required|string|max:1000',
        ]);
    
        // Check if the user already has a work experience record
        $workExperience = WorkExperience::where('user_id', auth()->id())->first();
    
        if ($workExperience) {
            // Update the existing record
            $workExperience->update([
                'job_title' => $request->job_title,
                'company' => $request->company,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'job_description' => $request->job_description,
            ]);
        } else {
            // Create a new record
            WorkExperience::create([
                'user_id' => auth()->id(),
                'job_title' => $request->job_title,
                'company' => $request->company,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'job_description' => $request->job_description,
            ]);
        }
    
        return redirect('/education')->with('success', 'Work experience added successfully!');
    }


    // education
    public function education(){
        return view('user-details.education');
    }

    
    public function storeEducation(Request $request)
    {
        $request->validate([
            'institution' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'graduation_year' => 'required|integer|min:1900|max:'.date('Y'),
            'gpa' => 'nullable|string|max:10', // Adjust validation rules as needed
        ]);

        // Check if education details already exist for the authenticated user
        $educationDetail = EducationDetail::where('user_id', auth()->id())->first();

        if ($educationDetail) {
            // Update the existing education details
            $educationDetail->update($request->only(['institution', 'degree', 'field_of_study', 'graduation_year', 'gpa', ]));
        } else {
            // Create new education details
            $educationDetail = EducationDetail::create([
                'user_id' => auth()->id(),
                'institution' => $request->institution,
                'degree' => $request->degree,
                'field_of_study' => $request->field_of_study,
                'graduation_year' => $request->graduation_year,
                'gpa' => $request->gpa,
            ]);
        }

        return redirect('/student/dashboard')->with('success', 'Education details added successfully!');
    }
    
    public function showUserDetails()
    {
        $user = auth()->user(); // assuming the user is logged in
        $basicInfo = BasicInfo::where('user_id', $user->id)->first();
        $workExperiences = WorkExperience::where('user_id', $user->id)->get(); // fetch all work experiences
        $educationDetails = EducationDetail::where('user_id', $user->id)->get(); // fetch all education details
        
        return view('students.profile', compact('user', 'basicInfo', 'workExperiences', 'educationDetails'));
    }
    
    




//    basic info 
public function editBasicInfo($id)
{
    $basicInfo = BasicInfo::findOrFail($id);
    return view('students.edit-basicInfo', compact('basicInfo'));
}

//    working experiennce 



public function editWorkExperience($id)
{
    $workExperience = WorkExperience::findOrFail($id);
    return view('students.edit-workExp', compact('workExperience'));
}


public function editEducationDetails($id)
{
    $educationDetails = EducationDetail::findOrFail($id);
    return view('students.edit-education', compact('educationDetails'));
}



public function updateBasicInfo(Request $request, $id)
{
    $basicInfo = BasicInfo::findOrFail($id);
    
    // Update the basic info fields based on the submitted form data
    $basicInfo->update($request->all());
    
    return redirect('/profile')->with('success', 'Basic info updated successfully');
}

public function updateWorkExperience(Request $request, $id)
{
    $workingExperience = WorkExperience::findOrFail($id);
    $workingExperience->update($request->all());
    return redirect('/profile')->with('success', 'Work experience updated successfully.');
}


public function updateEducationDetails(Request $request, $id)
{
    $educationDetails = EducationDetail::findOrFail($id);
    $educationDetails->update($request->all());
    return redirect('/profile')->with('success', 'Education details updated successfully.');
}




public function experiencePrifile(Request $request)
{
    $data = $request->validate([
        'job_title.*' => 'required|string|max:255',
        'company.*' => 'required|string|max:255',
        'start_date.*' => 'required|date',
        'end_date.*' => 'nullable|date|after_or_equal:start_date.*',
        'job_description.*' => 'required|string',
    ]);

    $user_id = auth()->user()->id;

    foreach ($data['job_title'] as $key => $value) {
        WorkExperience::create([
            'user_id' => $user_id,
            'job_title' => $data['job_title'][$key],
            'company' => $data['company'][$key],
            'start_date' => $data['start_date'][$key],
            'end_date' => $data['end_date'][$key] ?? null,
            'job_description' => $data['job_description'][$key],
        ]);
    }

    return redirect()->back()->with('success', 'Work experience added successfully!');
}








public function educationProfile(Request $request)
{
    // Validate input
    $validatedData = $request->validate([
        'institution.*' => 'required',
        'degree.*' => 'required',
        'field_of_study.*' => 'required',
        'graduation_year.*' => 'required',
        'gpa.*' => 'required',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Store education details
    foreach ($request->institution as $key => $value) {
        $education = new EducationDetail();
        $education->user_id = $user->id; // Assigning the user_id
        $education->institution = $request->institution[$key];
        $education->degree = $request->degree[$key];
        $education->field_of_study = $request->field_of_study[$key];
        $education->graduation_year = $request->graduation_year[$key];
        $education->gpa = $request->gpa[$key];
        $education->save();
    }

    // Optionally, redirect to a success page or return a response
    return redirect()->back()->with('success', 'Education details added successfully!');
}




}
