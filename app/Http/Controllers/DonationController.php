<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Campaign;



class DonationController extends Controller
{
    public function index()
    {
        // dd('nice');
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

    
    public function add()
    {
        $data = Campaign::all();
        $userId = auth()->id(); // Getting the authenticated user ID
    
        return view('admin.donation.add', compact('data', 'userId'));
    }

    public function getCampaignDetails($id)
{
    $campaign = Campaign::find($id);

    return response()->json([
        'accountName' => $campaign->accountName,
        'bankName' => $campaign->bankName,
        'accountNumber' => $campaign->accountNumber,
        'accountName2' => $campaign->accountName2,
        'bankName2' => $campaign->bankName2,
        'accountNumber2' => $campaign->accountNumber2,
    ]);
}



    public function store(Request $request) 
    {
            // Validate incoming request data
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'amount' => 'required|numeric|min:0',
                'campaign_id' => 'required|exists:campaign,id',
                'transaction_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            ]);

            // Handle the transaction picture upload if provided
            $transactionPic = null;
            if ($request->hasFile('transaction_pic')) {
                // Store the uploaded image in 'storage/app/public/transaction_pics' directory
                $transactionPic = $request->file('transaction_pic')->store('transaction_pics', 'public');
            }

            // Get the authenticated user's ID, if available (nullable)
            $userId = auth()->check() ? auth()->id() : null;

            // Store the donation data in the database
            Donation::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'amount' => $request->input('amount'),
                'campaign_id' => $request->input('campaign_id'),
                'user_id' => $userId, // Set the user ID if available, otherwise null
                'approve' => 0, // Default approval status is 0 (pending approval)
                'transaction_pic' => $transactionPic, // Path to the uploaded transaction picture
            ]);

            // Redirect to a success page or back to the form with a success message
            return redirect()->back()->with('message', 'Donation added successfully!');
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

    public function destroy($id)
    {
        

        $user = auth()->user();

        // Only allow admin to toggle approval status
        if ($user->user_role == 1) {
            $donation = Donation::findOrFail($id);
            $donation->delete();

            return redirect()->route('donations.index')->with('message', 'Donation deleted successfully.');
        }

        return redirect()->route('donations.index')->with('error', 'Unauthorized action.');
    }

    public function approve($id)
    {
        $donation = Donation::findOrFail($id);
        $user = auth()->user();

        // Only allow admin to toggle approval status
        if ($user->user_role == 1) {
            $donation->approve = !$donation->approve; // Toggle approval status
            $donation->save();

            return redirect()->route('donations.index')->with('message', 'Donation status updated.');
        }

        return redirect()->route('donations.index')->with('error', 'Unauthorized action.');
    }


}
