@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>{{$blog->title}}</h1>
   </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- blogs Details Start -->
    <div class="classDetails-wrap">
      <div class="row">
        <div class="col-lg-8">
          <div class="class_left ">
            <div class="class_Img"><img src="{{asset('images/'.$blog->image)}}" alt="">
              <div class="time_box"><span>{{$blog->extra_field_5}}</span></div>
            </div>
            <h3>{{$blog->title}}</h3>
            {!!$blog->description!!}
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-widgets widget_search ">
            <h4>{{__('Search')}}</h4>
            <form action="{{route('blogs.list')}}" class="sidebar-search-form">
              <input type="search" name="keyword" placeholder="Search..">
              <button type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
          @if(null!==(module(8))) 
          <div class="single-widgets widget_category ">
            <h4>Categories</h4>
            <ul class="unorderList">
               @foreach(module(8) as $cate)
               <?php 
               $count = App\Models\ModulesData::where('module_id',9)->whereRaw("FIND_IN_SET($cate->id,category_ids)")->where('status','active')->count();
                ?>
              <li><a href="{{route('blogs.list','cate='.$cate->id)}}">{{$cate->title}} <span>{{$count}}</span></a></li>
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
                    <h4><a href="{{route('blogs.detail',$recent->slug)}}">{{$recent->title}}</a></h4>
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
              <li><a href="{{route('blogs.list','archive='.$date)}}">{{$archive}} </a></li>
              @endforeach
            </ul>
          </div>
          @endif
          @if(null!==($tags) && count($tags))
          <div class="single-widgets ">
            <h4>{{__('Tags')}}</h4>
            <ul class="tags">
              @foreach($tags as $tag)
              <li><a href="{{route('blogs.list','tag='.$tag->id)}}">{{$tag->title}}</a></li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
      </div>
    </div>
    <!-- blogs Details End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 
<!-- Inner Content Start --> 
@endsection