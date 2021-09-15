<!DOCTYPE html>
<!-- Mirrored from spiralpixelthemes.co.uk/elegance_cv/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 09:02:20 GMT -->
<head>
   <meta charset="utf-8">
   <title>Retro Elegance CV by Josweb</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
   <!-- STYLES -->
   <link href="{{asset('cv_files/style.css')}}" rel="stylesheet" type="text/css" media="screen" />
   <link href="{{asset('cv_files/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="screen" />
   <link rel="stylesheet" href="{{asset('cv_files/css/prettyPhoto.css')}}" type="text/css" media="screen" />
   <link href="{{asset('cv_files/css/print.css')}}" rel="stylesheet" type="text/css" media="print" />
   <!-- JS -->
   <script src="{{asset('cv_files/js/jquery-1.8.2.js')}}" type="text/javascript" charset="utf-8"></script>
   <script src="{{asset('cv_files/js/scripts.js')}}" type="text/javascript" charset="utf-8"></script>
   <script src="{{asset('cv_files/js/jquery.prettyPhoto.js')}}" type="text/javascript"  charset="utf-8"></script>
   <style type="text/css">
      .container {
      margin: 0 auto 50px;
      padding: 60px 0px 30px;
      }
      .span{
      float: left;
      min-height: 1px;
      margin-left: 30px;
      }
      .pad25 {
      padding-bottom: 25px;
      }
      p {
      margin: 0 0 10px;
      }
      .info {
      float: left;
      margin: 0;
      padding: 0;
      }
   </style>
   <!--[if lt IE 9]>
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
   <!--[if IE 7]>
   <link rel="stylesheet" href="style/css/font-awesome-ie7.css">
   <![endif]-->
</head>
<body>
   <!-- END TOP STRIP-->
   <div class="container" style="">
      <div class="row">
         <!-- LEFT -->
         <table>
            <tr>
               <td>
                  <div class="span12 clearfix pad25">
                     <h1 style="font: normal 28px Georgia, serif;
                        color: #555;
                        margin: 0 0;">{{$user->name}}</h1>
                     <div style="font: normal 15px Georgia, serif;
                        color: #555;
                        padding: 0 0 1px;font-weight: bold;">{{title($seeker->sub_category)}}</div>
                     <p style="margin-top: 5px; font: normal 14px Georgia, serif">
                        {{$seeker->looking_for}}.
                     </p>
                  </div>
               </td>
               <td>
                  <ul class="info">
                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px"><strong>Email :</strong> <a href="#">{{$user->email}}</a></li>
                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px"><strong>Telephone :</strong> {{$seeker->contact}}</li>

                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px"><strong>Gender :</strong> {{title($seeker->gender)}}</li>
                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px"><strong>Address :</strong> {{title($seeker->city)}},  {{title($seeker->state)}}, {{title($seeker->country)}}</li>
                  </ul>
               </td>
            </tr>
         </table>
         <br>
         <br>
         <!-- RIGHT -->
         <div class="span12">
            <div style="    font: normal 22px Georgia, serif;
               color: #555;
               padding: 0 0 15px;" class="title">
               <span class="first">01:</span>Profile
            </div>
            <p style="font: normal 14px Georgia, serif">
               <img src="{{ $seeker->powerdBy->attached_file }}" class="img-polaroid photo" alt=""  />
               {{$seeker->looking_for}}
            </p>
             <ul class="info">
                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px; display: inline-block;"><strong>Skills :</strong> <a href="#">{{$seeker->skills}}</a></li>
                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px; display: inline-block;"><strong>Education Level :</strong> {{title($seeker->education_level)}}</li>

                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px; display: inline-block;"><strong>Desired Salary :</strong> {{$seeker->desired_salary}}</li>
                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px; display: inline-block;"><strong>Address :</strong> {{title($seeker->city)}},{{title($seeker->state)}}, {{title($seeker->country)}}</li>
                  </ul>
           
         </div>
         <!-- DIVIDER -->
         <div class="span12 pad50">
            <hr>
         </div>
         <div class="span6 clearfix pad25">
            <!-- LEFT -->
            <div class="title">
               <span class="first">02:</span>Experience
            </div>
            <?php $experience = json_decode($seeker->work_experience); ?>
            @if(null!==($experience))
            @foreach($experience as $exp)
            <div style="font: normal 15px Georgia, serif;
               color: #555; font-weight: bold; margin-bottom: 3px">{{$exp->company}}</div>
            <div style="font: normal 14px Georgia, serif;
               color: #555;font-weight: bold; margin-bottom: 3px">{{$exp->position}} : {{$exp->from_year}} - {{$exp->to_year}}</div>
            <ul class="info">
                     

                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px; display: inline-block;"><strong>Career Level :</strong> {{title($exp->career_level)}}</li>
                     <li style="font: normal 14px Georgia, serif;
                        color: #555;
                        margin:  0 0;margin-bottom: 1px; display: inline-block;"><strong>Work Experience :</strong> {{title($exp->work_experience)}}</li>
                  </ul>
                  <div class="pad25"></div>
                  <br><br>
            @endforeach
            @endif
            
         </div>
         <!-- RIGHT-->
         <!-- DIVIDER -->
         <!-- COLUMN 1 -->
         <!-- COLUMN 2 -->
         <!-- DIVIDER -->
      </div>
      <div class="clear"></div>
   </div>
   <!-- COPYRIGHT -->
</body>
<!-- Mirrored from spiralpixelthemes.co.uk/elegance_cv/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 09:02:32 GMT -->
</html>