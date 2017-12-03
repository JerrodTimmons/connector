<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee extends Controller
{
    public function save_data(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->save();

        return back();

        
    }

    public function showForm()
    {
        return view('employee');
    }
}
