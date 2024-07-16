<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobsController extends Controller
{
    public function index()
    {
        return view('students.jobs.jobs');
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
            return redirect()->route('jobs.index')->with('success', 'Job added successfully.');
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

            return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete job. Please try again.']);
        }
    }
}
