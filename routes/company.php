<?php

/*
|--------------------------------------------------------------------------
| Company Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "company" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Before Company Login
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'company', 'namespace' => 'Company'], function () {
    Route::get('/', function () {
        return redirect()->route('company.home');
    });
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('company.login');
    Route::get('logout', 'Auth\LoginController@logout');
});

/*
|--------------------------------------------------------------------------
| After Company Login
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'company', 'namespace' => 'Company', 'middleware' => 'auth:company'], function () {
    Route::get('/dashboard', 'CompanyController@dashboard')->name('company.home');
	Route::get('/registration', 'CompanyController@showRegistrationForm')->name('company.registration');
    
	/*
	|--------------------------------------------------------------------------
	| Company Student
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'student'], function () {
		Route::get('/', 'Student\StudentController@index')->name('company.student.home');
	});

	/*
	|--------------------------------------------------------------------------
	| Company Event
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'event'], function () {
		Route::get('/', 'Event\EventController@index')->name('company.event.home');
	});

	/*
	|--------------------------------------------------------------------------
	| Company Session
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'session'], function () {
		Route::get('/', 'Session\SessionController@index')->name('company.session.home');
	    Route::get('detail', 'Session\SessionController@detail')->name('company.session.detail');
	});

	/*
	|--------------------------------------------------------------------------
	| Company Ticket
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'ticket'], function () {
		Route::get('purchase', 'Ticket\TicketController@purchase')->name('company.ticket.purchase');
	    Route::get('management', 'Ticket\TicketController@management')->name('company.ticket.management');
	});
});

