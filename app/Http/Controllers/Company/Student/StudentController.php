<?php

namespace App\Http\Controllers\Company\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CodeService;
use App\Services\UserService;
use View;

class StudentController extends Controller
{
    protected $codeservice;

    public function __construct(CodeService $codeservice)
    {
        $this->codeservice = $codeservice;
        $codes = $this->codeservice->getSearchCodes();

        View::share('student_search_enabled', 1);
        View::share('codes', $codes);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.student.home');
    }

    /**
     * Show the students by filters.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(UserService $userservice, Request $request)
    {
        dd($userservice);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
