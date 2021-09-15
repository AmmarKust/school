<div class="header-wrap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-12 navbar-light">
        <div class="logo"> <a href="{{url('/')}}"><img alt="" class="logo-default" src="{{asset('images/'.widget(1)->extra_image_1)}}"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="navigation-wrap" id="filters">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">{{__('Menu')}}</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                {!!get_menus(1)!!}
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="header_info">
          <div class="search"><a href="#"><i class="fas fa-search"></i></a></div>
          <div class="loginwrp">
            @if(Auth::guard('student')->user())
            <a href="{{ route('student.home') }}">
                        <i class="ti-layout-sidebar-left"></i> {{__('Dashboard')}}
                        </a>
            @else
            @if(Auth::guard('applicant')->user())   
              <a href="{{ route('applicant.a.home') }}">
                        <i class="ti-layout-sidebar-left"></i> {{__('Dashboard')}}
                        </a>
            @else               
            <a href="javascript:;" data-toggle="modal" data-target="#loginbuttons">{{__('Login/Register')}}</a>
            @endif
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginbuttons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login As</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <a style="width: 100%" href="{{route('student.login')}}" class="btn btn-secondary" data-dismiss="modal">Student</a>
        <a style="width: 100%" href="{{route('applicant.login')}}" class="btn btn-primary">Applicant</a>
      </div>
    </div>
  </div>
</div>