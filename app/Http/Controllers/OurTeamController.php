<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModulesData;
use App\Models\Tags;

class OurTeamController extends Controller
{
    public function index(Request $request){
        $results = ModulesData::where('module_id', 11)->paginate(10);
        return view('ourteam.index')->with('ourteams',$results);
    }   
}
