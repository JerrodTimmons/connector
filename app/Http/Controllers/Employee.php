<?php
namespace App\Http\Controllers;
use App\Employees;
use Illuminate\Http\Request;
class Employee extends Controller
{
    public function save_data(Request $request)
    {
        $Employee = new Employees;
        $Employee->idEmployee = $request->idEmployee;
        $Employee->fname = $request->first;
        $Employee->lname = $request->last;
        $Employee->phone = $request->phone;
        $Employee->address = $request->address;
        $Employee->dob = $request->dob;
        $Employee->save();
        return view('welcome');
        
    }
    public function showForm()
    {
        return view('employee');
    }
}