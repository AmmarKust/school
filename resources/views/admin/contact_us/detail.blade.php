@extends('admin.layouts.app')
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <div class="page-header-title">
                  <h4>{{__('Message Detail')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     
                     <li class="breadcrumb-item">{{__('Message  Components')}}
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <!-- Task-detail-right start -->
                    <div class="col-xl-4 col-lg-12 push-xl-8 task-detail-right">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text"><i class="icofont icofont-ui-note m-r-10"></i> {{__('Message Details')}}</h5>
                            </div>
                            <div class="card-block task-details">
                                <table class="table table-border table-xs">
                                    <tbody>
                                        <tr>
                                            <td><i class="icofont icofont-contrast"></i> {{__('Name')}}:</td>
                                            <td class="text-right"><span class="f-right"><a> {{$message->first_name}} {{$message->last_name}}</a></span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-email"></i> {{__('Email Address')}}:</td>
                                            <td class="text-right">{{$message->email_address}}</td>
                                        </tr>

                                        <tr>
                                            <td><i class="icofont icofont-contrast"></i> {{__('Phone Number')}}:</td>
                                            <td class="text-right">{{$message->phone_number}}</td>
                                        </tr>
                                        <tr>
                                            <td><i class="icofont icofont-id-card"></i> {{__('Created')}}:</td>
                                            <td class="text-right">{{date('d M, Y',strtotime($message->created_at))}}</td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                        
                        
                        
                    </div>
                    <!-- Task-detail-right start -->
                    <!-- Task-detail-left start -->
                    <div class="col-xl-8 col-lg-12 pull-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="icofont icofont-tasks-alt m-r-5"></i> {{__('Ticket')}} {{$message->first_name}} {{$message->last_name}}</h5>
                            </div>
                            <div class="card-block">
                                <div class="">
                                    <div class="m-b-20">
                                        <h6 class="sub-title m-b-15">{{__('Message')}}</h6>
                                        <p>
                                            {!!$message->message!!}
                                        </p>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- Task-detail-left end -->
                </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
   </div>
</div>
@endsection
