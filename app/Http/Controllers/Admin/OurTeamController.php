<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use App\Models\Admin;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use DataTables;
use Str;
use Auth;

class OurTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }
   
    public function index() 
    {
        return view('admin.ourteams.index');
    }
   
    public function fetchOurTeamData(Request $request)
    {
        $ourteam = OurTeam::select(['*']);
        return Datatables::of($ourteam)
                        ->filter(function ($query) use ($request) {
                            //dd($request);
                            if ($request->has('name') && !empty($request->name)) {
                                $query->where('name', 'like', "%{$request->get('name')}%");
                            }
                            if ($request->has('designation') && !empty($request->class)) {
                                $query->where('designation', 'like', "%{$request->get('designation')}%");
                            }
                            

                            $query->orderBy('id', 'DESC');
                        })
                        ->addColumn('image', function ($ourteam) {
                            $image = '<img style="width: 57%;" src="'.asset('/images/thumb/'.$ourteam->attached_file).'" alt="">';
                            return $image;
                        })
                        ->addColumn('name', function ($ourteam) {
                            $name = Str::limit($ourteam->name, 100, '...');
                            return $name;
                        })
                        ->addColumn('designation', function ($ourteam) {
                            $designation = Str::limit($ourteam->designation, 100, '...');
                            return $designation;
                        })
                        
                            
                      
                        ->addColumn('action', function ($ourteam) {
                            $action = '<a href="'.route('admin.ourteam.edit',[$ourteam->id]).'" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-ui-edit"></span>&nbsp Edit</a>
                                <a href="'.route('admin.ourteam.delete',[$ourteam->id]).'" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-ui-delete"></span>&nbsp Delete</a>';
                            return $action;
                        })
                        ->rawColumns(['title', 'status', 'action', 'image', 'category'])
                        ->setRowId(function($ourteam) {
                            return 'countryDtRow' . $ourteam->id;
                        })
                        ->make(true);
    }


    public function add() 
    {
        return view('admin.ourteams.add');
    }
   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
        ], [
            'name.required' => ' Name is required.',
            'designation.required' => 'Designation is required.',
        ]);

        $ourteam = new OurTeam();
        $ourteam->name = $request->name;
        $ourteam->designation = $request->designation;
       
        if($request->attached_file){
          $ourteam->attached_file = $request->attached_file;  
        }
       
        $ourteam->save();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'You have successfully submitted new Team Member');
        return redirect(route('admin.ourteams'));
    }

    public function edit($id) 
    {
        $data = array();
        $data['ourteam'] = OurTeam::findorFail($id);
        return view('admin.ourteams.edit')->with($data);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
     
            'name' => 'required',
            'designation' => 'required',
        ], [
          
            'name.required' => ' Name is required.',
            'designation.required' => 'Designation is required.',
            
        ]);

        $ourteam = OurTeam::findorFail($request->id);

        $ourteam->name = $request->name;
        $ourteam->designation = $request->designation;
     
       
        if($request->attached_file){
          $ourteam->attached_file = $request->attached_file;  
        }
        $ourteam->update();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'You have successfully updated ourteam');
        return redirect(route('admin.ourteams'));
    }
    public function destroy(Request $request, $id)
    {
        $ourteam = OurTeam::findOrFail($id);
        $ourteam->delete();

        $ourteam->session()->flash('message.added', 'success');
        $ourteam->session()->flash('message.content', 'Team Memeber has been successfully Deleted!');
        return redirect(route('admin.ourteams'));
    }

}
