<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 	
use App\CustomerController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	// Route::get('table-list', function () {
	// 	$customer=App\User::all();
	// 	return view('pages.table_list',compact('customer'));
	// })->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

#Manage Plot
Route::get('plot','PlotController@index')->name('plot');
Route::get('create-plot','PlotController@create')->name('create-plot');
Route::post('create-plot','PlotController@store')->name('create-plot');
Route::get('/plot/show/{id}','PlotController@show');
Route::post('/delete/{id}','PlotController@destroy');


#Customer
Route::get('create-customer','CustomerController@create')->name('create-customer');
Route::post('customer','CustomerController@store')->name('customer');
Route::get('pages.table_list','CustomerController@index')->name('customer.index');
Route::get('customer/show/{id}','CustomerController@show')->name('customer.show');
Route::get('customer/delete/{id}','CustomerController@destroy');
Route::post('customer/{id}','CustomerController@update')->name('customer.update');

#Payments
Route::get('payments/{id}','PaymentController@create')->name('payments.create');
Route::post('payments','PaymentController@store')->name('payments');
Route::get('payments','PaymentController@index')->name('payments.index');
Route::get('payments/show/{id}','PaymentController@show')->name('payments.show');
Route::get('payments/delete/{id}','PaymentController@destroy');
Route::post('/payments/edit/{id}','PaymentController@update');
Route::post('payments/{id}','PaymentController@installment')->name('installment');

#Installments
Route::post('installment/update/{id}','InstallmentController@update')->name('_installment');

