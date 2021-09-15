@extends('layouts.app')
@push('css')

@endpush
@section('content')

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
   <div class="container">
      <h1>{{__('My Professional Informations')}}</h1>
   </div>
</div>
<!-- Inner Heading End --> 
<section class="sptb">
   <!--  container-custome -->
   <div class="container">
      <div class="row">
         @include('applicant.includes.sidebar')
         <div class="col-xl-9 col-lg-12 col-md-12">
            <div class="card mb-0">
               <div class="card-header">
                  <h3 class="card-title">My Professional Informations</h3>
               </div>
               <div class="card-body">
                      {!! Form::open(array('method' => 'post', 'route' => array('seeker.update.informations'), 'class' => 'form', 'files'=>true)) !!}
                        <div class="messages"></div>
                        @include('seeker.inc.form')
                      </form>
            </div>
         </div>
      </div>
   </div>
</section>
   <!-- /PAGE WITH SIDEBAR -->
   
</div>







@endsection

@push('js')
<script type="text/javascript">
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
            title: ' <strong>Created Successfully!</strong> ',
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

$("#title").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);        
});
</script>
@endpush
