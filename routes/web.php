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
    return view('layouts.Halamanfrontend.frontend');
});

Route::get('/categories', function () {
    return view('frontend.category');
});

Route::get('/display', function () {
    return view('frontend.display');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//AdminRoute
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/logActivity', 'LogActivityController');
    Route::delete('/logActivity/{id}', 'LogActivityController@destroy');

    Route::resource('/kategori', 'KategoriController');
    Route::put('/kategori/{id}', 'KategoriController@update');
    Route::delete('/kategori/{id}', 'KategoriController@destroy');
    Route::get('/display', 'EventController@show');
    Route::put('/display/{id}', 'EventController@update');
    Route::delete('/display/{id}', 'EventController@destroy');
    Route::get('/category', 'EventController@kat');
    Route::get('/categori/{id}', 'EventController@kateg');
});

Route::resource('/calendar', 'EventController');
