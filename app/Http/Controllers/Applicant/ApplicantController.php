<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
class ApplicantController extends Controller
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
     * Show the applicant dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function settings() {
        return view('applicant.settings');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::guard('applicant')->user()->password))) {
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
        $user = Auth::guard('applicant')->user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'You have successfully changed your password');
        return redirect()->back();

    }  
}
