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

// if (){

// }

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/categories', 'FrontendController@kategori');
Route::resource('/contact', 'ContactController');

Route::get('/verify-group', function () {
    return view('group.verify');
})->middleware('auth');

Route::get('/buat', function () {
    return view('group.buat');
})->middleware('auth');
Route::resource('/grup', 'GroupController');


// Route::get('/display', 'FrontendController@display')->middleware('auth');
// Route::put('/display/{id}', 'EventController@update');
// Route::delete('/display/{id}', 'EventController@destroy');
// Route::get('/category', 'EventController@kat');
// Route::get('/categori/{id}', 'EventController@kateg');

// Route::resource('/group', 'GroupController');


// Route::get('/activity', 'FrontendController@activity')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'api/v1/'], function () {
    Route::resource('users', 'Api\UserController');
});

Route::group(['prefix' => 'group', 'middleware' => ['auth']], function () {
    Route::resource('/', 'GroupController');
    Route::resource('/calendar', 'EventController');

    Route::post('/gabung', 'GroupController@gabung')->name('gabung');
    Route::get('/activity', 'FrontendController@activity');

    Route::get('/display', 'FrontendController@display');
    Route::put('/display/{id}', 'EventController@update');
    Route::delete('/display/{id}', 'EventController@destroy');
    Route::get('/category', 'EventController@kat');
    Route::get('/categori/{id}', 'EventController@kateg');
    Route::get('/taguser', 'EventController@tag_user');
    Route::get('/tag/{id}', 'EventController@tag');
});

//AdminRoute = Backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/logActivity', 'LogActivityController');
    Route::delete('/logActivity/{id}', 'LogActivityController@destroy');
    Route::get('/contact', 'ContactController@show');
    Route::get('/group', 'GroupController@show');
    Route::delete('/group/{id}', 'ContactController@destroy');
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
