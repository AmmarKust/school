@extends('layouts.app')
@push('css')
<script type="text/javascript">
  var thumbnail_height = "250";
  var thumbnail_width = "226";
  var images_limit = 1;
</script>

@endpush
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>{{__('Enroll Today')}}</h1>
   </div>
</div>
<!-- Inner Heading End --> 
<section class="sptb">
   <!--  container-custome -->
   <div class="container">
      <div class="row">
         @include('student.includes.sidebar')
         <div class="col-xl-9 col-lg-12 col-md-12">
            <div class="card mb-0">
               <div class="card-header">
                  <h3 class="card-title">Enroll Today</h3>
               </div>
               <div class="card-body">

                  <div class="card-body">
                    <?php 
                      if(Auth::guard('student')->user()->status=='pending' || Auth::guard('student')->user()->status=='approved'){
                        $disabled = 'disabled="disabled"';
                      }else{
                        $disabled = '';
                      }
                     ?>
                     {!! Form::model(Auth::guard('student')->user(), array('method' => 'post', 'route' => array('student.enroll.update'), 'class' => 'form', 'files'=>true)) !!}
                     {!! Form::hidden('attached_file', null, array('id'=>'attached_file')) !!}
                     
                     <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <div class="form-group"> 
                            {!! Form::label('class_id', 'Select Class', ['class' => 'form-label']) !!} 
                            {!! Form::select('class_id', [''=>'Select Class']+dataArray(2), null, array('class'=>'form-control select2', 'id'=>'class_id', 'required'=>'required',$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'class_id') !!}
                          </div>
                      </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('first_name', 'First Name', ['class' => 'form-label']) !!} 
                            {!! Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name', 'placeholder'=>'First Name', 'required'=>'required',$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'first_name') !!}</div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('last_name', 'Last Name', ['class' => 'form-label']) !!} 
                            {!! Form::text('last_name', null, array('class'=>'form-control', 'id'=>'last_name', 'placeholder'=>'Last Name', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'last_name') !!}</div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                           <div class="form-group">
                            {!! Form::label('name', 'Full Name', ['class' => 'form-label']) !!} 
                            {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Full Name', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'name') !!}</div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('email', 'Email address', ['class' => 'form-label']) !!} 
                            {!! Form::email('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email address', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'email') !!}</div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('phone', 'Phone Number', ['class' => 'form-label']) !!} 
                            {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Phone Number', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'phone') !!}</div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                           <div class="form-group">
                            {!! Form::label('dob', 'Date of Birth', ['class' => 'form-label']) !!} 
                            {!! Form::date('dob', null, array('class'=>'form-control', 'id'=>'dob', 'placeholder'=>'Date of Birth', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'dob') !!}</div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                           <div class="form-group">
                            {!! Form::label('father_name', 'Father Name', ['class' => 'form-label']) !!} 
                            {!! Form::text('father_name', null, array('class'=>'form-control', 'id'=>'father_name', 'placeholder'=>'Father Name', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'father_name') !!}</div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('father_contact', 'Father Contact', ['class' => 'form-label']) !!} 
                            {!! Form::text('father_contact', null, array('class'=>'form-control', 'id'=>'father_contact', 'placeholder'=>'Father Contact', 'required'=>'required', $disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'father_contact') !!}</div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('father_cnic', 'Father CNIC', ['class' => 'form-label']) !!} 
                            {!! Form::text('father_cnic', null, array('class'=>'form-control', 'id'=>'father_cnic', 'placeholder'=>'Father CNIC', 'required'=>'required', $disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'father_cnic') !!}</div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            {!! Form::label('country', 'Select Country', ['class' => 'form-label']) !!} 
                            {!! Form::select('country', [''=>'Select Country']+dropdown(11), null, array('class'=>'form-control select2', 'id'=>'country', 'required'=>'required', $disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'country') !!}
                             </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            {!! Form::label('state', 'Select State', ['class' => 'form-label']) !!} 
                            <span id="dd-states">
                              {!! Form::select('state', [''=>'Select State'], null, array('class'=>'form-control select2', 'id'=>'state', 'required'=>'required', $disabled)) !!}
                            </span>
                            
                            {!! APFrmErrHelp::showErrors($errors, 'state') !!}
                             </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            {!! Form::label('city', 'Select City', ['class' => 'form-label']) !!} 
                            <span id="dd-cities">
                            {!! Form::select('city', [''=>'Select City'], null, array('class'=>'form-control select2', 'id'=>'city', 'required'=>'required', $disabled)) !!}
                            </span>
                            {!! APFrmErrHelp::showErrors($errors, 'city') !!}
                             </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            {!! Form::label('current_address', 'Current Address', ['class' => 'form-label']) !!} 
                            {!! Form::text('current_address', null, array('class'=>'form-control', 'id'=>'current_address', 'placeholder'=>'Current Address', 'required'=>'required', $disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'current_address') !!}
                             </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            {!! Form::label('permanent_address', 'Permanent Address', ['class' => 'form-label']) !!} 
                            {!! Form::text('permanent_address', null, array('class'=>'form-control', 'id'=>'permanent_address', 'placeholder'=>'Permanent Address', 'required'=>'required', $disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'permanent_address') !!}
                             </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            {!! Form::label('about_me', 'About Me', ['class' => 'form-label']) !!} 
                            {!! Form::textarea('about_me', null, array('class'=>'form-control', 'id'=>'about_me', 'placeholder'=>'Enter About your description', 'required'=>'required', $disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'about_me') !!}
                             </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                              {!! Form::label('image', 'Upload Image', ['class' => 'form-label']) !!}
                            <input type="file" name="image" {{$disabled}} id="filer_input1">
                          </div>
                        </div>

                        <div class="col-md-12">
                          {!! Form::label('button', 'Please make sure that you have enter correct data before update. You will not be able to update again.', ['class' => 'form-label']) !!} 
                            <button {{$disabled}} style="width: 100%" type="submit" class="btn btn-primary">{{__('Update')}}</button>
                        </div>
                     </div>
                   </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@push('js')
<script type="text/javascript">
  <?php if(null!==(Auth::guard('student')->user()->attached_file)){ 
    $realfile = public_path('images/'.Auth::guard('student')->user()->attached_file);
  ?>
    var file_size = "{{filesize($realfile)}}";
  <?php } ?>
</script>
<script src="{{asset('admin/assets/pages/filer/jquery.profiles.init.js')}}" type="text/javascript"></script>
  @if(session()->has('message.added'))
  <script type="text/javascript">      
    var message = "{!! session('message.content') !!}";
  </script> 
  <script src="{{asset('js/message.js')}}" type="text/javascript"></script>
  @endif
@include('includes.cityStateCountry')
@endpush