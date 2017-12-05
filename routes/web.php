<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', "Home@showhome");
Route::get('/show', "Home@index");
Route::post('/createemployee', "Employee@save_data");
Route::post('/createcustomer', "Customer@save_data");
Route::post('/createitem', "Inventory@save_data");
Route::post('/createproduct', "Product@save_data");
Route::get('/viewemployees', "Employee@list");
Route::get('/createemp', "Employee@showForm");
Route::get('/createcust', "Customer@showForm");
Route::get('/viewcustomers', "Customer@list");
Route::get('/createitem', "Inventory@showForm");
Route::get('/listinventory', "Inventory@list");
Route::get('/createprod', "Product@showForm");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');