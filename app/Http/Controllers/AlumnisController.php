<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\User; // Add this line to import the User model



class AlumnisController extends Controller
{
    public function index(){
        $users = User::with('department', 'program')->where('user_role', 0)->get();
        return view('admin.alumni.alumnis', compact('users'));
    }


    public function getPrograms($departmentId)
    {
        // Fetch programs based on the department ID
        $programs = Program::where('department_id', $departmentId)->get();

        // Return JSON response
        return response()->json($programs);
    }

    public function alumnisProfiles(){
        return view('admin.alumni.profiles');
    }
}
