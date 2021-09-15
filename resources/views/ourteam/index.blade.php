@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{__('OurTeam')}}</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Teachers Start -->
    @if(null!==($ourteams))
    <div class="innerteacher-wrap">
      <div class="row">
         @foreach($ourteams as $ourteam)
         <div class="col-lg-3 col-md-6 ">
          <div class="single-teachers">
            <div class="teacherImg"> <img src="{{asset('images/thumb/'.$ourteam->image)}}" alt="Image">
              <ul class="social-icons list-inline">
                <!-- social-icons -->
                <li class="social-facebook"> <a href="{{$teacher->extra_field_10}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                <li class="social-twitter"> <a href="{{$teacher->extra_field_11}}"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                <li class="social-linkedin"> <a href="{{$teacher->extra_field_12}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                <li class="social-googleplus"> <a href="{{$teacher->extra_field_13}}"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
              </ul>
            </div>
            <div class="teachers-content">
              <h3><a href="{{route('teachers.detail',$teacher->slug)}}">{{$ourteam->name}}</a></h3>
              <div class="designation">{{$ourteam->extra_field_1}}</div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
     
    @endif
    <!-- Teachers End --> 
    
  </div>
</div>

<!-- Inner Content Start --> 
@endsection