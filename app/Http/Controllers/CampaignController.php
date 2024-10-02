<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        $data = Campaign::all();

        return view('admin.campaign.campaignShow', compact('data'));
    }

    public function create()
    {
        return view('admin.campaign.campaignCreate');
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'timeline' => 'required|in:year,month,week,3months,6months,continuous',
            'objectives' => 'required|string',
            'why' => 'required|string',
            'maxCollection' => 'required|numeric',
            'minimum' => 'required|numeric',
            'status' => 'required|boolean',
            'coverPhoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'picOneMain' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'picTwo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         
            'accountName' => 'required|string|max:255',
            'bankName' => 'required|string|max:255',
            'accountNumber' => 'required|string|max:255',
            'accountName2' => 'nullable|string|max:255',
            'bankName2' => 'nullable|string|max:255',
            'accountNumber2' => 'nullable|string|max:255',
        ]);
    
        // Handle image uploads (store in the storage/app/public folder)
        $coverPhotoPath = null;
        $picOneMainPath = null;
        $picTwoPath = null;
    
        if ($request->hasFile('coverPhoto')) {
            $coverPhotoPath = $request->file('coverPhoto')->store('campaign_images', 'public');
        }
    
        if ($request->hasFile('picOneMain')) {
            $picOneMainPath = $request->file('picOneMain')->store('campaign_images', 'public');
        }
    
        if ($request->hasFile('picTwo')) {
            $picTwoPath = $request->file('picTwo')->store('campaign_images', 'public');
        }
    
        // Save the validated data and file paths to the database
        Campaign::create([
            'name' => $validatedData['name'],
            'timeline' => $validatedData['timeline'],
            'objectives' => $validatedData['objectives'],
            'why' => $validatedData['why'],
            'maxCollection' => $validatedData['maxCollection'],
            'minimum' => $validatedData['minimum'],
            'status' => $validatedData['status'],
            'coverPhoto' => $coverPhotoPath,
            'picOneMain' => $picOneMainPath,
            'picTwo' => $picTwoPath,
            'accountName' => $validatedData['accountName'],
            'bankName' => $validatedData['bankName'],
            'accountNumber' => $validatedData['accountNumber'],
            'accountName2' => $validatedData['accountName2'] ?? null,
            'bankName2' => $validatedData['bankName2'] ?? null,
            'accountNumber2' => $validatedData['accountNumber2'] ?? null,
            'approve' => 1, // Default approve value
        ]);
    
        // Redirect or return a view with success message
        return redirect()->route('campaign.create')->with('message', 'Campaign created successfully.');
    }
}
