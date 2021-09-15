@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>{{__('Dashboard')}}</h1>
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
                  <h3 class="card-title">{{__('MY DASHBOARD')}}</h3>
               </div>
               <div class="card-body">
                  <ul class="row dashnav">
                     <li class="col-lg-3 col-md-4 col-6"> <a href="" class="waves-effect waves-light"><i class="fas fa-tachometer-alt"></i><span> {{__('Dashboard')}} </span></a> </li>
                     <li class="col-lg-3 col-md-4 col-6"> <a href="{{route('student.enroll')}}" class="waves-effect waves-light"><i class="fab fa-etsy"></i><span>{{__('Enroll Today')}}</span></a> </li>
                     <li class="col-lg-3 col-md-4 col-6"> <a href="" class="waves-effect waves-light"><i class="fas fa-cogs"></i><span> {{__('Settings')}} </span></a> </li>
                     <li class="col-lg-3 col-md-4 col-6">
                        <a href="{{ route('student.logout') }}" class="waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i><span>{{__('Logout')}}</span></a> 
                        <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </li>
                  </ul>
                  @if(Auth::guard('student')->user()->class_id)
                  <div class="ads-tabs">
                     <div class="tab-content">
                        <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>{{__('NAME')}}</th>
                                    <th>{{__('CLASS')}}</th>
                                    <th>{{__('FEE')}}</th>
                                    <th>{{__('STATUS')}}</th>
                                    <th>{{__('ACTION')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    @php
                                    $class = App\Models\ModulesData::findorFail(Auth::guard('student')->user()->class_id);
                                    @endphp
                                    <td>{{Auth::guard('student')->user()->name}}</td>
                                    <td>{{title(Auth::guard('student')->user()->class_id)}}</td>
                                    <td>{{$class->extra_field_6}}</td>
                                    <td><span class="badge badge-warning">{{ucfirst(Auth::guard('student')->user()->status)}}</span></td>
                                    <td><a href="{{route('classes.detail',$class->slug)}}" class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection