(function($) { 

	"use strict";

$('[data-toggle="offcanvas"]').on('click', function () {
    $('.navbar-collapse').toggleClass('show');
    });


    
/* ================ Revolution Slider. ================ */
    if($('.tp-banner').length > 0){
        $('.tp-banner').show().revolution({
            delay:6000,
            startheight: 700,
            startwidth: 1170,
            hideThumbs: 1000,
            navigationType: 'none',
            touchenabled: 'on',
            onHoverStop: 'on',
            navOffsetHorizontal: 0,
            navOffsetVertical: 0,
            dottedOverlay: 'none',
            fullWidth: 'on'
        });
    }
    if($('.tp-banner-full').length > 0){
        $('.tp-banner-full').show().revolution({
            delay:6000,
            hideThumbs: 1000,
            navigationType: 'none',
            touchenabled: 'on',
            onHoverStop: 'on',
            navOffsetHorizontal: 0,
            navOffsetVertical: 0,
            dottedOverlay: 'none',
            fullScreen: 'on'
        });
    }   





/* ================ testimonials ================ */
    $(document).ready(function() {
        $(".testimonials_list").owlCarousel({
            loop: true,
            rewind: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                700: {
                    items: 1,
                    nav: false
                },
                900: {
                    items: 2,
                    nav: false
                },
                1170: {
                    items: 2,
                    nav: true
                }
            }
        });
    });


/* ================ testimonials ================ */
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                700: {
                    items: 1,
                    nav: false
                },
                900: {
                    items: 2,
                    nav: false
                },
                1170: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
        });
    });


/*==== Nav ====*/
    $('.navbar-collapse a').on('click',function(){
        $(".navbar-collapse").collapse('hide');
    });




/* ================ Nav ================ */
    $('.fa-caret-down').on("click", function(e) {
        e.preventDefault();
        $(this).next().slideToggle('');
    });
    $("#newsletter").on('submit',function(e) {

        var email = $('#email').val();
        if(email==''){
          function notify(from, align, icon, type, animIn, animOut){
               $.growl({
                   icon: icon,
                   title: ' <strong>Error!</strong> ',
                   message: "Email Address is required!",
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
               var nType = 'danger';
               var nAnimIn = 'animated rotateIn';
               var nAnimOut = 'animated rotateOut';
       
               notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
               return false;
        }
    
        e.preventDefault(); // avoid to execute the actual submit of the form.
    
        var form = $(this);
        var url = base_url+"/news-letter";
        
        $.ajax({
               type: "POST",
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
                   function notify(from, align, icon, type, animIn, animOut){
                     $.growl({
                         icon: icon,
                         title: ' <strong>Success!</strong> ',
                         message: "You have successfully subscribed to our newsletter",
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
                     var nAnimIn = 'animated rotateIn';
                     var nAnimOut = 'animated rotateOut';
             
                     notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
                     $('#newsletter').trigger("reset");
                     }
             });
    
        
    });

    $('.select2').select2(); 
    $('#country').on('change',function(){
          states(0);
    })

    $(document).ready(function() {
        if ($("#contactForm").length > 0) {
            $("#contactForm").validate({
                validateHiddenInputs: true,
                ignore: "",

                rules: {
                    first_name: {
                        required: true,
                        maxlength: 500
                    },
                    last_name: {
                        required: true,
                        maxlength: 500
                    },
                    email_address: {
                        required: true,
                    },
                    phone_number: {
                        required: true,
                    },
                    message: {
                        required: true,
                    },
                },
                messages: {

                    first_name: {
                        required: "First Name is required",
                    },
                    last_name: {
                        required: "Last Name is required",
                    }, 
                    email_address: {
                        required: "Email Address is required",
                    },
                    phone_number: {
                        required: "Phone Number is required",
                    },
                    message: {
                        required: "Message is required",
                    }

                },
            })
        }
                
    })

})(jQuery);