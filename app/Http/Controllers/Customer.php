<?php

namespace App\Http\Controllers;
use App\Customers;
use Illuminate\Http\Request;
class Customer extends Controller
{
    public function save_data(Request $request)
    {
        $Customer = new Customers;
        $Customer->idCustomer = $request->idCustomer;
        $Customer->fName = $request->first;
        $Customer->lName = $request->last;
        $Customer->idTransaction = $request->idTransaction;
        $Customer->points = $request->points;

        $Customer->save();

        return view('customersuccess');

        
    }

    public function showForm()
    {
        return view('customer');
    }
    public function list ()
    {
        return view('viewcustomers');
    }
}
