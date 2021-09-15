@extends('layouts.app')

@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Register</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Register Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
        <div class="contact-form loginWrp registerWrp">
        <form id="contactForm" novalidate="" method="POST" action="{{ route('student.register') }}">
                        @csrf
            <div class="form_set">
              <h3>Account Information</h3>
              <div class="form-group">
               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div> 

              <div class="form-group">
               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <div class="passnote">Note:  Password must be a minimum of 8 characters</div>
              </div>
              <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
              </div>
               <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Register <span></span></button>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="already_account">Already have Account? <a href="{{route('student.login')}}">Login</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Register End --> 
    
  </div>
</div>


@endsection
