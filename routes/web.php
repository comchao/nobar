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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/showmenu', function () {
    return view('showmenu');
});

Route::get('/addmenu', function () {
    return view('addmenu');
});
//หน้า add munu
Route::post('update/add/menu/{id}','AddMenuController@update'); //update
Route::get('addmenu','AddMenuController@index'); // list menu
Route::post('add/menu','AddMenuController@store'); // add  menu
Route::get('show/update/addmenu/{id}','AddMenuController@show'); //  show  update
Route::get('delete/addmenu/{id}','AddMenuController@destroy'); // delete  menu



//add order
Route::get('/addorder', function () {
    return view('addorder');
});
Route::get('addorder','AddOrderController@index'); // list menu
Route::post('add/order','AddOrderController@store');  // add  order
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
