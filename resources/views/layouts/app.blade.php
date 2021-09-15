<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      
    <link rel="shortcut icon" href="{{asset('images/'.widget(13)->extra_image_1)}}">  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ widget(1)->extra_field_1 }}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link href="{{asset('css/all.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/switcher.css"> -->
	<link rel="stylesheet" href="{{asset('rsplugin/css/settings.css')}}">
	<!-- Jquery Fancybox CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.min.css')}}" media="screen" />
	<link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet"  id="colors">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/notification/notification.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	  <link href="{{asset('admin/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />

	<!-- Font Awesome 5 cdn -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- <link rel="stylesheet" href="{{asset('admin/assets/icon/themify-icons.css')}}"/> -->

		<!-- Css and js for our team work -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- End of Cssa and js for our team work -->


    @stack('css')

    <script type="text/javascript">
      var base_url = "{!!url('/')!!}"
    </script>
	


   </head>
   <body>
   	@include('includes.topbar')
   	@yield('content')
   	@include('includes.footer')
   	<script src="{{asset('js/jquery.min.js')}}"></script> 
	<script src="{{asset('js/bootstrap.min.js')}}"></script> 
	<script src="{{asset('js/popper.min.js')}}"></script> 
	<script src="{{asset('rsplugin/js/jquery.themepunch.tools.min.js')}}"></script> 
	<script src="{{asset('rsplugin/js/jquery.themepunch.revolution.min.js')}}"></script> 
	<!-- Jquery Fancybox --> 
	<script src="{{asset('js/jquery.fancybox.min.js')}}"></script> 
	<!-- Animate js --> 
	<script src="{{asset('js/animate.js')}}"></script> 
	<script>
	  new WOW().init();
	</script> 
	<!-- WOW file --> 
	<script src="{{asset('js/wow.js')}}"></script> 
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<!-- general script file --> 
	<script src="{{asset('js/owl.carousel.js')}}"></script> 
	<script src="{{asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/bootstrap-growl.min.js')}}"></script>



	

	@stack('js')
   </body>
</html>