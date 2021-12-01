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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('auth.login');
});
Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function () {
	Route::get('/', 'AdminController@index')->name('admindashboards');

	// /*
	// Basis_pengetahuan
	// */
	Route::get('/basis', 'BasisController@index');
	Route::get('/basis/create', 'BasisController@create');
	Route::get('/basis/{basis}', 'BasisController@show');
	Route::post('/basis', 'BasisController@store');
	Route::delete('/basis/{basis}', 'BasisController@destroy');
	Route::get('/basis/{basis}/edit', 'BasisController@edit');
	Route::patch('/basis/{basis}', 'BasisController@update');


	// /*
	// Gejala
	// */
	Route::get('/gejala', 'GejalaController@index');
	Route::get('/gejala/create', 'GejalaController@create');
	Route::get('/gejala/{gejala}', 'GejalaController@show');
	Route::post('/gejala', 'GejalaController@store');
	Route::delete('/gejala/{gejala}', 'GejalaController@destroy');
	Route::get('/gejala/{gejala}/edit', 'GejalaController@edit');
	Route::patch('/gejala/{gejala}', 'GejalaController@update');


	// /*
	// Kerusakanq
	// */
	Route::get('/kerusakan', 'KerusakanController@index');
	Route::get('/kerusakan/create', 'KerusakanController@create');
	Route::get('/kerusakan/{kerusakan}', 'KerusakanController@show');
	Route::post('/kerusakan', 'KerusakanController@store');
	Route::delete('/kerusakan/{kerusakan}', 'KerusakanController@destroy');
	Route::get('/kerusakan/{kerusakan}/edit', 'KerusakanController@edit');
	Route::patch('/kerusakan/{kerusakan}', 'KerusakanController@update');
});
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth']], function () {

	Route::get('/', 'UserController@index')->name('userdashboards');
	Route::resource('/diagnosa', 'DiagnosaController');
	Route::resource('/riwayat', 'RiwayatController');
	Route::get('/result/{riwayat}', 'RiwayatController@show');
	Route::get('/hasilakhir/{hasil}', 'DiagnosaController@show');
	Route::get('/cetak/{riwayat}', 'RiwayatController@pdf');
});




// Route::get('/diagnosa','DiagnosaController@index');
// Route::post('/diagnosa','DiagnosaController@store');
// Route::get('/hasilakhir/{hasil}','DiagnosaController@show');


// Route::get('/riwayat','RiwayatController@index');
// Route::get('/result/{riwayat}','RiwayatController@show');



// /*
// Basis_pengetahuan
// */
// Route::get('/basis','BasisController@index');
// Route::get('/basis/create','BasisController@create');
// Route::get('/basis/{basis}','BasisController@show');
// Route::post('/basis','BasisController@store');
// Route::delete('/basis/{basis}','BasisController@destroy');
// Route::get('/basis/{basis}/edit','BasisController@edit');
// Route::patch('/basis/{basis}','BasisController@update');
// Route::resource('basis','BasisController');





// /*
// Gejala
// */
// // Route::get('/gejala','GejalaController@index');
// // Route::get('/gejala/create','GejalaController@create');
// // Route::get('/gejala/{gejala}','GejalaController@show');
// // Route::post('/gejala','GejalaController@store');
// // Route::delete('/gejala/{gejala}','GejalaController@destroy');
// // Route::get('/gejala/{gejala}/edit','GejalaController@edit');
// // Route::patch('/gejala/{gejala}','GejalaController@update');
// Route::resource('gejala','GejalaController');



// /*
// Kerusakanq
// */
// // Route::get('/kerusakan','KerusakanController@index');
// // Route::get('/kerusakan/create','KerusakanController@create');
// // Route::get('/kerusakan/{kerusakan}','KerusakanController@show');
// // Route::post('/kerusakan','KerusakanController@store');
// // Route::delete('/kerusakan/{kerusakan}','KerusakanController@destroy');
// // Route::get('/kerusakan/{kerusakan}/edit','KerusakanController@edit');
// // Route::patch('/kerusakan/{kerusakan}','KerusakanController@update');
// Route::resource('kerusakan','KerusakanController');

/*
user
*/

// Diagnosa
// Route::get('/diagnosa','DiagnosaController@index');
// Route::post('/diagnosa','DiagnosaController@store');
// Route::get('/hasilakhir/{hasil}','DiagnosaController@show');



// //Riwayat

// Route::get('/riwayat','RiwayatController@index');


// Route::('/showss','RiwayatController@show');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
