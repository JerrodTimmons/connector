<?php

namespace App\Http\Controllers;
use App\Inventorys;
use Illuminate\Http\Request;

class Inventory extends Controller
{
    public function save_data (Request $request)
    {
        $Inventory = new Inventorys;
        $Inventory->idProduct = $request->idProduct;
        $Inventory->quantity = $request->quantity;
        $Inventory->idInventory = $request->idInventory;
        $Inventory->save();
        return view('inventorysuccess');
    }
    public function list () 
    {
        return view('Inventory');
    }
    public function showForm ()
    {
        return view('createitem');
    }
}
