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
    
    Route::get('signup', 'HomeController@showSignupForm');
    Route::post('signup', 'HomeController@showSignupForm')->name('company.signup');
    
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
    Route::get('/dashboard', 'HomeController@dashboard')->name('company.home');
    
    Route::resources([
	    'student' 	=> 'Student\StudentController',
	    'session' 	=> 'Session\SessionController',
	    'event' 	=> 'Event\EventController',
	    'ticket' 	=> 'Ticket\TicketController',
	]);

	/*
	|--------------------------------------------------------------------------
	| Company Student
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'students'], function () {
	    Route::get('/search', 'Student\StudentController@search')->name('company.search');
	});

	/*
	|--------------------------------------------------------------------------
	| Company Event
	|--------------------------------------------------------------------------
	*/
	
	/*
	|--------------------------------------------------------------------------
	| Company Session
	|--------------------------------------------------------------------------
	*/
	
	/*
	|--------------------------------------------------------------------------
	| Company Ticket
	|--------------------------------------------------------------------------
	*/
	
});

