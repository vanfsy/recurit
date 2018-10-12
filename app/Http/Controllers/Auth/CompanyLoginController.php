<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CompanyLoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect Companies after login.
     *
     * @var string
     */
    protected $redirectTo = '/company/dashboard';

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:company')->except('logout');
    }

    /**
     * Show the company's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.company_login');
    }

    protected function guard()
    {
        return Auth::guard('company');
    }
}
