@extends('admin.layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('/admin/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/menu/css/nestable.css') }}">

<link rel="stylesheet" href="{{ asset('/admin/menu/css/menu.css') }}">
@endpush
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <?php 
      $menu_types = App\Models\Menu_types::where('status','active')->get();

        $menu= new App\Models\Menu;
         ?> 
      @if(null!==($menu_types))
      @foreach($menu_types as $type)
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
              @if(session()->has('message.added'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{__('Task Done')}}!</strong> {!! session('message.content') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
               <div class="page-header-title">
                  <h4>{{$type->title}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{__('Menus')}}</a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{$type->title}} {{__('List')}}</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
               <div class="row">
                  <div class="col-sm-12">
                     <!-- Basic Form Inputs card start -->
                     <div class="card">
                        <div class="card-header">
                           <h5>{{$type->title}} {{__('List')}}</h5>
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                          <div class="dd" id="nestable">
                           {!!$menu->getHTML(App\Models\Menu::where('menu_type_id',$type->id)->orderBy('order')->get())!!}
                         </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
      @endforeach

      @endif
   </div>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{ asset('/admin/toastr/toastr.min.js') }}"></script>
 <script src="{{ asset('/admin/menu/js/jquery.nestable.js') }}"></script>
 <script src="{{ asset('/admin/menu/js/menu.js') }}"></script>
@endpush