@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>{{$teacher->title}}</h1>
   </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Teachers Start -->
    <div class="classDetails-wrap">
      <div class="row">
        <div class="col-lg-4">
          <div class="teacher_left">
            <div class="teacher_delImg"> <img src="{{asset('images/'.$teacher->image)}}" alt="Image"></div>
          </div>
          <ul class="social-default ">
            <li class="social-facebook"> <a href="{{$teacher->extra_field_10}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                <li class="social-twitter"> <a href="{{$teacher->extra_field_11}}"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                <li class="social-linkedin"> <a href="{{$teacher->extra_field_12}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                <li class="social-googleplus"> <a href="{{$teacher->extra_field_13}}"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
          </ul>
          <ul class="teacher-address ">
            <li><span><i class="fas fa-home" aria-hidden="true"></i></span>{{$teacher->extra_field_6}}</li>
            <li><span><i class="fas fa-phone-alt" aria-hidden="true"></i></span>{{$teacher->extra_field_7}}</li>
            <li><span><i class="fas fa-envelope" aria-hidden="true"></i></span>{{$teacher->extra_field_8}}</li>
            <li><span><i class="fas fa-globe" aria-hidden="true"></i></span>{{$teacher->extra_field_9}}</li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="teacher_del ">
            <h3>{{$teacher->title}}</h3>
            <div class="designation">{{$teacher->extra_field_1}}</div>
            {!!$teacher->description!!}
            <div class="progress-skill">
              <h3>{{__('Personal Skills')}}</h3>
              <div class="progress-wrap" data-animation-section="progress-line">
                <p class="progress-head">{{__('Teaching')}} <span>{{$teacher->extra_field_2}}%</span></p>
                <div class="progress-line-wrap">
                  <div class="progress-line color-1" data-animation-block="is-vision" data-value="{{$teacher->extra_field_2}}" style="width: {{$teacher->extra_field_2}}%;"></div>
                </div>
              </div>
              <div class="progress-wrap" data-animation-section="progress-line">
                <p class="progress-head">{{__('Speaking')}} <span>{{$teacher->extra_field_3}}%</span></p>
                <div class="progress-line-wrap">
                  <div class="progress-line color-2" data-animation-block="is-vision" data-value="{{$teacher->extra_field_3}}" style="width: {{$teacher->extra_field_3}}%;"></div>
                </div>
              </div>
              <div class="progress-wrap" data-animation-section="progress-line">
                <p class="progress-head">{{__('Family Support')}} <span>{{$teacher->extra_field_4}}%</span></p>
                <div class="progress-line-wrap">
                  <div class="progress-line color-3" data-animation-block="is-vision" data-value="{{$teacher->extra_field_4}}" style="width: {{$teacher->extra_field_4}}%;"></div>
                </div>
              </div>
              <div class="progress-wrap" data-animation-section="progress-line">
                <p class="progress-head">{{__("Children's Well-being")}} <span>{{$teacher->extra_field_5}}%</span></p>
                <div class="progress-line-wrap">
                  <div class="progress-line color-4" data-animation-block="is-vision" data-value="{{$teacher->extra_field_5}}" style="width: {{$teacher->extra_field_5}}%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Teachers End --> 
    
  </div>
</div>




<!-- Inner Content Start --> 
<!-- Inner Content Start --> 
@endsection