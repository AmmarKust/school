@extends('layouts.app')
@push('css')
<style type="text/css">
  .card {
    position: relative;
    margin-bottom: 1.5rem;
    width: 100%;
}
.power-ribbon-top-left {
    top: -6px;
    left: -9px;
}
.power-ribbon {
    width: 56px;
    height: 56px;
    overflow: hidden;
    position: absolute;
    z-index: 10;
}
.power-ribbon-top-left span {
    right: -5px;
    top: 1px;
    transform: rotate(
-45deg
);
}
.power-ribbon span {
    position: absolute;
    display: block;
    width: 82px;
    padding: 8px 0;
    color: #fff;
    font: 500 16px/1 Lato, sans-serif;
    text-shadow: 0 1px 1px rgb(0 0 0 / 20%);
    text-transform: capitalize;
    text-align: center;
}
.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 50%;
    font-weight: 300;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 3px;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 80%;
    line-height: 1.84615385;
    border-radius: 3px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.mr-5 a{
  font-size: 85%;
}
</style>
@endpush
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{__('Jobs')}}</h1>
  </div>
</div>
<!-- Inner Heading End -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    @if(null!==($jobs))
<section class="sptb bg-white blog-wrap">
            <div class="container closed" id="container1" style="overflow: hidden; transition: all 0.5s ease 0s;">               <div class="row">
                @foreach($jobs as $job)
                  <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                     <div class="card overflow-hidden">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="card-body">
                           <div class="item-det row">
                              <div class="col-md-9">
                                 <a href="{{route('jobs.detail',$job->slug)}}" class="text-dark">
                                    <h3 class="mb-2 fs-16 font-weight-semibold"><a href="">{{$job->title}}</a> <span class="badge badge-danger fs-12">{{title($job->extra_field_1)}}</span></h3>
                                 </a>
                                 <div class="">
                                    <ul class="mb-0 d-flex">
                                       <li class="mr-5"><a href="#" class="icons"><i class="fa fa-briefcase text-muted mr-1"></i> {{title($job->extra_field_2)}}</a></li>
                                       <li class="mr-5"><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> {{$job->extra_field_8}}</a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-md-3 col-auto">
                                 <div class="icons mt-3 mt-sm-0 pb-0"> <a href="{{route('jobs.detail',$job->slug)}}" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     
                     
                     
                  </div>
                  @endforeach
                  

               </div>
            </div>
            
         </section>
         @endif
    
  </div>
</div>




 

@endsection
