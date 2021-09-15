@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>{{$class->title}}</h1>
   </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Classes Details Start -->
    <div class="classDetails-wrap">
      <div class="row">
        <div class="col-lg-8">
          <div class="class_left ">
            <div class="class_Img"><img src="{{asset('images/'.$class->image)}}" alt="">
              <div class="time_box"><span>{{$class->extra_field_5}}</span></div>
            </div>
            <h3>{{$class->title}}</h3>
            {!!$class->description!!}
            <div class="sidebar-item">
              <ul class="class-details">
                <li>
                  <div class="name"><i class="fas fa-pencil-alt"></i>{{__('Start Date')}}</div>
                  <div class="info">{{$class->extra_field_1}}</div>
                </li>
                <li>
                  <div class="name"><i class="fas fa-user" aria-hidden="true"></i>{{__('Years Old')}}</div>
                  <div class="info">{{$class->extra_field_2}}</div>
                </li>
                <li>
                  <div class="name"><i class="fas fa-building" aria-hidden="true"></i>{{__('Class Size')}}</div>
                  <div class="info">{{$class->extra_field_3}}</div>
                </li>
                
                <li>
                  <div class="name"><i class="fas fa-calendar" aria-hidden="true"></i>{{__('Coures Duration')}}</div>
                  <div class="info">{{$class->extra_field_4}}</div>
                </li>
                <li>
                  <div class="name"><i class="fas fa-clock" aria-hidden="true"></i>{{__('Class Time')}}</div>
                  <div class="info">{{$class->extra_field_5}}</div>
                </li>
                <li>
                  <div class="name"><i class="fas fa-money-bill-alt"></i>{{__('Tution Free')}}</div>
                  <div class="info">{{$class->extra_field_6}}</div>
                </li>
              </ul>
            </div>
            
            
           
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-widgets widget_search ">
            <h4>{{__('Search')}}</h4>
            <form action="{{route('classes.list')}}" class="sidebar-search-form">
              <input type="search" name="keyword" placeholder="Search..">
              <button type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
          @if(null!==(module(1))) 
          <div class="single-widgets widget_category ">
            <h4>{{__('Categories')}}</h4>
            <ul class="unorderList">
               @foreach(module(3) as $cate)
              <li><a href="{{route('classes.list','category='.$cate->id)}}">{{$cate->title}} <span>{{$cate->count()}}</span></a></li>
              @endforeach
            </ul>
          </div>
          @endif
          @if(null!==($recent_data)) 
          <div class="single-widgets widget_category ">
            <h4>{{__('Recents Property')}}</h4>
            <ul class="property_sec">
               @foreach($recent_data as $recent)
               <li>
                <div class="rec_proprty">
                  <div class="propertyImg"><img src="{{asset('images/thumb/'.$recent->image)}}"></div>
                  <div class="property_info">
                    <h4><a href="{{route('classes.detail',$recent->slug)}}">{{$recent->title}}</a></h4>
                    <p>{!!\Illuminate\Support\Str::limit(strip_tags($recent->description), 38, '...')!!}</p>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          @endif
          @if(null!==($archives) && count($archives))
          <div class="single-widgets widget_category ">
            <h4>{{__('Archives')}}</h4>
            <ul class="categories">
              @foreach($archives as $archive)
              @php
              $date = date('Y-m',strtotime($archive));
              @endphp
              <li><a href="{{route('classes.list','archive='.$date)}}">{{$archive}} </a></li>
              @endforeach
            </ul>
          </div>
          @endif
          @if(null!==($tags) && count($tags))
          <div class="single-widgets ">
            <h4>{{__('Tags')}}</h4>
            <ul class="tags">
              @foreach($tags as $tag)
              <li><a href="{{route('classes.list','tag='.$tag->id)}}">{{$tag->title}}</a></li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
      </div>
    </div>
    <!-- Classes Details End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 
<!-- Inner Content Start --> 
@endsection