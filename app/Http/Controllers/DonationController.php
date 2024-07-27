<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DonationController extends Controller
{
    public function index()
    {
        // Check the role of the authenticated user
        $user = auth()->user();
        
        if ($user->user_role == 0) {
            // Retrieve all donations for the authenticated user
            $donations = Donation::where('user_id', $user->id)->get();
            // Redirect to student dashboard with user-specific donations
            return view('students.donations.donation', compact('donations'));
        } elseif ($user->user_role == 1) {
            // Retrieve all donations for admin
            $donations = Donation::all();
            // Redirect to admin dashboard with all donations
            return view('admin.donation.donations', compact('donations'));
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized access.');
        }
    }
    
    
    

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'transaction_picture' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'purpose' => 'required|string',
        ]);

        // Handle file upload if a file was provided
        if ($request->hasFile('transaction_picture')) {
            // Store the file in storage/app/public/donations and get the path
            $path = $request->file('transaction_picture')->store('public/donations');

            // Get the actual file name
            $fileName = basename($path);

            // Update the validated data with the file name
            $validatedData['transaction_picture'] = $fileName;
        }

        // Associate user ID with donation data
        $validatedData['user_id'] = auth()->user()->id;

        try {
            // Create a new donation record with the validated data
            $donation = Donation::create($validatedData);

            // Optionally, you can do something after donation creation, like notify the user or log the action

            // Redirect with a success message
            return redirect()->route('donations.index')->with('success', 'Donation added successfully.');
        } catch (\Exception $e) {
            // Handle exceptions, such as database errors or file storage failures
            // Log the error or show an error message to the user
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to add donation. Please try again.']);
        }
    }

    public function destroy(Donation $donation)
    {
        try {
            // Delete the donation
            $donation->delete();

            // Optionally, you can do something after deletion, like notify the user or log the action

            // Redirect with a success message
            return redirect()->route('donations.index')->with('success', 'Donation deleted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions, such as database errors
            // Log the error or show an error message to the user
            return redirect()->back()->withErrors(['error' => 'Failed to delete donation. Please try again.']);
        }
    }
}
