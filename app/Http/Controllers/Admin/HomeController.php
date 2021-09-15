<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use App\Models\Student;
use App\Models\ModulesData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $data['messages'] = Contact_us::where('status','unseen')->count();
        $data['students'] = Student::where('status','pending')->orWhere('status','approved')->take(10)->get();
        $data['students_count'] = Student::where('status','pending')->orWhere('status','approved')->count();
        return view('admin.home')->with($data);
    }
    public function sendNewsLetter($id) {
        $data = array();
        $data['module_data'] = ModulesData::findorFail($id);
        return view('admin.newsletter')->with($data);
    }
}
