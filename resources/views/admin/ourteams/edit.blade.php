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
                  <h4>{{__('OurTeam Inputs')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="index-2.html">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{__('OurTeam Components')}}</a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{__('OurTeam Components')}}</a>
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
                           <h5>{{__('OurTeam Inputs')}}</h5>
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                           <h4 class="sub-title">{{__('OurTeam Inputs')}}</h4>
                           {!! Form::model($ourteam, array('method' => 'post', 'route' => array('admin.ourteam.update'), 'class' => 'form', 'files'=>true)) !!}
                          {!! Form::hidden('id', $ourteam->id) !!}
                           @include('admin.ourteams.inc.form')
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary">{{__('Update')}}</button></div>
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
