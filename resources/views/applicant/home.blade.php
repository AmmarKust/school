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
         @include('applicant.includes.sidebar')
         <div class="col-xl-9 col-lg-12 col-md-12">
            <div class="card mb-0">
               <div class="card-header">
                  <h3 class="card-title">{{__('MY DASHBOARD')}}</h3>
               </div>
               <div class="card-body">
                  <ul class="row dashnav">
                     <li class="col-lg-3 col-md-4 col-6"> <a href="" class="waves-effect waves-light"><i class="fas fa-tachometer-alt"></i><span> {{__('Dashboard')}} </span></a> </li>
                     <li class="col-lg-3 col-md-4 col-6"> <a href="{{route('seeker.update')}}" class="waves-effect waves-light"><i class="fab fa-etsy"></i><span>{{__('Applicant Profile')}}</span></a> </li>
                     <li class="col-lg-3 col-md-4 col-6"> <a href="" class="waves-effect waves-light"><i class="fas fa-cogs"></i><span> {{__('Settings')}} </span></a> </li>
                     <li class="col-lg-3 col-md-4 col-6">
                        <a href="{{ route('applicant.logout') }}" class="waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i><span>{{__('Logout')}}</span></a> 
                        <form id="logout-form" action="{{ route('applicant.logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection