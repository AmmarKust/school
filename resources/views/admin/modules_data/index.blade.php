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
                  <h4>{{$module->name}} {{__('List')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item">{{$module->name}} List
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
                           <h5>{{$module->name}} {{__('List')}}</h5>
                           
                           <div class="card-header-right">
                              <a class="btn btn-primary" href="{{route('admin.modules.data.add',$module->slug)}}"><i class="icon-plus"></i> Add New {{$module->term}}</a>

                           </div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive">
                              <table align="center" id="fix-header" class="table table-striped  nowrap table-bordered">
                              <thead>
                                <tr role="row" class="filter"> 
                                  @if($module->is_image)
                                  <td></td>
                                  @endif
                                            <td><input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Search Title"></td>
                                            @if($module->category)
                                            <td>
                                              {!! Form::select('category', [''=>'Select '.$parent->term]+dataArray($module->parent_id), null, array('class'=>'form-control', 'id'=>'category', 'required'=>'required')) !!}
                                            </td>
                                            @else
                                            <td></td>
                                            @endif
                                                                  
                                            <td>
                                              <select name="status" id="status"  class="form-control status">
                                                    <option value="">Select Status</option>
                                                    <option value="active">Active</option>
                                                    <option value="blocked">Blocked</option>
                                                </select>
                                              </td>
                                              <td></td>
                                            </tr>
                                 <tr>
                                    @if($module->is_image)
                                    <th>{{__('Image')}}</th>
                                    @endif
                                    <th>{{__('Title')}}</th>
                                    @if($module->category)
                                            <th>
                                              {!! $parent->term !!}
                                            </th>
                                            @else
                                            <th>{{__('Created Date')}}</th>
                                            @endif
                                    
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
  $(document).ready(function(){
    $(".tabledit-delete-button").click(function(e){
          if(!confirm('Are you sure you want to delete?')){
            e.preventDefault();
            return false;
          }
      return true;
        });
    });
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

            @if($module->is_image)
            @if($module->category)
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.category = $('#category').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'image', name: 'image'},
                {data: 'title', name: 'title'},
                {data: 'category', name: 'category'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @else
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'image', name: 'image'},
                {data: 'title', name: 'title'},
                {data: 'created_date', name: 'created_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @endif
            
            @else

            @if($module->category)
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.category = $('#category').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'title', name: 'title'},
                {data: 'category', name: 'category'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @else
            ajax: {
                url: '{!! route('admin.modules.data.fetch') !!}',
                data: function (d) {
                    d.id = '{{$module->id}}';
                    d.title = $('input[name=title]').val();
                    d.status = $('#status').val();
                }
            }, columns: [
                {data: 'title', name: 'title'},
                {data: 'created_date', name: 'created_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
            @endif
            
            @endif 
            
        });

        $('#title').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#category').on('change', function (e) {
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
            url: '{{url("/admin")}}/data-status/' + id + '/' + current_status,
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(sts) {
                var class_label = 'success';
                if (sts != 'active')
                    var class_label = 'warning';
                $("#sts_" + id).html('<span style="font-size:12px" class="btn btn-' + class_label + '">' + sts + '</span>');
            }
        });

    }

    $('#category').select2();
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