<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use App\Models\Admin;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Str;
use Auth;

class ApplicantController extends Controller
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
        return view('admin.applicant.index');
    }

    public function add() {
        return view('admin.students.add');
    }

     public function student_home($id){
        $applicant = Student::findOrFail($id);
        Auth::guard('student')->login($applicant);
        return redirect(route('student.home'));
    }

    public function edit($id) {
        $data = array();
        $data['student'] = Student::findorFail($id);
        return view('admin.students.edit')->with($data);
    }

    public function store(Request $request)
    {
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

        $student = new Student();
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
        $student->save();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'You have successfully submitted new profile');
        return redirect(route('admin.students'));
    }

    public function update(Request $request)
    {
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

        $student = Student::findorFail($request->id);
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
        $student->update();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'You have successfully updated profile');
        return redirect(route('admin.students'));
    }

    public function fetchApplicantData(Request $request)
    {
        $students = Applicant::select(['*']);
        return Datatables::of($students)
                        ->filter(function ($query) use ($request) {
                            //dd($request);
                            if ($request->has('name') && !empty($request->name)) {
                                $query->where('name', 'like', "%{$request->get('name')}%");
                            }
                            if ($request->has('class') && !empty($request->class)) {

                                $query->where('sub_category', '=', "{$request->get('class')}");
                            }
                            if ($request->has('status') && !empty($request->status)) {
                                $query->where('status',$request->status);
                            }

                            $query->orderBy('id', 'DESC');
                        })
                        ->addColumn('image', function ($students) {
                            $image = '<img style="width: 57%;" src="'.asset('/images/'.$students->attached_file).'" alt="">';
                            return $image;
                        })
                        ->addColumn('name', function ($students) {
                            $name = Str::limit($students->name, 100, '...');
                            return $name;
                        })
                        ->addColumn('class', function ($students) {
                            
                               return title($students->sub_category); 
                            
                        })
                        ->addColumn('status', function ($students) {
                            $status_type = '';
                            if($students->status=='approved'){
                                $status_type = '<span style="font-size: 12px;" class="btn btn-success">'.$students->status.'</span>';
                            }else{
                                $status_type = '<span style="font-size: 12px;" class="btn btn-warning">'.$students->status.'</span>';
                            }
                            $status = '<a class="waves-effect status waves-light" onclick="update_status('.$students->id.');" href="javascript:void(0);" id="sts_'.$students->id.'"> '.$status_type.'</a>';
                            return  $status;
                            
                        })
                        ->addColumn('action', function ($students) {
                            $action = '<a target="_blank" href="'.route('admin.login.as.applicant',[$students->id]).'" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-ui-edit"></span>&nbsp Login as Applicant</a>
                            <a target="_blank" href="'.route('admin.applicant-profile',[$students->id]).'" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-ui-edit"></span>&nbsp Profile</a>
                                <a href="'.route('admin.applicant.delete',[$students->id]).'" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-ui-delete"></span>&nbsp Delete</a>';
                            return $action;
                        })
                        ->rawColumns(['title', 'status', 'action', 'image', 'category'])
                        ->setRowId(function($students) {
                            return 'countryDtRow' . $students->id;
                        })
                        ->make(true);
    }

    public function destroy(Request $request, $id)
    {
        $student = Applicant::findOrFail($id);
        $student->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Applicant has been successfully Deleted!');
        return redirect(route('admin.students'));
    }

    public function update_status($id = '', $current_staus = '')
    {
        if ($id == '') {
            echo 'error';
            exit;
        }
        if ($current_staus == '') {
            echo 'invalid current status provided.';
            exit;
        }
        if ($current_staus == 'approved')
            $new_status = 'pending';
        else
            $new_status = 'approved';
        $student = Student::findOrFail($id);
        $student->status = $new_status;
        $student->update();
        echo $new_status;
        exit;
    }
}
