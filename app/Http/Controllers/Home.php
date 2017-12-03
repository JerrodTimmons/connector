<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index ()
    {
        $Employee = Employee::all();

        return view('home')->with('Employee', $Employee);
    }
    
}
