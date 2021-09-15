@extends('admin.layouts.app')
@push('css')
<style type="text/css">
   table th{
   text-align: center;
   }
   table{
   text-align: center;
   }
</style>
@endpush
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <div class="page-header-title">
                  <h4>{{__('Students List')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="index-2.html">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{__('Students List')}}</a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{__('Students List')}}</a>
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
                           <h5>{{__('Students List')}}</h5>
                           
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive">
                              <table align="center" id="fix-header" class="table table-striped  nowrap table-bordered">
                              <thead>
                                <tr role="row" class="filter"> 
                                  <td></td>
                                            <td><input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Search Name"></td>
                                            <td>
                                              {!! Form::select('class', [''=>'Select Class']+dataArray(2), null, array('class'=>'form-control', 'id'=>'class', 'required'=>'required')) !!}
                                            </td>
                                                                  
                                            <td>
                                              <select name="status" id="status"  class="form-control status">
                                                    <option value="">Select Status</option>
                                                    <option value="approved">Approved</option>
                                                    <option value="pending">Pending</option>
                                                </select>
                                              </td>
                                              <td></td>
                                            </tr>
                                 <tr>
                                    <th>{{__('Image')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Class')}}</th> 
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Action')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                
                              </tbody>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
  $(function () {
        var oTable = $('#fix-header').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            searching: false,
            /*    
             "order": [[1, "asc"]],            
             paging: true,
             info: true,
             */

            ajax: {
                url: '{!! route('admin.students.data.fetch') !!}',
                data: function (d) {
                    d.name = $('input[name=name]').val();
                    d.class = $('#class').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'image', name: 'image'},
                {data: 'name', name: 'name'},
                {data: 'class', name: 'class'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            
        });

        $('#name').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#class').on('change', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#status').on('change', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        
        
    });
   @if(session()->has('message.added'))
               
       
       $(document).ready(function() {
      
       /*--------------------------------------
            Notifications & Dialogs
        ---------------------------------------*/
       /*
        * Notifications
        */
       function notify(from, align, icon, type, animIn, animOut){
           $.growl({
               icon: icon,
               title: ' <strong>Task Done!</strong> ',
               message: "{!! session('message.content') !!}",
               url: ''
           },{
               element: 'body',
               type: type,
               allow_dismiss: true,
               placement: {
                   from: from,
                   align: align
               },
               offset: {
                   x: 30,
                   y: 30
               },
               spacing: 10,
               z_index: 999999,
               delay: 2500,
               timer: 1000,
               url_target: '_blank',
               mouse_over: false,
               animate: {
                   enter: animIn,
                   exit: animOut
               },
               icon_type: 'class',
               template: '<div data-growl="container" class="alert" role="alert">' +
               '<button type="button" class="close" data-growl="dismiss">' +
               '<span aria-hidden="true">&times;</span>' +
               '<span class="sr-only">Close</span>' +
               '</button>' +
               '<span data-growl="icon"></span>' +
               '<span data-growl="title"></span>' +
               '<span data-growl="message"></span>' +
               '<a href="#" data-growl="url"></a>' +
               '</div>'
           });
       };
   
       
   
           var nFrom = 'top';
           var nAlign = 'right';
           var nIcons = $(this).attr('data-icon');
           var nType = 'success';
           var nAnimIn = 'animated flipInY';
           var nAnimOut = 'animated flipOutY';
   
           notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
   
   });
   @endif
   function update_status(id) {
        var current_status = $("#sts_" + id + " span").html();
        $.ajax({
            type: 'GET',
            url: '{{url("/admin")}}/student-status/' + id + '/' + current_status,
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(sts) {
                var class_label = 'success';
                if (sts != 'approved')
                    var class_label = 'warning';
                $("#sts_" + id).html('<span style="font-size:12px" class="btn btn-' + class_label + '">' + sts + '</span>');
            }
        });

    }

    $('#class').select2();
    $('#status').select2();
</script>
<style>
    .status {
        text-transform: capitalize;
    }
  .filter .form-control:not([size]):not([multiple]) {
    height: 10% !important;
}

.filter .form-control{
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle
}

</style>
<style>
      .select2-selection{
        height: calc(1.5em + .75rem + 2px) !important;
        border: 1px solid #ced4da !important;
      }
      .select2-selection__rendered{
        line-height: calc(1.5em + .75rem + 2px) !important;
      }
      .select2-container .select2-selection--single .select2-selection__rendered{
          padding-right: calc(1.5em + .75rem + 2px) !important; 
      }
      .select2-selection__arrow{
          height: calc(1.5em + .75rem + 2px) !important;
      }
      .select2-container--default .select2-selection--single .select2-selection__rendered {
          background-color: #eeee !important;
          color: #464a4c !important;
          padding: 0px 0px 0px 0px !important;
      }
      .select2-container{
        width: 200px !important;
      }
    </style>
@endpush