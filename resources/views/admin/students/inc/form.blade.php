@push('css')
<script type="text/javascript">
  var thumbnail_height = "250";
  var thumbnail_width = "226";
  var images_limit = 1;
</script>

@endpush
  {!! Form::hidden('attached_file', null, array('id'=>'attached_file')) !!}
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="form-group"> 
        {!! Form::label('class_id', 'Select Class', ['class' => 'form-label']) !!} 
        {!! Form::select('class_id', [''=>'Select Class']+dataArray(2), null, array('class'=>'form-control select2', 'id'=>'class_id', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'class_id') !!}
      </div>
  </div>
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('first_name', 'First Name', ['class' => 'form-label']) !!} 
        {!! Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name', 'placeholder'=>'First Name', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'first_name') !!}</div>
    </div>
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('last_name', 'Last Name', ['class' => 'form-label']) !!} 
        {!! Form::text('last_name', null, array('class'=>'form-control', 'id'=>'last_name', 'placeholder'=>'Last Name', 'required'=>'required' )) !!}
        {!! APFrmErrHelp::showErrors($errors, 'last_name') !!}</div>
    </div>
    <div class="col-sm-12 col-md-12">
       <div class="form-group">
        {!! Form::label('name', 'Full Name', ['class' => 'form-label']) !!} 
        {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Full Name', 'required'=>'required' )) !!}
        {!! APFrmErrHelp::showErrors($errors, 'name') !!}</div>
    </div>
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('email', 'Email address', ['class' => 'form-label']) !!} 
        {!! Form::email('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email address', 'required'=>'required' )) !!}
        {!! APFrmErrHelp::showErrors($errors, 'email') !!}</div>
    </div>
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('phone', 'Phone Number', ['class' => 'form-label']) !!} 
        {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Phone Number', 'required'=>'required' )) !!}
        {!! APFrmErrHelp::showErrors($errors, 'phone') !!}</div>
    </div>
    <div class="col-sm-12 col-md-12">
       <div class="form-group">
        {!! Form::label('dob', 'Date of Birth', ['class' => 'form-label']) !!} 
        {!! Form::date('dob', null, array('class'=>'form-control', 'id'=>'dob', 'placeholder'=>'Date of Birth', 'required'=>'required' )) !!}
        {!! APFrmErrHelp::showErrors($errors, 'dob') !!}</div>
    </div>
    <div class="col-sm-12 col-md-12">
       <div class="form-group">
        {!! Form::label('father_name', 'Father Name', ['class' => 'form-label']) !!} 
        {!! Form::text('father_name', null, array('class'=>'form-control', 'id'=>'father_name', 'placeholder'=>'Father Name', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'father_name') !!}</div>
    </div>
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('father_contact', 'Father Contact', ['class' => 'form-label']) !!} 
        {!! Form::text('father_contact', null, array('class'=>'form-control', 'id'=>'father_contact', 'placeholder'=>'Father Contact', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'father_contact') !!}</div>
    </div>
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('father_cnic', 'Father CNIC', ['class' => 'form-label']) !!} 
        {!! Form::text('father_cnic', null, array('class'=>'form-control', 'id'=>'father_cnic', 'placeholder'=>'Father CNIC', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'father_cnic') !!}</div>
    </div>
    
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('country', 'Select Country', ['class' => 'form-label']) !!} 
        {!! Form::select('country', [''=>'Select Country']+dropdown(11), null, array('class'=>'form-control select2', 'id'=>'country', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'country') !!}
         </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('state', 'Select State', ['class' => 'form-label']) !!} 
        <span id="dd-states">
          {!! Form::select('state', [''=>'Select State'], null, array('class'=>'form-control select2', 'id'=>'state', 'required'=>'required')) !!}
        </span>
        
        {!! APFrmErrHelp::showErrors($errors, 'state') !!}
         </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('city', 'Select City', ['class' => 'form-label']) !!} 
        <span id="dd-cities">
        {!! Form::select('city', [''=>'Select City'], null, array('class'=>'form-control select2', 'id'=>'city', 'required'=>'required')) !!}
        </span>
        {!! APFrmErrHelp::showErrors($errors, 'city') !!}
         </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        {!! Form::label('current_address', 'Current Address', ['class' => 'form-label']) !!} 
        {!! Form::text('current_address', null, array('class'=>'form-control', 'id'=>'current_address', 'placeholder'=>'Current Address', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'current_address') !!}
         </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        {!! Form::label('permanent_address', 'Permanent Address', ['class' => 'form-label']) !!} 
        {!! Form::text('permanent_address', null, array('class'=>'form-control', 'id'=>'permanent_address', 'placeholder'=>'Permanent Address', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'permanent_address') !!}
         </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        {!! Form::label('about_me', 'About Me', ['class' => 'form-label']) !!} 
        {!! Form::textarea('about_me', null, array('class'=>'form-control', 'id'=>'about_me', 'placeholder'=>'Enter About your description', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'about_me') !!}
         </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
          {!! Form::label('image', 'Upload Image', ['class' => 'form-label']) !!}
          <input type="file" name="image" id="filer_input1">
      </div>
    </div>

 </div>
@push('js')


<script type="text/javascript">
  <?php if(isset($student) && null!==($student->attached_file)){ $realfile = public_path('images/'.$student->attached_file);?>

    var file_size = "{{filesize($realfile)}}";
  <?php } ?>
</script>
<script src="{{asset('admin/assets/pages/filer/jquery.profiles.init.js')}}" type="text/javascript"></script>
<script type="text/javascript">

  $('.select2').select2(); 
  $('#country').on('change',function(){
        states(0);
  })
  states(<?php echo old('state', (isset($student)) ? $student->state : 0); ?>);



      function states(id){
        var country = $('#country').val();
        $.ajax({
          url: "{{route('filter-states')}}?country_id="+country+"&state="+id,
          method: "GET",
        }).done(function(data) {
          $('#dd-states').html(data);
          $('#state').select2(); 
        });
      }
      $(document).on('change','#state',function(){
        cities(0);
      })

      
      setTimeout(
        function() 
        {
          cities(<?php echo old('city', (isset($student)) ? $student->city : 0); ?>);
        }, 2000);
      function cities(id){
        var state = $('form').children('div').find('#state').val();
        $.ajax({
          url: "{{route('filter-cities')}}?state_id="+state+"&city="+id,
          method: "GET",
        }).done(function(data) {
          $('#dd-cities').html(data);
          $('#city').select2();
        });
      }
</script>
    <style>
      .select2-selection{
        height: calc(1.5em + .75rem + 2px) !important;
        border: 1px solid #ced4da !important;
      }
      .select2-selection__rendered{
        line-height: calc(1.5em + .75rem + 2px) !important;
      }
      .select2-container .select2-selection--single .select2-selection__rendered{
          padding-right: calc(1.5em + .75rem + 2px) !important; 
      }
      .select2-selection__arrow{
          height: calc(1.5em + .75rem + 2px) !important;
      }
      .select2-container--default .select2-selection--single .select2-selection__rendered {
        background-color: #eeee !important;
        color: #464a4c !important;
        padding: 0px 8px 0px 8px !important;
      }
     
    </style>
@endpush