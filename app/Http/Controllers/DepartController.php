<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department; // Make sure to import the Department model

class DepartController extends Controller
{
    
    public function showDepartments(){
        // Fetch all departments from the database
        $departments = Department::all();
        
        // Pass the departments data to a view for display
        return view('admin.department.departments', compact('departments'));
    }

    public function destroy($id)
    {
        // Find the department by its ID
        $department = Department::findOrFail($id);
    
        // Delete the department
        $department->delete();
    
        // Redirect back with a success message
        return redirect('departments')->with('success', 'Department deleted successfully.');
    }


    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'departmentId' => 'required|exists:departments,id',
            'departmentName' => 'required|string|max:255',
        ]);
    
        // Find the department record by ID
        $department = Department::findOrFail($request->departmentId);
    
        // Update the department name
        $department->update([
            'department_name' => $request->departmentName,
        ]);
    
        // Return the updated department data
        return response()->json([
            'message' => 'Department updated successfully',
            'departmentId' => $department->id,
            'departmentName' => $department->department_name,
        ]);
    }
    


    
    public function addDepartment(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'department_name' => 'required|string|max:255',
        ]);

        // Create a new department
        Department::create([
            'department_name' => $request->department_name,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Department added successfully.');
    }
  
    


}





