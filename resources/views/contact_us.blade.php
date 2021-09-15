@extends('layouts.app')
@push('css')

<style type="text/css">
  .error{
    color: red;
  }
</style>
@endpush
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{__('Contact Us')}}</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<div class="innerContent-wrap">
  <div class="container">
    <div class="cont_info ">
      <div class="row">
        <div class="col-lg-3 col-md-6 md-mb-30">
          <div class="address-item style">
            <div class="address-icon"> <i class="fas fa-phone-alt"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">{{__('Call Us')}}</h3>
              <ul class="unorderList">
                <li><a href="tel:{{widget(1)->extra_field_2}}">{{widget(1)->extra_field_2}}</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 md-mb-30">
          <div class="address-item style">
            <div class="address-icon"> <i class="far fa-envelope"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">{{__('Mail Us')}}</h3>
              <ul class="unorderList">
                <li><a href="{{widget(1)->extra_field_3}}">{{widget(1)->extra_field_3}}</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 sm-mb-30">
          <div class="address-item">
            <div class="address-icon"> <i class="far fa-clock"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">{{__('Opening Hours')}}</h3>
              <ul class="unorderList">
                <li>{{widget(14)->extra_field_1}}</li>
                <li>{{widget(14)->extra_field_2}}</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="address-item">
            <div class="address-icon"> <i class="fas fa-map-marker-alt"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">{{__('Address')}}</h3>
              <p> {{widget(1)->extra_field_4}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7"> 
        
        <!-- Register Start -->
        <div class="login-wrap">
          <div class="contact-info login_box">
            <div class="contact-form loginWrp registerWrp">
              <form method="post" action="{{route('contact.post')}}" id="contactForm" novalidate="">
                @csrf
                <h3>{{__('Get In Touch')}}</h3>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" name="email_address" class="form-control" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="phone_number" class="form-control" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea  class="form-control" name="message" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <button type="submit" class="default-btn btn send_btn"> Submit <span></span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Register End --> 
      </div>
      <div class="col-lg-5">
        <div class="map">
          <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags(widget(1)->extra_field_4))}}&output=embed" width="100%" height="511" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<script src="{{asset('js/jquery.validate.min.js')}}"></script>


@if(session()->has('message.added'))
  <script type="text/javascript">      
    var message = "{!! session('message.content') !!}";
  </script> 
  <script src="{{asset('js/message.js')}}" type="text/javascript"></script>
@endif
@endpush
