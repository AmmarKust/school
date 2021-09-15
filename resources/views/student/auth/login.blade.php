@extends('layouts.app')

@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Login</h1>
  </div>
</div>
<!-- Inner Heading End -->



<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
        <h3>New Customers</h3>
        <p>If you don't have an account, please proceed by clicking the following button to continue first-time registration.</p>
        <div class="form-group">
          <a href="{{route('student.register')}}" class="default-btn btn send_btn">Create Account <span></span></a>
        </div>
        <div class="contact-form loginWrp">
          <h3>Login Customers</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <form method="POST" action="{{ route('student.login') }}" aria-label="{{ __('Login') }}" id="contactForm" novalidate="">
            @csrf
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Log in to my account <span></span></button>
                </div>
                <div class="form-group">
                  <div class="forgot_password">
                    @if (Route::has('student.password.request'))
                                    <a  href="{{ route('student.password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Login End --> 
    
  </div>
</div>

@endsection
