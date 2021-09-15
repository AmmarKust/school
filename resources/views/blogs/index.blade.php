@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>
         @if(isset(request()->keyword))
         {{request()->keyword}}
         @else
         blogs
         @endif
         
      </h1>
   </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
    <div class="blog_inner bloggridWrp blog_listWrp">
      <div class="row">
        <div class="col-lg-8">
         @if(null!==($blogs))
          <ul class="unorderList">
            @foreach($blogs as $blog)
             <li>
              <div class="blog_box">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="blogImg"><img src="{{asset('images/thumb/'.$blog->image)}}" alt="{{$blog->title}}">
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="path_box">
                      <h3><a href="{{route('blogs.detail',$blog->slug)}}">{{$blog->title}}</a></h3>
                      <p>{!!\Illuminate\Support\Str::limit(strip_tags($blog->description), 100, '...')!!}</p>
                      <div class="readmore"><a href="{{route('blogs.detail',$blog->slug)}}">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
          @endif
          <div class="blog-pagination text-center"> <div class="row">
               <div class="col-md-5">
                  <div class="showreslt">
                     {{__('Showing Pages')}} : {{ $blogs->firstItem() }} - {{ $blogs->lastItem() }} {{__('Total')}} {{ $blogs->total() }}
                  </div>
               </div>
               <div class="col-md-7 text-right">
                  @if(isset($blogs) && count($blogs))
                  {{ $blogs->appends(request()->query())->links() }}
                  @endif
               </div>
            </div> </div>
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
            <h4>{{__('Categories')}}</h4>
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
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Inner Content Start --> 
@endsection