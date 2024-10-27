<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
    
        if ($user->user_role == 0) {
            // Retrieve only the jobs posted by the authenticated user
            // $jobs = Job::where('user_id', $user->id)->get();
            $jobs = Job::where('approve', true)->get();

            // Redirect to student dashboard with user-specific jobs
            return view('students.jobs.jobRecord', compact('jobs'));
        } elseif ($user->user_role == 1) {
            // Retrieve all jobs for admin
            $jobs = Job::all();
            // Redirect to admin dashboard with all jobs
            return view('students.jobs.jobRecord', compact('jobs'));
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized access.');
        }
    }
    



    public function create()
    {
        $userId = auth()->id();
        return view('students.jobs.createJob', compact('userId'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'job_title' => 'required|string',
            'company_name' => 'required|string',
            'job_location' => 'required|string',
            'zip_code' => 'nullable|string',
            'job_description' => 'required|string',
            'job_picture' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for file uploads
        ]);

        // Handle file upload if a file was provided
        if ($request->hasFile('job_picture')) {
            // Store the file in storage/app/public/jobs and get the path
            $path = $request->file('job_picture')->store('public/jobs');

            // Get the actual file name
            $fileName = basename($path);

            // Update the validated data with the file name
            $validatedData['job_picture'] = $fileName;
        }

        // Associate user ID with job data
        $validatedData['user_id'] = auth()->user()->id;

        try {
            // Create a new job record with the validated data
            $job = Job::create($validatedData);

            // Optionally, you can do something after job creation, like notify the user or log the action

            // Redirect with a success message
            return redirect()->route('jobs.list')->with('message', 'Job added successfully.');
        } catch (\Exception $e) {
            // Handle exceptions, such as database errors or file storage failures
            // Log the error or show an error message to the user
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to add job. Please try again.']);
        }
    }

    public function destroy(Job $job)
    {
        try {
            $job->delete();

            return redirect()->route('jobs.list')->with('message', 'Job deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete job. Please try again.']);
        }
    }

    public function approve($id)
    {
        // Find the job by ID
        $job = Job::findOrFail($id);

        // Toggle the approve status
        $job->approve = !$job->approve;

        // Save the updated approve status
        $job->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Job approval status updated successfully.');
    }


    // public function jobList(){
    //     return view('students.jobs.jobRecord');
    // }
}
