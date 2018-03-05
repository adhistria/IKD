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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/tes', function () {
//    return view('home-admin');
//});
//Route::get('/tes2', function () {
//    return view('home-admin2');
//});
//Route::get('/rental', function () {
//    return view('admin-store');
//});


//Route::resource('cars','CarController',['except'=> [
//    'update','destroy'
//]]);
//Route::put()
//Route::resource('photos', 'PhotoController', ['except' => [
//    'create', 'store', 'update', 'destroy'
//]]);
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['https']], function() {
    Route::get('/', 'PageController@welcome')->name('welcome')->middleware('guest');
    Route::post('/login', 'Auth\LoginController@authenticate')->name('login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/register', 'Auth\RegisterController@register')->name('register');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/cars', 'CarController@index')->name('cars.index');
        Route::post('cars', 'CarController@store')->name('cars.store');
        Route::get('cars/create', 'CarController@create')->name('cars.create');
        Route::post('cars/choice', 'CarController@choice')->name('cars.choice');
        Route::get('/register', 'PageController@register')->name('formregister');

        Route::get('/editadmin', 'AdminController@showalladmin')->name('editadmin');
        Route::delete('/deleteadmin', 'AdminController@destroy')->name('deleteadmin');
        Route::put('editprofile', 'AdminController@updateprofile')->name('updateprofile');
        Route::get('editprofile', 'AdminController@editprofile')->name('editprofile');
    });
});
//Auth::routes();
//Route: