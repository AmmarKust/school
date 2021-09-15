<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
class EnrollmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('student.auth:student');
    }

    /**
     * Show the Student dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('student.enroll');
    }

    public function settings() {
        return view('student.settings');
    }
    public function update(Request $request){
        $this->validate($request, [
            'class_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'dob' => 'required',
            'father_name' => 'required',
            'father_contact' => 'required',
            'father_cnic' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'current_address' => 'required',
            'permanent_address' => 'required',
            'about_me' => 'required',
        ], [
            'class_id.required' => 'Please select class.',
            'first_name.required' => 'First Name is required.',
            'last_name.required' => 'Last Name is required.',
            'name.required' => 'Full Name is required.',
            'email.required' => 'Email Address is required.',
            'phone.required' => 'Phone Number is required.',
            'father_name.required' => 'Father Name is required.',
            'father_contact.required' => 'Father Contact is required.',
            'father_cnic.required' => 'Father CNIC is required.',
            'country.required' => 'Country is required.',
            'state.required' => 'State is required.',
            'city.required' => 'City is required.',
            'current_address.required' => 'Current Address is required.',
            'permanent_address.required' => 'Permanent Address is required.',
            'about_me.required' => 'Enter About your description.',
        ]);

        $student = Auth::guard('student')->user();
        $student->class_id = $request->class_id;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        $student->father_name = $request->father_name;
        $student->father_contact = $request->father_contact;
        $student->father_cnic = $request->father_cnic;
        $student->country = $request->country;
        $student->state = $request->state;
        $student->city = $request->city;
        $student->current_address = $request->current_address;
        $student->permanent_address = $request->permanent_address;
        $student->about_me = $request->about_me;
        if($request->attached_file){
          $student->attached_file = $request->attached_file;  
        }
        $student->status = 'pending';
        $student->update();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'You have successfully submitted your profile');
        return redirect()->back();
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::guard('student')->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::guard('student')->user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'You have successfully changed your password');
        return redirect()->back();

    }  
}
