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

            // Redirect with a success message
            return redirect()->route('donations.index')->with('success', 'Donation added successfully.');
        } catch (\Exception $e) {
            // Handle exceptions, such as database errors or file storage failures
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to add donation. Please try again.']);
        }
    }

    public function edit($id)
    {
        // Retrieve the donation record by ID
        $donation = Donation::findOrFail($id);

        // Return the edit view with the donation data
        return view('students.donations.edit', compact('donation'));
    }

    public function update(Request $request, $id)
    {
        // Retrieve the donation record by ID
        $donation = Donation::findOrFail($id);

        // Validate the incoming request
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'transaction_picture' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'purpose' => 'required|string',
        ]);

        // Handle file upload if a file was provided
        if ($request->hasFile('transaction_picture')) {
            // Delete the old file if it exists
            if ($donation->transaction_picture) {
                Storage::delete('public/donations/' . $donation->transaction_picture);
            }

            // Store the new file
            $path = $request->file('transaction_picture')->store('public/donations');
            $fileName = basename($path);
            $validatedData['transaction_picture'] = $fileName;
        }

        // Update the donation record with the validated data
        try {
            $donation->update($validatedData);

            // Redirect with a success message
            return redirect()->route('donations.index')->with('success', 'Donation updated successfully.');
        } catch (\Exception $e) {
            // Handle exceptions, such as database errors or file storage failures
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update donation. Please try again.']);
        }
    }

    public function destroy(Donation $donation)
    {
        try {
            // Delete the donation file if it exists
            if ($donation->transaction_picture) {
                Storage::delete('public/donations/' . $donation->transaction_picture);
            }

            // Delete the donation record
            $donation->delete();

            // Redirect with a success message
            return redirect()->route('donations.index')->with('success', 'Donation deleted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions, such as database errors
            return redirect()->back()->withErrors(['error' => 'Failed to delete donation. Please try again.']);
        }
    }
}
