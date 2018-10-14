<?php

namespace App\Http\Controllers\Company\Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    /**
     * Show the company session list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.session.home');
    }

    /**
     * Show the company session detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        return view('company.session.detail');
    }
}
