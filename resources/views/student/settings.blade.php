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
      <h1>{{__('Change Password')}}</h1>
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
                  <h3 class="card-title">{{__('Change Password')}}</h3>
               </div>
               <div class="card-body">

                  <div class="card-body">
                    <?php 
                        $disabled = '';
                     ?>
                     {!! Form::model(Auth::guard('student')->user(), array('method' => 'post', 'route' => array('student.changePassword'), 'class' => 'form', 'files'=>true)) !!}
                     
                     <div class="row">
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('current_password', 'Current Password', ['class' => 'form-label']) !!} 
                            {!! Form::password('current_password', array('class'=>'form-control', 'id'=>'current_password', 'placeholder'=>'Current Password', 'required'=>'required',$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'current_password') !!}</div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                            {!! Form::label('password', 'New Password', ['class' => 'form-label']) !!} 
                            {!! Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>'New Password', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'password') !!}</div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                           <div class="form-group">
                            {!! Form::label('password_confirmation', 'Confirm New Password', ['class' => 'form-label']) !!} 
                            {!! Form::password('password_confirmation', array('class'=>'form-control', 'id'=>'password_confirmation', 'placeholder'=>'Confirm New Password', 'required'=>'required' ,$disabled)) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'password_confirmation') !!}</div>
                        </div>

                        <div class="col-md-12">
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


@if(session()->has('message.added'))
  <script type="text/javascript">      
    var message = "{!! session('message.content') !!}";
  </script> 
  <script src="{{asset('js/message.js')}}" type="text/javascript"></script>
@endif
@endpush