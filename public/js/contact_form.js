$(function() {
	"use strict";
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