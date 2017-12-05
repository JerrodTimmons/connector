<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function save_data(Request $request)
    {
        $Product = new Products;
        $Product->idProduct = $request->idProduct;
        $Product->name = $request->name;
        $Product->vendor = $request->vendor;
        $Product->price = $request->price;
        $Product->save();
        return view('productsuccess');
    }
    public function list ()
    {
        return view('Product');
    }
    public function showForm ()
    {
        return view('createproduct');
    }
}
