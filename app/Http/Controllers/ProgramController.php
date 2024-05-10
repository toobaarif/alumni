<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Department; 

class ProgramController extends Controller
{
    public function show()
    {
        // Fetch all programs along with their related departments
        $programs = Program::with('department')->get();
        
        // Fetch all departments separately (if needed)
        $departments = Department::all();
        
        return view('admin.program.programs', compact('programs', 'departments'));
    }


    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'program_name' => 'required|string|max:255',
        'department_id' => 'required|exists:departments,id',
    ]);

    // Create the program
    Program::create([
        'program_name' => $request->program_name,
        'department_id' => $request->department_id,
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('message', 'Program added successfully.');
}


    public function destroy($id)
{
    // Find the program by its ID
    $program = Program::findOrFail($id);
    
    // Delete the program
    $program->delete();
    
    // Redirect back with a success message
    return redirect()->back()->with('message', 'Program deleted successfully.');
}



}
