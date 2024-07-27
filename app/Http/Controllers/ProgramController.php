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

    public function update(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'programId' => 'required|exists:programs,id',
            'programName' => 'required|string|max:255',
            'departmentId' => 'required|exists:departments,id',
        ]);

        // Find the program by ID
        $program = Program::findOrFail($validatedData['programId']);

        // Update program details
        $program->program_name = $validatedData['programName'];
        $program->department_id = $validatedData['departmentId'];
        $program->save();

        // Return the updated program data
        return response()->json([
            'success' => true,
            'message' => 'Program updated successfully',
            'program' => $program
        ]);
    }
}
