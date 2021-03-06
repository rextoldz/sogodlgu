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

Route::prefix('events')->group(function () {
    Route::get('/', 'Frontend\EventsController@index')->name('events');
});

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    Route::get('/verify-user/{code}', 'Auth\AdminRegisterController@activateUser')->name('activate.user');

    Route::get('/', 'Admin\AdminController@index')->name('admin');

    Route::get('/settings/account', 'Admin\SettingsController@account')->name('admin.settings.account');

}); 

Route::prefix('admin')->group(function() {
   
    Route::resource('/cruds/events', 'Admin\EventsController', [
      'except' => ['edit', 'show', 'store']
    ]);    
    Route::resource('/cruds/profile', 'Admin\ProfileController', [
      'except' => ['edit', 'show', 'store']
    ]);
    Route::resource('/cruds/barangay', 'Admin\BarangayController', [
      'except' => ['edit', 'show']
    ]);


    Route::get('/cruds/changepwd/{id}', 'Admin\ProfileController@updatepwd')->name('password.update');
    Route::get('/settings', 'Admin\SettingsController@showForm')->name('admin.settings');
    Route::get('/events', 'Admin\EventsController@showForm')->name('admin.events');
    Route::get('/barangay', 'Admin\BarangayController@showForm')->name('admin.barangay');

});