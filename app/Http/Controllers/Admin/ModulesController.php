<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules;
use App\Models\ModulesData;
use Str;

class ModulesController extends Controller
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
    public function index()
    {
        $data = array();
        $data['modules'] = Modules::get();
        return view('admin.modules.index')->with($data);
    }

    public function add() {
        $data['categories'] = Modules::select('name', 'id')->where('status','active')->pluck('name', 'id')->toArray();
        return view('admin.modules.add')->with($data);
    }

    public function edit($id) {
        $data = array();
        $data['categories'] = Modules::select('name', 'id')->where('status','active')->pluck('name', 'id')->toArray();
        $data['module'] = Modules::findorFail($id);
        return view('admin.modules.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'term' => 'required',
        ], [
            'name.required' => 'Module Name is required.',
            'term.required' => 'Module Term is required.',
        ]);
        $slug = Str::slug($request->name, '-');
        $slugs = unique_slug($slug, 'modules', $field = 'slug', $key = NULL, $value = NULL);
        $module = new Modules();
        $module->name = $request->name;
        $module->term = $request->term;
        $module->is_slug = $request->is_slug;
        $module->is_menu = $request->is_menu;
        $module->is_preview = $request->is_preview;
        $module->is_description = $request->is_description;
        $module->is_highlights = $request->is_highlights;
        $module->is_seo = $request->is_seo;
        $module->category = $request->category;
        $module->multiple_category = $request->multiple_category;
        $module->tags = $request->tags;
        $module->is_image = $request->is_image;
        $module->multi_images = $request->multi_images;
        $module->parent_id = $request->parent_id;
        $module->thumbnail_height = $request->thumbnail_height;
        $module->thumbnail_width = $request->thumbnail_width;
        $module->extra_fields = $request->extra_fields;
        

        $module->extra_field_title_1 = $request->extra_field_title_1;
        $module->extra_field_type_1 = $request->extra_field_type_1;
        $module->extra_field_attr_1 = $request->extra_field_attr_1;
        $module->extra_field_sort_1 = $request->extra_field_sort_1;
        $module->extra_field_col_1 = $request->extra_field_col_1;
        $module->extra_field_max_length_1 = $request->extra_field_max_length_1;
        $module->extra_field_required_1 = $request->extra_field_required_1;
        $module->extra_field_required_message_1 = $request->extra_field_required_message_1;
        $module->extra_field_show_1 = $request->extra_field_show_1;

        $module->extra_field_title_2 = $request->extra_field_title_2;
        $module->extra_field_type_2 = $request->extra_field_type_2;
        $module->extra_field_attr_2 = $request->extra_field_attr_2;
        $module->extra_field_sort_2 = $request->extra_field_sort_2;
        $module->extra_field_col_2 = $request->extra_field_col_2;
        $module->extra_field_max_length_2 = $request->extra_field_max_length_2;
        $module->extra_field_required_2 = $request->extra_field_required_2;
        $module->extra_field_required_message_2 = $request->extra_field_required_message_2;
        $module->extra_field_show_2 = $request->extra_field_show_2;

        $module->extra_field_title_3 = $request->extra_field_title_3;
        $module->extra_field_type_3 = $request->extra_field_type_3;
        $module->extra_field_attr_3 = $request->extra_field_attr_3;
        $module->extra_field_sort_3 = $request->extra_field_sort_3;
        $module->extra_field_col_3 = $request->extra_field_col_3;
        $module->extra_field_max_length_3 = $request->extra_field_max_length_3;
        $module->extra_field_required_3 = $request->extra_field_required_3;
        $module->extra_field_required_message_3 = $request->extra_field_required_message_3;
        $module->extra_field_show_3 = $request->extra_field_show_3;

        $module->extra_field_title_4 = $request->extra_field_title_4;
        $module->extra_field_type_4 = $request->extra_field_type_4;
        $module->extra_field_attr_4 = $request->extra_field_attr_4;
        $module->extra_field_sort_4 = $request->extra_field_sort_4;
        $module->extra_field_col_4 = $request->extra_field_col_4;
        $module->extra_field_max_length_4 = $request->extra_field_max_length_4;
        $module->extra_field_required_4 = $request->extra_field_required_4;
        $module->extra_field_required_message_4 = $request->extra_field_required_message_4;
        $module->extra_field_show_4 = $request->extra_field_show_4;

        $module->extra_field_title_5 = $request->extra_field_title_5;
        $module->extra_field_type_5 = $request->extra_field_type_5;
        $module->extra_field_attr_5 = $request->extra_field_attr_5;
        $module->extra_field_sort_5 = $request->extra_field_sort_5;
        $module->extra_field_col_5 = $request->extra_field_col_5;
        $module->extra_field_max_length_5 = $request->extra_field_max_length_5;
        $module->extra_field_required_5 = $request->extra_field_required_5;
        $module->extra_field_required_message_5 = $request->extra_field_required_message_5;
        $module->extra_field_show_5 = $request->extra_field_show_5;

        $module->extra_field_title_6 = $request->extra_field_title_6;
        $module->extra_field_type_6 = $request->extra_field_type_6;
        $module->extra_field_attr_6 = $request->extra_field_attr_6;
        $module->extra_field_sort_6 = $request->extra_field_sort_6;
        $module->extra_field_col_6 = $request->extra_field_col_6;
        $module->extra_field_max_length_6 = $request->extra_field_max_length_6;
        $module->extra_field_required_6 = $request->extra_field_required_6;
        $module->extra_field_required_message_6 = $request->extra_field_required_message_6;
        $module->extra_field_show_6 = $request->extra_field_show_6;

        $module->extra_field_title_7 = $request->extra_field_title_7;
        $module->extra_field_type_7 = $request->extra_field_type_7;
        $module->extra_field_attr_7 = $request->extra_field_attr_7;
        $module->extra_field_sort_7 = $request->extra_field_sort_7;
        $module->extra_field_col_7 = $request->extra_field_col_7;
        $module->extra_field_max_length_7 = $request->extra_field_max_length_7;
        $module->extra_field_required_7 = $request->extra_field_required_7;
        $module->extra_field_required_message_7 = $request->extra_field_required_message_7;
        $module->extra_field_show_7 = $request->extra_field_show_7;

        $module->extra_field_title_8 = $request->extra_field_title_8;
        $module->extra_field_type_8 = $request->extra_field_type_8;
        $module->extra_field_attr_8 = $request->extra_field_attr_8;
        $module->extra_field_sort_8 = $request->extra_field_sort_8;
        $module->extra_field_col_8 = $request->extra_field_col_8;
        $module->extra_field_max_length_8 = $request->extra_field_max_length_8;
        $module->extra_field_required_8 = $request->extra_field_required_8;
        $module->extra_field_required_message_8 = $request->extra_field_required_message_8;
        $module->extra_field_show_8 = $request->extra_field_show_8;

        $module->extra_field_title_9 = $request->extra_field_title_9;
        $module->extra_field_type_9 = $request->extra_field_type_9;
        $module->extra_field_attr_9 = $request->extra_field_attr_9;
        $module->extra_field_sort_9 = $request->extra_field_sort_9;
        $module->extra_field_col_9 = $request->extra_field_col_9;
        $module->extra_field_max_length_9 = $request->extra_field_max_length_9;
        $module->extra_field_required_9 = $request->extra_field_required_9;
        $module->extra_field_required_message_9 = $request->extra_field_required_message_9;
        $module->extra_field_show_9 = $request->extra_field_show_9;

        $module->extra_field_title_10 = $request->extra_field_title_10;
        $module->extra_field_type_10 = $request->extra_field_type_10;
        $module->extra_field_attr_10 = $request->extra_field_attr_10;
        $module->extra_field_sort_10 = $request->extra_field_sort_10;
        $module->extra_field_col_10 = $request->extra_field_col_10;
        $module->extra_field_max_length_10 = $request->extra_field_max_length_10;
        $module->extra_field_required_10 = $request->extra_field_required_10;
        $module->extra_field_required_message_10 = $request->extra_field_required_message_10;
        $module->extra_field_show_10 = $request->extra_field_show_10;

        $module->extra_field_title_11 = $request->extra_field_title_11;
        $module->extra_field_type_11 = $request->extra_field_type_11;
        $module->extra_field_attr_11 = $request->extra_field_attr_11;
        $module->extra_field_sort_11 = $request->extra_field_sort_11;
        $module->extra_field_col_11 = $request->extra_field_col_11;
        $module->extra_field_max_length_11 = $request->extra_field_max_length_11;
        $module->extra_field_required_11 = $request->extra_field_required_11;
        $module->extra_field_required_message_11 = $request->extra_field_required_message_11;
        $module->extra_field_show_11 = $request->extra_field_show_11;

        $module->extra_field_title_12 = $request->extra_field_title_12;
        $module->extra_field_type_12 = $request->extra_field_type_12;
        $module->extra_field_attr_12 = $request->extra_field_attr_12;
        $module->extra_field_sort_12 = $request->extra_field_sort_12;
        $module->extra_field_col_12 = $request->extra_field_col_12;
        $module->extra_field_max_length_12 = $request->extra_field_max_length_12;
        $module->extra_field_required_12 = $request->extra_field_required_12;
        $module->extra_field_required_message_12 = $request->extra_field_required_message_12;
        $module->extra_field_show_12 = $request->extra_field_show_12;

        $module->extra_field_title_13 = $request->extra_field_title_13;
        $module->extra_field_type_13 = $request->extra_field_type_13;
        $module->extra_field_attr_13 = $request->extra_field_attr_13;
        $module->extra_field_sort_13 = $request->extra_field_sort_13;
        $module->extra_field_col_13 = $request->extra_field_col_13;
        $module->extra_field_max_length_13 = $request->extra_field_max_length_13;
        $module->extra_field_required_13 = $request->extra_field_required_13;
        $module->extra_field_required_message_13 = $request->extra_field_required_message_13;
        $module->extra_field_show_13 = $request->extra_field_show_13;

        $module->extra_field_title_14 = $request->extra_field_title_14;
        $module->extra_field_type_14 = $request->extra_field_type_14;
        $module->extra_field_attr_14 = $request->extra_field_attr_14;
        $module->extra_field_sort_14 = $request->extra_field_sort_14;
        $module->extra_field_col_14 = $request->extra_field_col_14;
        $module->extra_field_max_length_14 = $request->extra_field_max_length_14;
        $module->extra_field_required_14 = $request->extra_field_required_14;
        $module->extra_field_required_message_14 = $request->extra_field_required_message_14;
        $module->extra_field_show_14 = $request->extra_field_show_14;

        $module->extra_field_title_15 = $request->extra_field_title_15;
        $module->extra_field_type_15 = $request->extra_field_type_15;
        $module->extra_field_attr_15 = $request->extra_field_attr_15;
        $module->extra_field_sort_15 = $request->extra_field_sort_15;
        $module->extra_field_col_15 = $request->extra_field_col_15;
        $module->extra_field_max_length_15 = $request->extra_field_max_length_15;
        $module->extra_field_required_15 = $request->extra_field_required_15;
        $module->extra_field_required_message_15 = $request->extra_field_required_message_15;
        $module->extra_field_show_15 = $request->extra_field_show_15;
        $module->slug = $slugs;
        $module->save();
        if ($module->save() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'A module has been successfully Created!');
        }
        return redirect(route('admin.modules'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'term' => 'required',
        ], [
            'name.required' => 'Module Name is required.',
            'term.required' => 'Module Term is required.',
        ]);
        
        $module = Modules::findorFail($request->id);
        if(trim($module->name) != trim($request->name)){
            $slug = Str::slug($request->name, '-');
            $slugs = unique_slug($slug, 'modules', $field = 'slug', $key = NULL, $value = NULL);
            $module->slug = $slugs;
        }
        $module->name = $request->name;
        $module->term = $request->term;
        $module->is_slug = $request->is_slug;
        $module->is_menu = $request->is_menu;
        $module->is_preview = $request->is_preview;
        $module->is_description = $request->is_description;
        $module->is_highlights = $request->is_highlights;
        $module->is_seo = $request->is_seo;
        $module->category = $request->category;
        $module->multiple_category = $request->multiple_category;
        $module->tags = $request->tags;
        $module->is_image = $request->is_image;
        $module->multi_images = $request->multi_images;
        $module->parent_id = $request->parent_id;
        $module->thumbnail_height = $request->thumbnail_height;
        $module->thumbnail_width = $request->thumbnail_width;
        $module->extra_fields = $request->extra_fields;
        
        $module->extra_field_title_1 = $request->extra_field_title_1;
        $module->extra_field_type_1 = $request->extra_field_type_1;
        $module->extra_field_attr_1 = $request->extra_field_attr_1;
        $module->extra_field_sort_1 = $request->extra_field_sort_1;
        $module->extra_field_col_1 = $request->extra_field_col_1;
        $module->extra_field_max_length_1 = $request->extra_field_max_length_1;
        $module->extra_field_required_1 = $request->extra_field_required_1;
        $module->extra_field_required_message_1 = $request->extra_field_required_message_1;
        $module->extra_field_show_1 = $request->extra_field_show_1;

        $module->extra_field_title_2 = $request->extra_field_title_2;
        $module->extra_field_type_2 = $request->extra_field_type_2;
        $module->extra_field_attr_2 = $request->extra_field_attr_2;
        $module->extra_field_sort_2 = $request->extra_field_sort_2;
        $module->extra_field_col_2 = $request->extra_field_col_2;
        $module->extra_field_max_length_2 = $request->extra_field_max_length_2;
        $module->extra_field_required_2 = $request->extra_field_required_2;
        $module->extra_field_required_message_2 = $request->extra_field_required_message_2;
        $module->extra_field_show_2 = $request->extra_field_show_2;

        $module->extra_field_title_3 = $request->extra_field_title_3;
        $module->extra_field_type_3 = $request->extra_field_type_3;
        $module->extra_field_attr_3 = $request->extra_field_attr_3;
        $module->extra_field_sort_3 = $request->extra_field_sort_3;
        $module->extra_field_col_3 = $request->extra_field_col_3;
        $module->extra_field_max_length_3 = $request->extra_field_max_length_3;
        $module->extra_field_required_3 = $request->extra_field_required_3;
        $module->extra_field_required_message_3 = $request->extra_field_required_message_3;
        $module->extra_field_show_3 = $request->extra_field_show_3;

        $module->extra_field_title_4 = $request->extra_field_title_4;
        $module->extra_field_type_4 = $request->extra_field_type_4;
        $module->extra_field_attr_4 = $request->extra_field_attr_4;
        $module->extra_field_sort_4 = $request->extra_field_sort_4;
        $module->extra_field_col_4 = $request->extra_field_col_4;
        $module->extra_field_max_length_4 = $request->extra_field_max_length_4;
        $module->extra_field_required_4 = $request->extra_field_required_4;
        $module->extra_field_required_message_4 = $request->extra_field_required_message_4;
        $module->extra_field_show_4 = $request->extra_field_show_4;

        $module->extra_field_title_5 = $request->extra_field_title_5;
        $module->extra_field_type_5 = $request->extra_field_type_5;
        $module->extra_field_attr_5 = $request->extra_field_attr_5;
        $module->extra_field_sort_5 = $request->extra_field_sort_5;
        $module->extra_field_col_5 = $request->extra_field_col_5;
        $module->extra_field_max_length_5 = $request->extra_field_max_length_5;
        $module->extra_field_required_5 = $request->extra_field_required_5;
        $module->extra_field_required_message_5 = $request->extra_field_required_message_5;
        $module->extra_field_show_5 = $request->extra_field_show_5;

        $module->extra_field_title_6 = $request->extra_field_title_6;
        $module->extra_field_type_6 = $request->extra_field_type_6;
        $module->extra_field_attr_6 = $request->extra_field_attr_6;
        $module->extra_field_sort_6 = $request->extra_field_sort_6;
        $module->extra_field_col_6 = $request->extra_field_col_6;
        $module->extra_field_max_length_6 = $request->extra_field_max_length_6;
        $module->extra_field_required_6 = $request->extra_field_required_6;
        $module->extra_field_required_message_6 = $request->extra_field_required_message_6;
        $module->extra_field_show_6 = $request->extra_field_show_6;

        $module->extra_field_title_7 = $request->extra_field_title_7;
        $module->extra_field_type_7 = $request->extra_field_type_7;
        $module->extra_field_attr_7 = $request->extra_field_attr_7;
        $module->extra_field_sort_7 = $request->extra_field_sort_7;
        $module->extra_field_col_7 = $request->extra_field_col_7;
        $module->extra_field_max_length_7 = $request->extra_field_max_length_7;
        $module->extra_field_required_7 = $request->extra_field_required_7;
        $module->extra_field_required_message_7 = $request->extra_field_required_message_7;
        $module->extra_field_show_7 = $request->extra_field_show_7;

        $module->extra_field_title_8 = $request->extra_field_title_8;
        $module->extra_field_type_8 = $request->extra_field_type_8;
        $module->extra_field_attr_8 = $request->extra_field_attr_8;
        $module->extra_field_sort_8 = $request->extra_field_sort_8;
        $module->extra_field_col_8 = $request->extra_field_col_8;
        $module->extra_field_max_length_8 = $request->extra_field_max_length_8;
        $module->extra_field_required_8 = $request->extra_field_required_8;
        $module->extra_field_required_message_8 = $request->extra_field_required_message_8;
        $module->extra_field_show_8 = $request->extra_field_show_8;

        $module->extra_field_title_9 = $request->extra_field_title_9;
        $module->extra_field_type_9 = $request->extra_field_type_9;
        $module->extra_field_attr_9 = $request->extra_field_attr_9;
        $module->extra_field_sort_9 = $request->extra_field_sort_9;
        $module->extra_field_col_9 = $request->extra_field_col_9;
        $module->extra_field_max_length_9 = $request->extra_field_max_length_9;
        $module->extra_field_required_9 = $request->extra_field_required_9;
        $module->extra_field_required_message_9 = $request->extra_field_required_message_9;
        $module->extra_field_show_9 = $request->extra_field_show_9;

        $module->extra_field_title_10 = $request->extra_field_title_10;
        $module->extra_field_type_10 = $request->extra_field_type_10;
        $module->extra_field_attr_10 = $request->extra_field_attr_10;
        $module->extra_field_sort_10 = $request->extra_field_sort_10;
        $module->extra_field_col_10 = $request->extra_field_col_10;
        $module->extra_field_max_length_10 = $request->extra_field_max_length_10;
        $module->extra_field_required_10 = $request->extra_field_required_10;
        $module->extra_field_required_message_10 = $request->extra_field_required_message_10;
        $module->extra_field_show_10 = $request->extra_field_show_10;

        $module->extra_field_title_11 = $request->extra_field_title_11;
        $module->extra_field_type_11 = $request->extra_field_type_11;
        $module->extra_field_attr_11 = $request->extra_field_attr_11;
        $module->extra_field_sort_11 = $request->extra_field_sort_11;
        $module->extra_field_col_11 = $request->extra_field_col_11;
        $module->extra_field_max_length_11 = $request->extra_field_max_length_11;
        $module->extra_field_required_11 = $request->extra_field_required_11;
        $module->extra_field_required_message_11 = $request->extra_field_required_message_11;
        $module->extra_field_show_11 = $request->extra_field_show_11;

        $module->extra_field_title_12 = $request->extra_field_title_12;
        $module->extra_field_type_12 = $request->extra_field_type_12;
        $module->extra_field_attr_12 = $request->extra_field_attr_12;
        $module->extra_field_sort_12 = $request->extra_field_sort_12;
        $module->extra_field_col_12 = $request->extra_field_col_12;
        $module->extra_field_max_length_12 = $request->extra_field_max_length_12;
        $module->extra_field_required_12 = $request->extra_field_required_12;
        $module->extra_field_required_message_12 = $request->extra_field_required_message_12;
        $module->extra_field_show_12 = $request->extra_field_show_12;

        $module->extra_field_title_13 = $request->extra_field_title_13;
        $module->extra_field_type_13 = $request->extra_field_type_13;
        $module->extra_field_attr_13 = $request->extra_field_attr_13;
        $module->extra_field_sort_13 = $request->extra_field_sort_13;
        $module->extra_field_col_13 = $request->extra_field_col_13;
        $module->extra_field_max_length_13 = $request->extra_field_max_length_13;
        $module->extra_field_required_13 = $request->extra_field_required_13;
        $module->extra_field_required_message_13 = $request->extra_field_required_message_13;
        $module->extra_field_show_13 = $request->extra_field_show_13;

        $module->extra_field_title_14 = $request->extra_field_title_14;
        $module->extra_field_type_14 = $request->extra_field_type_14;
        $module->extra_field_attr_14 = $request->extra_field_attr_14;
        $module->extra_field_sort_14 = $request->extra_field_sort_14;
        $module->extra_field_col_14 = $request->extra_field_col_14;
        $module->extra_field_max_length_14 = $request->extra_field_max_length_14;
        $module->extra_field_required_14 = $request->extra_field_required_14;
        $module->extra_field_required_message_14 = $request->extra_field_required_message_14;
        $module->extra_field_show_14 = $request->extra_field_show_14;

        $module->extra_field_title_15 = $request->extra_field_title_15;
        $module->extra_field_type_15 = $request->extra_field_type_15;
        $module->extra_field_attr_15 = $request->extra_field_attr_15;
        $module->extra_field_sort_15 = $request->extra_field_sort_15;
        $module->extra_field_col_15 = $request->extra_field_col_15;
        $module->extra_field_max_length_15 = $request->extra_field_max_length_15;
        $module->extra_field_required_15 = $request->extra_field_required_15;
        $module->extra_field_required_message_15 = $request->extra_field_required_message_15;
        $module->extra_field_show_15 = $request->extra_field_show_15;
        
        $module->update();
        if ($module->update() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'A module has been successfully Updated!');
        }
        return redirect(route('admin.modules'));
    }

    public function destroy(Request $request, $id)
    {
        $module = Modules::findOrFail($id);
        $module->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'A module has been successfully Deleted!');
        return redirect(route('admin.modules'));
    }
}
