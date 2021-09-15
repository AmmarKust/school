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
<div class="tp-banner-container">
  <div class="tp-banner">
    <ul>
      @if(null!==(module(1))) 
      @foreach(module(1) as $slider) 
      <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="{{asset('images/'.$slider->image)}}">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> {{$slider->title}} </span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> {!! $slider->description!!}</div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="{{route('student.enroll')}}"><i class="fas fa-edit"></i> {{$slider->extra_field_1}}</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="{{url('/contact-us')}}"><i class="far fa-calendar-alt"></i> {{$slider->extra_field_3}}</a> </div>
      </li>
      @endforeach
      @endif
      
    </ul>
  </div>
</div>


<div class="our-course-categories-two ">
  <div class="container">
    <div class="categories_wrap">
      <ul class="row unorderList">
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(2)->slug)}}#widget_2"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(2)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(2)->extra_field_1 }}</h4>
                <p>{!! widget(2)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(3)->slug)}}#widget_3"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(3)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(3)->extra_field_1 }}</h4>
                <p>{!! widget(3)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" >
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(4)->slug)}}#widget_4"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(4)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(4)->extra_field_1 }}</h4>
                <p>{!! widget(4)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(5)->slug)}}#widget_5"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(5)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(5)->extra_field_1 }}</h4>
                <p>{!! widget(5)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
      </ul>
    </div>
  </div>
</div>


<div class="about-wrap  " id="about">
  <div class="container">
    <div class="about_sec">
      <div class="edit_option">
         @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(6)->slug)}}#widget_6"><i class="fas fa-edit"></i></a>
              @endif
      </div>
    <div class="row">
      <div class="col-lg-7">
        <div class="aboutImg"><img src="{{asset('images/'.widget(6)->extra_image_1)}}" alt=""></div>
      </div>
      <div class="col-lg-5">
        <div class="about_box">
          <div class="title">
            <h1>{!! widget(6)->extra_field_1 !!}</h1>
          </div>
          <p>{!! widget(6)->description !!}</p>
          <ul class="edu_list">
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/education.png" alt=""></div>
                <div class="learn_info">
                  <h3>{{ widget(6)->extra_field_2 }}</h3>
                  <p>{{ widget(6)->extra_field_3 }}</p>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/class.png" alt=""></div>
                <div class="learn_info">
                  <h3>{{ widget(6)->extra_field_4 }}</h3>
                  <p>{{ widget(6)->extra_field_5 }}</p>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/academy.png" alt=""></div>
                <div class="learn_info">
                  <h3>{{ widget(6)->extra_field_6 }}</h3>
                  <p>{{ widget(6)->extra_field_7 }}</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@if(null!==(module(2))) 
<div class="class-wrap">
  <div class="container">
    <div class="edit_option">@if(Auth::guard('admin')->user())
            <a target="_blank" href="{{route('admin.modules.data',moduleSlug(2)->slug)}}"><i class="fas fa-edit"></i></a>
            @endif</div>
    <div class="title">
      <h1> {{__('Our Popular Classes')}} </h1>
    </div>
    <ul class="owl-carousel  ">
      @foreach(module(2) as $class)
      <li class="item">
        <div class="class_box">
          <div class="class_Img"><img src="{{asset('images/thumb/'.$class->image)}}" alt="">
            <div class="time_box"><span>{{$class->extra_field_5}}</span></div>
          </div>
          <div class="path_box">
            <h3><a href="{{route('classes.detail',$class->slug)}}">{{$class->title}}</a></h3>
            <p>{!!\Illuminate\Support\Str::limit(strip_tags($slider->description), 100, '...')!!}</p>
            <div class="students_box">
              <div class="students">Students: {{$class->extra_field_3}}</div>
              <div class="stud_fee">Fee: {{$class->extra_field_6}}</div>
            </div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endif

<!-- Choice Start -->
<div class="choice-wrap ">
  <div class="container">
    <div class="edit_option blck_color">
       @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(7)->slug)}}#widget_7"><i class="fas fa-edit"></i></a>
              @endif
    </div>
    <div class="title">
      <h1>{!! widget(7)->extra_field_1 !!}</h1>
    </div>
    <p>{!! widget(7)->description !!}</p>
    <div class="readmore"><a href="{!! url('/contact-us') !!}">{!! widget(7)->extra_field_2 !!}</a></div>
  </div>
</div>
<!-- Choice End -->



<!-- Video Start -->
<div class="video-wrap  ">
  <div class="container">
    <div class="title center_title">
      <div class="edit_option blck_color">
       @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(8)->slug)}}#widget_8"><i class="fas fa-edit"></i></a>
              @endif
    </div>
      <h1>{!! widget(8)->extra_field_1 !!}</h1>
    </div>
    <div class="video">
      <div class="playbtn"><a data-fancybox="" href="{!! widget(8)->extra_field_2 !!}"><span></span></a></div>
    </div>
  </div>
</div>
<!-- Video End -->

<!-- Gallery Start -->
@if(null!==(module(4)))
<div class="gallery-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="gallery_box">
          <div class="edit_option align_left blck_color">
            @if(Auth::guard('admin')->user())
            <a target="_blank" href="{{route('admin.modules.data',moduleSlug(9)->slug)}}"><i class="fas fa-edit"></i></a>
            @endif
          </div>
          <div class="gallery_left">
            <div class="title">
              <h1>{!! widget(9)->extra_field_1 !!}</h1>
            </div>
            <p>{!! widget(9)->description !!}</p>
            <div class="readmore"><a href="#">{{__('View All Gallery')}}</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          @foreach(module(4) as $gallery)
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="{{asset('images/thumb/'.$gallery->image)}}" alt="{{$gallery->title}}">
              <div class="portfolio-overley">
                <div class="content"> <a href="{{asset('images/'.$gallery->image)}}" class="fancybox image-link" data-fancybox="images" title="{{$gallery->title}}"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</div>
@endif
<!-- Gallery End --> 

@if(null!==(module(5)))
<!-- Testimonials Start -->
<div class="testimonials-wrap ">
  <div class="container">
    <div class="edit_option blck_color">
     @if(Auth::guard('admin')->user())
        <a target="_blank" href="{{route('admin.modules.data',moduleSlug(5)->slug)}}"><i class="fas fa-edit"></i></a>
      @endif
    </div>
    <div class="title">
      <p>{!! widget(10)->extra_field_1 !!}</p>
      <h1> {!! widget(10)->extra_field_2 !!} </h1>
    </div>
    <ul class="owl-carousel testimonials_list unorderList">
      @foreach(module(5) as $testimoinial)
      <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="{{asset('images/thumb/'.$testimoinial->image)}}"></div>
            <ul class="unorderList starWrp">
              <?php if($testimoinial->extra_field_2 == 5){?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2 == 4){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2 == 3){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==2){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==1){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==0){ ?>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php } ?>
            </ul>
          </div>
          {!!$testimoinial->description!!}
          <h3>{{$testimoinial->title}} <span>{{$testimoinial->extra_field_1}}</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endif
<!-- Testimonials End --> 

<div class="choice-wrap enroll-wrap">
  <div class="container">
    <div class="edit_option">@if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(11)->slug)}}#widget_11"><i class="fas fa-edit"></i></a>
              @endif</div>
    <div class="title">
      <h1>{{widget(11)->extra_field_1}}</h1>
    </div>
    <p>{!!widget(11)->description!!}</p>
    <div class="phonewrp"><img src="{{asset('images/'.widget(11)->extra_image_1)}}" alt=""><a href="tel:{{ widget(1)->extra_field_2 }}">{{ widget(1)->extra_field_2 }}</a></div>
  </div>
</div>

<!-- Teacher Start -->
@if(null!==(module(7)))
<section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
  <div class="container">
    <div class="edit_option blck_color">
      @if(Auth::guard('admin')->user())
        <a target="_blank" href="{{route('admin.modules.data',moduleSlug(7)->slug)}}"><i class="fas fa-edit"></i></a>
      @endif
    </div>
    <div class="title center_title">
      <h1>{{__('Our Teachers')}}</h1>
    </div>
    <div class="row">
      @foreach(module(7) as $teacher)
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="{{asset('images/thumb/'.$teacher->image)}}" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="{{$teacher->extra_field_10}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href="{{$teacher->extra_field_11}}"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="{{$teacher->extra_field_12}}"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="{{$teacher->extra_field_13}}"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>{{$teacher->title}}</h3>
            <div class="designation">{{$teacher->extra_field_1}}</div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- Teacher Start -->
 
@if(null!==(module(9)))
<!-- Blog Start -->
<div class="blog-wrap flight-wrap ">
  <div class="container">
    <div class="edit_option blck_color">
      @if(Auth::guard('admin')->user())
        <a target="_blank" href="{{route('admin.modules.data',moduleSlug(9)->slug)}}"><i class="fas fa-edit"></i></a>
      @endif
    </div>
    <div class="title">
      <h1> {{__('Our Blog')}} </h1>
    </div>
    <ul class="row unorderList">
      @foreach(module(9) as $blog)
      <li class="col-lg-4">
        <div class="blog_box">
          <div class="blogImg"><img src="{{asset('images/thumb/'.$blog->image)}}" alt="">
          </div>
          <div class="path_box">
            <h3><a href="{{route('blogs.detail',$blog->slug)}}">{{$blog->title}}</a></h3>
            <p>{!!\Illuminate\Support\Str::limit(strip_tags($blog->description), 100, '...')!!}</p>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<!-- Blog End --> 
@endif

@if(null!==(module(10)))
<section class="sptb bg-white blog-wrap">
            <div class="container closed" id="container1" style="overflow: hidden; transition: all 0.5s ease 0s;">
               <div class="title section-title center-block text-center">
                  <h1>Recent Jobs</h1>
                  
               </div>
               <div class="row">
                @foreach(module(19) as $job)
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


<!-- Our Team -->
@if(null!==(module(11)))
<section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
  <div class="container">
    <div class="edit_option blck_color">
      @if(Auth::guard('admin')->user())
        <a target="_blank" href="{{route('admin.modules.data',moduleSlug(11)->slug)}}"><i class="fas fa-edit"></i></a>
      @endif
    </div>
    <div class="title center_title">
      <h1>{{__('Our Teams')}}</h1>
    </div>
    <div class="row">
      @foreach(module(11) as $ourteam)
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="{{asset('images/thumb/'.$ourteam->attached_file)}}" alt="Image">
            <!-- <ul class="social-icons list-inline"> -->
              <!-- social-icons -->
              <!-- <li class="social-facebook"> <a href="{{$ourteam->extra_field_10}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href="{{$teacher->extra_field_11}}"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="{{$teacher->extra_field_12}}"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="{{$teacher->extra_field_13}}"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li> -->
            <!-- </ul> -->
          </div>
          <div class="teachers-content">
            <h3>{{$ourteam->name}}</h3>
           
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif
<!-- end of our team work -->

@endsection
