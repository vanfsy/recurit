<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:company')->except('showSignupForm');
    }

    /**
     * Show the Company dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('company.home');
    }

    /**
     * Show the company signup.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSignupForm()
    {
        return view('company.signup');
    }
}
