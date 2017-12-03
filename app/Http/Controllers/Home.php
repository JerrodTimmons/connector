<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index ()
    {
        $Employee = Employees::all();

        return view('home')->with('Employee', $Employee);
    }
    
}
