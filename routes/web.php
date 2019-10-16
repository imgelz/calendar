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
//Universal Route = Frontend

Route::get('/', function () {
    return view('layouts.Halamanfrontend.frontend');
});

Route::get('/categories', 'FrontendController@kategori');

Route::get('/verify-group', function () {
    return view('group.verify');
})->middleware('auth');

Route::get('/buat', function () {
    return view('group.buat');
})->middleware('auth');

Route::get('/display', 'FrontendController@display')->middleware('auth');

Route::resource('/group', 'GroupController');
Route::post('/group/gabung', 'GroupController@gabung')->name('gabung');

Route::resource('/calendar', 'EventController');
Route::resource('/contact', 'ContactController');

Route::get('/activity', 'FrontendController@activity')->middleware('auth');

Route::put('/display/{id}', 'EventController@update');
Route::delete('/display/{id}', 'EventController@destroy');
Route::get('/category', 'EventController@kat');
Route::get('/categori/{id}', 'EventController@kateg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//AdminRoute = Backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/logActivity', 'LogActivityController');
    Route::delete('/logActivity/{id}', 'LogActivityController@destroy');
    Route::get('/contact', 'ContactController@show');
    Route::delete('/contact/{id}', 'ContactController@destroy');
    Route::resource('/kategori', 'KategoriController');
    Route::put('/kategori/{id}', 'KategoriController@update');
    Route::delete('/kategori/{id}', 'KategoriController@destroy');
    Route::get('/display', 'EventController@show');
    Route::put('/display/{id}', 'EventController@update');
    Route::delete('/display/{id}', 'EventController@destroy');
    Route::get('/category', 'EventController@kat');
    Route::get('/categori/{id}', 'EventController@kateg');
});
