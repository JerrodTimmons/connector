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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/show', "Home@index");
Route::post('/createmployee', "Employee@save_data");
Route::get('/create', "Employee@showForm");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');