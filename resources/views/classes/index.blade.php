@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>
         @if(isset(request()->keyword))
         {{request()->keyword}}
         @else
         Classes
         @endif
         
      </h1>
   </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
   <div class="container">
      <!-- Classes Start -->
      @if(null!==($classes))
      <div class="class-wrap">
         <ul class="row unorderList">
            @foreach($classes as $class)
            <li class="col-lg-4 col-md-6">
               <div class="class_box">
                  <div class="class_Img">
                     <img src="{{asset('images/thumb/'.$class->image)}}" alt="">
                     <div class="time_box"><span>{{$class->extra_field_5}}</span></div>
                  </div>
                  <div class="path_box">
                     <h3><a href="{{route('classes.detail',$class->slug)}}">{{$class->title}}</a></h3>
                     <p>{!!\Illuminate\Support\Str::limit(strip_tags($class->description), 100, '...')!!}</p>
                     <div class="students_box">
                        <div class="students">Students: {{$class->extra_field_3}}</div>
                        <div class="stud_fee">Fee: {{$class->extra_field_6}}</div>
                     </div>
                  </div>
               </div>
            </li>
            @endforeach
         </ul>
         <div class="pagiWrap">
            <div class="row">
               <div class="col-md-5">
                  <div class="showreslt">
                     {{__('Showing Pages')}} : {{ $classes->firstItem() }} - {{ $classes->lastItem() }} {{__('Total')}} {{ $classes->total() }}
                  </div>
               </div>
               <div class="col-md-7 text-right">
                  @if(isset($classes) && count($classes))
                  {{ $classes->appends(request()->query())->links() }}
                  @endif
               </div>
            </div>
         </div>
      </div>
      @endif
      <!-- Classes End --> 
   </div>
</div>
<!-- Inner Content Start --> 
@endsection