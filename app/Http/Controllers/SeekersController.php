<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Applicant;
use App\Models\Seekers;
use App\Models\Applicants;
use App\Models\ModulesData;
use App\Mail\ApplyOnJob;
use Auth;
use PDF;
use Mail;
class SeekersController extends Controller

{
    public function show(){
        $seeker = Seekers::where('user_id',Auth::guard('applicant')->user()->id)->first();
        if($seeker){
            return view('seeker.edit')->with('seeker',$seeker);
        }else{
            return view('seeker.add');  
        }
        
    }


    public function seeker($id){
        $data['seeker'] = Seekers::where('user_id',$id)->first();
        $data['user'] = Applicant::findorFail($id);
        return view('seeker.cv')->with($data);
        $pdf = PDF::loadView('seeker.cv', $data);
        $pdf->save(public_path().'/cv_files/'.\Str::slug($data['user']->name).'.pdf');
        return $pdf->download(\Str::slug($data['user']->name).'.pdf');  
        
    }

    public function store(Request $request)

    {

       $this->validate($request, [

            'email' => 'required',

        ], [

            'email.required' => 'Email Address is required.',

        ]);


        if($request->id){
            $seeker = Seekers::findorFail($request->id);
        }else{
            $seeker = new Seekers();
        }
        
        $dynamic_form = $request->input('dynamic_form');    
        $seeker->sub_category = $request->sub_category;
        $seeker->user_id = Auth::guard('applicant')->user()->id;
        $seeker->country = $request->country;
        $seeker->state = $request->state;
        $seeker->city = $request->city;
        $seeker->looking_for = $request->looking_for;
        $seeker->description = $request->description;
        $seeker->gender = $request->gender;
        if(null!==($dynamic_form['dynamic_form'])){
            $seeker->work_experience = json_encode($dynamic_form['dynamic_form']);
        }
        $seeker->skills = $request->skills;
        $seeker->education_level = $request->education_level;
        $seeker->contact = $request->contact;
        $seeker->desired_salary = $request->desired_salary;
        $seeker->attached_file = $request->attached_file;

        $seeker->save(); 
        $applicant = Auth::guard('applicant')->user();
        $applicant->sub_category = $request->sub_category;
        $applicant->country = $request->country;
        $applicant->name = $request->name;
        $applicant->state = $request->state;
        $applicant->city = $request->city;
        $applicant->save();
        $request->session()->flash('message.added', 'success');

        $request->session()->flash('message.content', 'Informations has been successfully Updated!');

        return redirect(route('seeker.update'));

    }

    public function apply(Request $request,$id)

    {
        $is_seeker = Seekers::where('user_id',Auth::guard('applicant')->user()->id)->first();
        if($is_seeker){
            $seeker = new Applicants();
            $seeker->user_id = Auth::guard('applicant')->user()->id;
            $seeker->job_id = $id;
            $seeker->save(); 
            $data['job'] = ModulesData::findorFail($id);
            $data['seeker'] = Seekers::where('user_id',Auth::guard('applicant')->user()->id)->first();
            $data['user'] = Applicant::findorFail(Auth::guard('applicant')->user()->id);
            $pdf = PDF::loadView('seeker.cv', $data);
            $pdf->save(public_path().'/cv_files/'.\Str::slug($data['user']->name).'.pdf');
            $data['cv_path'] = asset('cv_files/'.\Str::slug($data['user']->name).'.pdf');
            //Mail::send(new ApplyOnJob($data));
            $request->session()->flash('message.added', 'success');

            $request->session()->flash('message.content', 'You have successfully applied on this job'); 
        }else{
            $request->session()->flash('message.error', 'success');

            $request->session()->flash('message.content', 'Please Complete Professional Informations section before Apply'); 
        }
        

        return redirect()->back();

    }

    public function applliedJobs(Request $request)

    {

        $data = array();

        $ids = Applicants::where('user_id',Auth::guard('applicant')->user()->id)->pluck('job_id')->toArray();
        $data['products'] = ModulesData::whereIn('id',$ids)->get();

        return view('seeker.jobs')->with($data);

    }

}

