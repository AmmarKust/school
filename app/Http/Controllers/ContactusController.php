<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_us;

class ContactusController extends Controller
{
    public function index(){

        return view('contact_us');

    } 

    public function store(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ], [
            'first_name.required' => 'First Name is required.',
            'last_name.required' => 'Last Name is required.',
            'email_address.required' => 'Email Address is required.',
            'phone_number.required' => 'Phone Number is required.',
            'message.required' => 'Message is required.',
        ]);

        $contact = new Contact_us();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email_address = $request->email_address;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
        $contact->save();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Your form iss successfully submitted');
        return redirect()->back();
    }  
}
