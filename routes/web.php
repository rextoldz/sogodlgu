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
Route::get('/', 'Frontend\HomeController@index')->name('home');

// Government
Route::get('/Government/Keyofficials', 'Frontend\GovernmentController@index')->name('keyofficials');
// Route::get('/government/keyofficials', 'Frontend\GovernmentController@')->name('keyofficials');


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


