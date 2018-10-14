<?php

namespace App\Http\Controllers\Company\Ticket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
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
     * Show the company ticket purchase.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchase()
    {
        return view('company.ticket.purchase');
    }

    /**
     * Show the company ticket management.
     *
     * @return \Illuminate\Http\Response
     */
    public function management()
    {
        return view('company.ticket.management');
    }
}
