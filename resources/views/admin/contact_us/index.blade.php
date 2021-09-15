@extends('admin.layouts.app')

@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
              @if(session()->has('message.added'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{__('Task Done')}}!</strong> {!! session('message.content') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
               <div class="page-header-title">
                  <h4>{{__('Messages List')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>                     
                     <li class="breadcrumb-item">{{__('Messages List')}}
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
                        <div class="card-header">
                           <h5>{{__('Messages List')}}</h5>
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive">
                              <table id="fix-header" class="table table-striped table-bordered nowrap dataTable">
                              <thead>
                                 <tr>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Email')}}</th>
                                    <th>{{__('Dated')}}</th>
                                    <th>{{__('Action')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if(null!==($messages))
                                 @foreach($messages as $data)
                                 <tr>
                                    <td>{{$data->first_name}} {{$data->last_name}}</td>

                                    <td>{{$data->email_address}}</td>
                                    
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)}}</td>
                                    <td>
                                      <a href="{{route('admin.contact-us-detail',[$data->id])}}" class="tabledit-edit-button btn btn-primary waves-effect waves-light"><span class="icofont icofont-eye-alt"></span>&nbsp {{__('View Detail')}}</a>
                                      
                                      
                                    </td>
                                 </tr>
                                 @endforeach
                                 @endif
                              </tbody>
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
