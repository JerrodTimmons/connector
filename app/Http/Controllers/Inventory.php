<?php

namespace App\Http\Controllers;
use App\Inventorys;
use Illuminate\Http\Request;

class Inventory extends Controller
{
    public function list () 
    {
        return view('Inventory');
    }
    public function showForm ()
    {
        return view('createitem');
    }
}
