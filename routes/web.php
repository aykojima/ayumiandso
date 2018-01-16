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

Route::middleware('auth')->group( function(){
    Route::get('/guests', 'GuestController@index')->name('guests');
    Route::get('/guests/rsvp/', 'GuestController@rsvp')->name('rsvp');
    Route::post('/guests/rsvp/', 'GuestController@rsvp_submit')->name('rsvp_submit');
    Route::get('/admin/guests', 'Admin\AdminController@viewGuests')->middleware('admin')->name('admin');
    Route::get('/admin/guests/new', 'Admin\AdminController@newGuest')->middleware('admin')->name('new_guest');
    Route::post('/admin/guests/new', 'Admin\AdminController@newGuest')->middleware('admin')->name('new_guest_submit');
});

Route::get('/', 'ContentController@home')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

Route::get('/admin-login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin-login', 'Admin\Auth\LoginController@login');

// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/generate/password', function(){ return bcrypt('Cz6#9&'); });
Route::get('/facades/decrypt', function(){ return Crypt::decript('$2y$10$rJn3wCo6YN5WNvLSH9mbHu8/DqcfqI.LYkWtymmjOcN6g1WiYTc6e'); });


