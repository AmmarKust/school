@push('css')
<script type="text/javascript">
  var thumbnail_height = "250";
  var thumbnail_width = "226";
  var images_limit = 1;
</script>

@endpush
  {!! Form::hidden('attached_file', null, array('id'=>'attached_file')) !!}
  <div class="row">
    
  
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!} 
        {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Name', 'required'=>'required')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'name') !!}</div>
    </div>
   
    
    <div class="col-sm-6 col-md-6">
       <div class="form-group">
        {!! Form::label('designation', 'Designation', ['class' => 'form-label']) !!} 
        {!! Form::text('designation', null, array('class'=>'form-control', 'id'=>'designation', 'placeholder'=>'Designation', 'required'=>'required' )) !!}
        {!! APFrmErrHelp::showErrors($errors, 'designation') !!}</div>
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
  <?php if(isset($ourteam) && null!==($ourteam->attached_file)){ $realfile = public_path('images/'.$ourteam->attached_file);?>

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