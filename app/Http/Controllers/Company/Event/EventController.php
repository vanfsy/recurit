<?php

namespace App\Http\Controllers\Company\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
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
     * Show the company event list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.event.home');
    }
}
