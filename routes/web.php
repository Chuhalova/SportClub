<?php
use App\Coach;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// Route::get('/users/loged', 'Auth\LoginController@loged')->name('user.loged');
  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Route::get('/loged', 'Auth\AdminLoginController@loged')->name('admin.loged');
  });
Route::get('/displaycoachpage', function(){
  return view ('displaycoachpage');
});

// УРЛ - coaches КОТРОЛЛЕР - Coach2
Route::resource('coaches', 'Coach2');

Route::resource('clients', 'ClientController');
Route::resource('cards', 'CardController');

// Route::resource('user/adminhome','adminhomeController');
//
// Route::resource('user/coachhome','coachhomeController');
