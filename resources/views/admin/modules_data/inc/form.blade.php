@push('css')
<style type="text/css">
  .error{color: red}
</style>
<script type="text/javascript">

  var thumbnail_height = "{{$module->thumbnail_height}}";

  var thumbnail_width = "{{$module->thumbnail_width}}";

</script>

@endpush

<input type="hidden" name="module_id" value="{{$module->id}}">

<input type="hidden" name="module_term" value="{{$module->term}}">

<input type="hidden" name="module_slug" value="{{$module->slug}}">

<input type="hidden" id="attached_file" <?php if(isset($module_data)){echo 'value="'.$module_data->image.'"';} ?> name="attached_file">

<input type="hidden" id="attached_files" <?php if(isset($module_data)){echo 'value="'.$module_data->images.'"';} ?> name="attached_files">

<div class="row">

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('title', $module->term.' Title', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'maxlength'=>'20', 'placeholder'=>$module->term.' Title', 'required'=>'required')) !!}

     </div>

  </div>

  @if($module->is_slug)

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('term', $module->term.' Slug', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('slug', null, array('class'=>'form-control', 'id'=>'slug', 'placeholder'=>$module->term.' Slug', 'required'=>'required')) !!}

     </div>

  </div>

  @endif



  @if($module->is_menu)

  @if(null!==($menu_types))

  @foreach($menu_types as $key => $menu_type)

  @php

  if(isset($module_data)){

    $menu = App\Models\Menu::where('post_id',$module_data->id)->where('menu_type_id',$key)->first();

  }

  @endphp

  <div class="col-md-3">

      <div class="form-group border-checkbox-section">



        <div class="border-checkbox-group border-checkbox-group-success">

          <input class="border-checkbox" <?php if(isset($menu) && $menu->id!=''){echo 'checked';} ?> name="menu_{{$key}}" type="checkbox" id="checkbox{{$key}}">

          <label class="border-checkbox-label" for="checkbox{{$key}}">{{$menu_type}}</label>

      </div>

    </div>

  </div>

  @endforeach

  @endif

  @endif

  @if($module->category && $module->multiple_category)

  <div class="col-md-12">

     <div class="form-group">

        @php

            if(isset($module_data)){

              $category_ids = explode(',',$module_data->category_ids);

        

            }

        @endphp

            

        {!! Form::label('category_ids', $module->term.' Categories', ['class' => 'font-weight-bold']) !!}

        {!! Form::select('category_ids[]', $categories, isset($category_ids)?$category_ids:null, array('class'=>'js-example-basic-multiple col-sm-12 select2-hidden-accessible', 'id'=>'category_ids', 'multiple'=>'multiple')) !!}

        {!! APFrmErrHelp::showErrors($errors, 'category_ids') !!}

     </div>

  </div>

  @else

  @if($module->category)

   <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('category', $module->term.' Category', ['class' => 'font-weight-bold']) !!}

        {!! Form::select('category', [''=>'Select Category']+$categories, null, array('class'=>'form-control', 'id'=>'category', 'required'=>'required')) !!}

        {!! APFrmErrHelp::showErrors($errors, 'category') !!}

     </div>

  </div>

  @endif

  @endif



  @if($module->is_description)

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('description', $module->term.' Description', ['class' => 'font-weight-bold']) !!}

        {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'editor1', 'placeholder'=>$module->term.' Description', 'required'=>'required')) !!}

     </div>

  </div>

  @endif

  <?php $total_fields = $module->extra_fields; $arr_sort = array(); ?>

  @if($total_fields>0)
  @for($i=1; $i<= $total_fields; $i++)
  
  @php
  $order_sort = 'extra_field_sort_'.$i;
  $field_col = 'extra_field_col_'.$i;
  $field_title = 'extra_field_title_'.$i;
  $field_name = 'extra_field_'.$i;
  $field_type = 'extra_field_type_'.$i;
  $field_max_length = 'extra_field_max_length_'.$i;
  $field_required = 'extra_field_required_'.$i;
  $field_required_message = 'extra_field_required_message_'.$i;
  $field_show = 'extra_field_show_'.$i;
  $field_attr = 'extra_field_attr_'.$i;

  if($module->$field_required==1){
      $required = 'required';
    }else{
      $required = '';
    }

  
  $arr_sort[$module->$order_sort] = array(
      $field_title,$field_name,$field_type,$field_max_length,$field_required,$field_required_message,$field_show,$field_attr,$required
  );
  @endphp

  
  @endfor
  @endif


  @if(null!==($arr_sort))
  @foreach($arr_sort as $key=>$sort)
  
  @php
  $order_sort = 'extra_field_sort_'.$key;
  $field_col = 'extra_field_col_'.$key;
  $field_title = 'extra_field_title_'.$key;
  $field_name = 'extra_field_'.$key;
  $field_type = 'extra_field_type_'.$key;
  $field_max_length = 'extra_field_max_length_'.$key;
  $field_required = 'extra_field_required_'.$key;
  $field_required_message = 'extra_field_required_message_'.$key;
  $field_show = 'extra_field_show_'.$key;
  $field_attr = 'extra_field_attr_'.$key;

  if($module->$field_required==1){
      $required = 'required';
    }else{
      $required = '';
    }
  @endphp
    @if($module->$field_show)

  <div class="col-lg-{{$module->$field_col}}">

    <div class="form-group">
  <label class="font-weight-bold">Enter {{$module->$field_title}}</label>
    @if($module->$field_type=='select')

      {!! Form::select($field_name, [''=>'Select '.$module->$field_title]+dropdown($module->$field_attr), null, array('class'=>'form-control', 'id'=>$field_name, $required,'oninvalid'=>"this.setCustomValidity('".$module->$field_required_message."')",'oninput'=>"this.setCustomValidity('')")) !!}

    @else

    @php

    $type = null!==($module->$field_type)?$module->$field_type:'text';

    @endphp

    {!! Form::$type($field_name, null, array('class'=>'form-control', 'id'=>$field_name, 'placeholder'=>'Enter '.$module->$field_title, $required,'maxlength' => $module->$field_max_length,'oninvalid'=>"this.setCustomValidity('".$module->$field_required_message."')",'oninput'=>"this.setCustomValidity('')")) !!}

    @endif



    </div>

  </div>  

  

  @endif




  @endforeach
  @endif



  @if($module->is_highlights)

  <div class="col-md-12">

    <div id="dynamic_form">
          <div class="form-group">
            {!! Form::label('is_highlights', $module->term.' Highlights', ['class' => 'font-weight-bold']) !!}
            <div class="row">
              <div class="col-md-9">
                <input type="text" name="highlights" id="highlights"  class="form-control" placeholder="{{$module->term}} Highlights">
              </div>
              <div class="col-md-3">
                <div class="button-group">
                      <a style="font-size: 12px;" href="javascript:void(0)" class="btn btn-primary" id="plus">Add More</a>
                      <a style="font-size: 12px;" href="javascript:void(0)" class="btn btn-danger" id="minus">Remove</a>
                  </div>
              </div>
            </div>
            
          </div>
      </div>

     

  </div>

  @endif

  @if($module->is_image)

    <div class="col-md-12">

      <div class="form-group">

      <div class="sub-title">{{$module->name}} @if($module->multi_images) Images @else Image @endif</div>

      <input type="file" name="image" id="filer_input1">

    </div>

  </div>

  @endif



  @if($module->tags)

  <div class="col-md-12">

     <div class="form-group">

        @php

            if(isset($module_data)){

              $tag_ids = explode(',',$module_data->tag_ids);

        

            }

        @endphp

        {!! Form::label('tag_ids', $module->term.' Tags', ['class' => 'font-weight-bold']) !!}

        {!! Form::select('tag_ids[]', $tags, isset($tag_ids)?$tag_ids:null, array('class'=>'js-example-basic-multiple col-sm-12 select2-hidden-accessible', 'id'=>'tag_ids', 'multiple'=>'multiple')) !!}

        {!! APFrmErrHelp::showErrors($errors, 'tag_ids') !!}

     </div>

  </div>

  @endif



  @if($module->is_seo)

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('meta_title', $module->term.' Meta Title', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('meta_title', null, array('class'=>'form-control', 'id'=>'meta_title', 'placeholder'=>$module->term.' Meta Title')) !!}

     </div>

  </div>

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('meta_keywords', $module->term.' Meta Keywords', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('meta_keywords', null, array('class'=>'form-control', 'id'=>'meta_keywords', 'placeholder'=>$module->term.' Meta Keywords')) !!}

     </div>

  </div>

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('meta_description', $module->term.' Meta Description', ['class' => 'font-weight-bold']) !!}

        {!! Form::textarea('meta_description', null, array('class'=>'form-control', 'id'=>'meta_description', 'placeholder'=>$module->term.' Meta Description')) !!}

     </div>

  </div>

  @endif



</div>

@push('js')

<div class="modal fade" id="altTextModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form id="alt_text_form">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Alt Text</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <input type="hidden" name="img_name" id="img_name">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Alt Title:</label>
            <input type="text" class="form-control" id="alt_title" name="alt_title">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alt Text:</label>
            <textarea class="form-control" id="alt_text" name="alt_text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_changes">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

@include('admin.ckeditor.index')





<script type="text/javascript">

  

  @if($module->multi_images)

  images_limit = 10;

  @endif

   $(document).ready(function() {





    if ($(".form").length > 0) {

            $(".form").validate({

                validateHiddenInputs: true,

                ignore: "",



                rules: {

                    title: {

                        required: true,

                        maxlength: 500

                    },

                    slug: {

                        required: true,

                        maxlength: 500

                    },

                    category: {

                        required: function(element) {
                          return <?php if($module->category==1){echo 'true' ;} ?>
                        },

                    },

                    description: {

                        required: function(element) {
                          return <?php if($module->is_description==1){echo 'true' ;} ?>
                        },

                    },

                    

                },

                messages: {



                    title: {

                        required: "Title is required",

                    },

                    slug: {

                        required: "Slug is required",

                    }, 

                    description: {

                        required: "Description is required",

                    },

                    category: {

                        required: function(element) {
                          return "<?php if($module->category==1){echo 'Category is required' ;} ?>"
                        },

                    },

                    extra_field_1: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_1==1){echo $module->extra_field_required_message_1 ;} ?>"
                        },

                    },

                    extra_field_2: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_2==1){echo $module->extra_field_required_message_2 ;} ?>"
                        },

                    },

                    extra_field_3: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_3==1){echo $module->extra_field_required_message_3 ;} ?>"
                        },

                    },

                    extra_field_4: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_4==1){echo $module->extra_field_required_message_4 ;} ?>"
                        },

                    },
                    extra_field_5: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_5==1){echo $module->extra_field_required_message_5 ;} ?>"
                        },

                    },

                    extra_field_6: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_6==1){echo $module->extra_field_required_message_6 ;} ?>"
                        },

                    },

                    extra_field_7: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_7==1){echo $module->extra_field_required_message_7 ;} ?>"
                        },

                    },

                    extra_field_8: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_8==1){echo $module->extra_field_required_message_8 ;} ?>"
                        },

                    },

                    extra_field_9: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_9==1){echo $module->extra_field_required_message_9 ;} ?>"
                        },

                    },

                    extra_field_10: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_10==1){echo $module->extra_field_required_message_10 ;} ?>"
                        },

                    },

                    extra_field_11: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_11==1){echo $module->extra_field_required_message_11 ;} ?>"
                        },

                    },

                    extra_field_12: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_12==1){echo $module->extra_field_required_message_12 ;} ?>"
                        },

                    },

                    extra_field_13: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_13==1){echo $module->extra_field_required_message_13 ;} ?>"
                        },

                    },

                    extra_field_14: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_14==1){echo $module->extra_field_required_message_14 ;} ?>"
                        },

                    }, 

                    extra_field_15: {

                        required: function(element) {
                          return "<?php if($module->extra_field_required_15==1){echo $module->extra_field_required_message_15 ;} ?>"
                        },

                    },



                },

            })

        }

        

        

    })

   @if($module->id==26)

   <?php 
    if(null!==(old('extra_field_5'))){?>
      show_hide("{{title(old('extra_field_5'))}}");
    <?php } else if(isset($module_data)){?>
      show_hide("{{title($module_data->extra_field_5)}}");
    <?php }
    ?>


   $('#extra_field_5').on('change',function(){
     show_hide($('#extra_field_5 option:selected').text());
   })

   function show_hide(val){
    if(val=='YES'){
      $('#sub_ids_div').show();
    }else{
      $('#sub_ids_div').hide();
    }
   }
   @endif

   function altText(name){
      $.ajax({
            type: "Get",
            url: base_url+"/admin/alt-text",
            data: { name : name},
            success: function (data) {
               var json = $.parseJSON(data);
               $('#img_name').val('');
               $('#alt_title').val('');
               $('#alt_text').val('');
               if(json == null){
                $('#img_name').val(name);
                $('#altTextModalCenter').modal('show');
               }else{
                $('#img_name').val(name);
                $('#alt_title').val(json.alt_title);
                $('#alt_text').val(json.alt_text);
                $('#altTextModalCenter').modal('show');
               }
               
            }
        });
   }


   $('.save_changes').on('click',function(){
      var form= $("#alt_text_form");
      $.ajax({
          type: 'GET',
          url: base_url+"/admin/save-alt-text",
          data: { name : $('#img_name').val(), alt_title:$('#alt_title').val(), alt_text:$('#alt_text').val()},
          success: function (data) {
            if(data=='done'){
              $('#altTextModalCenter').modal('hide');
              function notify(from, align, icon, type, animIn, animOut){
                $.growl({
                    icon: icon,
                    title: ' <strong>Saved Successfully!</strong> ',
                    message: 'Alt Text Saved Successfully',
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 30,
                        y: 30
                    },
                    spacing: 10,
                    z_index: 999999,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    icon_type: 'class',
                    template: '<div data-growl="container" class="alert" role="alert">' +
                    '<button type="button" class="close" data-growl="dismiss">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<span data-growl="icon"></span>' +
                    '<span data-growl="title"></span>' +
                    '<span data-growl="message"></span>' +
                    '<a href="#" data-growl="url"></a>' +
                    '</div>'
                });
            };

    

                  var nFrom = 'top';
                  var nAlign = 'right';
                  var nIcons = $(this).attr('data-icon');
                  var nType = 'success';
                  var nAnimIn = 'animated flipInY';
                  var nAnimOut = 'animated flipOutY';

                  notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
              }
            }
          })
   })

</script>



@endpush