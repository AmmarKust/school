<?php

namespace App\Http\Controllers\Applicant;

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
        $this->middleware('applicant.auth:applicant');
    }

    /**
     * Show the Applicant dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('applicant.home');
    }
}
