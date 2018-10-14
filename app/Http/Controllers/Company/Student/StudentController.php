<?php

namespace App\Http\Controllers\Company\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
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
     * Show the company student list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.student.home');
    }
}
