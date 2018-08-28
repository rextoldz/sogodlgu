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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Frontend\HomeController@index')->name('home');

Route::prefix('government')->group(function () {
	Route::get('keyofficials', 'Frontend\GovernmentController@keyofficials')->name('keyofficials');
	Route::get('offices', 'Frontend\GovernmentController@offices')->name('offices');
	Route::get('barangay', 'Frontend\GovernmentController@barangay')->name('barangay');
	Route::get('barangay/{id}/{barangay}', 'Frontend\GovernmentController@showbarangay')->name('showbarangay');
});
Route::prefix('advisories')->group(function () {
	Route::get('/', 'Frontend\AdvisoriesController@index')->name('advisories');
    Route::get('{id}/{title}', 'Frontend\AdvisoriesController@show');
});
Route::prefix('about')->group(function () {
	Route::get('/', 'Frontend\AboutController@index')->name('about');
});
// Route::prefix('news')->group(function () {
// 	Route::put('{id}/{title}', 'newsController@update');
// });
Auth::routes();


