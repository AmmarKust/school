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
                <strong>Task Done!</strong> {!! session('message.content') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif


               <div class="page-header-title">
                  <h4>{{__('Admins List')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>                     
                     <li class="breadcrumb-item">{{__('Admins List')}}
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
                           <h5>{{__('Admins List')}}</h5>
                           
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block table-border-style">
                           <div class="table-responsive">
                              <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>{{__('Admin Name')}}</th>
                                    <th>{{__('Admin Email')}}</th>
                                    <th>{{__('Action')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if($admins)
                                 @foreach($admins as $admin)
                                 <tr>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>
                                       <a class="btn btn-success" href="{{route('admin.admin.edit',$admin->id)}}" role="button">Edit</a>
                                       <a class="btn btn-danger delete" href="{{route('admin.admin.delete',$admin->id)}}" role="button">Delete</a>
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
