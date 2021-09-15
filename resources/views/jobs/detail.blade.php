@extends('layouts.app')
@push('css')
<style type="text/css">
  .ribbon-top-right {
    top: -10px;
    right: -10px;
}
.ribbon {
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: absolute;
    z-index: 10;
}
.profile-pic .d-md-flex {
    text-align: left;
}
.w-20 {
    width: 20% !important;
}
ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}
.ribbon-top-right span {
    left: -8px;
    top: 30px;
    transform: rotate(
45deg
);
}
.ribbon span {
    position: absolute;
    display: block;
    width: 225px;
    padding: 8px 0;
    box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
    color: #fff;
    text-shadow: 0 1px 1px rgb(0 0 0 / 20%);
    text-transform: capitalize;
    text-align: center;
}
.bg-light-50 .icons a{
   width: 100%;
}
</style>
@endpush
@section('content')
<!-- Inner Heading Start -->
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>{{$job->title}}</h1>
   </div>
</div>
<!-- About Start -->

<div class="about-wrap " id="about">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <!--Jobs Description--> 
            <div class="card overflow-hidden">
               <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Urgent</span></div>
               <div class="card-body h-100">
                  <div class="row">
                     <div class="col">
                        <div class="profile-pic mb-0">
                           <div class="d-md-flex">
                              <img src="{{asset('images/'.widget(1)->extra_image_1)}}" class="w-20 h-20" alt="user"> 
                              <div class="ml-4">
                                 <a href="userprofile.html" class="text-dark">
                                    <h4 class="mt-3 mb-1 fs-20 font-weight-bold">{{$job->title}}</h4>
                                 </a>
                                 <div class="">
                                    <ul class="mb-0 d-flex">
                                       <li class="mr-3"><a href="#" class="icons"><i class="fa fa-briefcase text-muted mr-1"></i>{{title($job->extra_field_1)}}</a></li>
                                       <li class="mr-3"><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> {{$job->extra_field_8}}</a></li>
                                       <li class="mr-3"><a href="#" class="icons"><i class="fa fa-calendar text-muted mr-1"></i> {{$job->created_at->diffForHumans()}}</a></li>
                                       
                                    </ul>
                                    
                                    
                                 </div>
                                 <div class="icons"> <a href="{{route('seeker.apply-now',$job->id)}}" class="btn btn-info icons" ><i class="fa fa-check mr-1"></i> Apply</a> <a href="{{url('/contact-us')}}" class="btn btn-primary icons" ><i class="si si-phone mr-1"></i> Contact Now</a> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-body border-top">
                  <h4 class="mb-4 card-title">Job Description</h4>
                  <div class="mb-4">
                     <p>{!!$job->description!!}</p>
                  </div>
                  <h4 class="mb-4 card-title">Job Details</h4>
                  <div class="row">
                     <div class="col-xl-12 col-md-12">
                        <div class="table-responsive">
                           <table class="table row table-borderless w-100 m-0 text-nowrap ">
                              <tbody class="col-lg-12 col-xl-6 p-0">
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Job Type</span></td>
                                    <td><span>:</span></td>
                                    <td><span> {!!title($job->extra_field_1)!!}</span></td>
                                 </tr>
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Role</span></td>
                                    <td><span>:</span></td>
                                    <td><span> {!!title($job->extra_field_2)!!}</span></td>
                                 </tr>
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Min Salary</span></td>
                                    <td><span>:</span></td>
                                    <td><span> ${!!$job->extra_field_6!!}</span></td>
                                 </tr>
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Max Salary</span></td>
                                    <td><span>:</span></td>
                                    <td><span> ${!!$job->extra_field_7!!}</span></td>
                                 </tr>
                                 
                              </tbody>
                              <tbody class="col-lg-12 col-xl-6 p-0">
                                 
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Languages</span></td>
                                    <td><span>:</span></td>
                                    <td><span> {!!$job->extra_field_5!!}</span></td>
                                 </tr>
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Locality</span></td>
                                    <td><span>:</span></td>
                                    <td><span> {!!$job->extra_field_8!!}</span></td>
                                 </tr>
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Eligibility</span></td>
                                    <td><span>:</span></td>
                                    <td><span> {!!title($job->extra_field_3)!!}</span></td>
                                 </tr>
                                 <tr>
                                    <td class="w-150 px-0"><span class="font-weight-semibold">Min Exp</span></td>
                                    <td><span>:</span></td>
                                    <td><span>{!!title($job->extra_field_4)!!}</span></td>
                                 </tr>
                                 
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="list-id">
                     <div class="row">
                        <div class="col"> <a class="mb-0">Job ID : #{{time()}}</a> </div>
                        <div class="col col-auto"> Posted By <a class="mb-0 font-weight-bold">Company</a> / {{date('jS F Y', strtotime($job->created_at))}} </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer bg-light-50">
                  <div class="icons"> <a href="{{route('seeker.apply-now',$job->id)}}" class="btn btn-success icons mt-1 mb-1"><i class="fa fa-check mr-1"></i> Apply</a></div>
               </div>
            </div>
            <!--Jobs Description--> 
         </div>
      </div>
   </div>
</div>
<!-- About End --> 
@endsection