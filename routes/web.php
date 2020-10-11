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
Route::get('plot','PlotController@index')->name('plot')->middleware('auth');
Route::get('create-plot','PlotController@create')->name('create-plot')->middleware('auth');
Route::post('create-plot','PlotController@store')->name('create-plot')->middleware('auth');
Route::get('/plot/show/{id}','PlotController@show')->name('plot.show')->middleware('auth');
Route::post('/delete/{id}','PlotController@destroy')->middleware('auth');


#Customer
Route::get('create-customer','CustomerController@create')->name('create-customer');
Route::post('customer','CustomerController@store')->name('customer')->middleware('auth');
Route::get('pages.table_list','CustomerController@index')->name('customer.index')->middleware('auth');
Route::get('customer/show/{id}','CustomerController@show')->name('customer.show')->middleware('auth');
Route::get('customer/delete/{id}','CustomerController@destroy')->middleware('auth');
Route::post('customer/{id}','CustomerController@update')->name('customer.update')->middleware('auth');

#Payments
Route::get('payments/{id}','PaymentController@create')->name('payments.create')->middleware('auth');
Route::post('payments','PaymentController@store')->name('payments')->middleware('auth');
Route::get('payments','PaymentController@index')->name('payments.index')->middleware('auth');
Route::get('payments/show/{id}','PaymentController@show')->name('payments.show');
Route::get('payments/delete/{id}','PaymentController@destroy')->middleware('auth');
Route::post('/payments/edit/{id}','PaymentController@update')->middleware('auth');
Route::post('payments/{id}','PaymentController@installment')->name('installment')->middleware('auth');

#Installments
Route::post('installment/update/{id}','InstallmentController@update')->name('_installment')->middleware('auth');
Route::get('installment/edit/{id}','InstallmentController@edit')->name('installment.edit')->middleware('auth');
Route::get('installment/delete/{id}','InstallmentController@delete')->name('installment.delete_installment')->middleware('auth');
Route::post('installment/destroy/{id}','InstallmentController@destroy')->name('installment.destroy')->middleware('auth');

#Reminder
Route::get('reminder','ReminderController@index')->name('reminder')->middleware('auth');
Route::get('reminder/show/{id}','ReminderController@show')->name('reminder.show')->middleware('auth');
