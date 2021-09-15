@extends('admin.layouts.app')
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <div class="page-header-title">
                  <h4>{{__('News Letter Inputs')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item">{{__('News Letter')}}
                     </li>
                    
                  </ul>
               </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
               <div class="row">
                  <div class="col-sm-12">
                     <!-- Basic Form Inputs card start -->
                     <div class="card">
                        <div class="card-block">
                           <h4 class="sub-title">{{__('News Letter')}}</h4>
                           {!! Form::model($module_data, array('method' => 'post', 'route' => array('admin.tags.store'), 'class' => 'form', 'files'=>true)) !!}
                           <div class="row">
                      <div class="col-md-12">
                         <div class="form-group">
                            {!! Form::label('title', 'News Letter Title', ['class' => 'font-weight-bold']) !!}
                            {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>'News Letter Title')) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'title') !!}
                         </div>
                      </div>
                      <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('description', 'Description', ['class' => 'font-weight-bold']) !!}

        {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'editor1', 'placeholder'=>' Description', 'required'=>'required')) !!}

     </div>

  </div>
                    </div>
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary">{{__('Send')}}</button></div>
                           </div>
                           
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
@include('admin.ckeditor.index')
@endpush
