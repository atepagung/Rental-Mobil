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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('booking')->group(function () {
	Route::post('/pilihArmada', 'BookingController@pilihArmada')->name('pilihArmada');
	Route::post('/data-diri', 'BookingController@dataDiri')->name('booking.dataDiri');
	Route::post('/payment', 'BookingController@checkout')->name('booking.payment');
});

Route::post('/vt_notif', 'VtwebController@notification');


Route::prefix('admins')->group(function () {
    //Route::post('/pilihArmada', 'BookingController@pilihArmada')->name('pilihArmada');
});

Route::get('/gg', function() {
	$units = [
		'1' => ['unit_type_id' => '1', 'plat' => '123', 'status' => 1],
		'2' => ['unit_type_id' => '1', 'plat' => '124', 'status' => 1],
		'3' => ['unit_type_id' => '1', 'plat' => '125', 'status' => 1],
		'4' => ['unit_type_id' => '2', 'plat' => '126', 'status' => 1],
		'5' => ['unit_type_id' => '2', 'plat' => '127', 'status' => 1],
		'6' => ['unit_type_id' => '2', 'plat' => '128', 'status' => 1]
	];
	dd($units[1]['unit_type_id']);
	foreach ($units as $unit) {
		dd($unit->unit_type_id);
	}
});
use Illuminate\Support\Facades\Auth;
Route::get('/go', function() {
	dd(Auth::user()->role_id);
});