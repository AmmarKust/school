@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{__('Teachers')}}</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Teachers Start -->
    @if(null!==($teachers))
    <div class="innerteacher-wrap">
      <div class="row">
         @foreach($teachers as $teacher)
         <div class="col-lg-3 col-md-6 ">
          <div class="single-teachers">
            <div class="teacherImg"> <img src="{{asset('images/thumb/'.$teacher->image)}}" alt="Image">
              <ul class="social-icons list-inline">
                <!-- social-icons -->
                <li class="social-facebook"> <a href="{{$teacher->extra_field_10}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                <li class="social-twitter"> <a href="{{$teacher->extra_field_11}}"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                <li class="social-linkedin"> <a href="{{$teacher->extra_field_12}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                <li class="social-googleplus"> <a href="{{$teacher->extra_field_13}}"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
              </ul>
            </div>
            <div class="teachers-content">
              <h3><a href="{{route('teachers.detail',$teacher->slug)}}">{{$teacher->title}}</a></h3>
              <div class="designation">{{$teacher->extra_field_1}}</div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="pagiWrap">
            <div class="row">
               <div class="col-md-5">
                  <div class="showreslt">
                     {{__('Showing Pages')}} : {{ $teachers->firstItem() }} - {{ $teachers->lastItem() }} {{__('Total')}} {{ $teachers->total() }}
                  </div>
               </div>
               <div class="col-md-7 text-right">
                  @if(isset($teachers) && count($teachers))
                  {{ $teachers->appends(request()->query())->links() }}
                  @endif
               </div>
            </div>
         </div>
    </div>
    @endif
    <!-- Teachers End --> 
    
  </div>
</div>

<!-- Inner Content Start --> 
@endsection