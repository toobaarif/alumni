<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EveController extends Controller
{
    //
    public function index(){
        return view('admin.events.events');
    }
}
