<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('students.profile');
    }

    public function edit(){
        return view('students.edit-profile');
    }
}
