<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Modules;
use App\Models\Menu_types;
use App\Models\ModulesData;
use App\Models\Tags;
use App\Models\Applicants;
use App\Models\Menu;
use Str;
use DataTables;

class ModulesDataController extends Controller
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
    public function index($slug = '')
    {
        $data = array();
        $data['module'] = Modules::where('slug', $slug)->firstOrFail();
         if(null!==($data['module']->parent_id)){
            $data['parent'] = Modules::findOrFail($data['module']->parent_id);
        }
        return view('admin.modules_data.index')->with($data);
    }

    public function add($slug) {
        $data = array();
        $data['module'] = Modules::where('slug', $slug)->firstOrFail();
        $data['menu_types'] = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        if(null!==($data['module']->parent_id)){
            $data['categories'] = ModulesData::select('title', 'id')->where('module_id',$data['module']->parent_id)->where('status','active')->pluck('title', 'id')->toArray();
        }
        $data['tags'] = Tags::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        return view('admin.modules_data.add')->with($data);
    }

    public function edit($slug,$id) {
        $data = array();$data['module'] = Modules::where('slug', $slug)->firstOrFail();
        $data['menu_types'] = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        if(null!==($data['module']->parent_id)){
            $data['categories'] = ModulesData::select('title', 'id')->where('module_id',$data['module']->parent_id)->where('status','active')->pluck('title', 'id')->toArray();
        }
        $data['tags'] = Tags::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        $data['module_data'] = ModulesData::findorFail($id);
        return view('admin.modules_data.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Title is required.',
        ]);
        $slug = $request->slug;
        $slugs = unique_slug($slug, 'modules_data', $field = 'slug', $key = NULL, $value = NULL);
        $dynamic_form = $request->input('dynamic_form');
        $data = new ModulesData();
        $data->title = $request->title;
        $data->slug = $slugs;
        $data->description = $request->description;
        $data->category = $request->category;

        $data->module_id = $request->module_id;





        if (null!==($request->category_ids)) {
            $data->category_ids = implode(",", $request->category_ids);
        }

        $data->extra_field_1 = $request->extra_field_1;
        $data->extra_field_2 = $request->extra_field_2;
        $data->extra_field_3 = $request->extra_field_3;
        $data->extra_field_4 = $request->extra_field_4;
        $data->extra_field_5 = $request->extra_field_5;
        $data->extra_field_6 = $request->extra_field_6;
        $data->extra_field_7 = $request->extra_field_7;
        $data->extra_field_8 = $request->extra_field_8;
        $data->extra_field_9 = $request->extra_field_9;
        $data->extra_field_10 = $request->extra_field_10;
        $data->extra_field_11 = $request->extra_field_11;
        $data->extra_field_12 = $request->extra_field_12;
        $data->extra_field_13 = $request->extra_field_13;
        $data->extra_field_14 = $request->extra_field_14;
        $data->extra_field_15 = $request->extra_field_15;

        if (null!==($request->tag_ids)) {
            $data->tag_ids = implode(",", $request->tag_ids);
        }

        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;

        $data->image = $request->attached_file;


        $data->images = $request->attached_files;


        if(isset($dynamic_form['dynamic_form']) && null!==($dynamic_form['dynamic_form'])){
                $data->highlights = json_encode($dynamic_form['dynamic_form']);
        }
       
        $data->save();

        $menu_types = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        if(null!==($menu_types)){
            foreach($menu_types as $key => $menu_type){
                $field = 'menu_'.$key;
                if($request->$field){
                    $menu = new Menu();
                    $menu->title = $data->title;
                    $menu->slug = $data->slug;
                    $menu->menu_type_id = $key;
                    $menu->post_id = $data->id;
                    $menu->parent_id = 0;
                    $menu->order    = Menu::max('order')+1;
                    $menu->menu_is = 'internal';
                    $menu->save();
                }
            }
        }


        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', $request->module_term.' has been successfully Created!');
        return redirect(route('admin.modules.data',$request->module_slug));
    }

    public function update(Request $request)
    {
         $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Title is required.',
        ]);
        $slug = $request->slug;
        //$slugs = unique_slug($slug, 'modules_data', $field = 'slug', $key = NULL, $value = NULL);
        $data = ModulesData::findorFail($request->id);
        $data->title = $request->title;
        $data->slug = $slug;
        $data->description = $request->description;
        $data->category = $request->category;

        $data->module_id = $request->module_id;





        if (null!==($request->category_ids)) {
            $data->category_ids = implode(",", $request->category_ids);
        }

        $data->extra_field_1 = $request->extra_field_1;
        $data->extra_field_2 = $request->extra_field_2;
        $data->extra_field_3 = $request->extra_field_3;
        $data->extra_field_4 = $request->extra_field_4;
        $data->extra_field_5 = $request->extra_field_5;
        $data->extra_field_6 = $request->extra_field_6;
        $data->extra_field_7 = $request->extra_field_7;
        $data->extra_field_8 = $request->extra_field_8;
        $data->extra_field_9 = $request->extra_field_9;
        $data->extra_field_10 = $request->extra_field_10;
        $data->extra_field_11 = $request->extra_field_11;
        $data->extra_field_12 = $request->extra_field_12;
        $data->extra_field_13 = $request->extra_field_13;
        $data->extra_field_14 = $request->extra_field_14;
        $data->extra_field_15 = $request->extra_field_15;

        if (null!==($request->tag_ids)) {
            $data->tag_ids = implode(",", $request->tag_ids);
        }

        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;

        $data->image = $request->attached_file;
        $data->images = $request->attached_files;


        if(isset($dynamic_form['dynamic_form']) && null!==($dynamic_form['dynamic_form'])){
                $data->highlights = json_encode($dynamic_form['dynamic_form']);
        }
       
        $data->update();

        $menu_types = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        
        if(null!==($menu_types)){
            foreach($menu_types as $key => $menu_type){
                $posted_menu = Menu::where('post_id',$data->id)->where('menu_type_id', $key)->first();
                /*if(null!==($post_menus))
                {
                   foreach ($post_menus as $key => $value) {
                        $post_menu = Menu::findorFail($value->id);
                        $post_menu->delete();
                    } 
                }*/


                $field = 'menu_'.$key;
                if(null==($posted_menu)){
                    if($request->$field){
                        $menu = new Menu();
                        $menu->title = $data->title;
                        $menu->slug = $data->slug;
                        $menu->menu_type_id = $key;
                        $menu->post_id = $data->id;
                        $menu->parent_id = 0;
                        $menu->order    = Menu::max('order')+1;
                        $menu->menu_is = 'internal';
                        $menu->save();
                    }
                }else{
                    if($request->$field==''){
                        $item = Menu::where('post_id',$data->id)->where('menu_type_id', $key)->delete();
                    }
                }
            }
        }


        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', $request->module_term.' has been successfully Updated!');
        return redirect(route('admin.modules.data',$request->module_slug));
    }


    public function fetchModulesData(Request $request)
    {
        //dd('dgsdfg');
        $module = Modules::findOrFail($request->id);
        $modules_data = ModulesData::select(['*'])->where('module_id',$module->id);
        return Datatables::of($modules_data)
                        ->filter(function ($query) use ($request) {
                            //dd($request);
                            if ($request->has('title') && !empty($request->title)) {
                                $query->where('title', 'like', "%{$request->get('title')}%");
                            }
                            if ($request->has('category') && !empty($request->category)) {
                                $query->where('category', '=', "{$request->get('category')}");
                                $query->orWhere('category_ids', 'like', "%{$request->get('category')}%");
                            }
                            if ($request->has('status') && !empty($request->status)) {
                                //dd($request->status);
                                $query->where('status',$request->status);
                            }

                            $query->orderBy('id', 'DESC');
                        })
                        ->addColumn('image', function ($modules_data) {
                            $image = '<img style="width: 57%;" src="'.asset('/images/thumb/'.$modules_data->image).'" alt="">';
                            return $image;
                        })
                        ->addColumn('title', function ($modules_data) {
                            $title = Str::limit($modules_data->title, 100, '...');
                            return $title;
                        })
                        ->addColumn('created_date', function ($modules_data) {
                            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $modules_data->created_at);
                        })
                        ->addColumn('category', function ($modules_data) use ($module) {
                            if($module->multiple_category){
                                $cate_ids = explode(",", $modules_data->category_ids);
                                $categories = ModulesData::whereIn('id', $cate_ids)->get();

                              $cate_array = array();
                              foreach ($categories as $cat) {
                                  $cate_array[] = "<a href='" . route('blogs.list','cate='.$cat->id) . "'>$cat->title</a>";
                              }
                              return implode(' | ', $cate_array);
                            }else{
                               return title($modules_data->category); 
                            }
                            
                        })
                        ->addColumn('status', function ($modules_data) {


                            $status_type = '';
                            if($modules_data->status=='active'){
                                $status_type = '<span style="font-size: 12px;" class="btn btn-success">'.$modules_data->status.'</span>';
                            }else{
                                $status_type = '<span style="font-size: 12px;" class="btn btn-warning">'.$modules_data->status.'</span>';
                            }
                            $status = '<a class="waves-effect status waves-light" onclick="update_status('.$modules_data->id.');" href="javascript:void(0);" id="sts_'.$modules_data->id.'"> '.$status_type.'</a>';
                            return  $status;
                            
                        })
                        ->addColumn('action', function ($modules_data) use ($module) {
                            $applicants_button = '';
                            if($module->id==19){
                                $applicants = Applicants::select('user_id')->where('job_id',$modules_data->id)->count();
                                $applicants_button = '<a href="'.route('admin.list-applicants',[$modules_data->id]).'" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;">&nbsp Applicants  <span class="badge badge-light">'.$applicants.'</span></a>';
                            }

                            $sent_button = '';
                            if($module->id==22){
                                $sent_button = '<a href="'.route('admin.send.to',[$modules_data->id]).'" class="tabledit-edit-button btn btn-warning waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;">&nbsp Send to </a>';
                            }
                            
                            if($module->is_preview){
                                if($modules_data->id==45){
                                    $preview = '<a target="_blank" href="'.url('/').'" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-eye-alt"></span>&nbsp Preview</a>';
                                }else if($module->id==6){
                                    $preview = '<a target="_blank" href="'.url('/'.$modules_data->slug).'" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-eye-alt"></span>&nbsp Preview</a>';
                                }else{
                                    $preview = '<a target="_blank" href="'.url('/'.strtolower($module->term).'/'.$modules_data->slug).'" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-eye-alt"></span>&nbsp Preview</a>';
                                }
                            }else{
                                $preview ='';
                            }
                            
                            $action = $sent_button.$applicants_button.$preview.'<a href="'.route('admin.modules.data.edit',[$module->slug,$modules_data->id]).'" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-ui-edit"></span>&nbsp Edit</a>
                                <a href="'.route('admin.modules.data.delete',[$module->slug,$modules_data->id]).'" class="tabledit-delete-button btn btn-danger waves-effect waves-light" delete style="float: none;margin: 5px; font-size: 12px;"><span class="icofont icofont-ui-delete"></span>&nbsp Delete</a>';
                            return $action;
                        })
                        ->rawColumns(['title', 'status', 'action', 'image', 'category'])
                        ->setRowId(function($modules_data) {
                            return 'countryDtRow' . $modules_data->id;
                        })
                        ->make(true);
    }

    public function destroy(Request $request,$slug,$id)
    {
        $data = ModulesData::findOrFail($id);
        $data->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Successfully Deleted!');
        return redirect()->back();
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
        if ($current_staus == 'active')
            $new_status = 'blocked';
        else
            $new_status = 'active';
        $module = ModulesData::findOrFail($id);
        $module->status = $new_status;
        $module->update();
        echo $new_status;
        exit;
    }
}
