<div class="col-xl-3 col-lg-12 col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">{{__('Dashboard')}}</h3>
               </div>
               <div class="card-body text-center item-user border-bottom">
                  <div class="profile-pic">
                     <div class="profile-pic-img"> <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"></span> <img src="{{null!==(Auth::guard('student')->user()->attached_file)?asset('images/thumb/'.Auth::guard('student')->user()->attached_file):'https://ui-avatars.com/api/?name='.Auth::guard('student')->user()->name.'&color=ffb607&background=EBF4FF'}}" class="brround" alt="user"> </div>
                     <a class="text-dark">
                        <h4 class="mt-3 mb-0 font-weight-semibold">{{Auth::guard('student')->user()->name}}</h4>
                     </a>
                  </div>
               </div>
               <div class="item1-links  mb-0"> 
                <a href="{{route('student.home')}}" class="active d-flex border-bottom"> 
                  <span class="icon1 mr-2">
                    <i class="fas fa-tachometer-alt"></i>
                  </span> {{__('Dashboard')}} </a>
                <a href="{{route('student.enroll')}}" class="active d-flex border-bottom"> 
                  <span class="icon1 mr-2">
                    <i class="fab fa-etsy"></i>
                  </span> {{__('Enroll Today')}} </a>

                <a href="{{route('student.settings')}}" class="d-flex border-bottom">
                  <span class="icon1 mr-2">
                    <i class="fas fa-cogs"></i>
                  </span> {{__('Settings')}} 
                </a>
              
                <a href="{{ route('student.logout') }}" class="d-flex" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="icon1 mr-2">
                    <i class="fas fa-sign-out-alt"></i>
                  </span> {{__('Logout')}}  
                </a>
                <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form> 
              </div>
            </div>
            
            
         </div>