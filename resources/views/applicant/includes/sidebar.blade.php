@push('css')
<style type="text/css">
  .sptb .form-control {
    padding: 10px 10px 40px 10px !important;
}
</style>
@endpush
<div class="col-xl-3 col-lg-12 col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">{{__('Dashboard')}}</h3>
               </div>
               <div class="card-body text-center item-user border-bottom">
                  <div class="profile-pic">
                     <div class="profile-pic-img"> <i style="font-size: 14px;
    float: right;" onclick="uploadProfile()" class="fas fa-edit"></i><img style="width: 65%;" src="{{null!==(Auth::guard('applicant')->user()->attached_file)?asset('images/'.Auth::guard('applicant')->user()->attached_file):'https://ui-avatars.com/api/?name='.Auth::guard('applicant')->user()->name.'&color=ffb607&background=EBF4FF'}}" class="brround" alt="user"> </div>
                     <a class="text-dark">
                        <h4 class="mt-3 mb-0 font-weight-semibold">{{Auth::guard('applicant')->user()->name}}</h4>
                     </a>
                  </div>
               </div>
               <div class="item1-links  mb-0"> 
                <a href="{{route('applicant.a.home')}}" class="active d-flex border-bottom"> 
                  <span class="icon1 mr-2">
                    <i class="fas fa-tachometer-alt"></i>
                  </span> {{__('Dashboard')}} </a>
                
                  <a href="{{route('seeker.update')}}" class="active d-flex border-bottom"> 
                  <span class="icon1 mr-2">
                    <i class="fab fa-etsy"></i>
                  </span> Professional Informations </a>

                  <a href="{{route('seeker.appllied-jobs')}}" class="active d-flex border-bottom"> 
                  <span class="icon1 mr-2">
                    <i class="fa fa-product-hunt"></i>
                  </span> My Applied Jobs </a>

                  <a href="{{route('seeker.download-resume',Auth::guard('applicant')->user()->id)}}" class="active d-flex border-bottom "> 
                  <span class="icon1 mr-2">
                    <i class="fa fa-product-hunt"></i>
                  </span> Download Cv </a>
                <a href="{{route('applicant.settings')}}" class="d-flex border-bottom">
                  <span class="icon1 mr-2">
                    <i class="fas fa-cogs"></i>
                  </span> {{__('Settings')}} 
                </a>
              
                <a href="{{ route('applicant.logout') }}" class="d-flex" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="icon1 mr-2">
                    <i class="fas fa-sign-out-alt"></i>
                  </span> {{__('Logout')}}  
                </a>
                <form id="logout-form" action="{{ route('applicant.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form> 
              </div>
            </div>
            
            
         </div>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action="{{route('profile.image-upload')}}" enctype="multipart/form-data">
          @csrf
          <input type='file' name='upload' id='upload' class='form-control' ><br>
          <input type='submit' class='btn btn-info' value='Upload' id='btn_upload'>
        </form>

        <!-- Preview-->
        <div id='preview'></div>
      </div>
 
    </div>

  </div>
</div>

         @push('js')
         <script type="text/javascript">
           function uploadProfile(){
            $('#exampleModal').modal('show');
           }
         </script>
         @endpush