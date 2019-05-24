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
//Admin
Route::get('/dashAdmin', function () {
    return view('dashAdmin');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/pengguna', function () {
    return view('pengguna');
});
Route::get('/typography', function () {
    return view('typography');
});

//User
Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/tabel', function () {
    return view('tabel');
});
Route::GET('map', 'JualController@barang');

Route::resource('pengguna' , 'User');
//table jual
Route::resource('jual', 'JualController');
Route::get('/upgrade', function () {
    return view('upgrade');
});

Route::resource('community', 'CommunityController');
Route::get('/upgrade', function () {
    return view('upgrade');
});
Route::get('community_show', 'CommunityController@join');

Route::get('foto/save/{id}',[
    'as' => 'foto.download', 'uses' => 'JualController@downloadFoto']);

Route::group(['middleware' => ['web']], function() {
  Route::resource('post','PostController');
  Route::GET('tabel','PostController@tabel');
  Route::GET('table','PostController@table');
  Route::GET('kategori','PostController@kategori');
  Route::POST('addPost','PostController@addPost');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  });
