<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModulesData;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Str;
use Form;

class JobsController extends Controller
{
    public function index(){
        $jobs = ModulesData::where('module_id',19)->where('status','active')->paginate(10);
        return view('jobs.index')->with('jobs',$jobs);

    }

    public function detail($slug){
        $job = ModulesData::where('slug',$slug)->where('status','active')->first();
        return view('jobs.detail')->with('job',$job);

    }

    
}
