$.validator.addMethod(
    "strongPassword",
    function (value, element) {
        return /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/.test(value) && /[A-Z]/.test(value) && /[0-9]/.test(value) && /[^A-Za-z0-9]/.test(value) && value.length > 7
    },
    "should include alphabets a-z, numbers 1-0 and special characters #&$£*?."
);

function upsign() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("insign").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "signup.html", true);
    xhttp.send();
}

function square1() {
    $.ajax({
        method: "GET",
        url: "square1.html",
    }).done(function (responseText) {
        $('#text-area-interview').text(responseText);
    });
}

function square2() {

    $.ajax({
        method: "GET",
        url: "square2.html",
    }).done(function (responseText) {
        $('#text-area-interview').text(responseText);
    });
}

function square3() {

    $.ajax({
        method: "GET",
        url: "square3.html",
    }).done(function (responseText) {
        $('#text-area').text(responseText);
    });
}

function square1_cover() {
    $.ajax({
        method: "GET",
        url: "square1-cover.html",
    }).done(function (responseText) {
        $('#text-area-interview').text(responseText);
    });
}

function square2_cover() {

    $.ajax({
        method: "GET",
        url: "square2-cover.html",
    }).done(function (responseText) {
        $('#text-area').text(responseText);
    });
}

function square3_cover() {

    $.ajax({
        method: "GET",
        url: "square3-cover.html",
    }).done(function (responseText) {
        $('#text-area').text(responseText);
    });
}

function view_overlay() {
    $('.overlay').css('display', 'block');

}

function view_overlay_reject() {
    $('.overlay-reject').css('display', 'block');
    $('body').css('overflow-y', 'hidden');

}

function hide_overlay() {
    $('.overlay').css('display', 'none');
    $('.overlay-reject').css('display', 'none');
}

function hide_overlay_reject() {
    $('.overlay-reject').css('display', 'none');
    $('body').css('overflow-y', 'scroll');

}

function view_overlay_home() {
    $('.overlay-home').css('display', 'block');
    $('.overlay-home').css('overflow-y', 'scroll');

}

function hide_overlay_home() {
    $('.overlay-home').css('display', 'none');
    $('.overlay-next-home').css('display', 'none');
}

function word(id) {
    $('.word').css('display', 'none');

    $('#doc' + id).css('display', 'block');
    $('.word-see').css('position', 'relative');

}
function downloadHide(id) {
    $('.word').css('display', 'none');
    $('#doc' + id).css('display', 'none');
    $('.wordFile' + id).css('display', 'none');

}
function downloadDelete(id) {
    $('.word').css('display', 'none');
    $('#doc' + id).css('display', 'none');
    $('.wordFile' + id).css('display', 'none');

    $.ajax({
        method: "POST",
        url: "async/fileDelete.php",
        dataType: "json",
        data: {
            delete: id
        },

    }).done(function (result) {
        var $resultDiv = $(".contact-reset-show");
        $resultDiv.hide();
        $resultDiv.removeClass("text-success text-danger");
        if (result.type === "error") {
            toastr.error('Excuse me')

        } else {

            toastr.success('delete successfully.');
            setTimeout(function () {
                $resultDiv.hide();
                correctly();
            }, 1000);
        }
    });
    console.log('id');
}
function insign() {

    $('.login').css('display', 'none');
    $('.login-signin').css('display', 'block');
}

function upsign() {
    $('.login-signin').css('display', 'none');
    $('.login').css('display', 'block');
}

function forgotpass() {

    $('.login-signin').css('display', 'none');
    $('.forgot-screen').css('display', 'block');
}
function recover(){
        //
        // window.location.replace("http://localhost:7003/reset_password.php");
}
function correctly() {
    window.location.replace("Location: /");
}
function never() {

    $('.forgot-screen').css('display', 'none');
    $('.login-signin').css('display', 'block');
}

function nextoverlay() {
    //
    // $('.overlay-home').css('display', 'none');
    // $('.overlay-next-home').css('display', 'block');
    //
}

function backoverlay() {
    $('.overlay-next-home').css('display', 'none');
    $('.overlay-home').css('display', 'block');
}
function docFile() {
    $('.login-signin').css('display', 'none');
    $('.login').css('display', 'block');
}

validateEmail('newtheme@outlook.com');

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validateEmai2(email_number) {
    var re1 = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re1.test(String(email_number).toLowerCase());
}

function user_name1(user_name) {
    var name = /^[A-Za-z\s]+$/;
    return name.test(user_name);
}

if (typeof Stripe !== "undefined") {
    var stripe = Stripe('pk_test_Q1zE6Ng0BGqpUE4vv0h3gvqj00EL6S0bkW');
}

function read(show) {
    if (show) {
        $("#about_result").css('display', 'block');
        $("#about_result").css('font-size', '13px');
        $("#about_result").css('font-weight', '400');
    } else {
        $("#about_result").css('display', 'none');
    }
}

function read1(show) {
    if (show) {
        $("#about_result1").css('display', 'block');
        $("#about_result1").css('font-size', '13px');
        $("#about_result1").css('font-weight', '400');
    } else {
        $("#about_result1").css('display', 'none');
    }
}

// function signup() {//var $result = $("#result");
//     var formData = window.localStorage.getItem('formData');//payment hours account get
//     formData = JSON.parse(formData);
//     var email = formData.email;
//     var first_name = formData.first_name;
//     var last_name = formData.last_name;
//     var password = formData.password;
//     var user_liner = formData.user_liner;
//     var check_out = formData.check_out;
//
//     // test
//     $.ajax({
//         method: "POST",
//         url: "CVUser.php",
//         dataType: "json",
//         data: {
//             usFirstName: first_name,
//             usLastName: last_name,
//             usPassword: password,
//             usEmail: email,
//             userLiner: user_liner,
//             usCheckout:check_out,
//         }
//
//     }).done(function (result) {
//         var $resultDiv = $(".");
//         $resultDiv.hide();
//         $resultDiv.removeClass("text-success text-danger");
//         if (result.type === "error") {
//             $resultDiv.addClass("text-danger");
//             $resultDiv.text(result.text);
//         } else {
//             document.getElementById("register-form").reset();
//             $resultDiv.addClass("text-success");
//             $resultDiv.text("Thank you, your message has been sent successfully.");
//             setTimeout(function () {
//                 $resultDiv.hide();
//                 insign();
//             }, 1000);
//         }
//     });
// }


$(document).ready(function () {

    $('#register-form').validate({
        rules: {
            first_name: {
                required: true
            },

            last_name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                strongPassword: true,

            },
            user_liner: {
                required: true,
            },
            check_out: {
                required: true,
            },

        },
        messages: {
            first_name: "Enter your first name",
            last_name: "Enter your last name",
            email: "Enter your email",
            password: {
                required: "Enter your password"
            },
            user_liner: "Enter your user liner",
            check_out: "Enter your check",
        },
        errorElement: 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function (error, element) {
            // if (element.attr("name") == "first_name" )
            //     $(".error-textarea").html(error);
            // else if (element.attr("name") == "email" )
            //     $(".error-email").html(error);

            if (element.attr("name") == "first_name")
                $(".error-textarea").html(error);
            else if (element.attr("name") == "last_name")
                $(".error-last").html(error);
            else if (element.attr("name") == "email")
                $(".error-email").html(error);
            else if (element.attr("name") == "password")
                $(".error-password").html(error);
            else if (element.attr("name") == "user_liner")
                $(".error-liner").html(error);
            else if (element.attr("name") == "check_out")
                $(".error-check").html(error);
            else
                error.insertAfter(element);
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:
            var $resultDiv = $(".test-message");
            $resultDiv.text("");
            var email = $("#email").val();
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var password = $("#password").val();
            var user_liner = $("#user_liner").val();
            var check_out = $("#term_check").val();

            if (!$('#term_check').is(":checked")) {
                alert('You much agree the terms!');
                return false;
            }
            var formData = {
                first_name: first_name,
                last_name: last_name,
                password: password,
                email: email,
                user_liner: user_liner,
                check_out: check_out,
            };
            $.ajax({
                method: "POST",
                url: "async/register.php",
                dataType: "json",
                data: formData

            }).done(function (result) {

                $resultDiv.show();
                $resultDiv.removeClass("text-success text-danger");
                if (result.type === "error") {

                    $resultDiv.addClass("text-danger");
                    $resultDiv.text(result.text);
                    toastr.error('Excuse me, The email is already exist.So your sign up has not been sent.')
                } else {

                    document.getElementById("register-form").reset();
                    $resultDiv.addClass("text-success");
                    $resultDiv.text("Please test email verify.");
                    toastr.success('Thank you, your sign up has been sent successfully.');
                    setTimeout(function () {
                        $resultDiv.hide();

                    }, 3000);
                }
            });

        },
        invalidHandler: function (e, validator) {
            // $("div.error").hide();
        },
    });

    $('#login-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                strongPassword: true,
            },
        },
        messages: {
            email: "Enter your email",
            password: {
                required: "Enter your password"
            },
        },
        errorElement: 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function (error, element) {

            if (element.attr("name") == "email")
                $(".error-email-signin").html(error);
            else if (element.attr("name") == "password")
                $(".error-password-signin").html(error);

            else
                error.insertAfter(element);
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:
            var email = $("#loginEmail").val();
            var password = $("#loginPass").val();
            var formData = {
                usPassword: password,
                usEmail: email,
            };

            $.ajax({
                method: "POST",
                url: "async/login.php",
                dataType: "json",
                data: formData

            }).done(function (result) {


                if (result.type === "error") {

                    toastr.error('You email or password is not correct');
                } else {
                    document.getElementById("login-form").reset();
                    window.location.href = "/" + result.data;

                }
            });

        },
        invalidHandler: function (e, validator) {
            // $("div.error").hide();
        },
    });

    $('#login-forgot').validate({
        rules: {
            email: {
                required: true,
                email:true,
            },
        },
        messages: {
            email: "Enter your email",
        },
        errorElement: 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function (error, element) {

            if (element.attr("name") == "email")
                $(".error-email-address").html(error);

            //border-red//

            else if (element.attr("name") == "phone")
                error.insertAfter(".some-other-class");
            else
                error.insertAfter(element);
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:
            var email = $("#forgot-email").val();


            var formData = {
                email: email,
            };
            $.ajax({
                method: "POST",
                url: "async/forget.php",
                dataType: "json",
                data: formData

            }).done(function (result) {
                var $resultDiv = $(".contact-forget-show");
                $resultDiv.hide();
                $resultDiv.removeClass("text-success text-danger");
                if (result.type === "error") {
                    $resultDiv.addClass("text-danger");
                    $resultDiv.text(result.text);
                    toastr.error('Excuse me, your sign up has not been sent.The email is already exist')
                } else {
                    document.getElementById("login-forget").reset();
                    $resultDiv.addClass("text-success");
                    $resultDiv.text("Thank you, your message has been sent successfully.");
                    toastr.success('Thank you,  sent successfully.');
                    setTimeout(function () {
                        $resultDiv.hide();
                        recover();
                    }, 1000);
                }
            });

        },
        invalidHandler: function (e, validator) {
            // $("div.error").hide();
        },
    });

    $('#send-link').validate({
        rules: {
            send_user_name: {
                required: true,

            },
            send_email_address: {
                required: true,
                email:true,
               },
            architect:{
                required: true,
            },
            immediately:{
                required: true,
            },
            text_area_send:{
                required: true,
            }
        },
        messages: {
            send_user_name: "Enter your name",
            send_email_address:"Enter your email",
            architect: "Enter your architect",
            immediately: "Enter your immediately",
            text_area_send: "Enter your min 250,max 500 characters",
        },

        errorElement: 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function (error, element) {
            console.log(element.attr("name"));
            if (element.attr("name") == "send_user_name"){
                $(".error-username-rec").html(error);
            }
            else if (element.attr("name") == "send_email_address")
                $(".error-email-rec").html(error);
            else if (element.attr("name") == "architect")
                $(".error-arc").html(error);
            else if (element.attr("name") == "immediately")
                $(".error-imm").html(error);
            else if (element.attr("name") == "text_area_send")
                $(".error-textarea-rec").html(error);
            else
                error.insertAfter(element);
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:
            var send_user_name = $("#send_user_name").val();
            var send_email_address = $("#send_email_address").val();
            var architect = $("#architect").val();
            var immediately = $("#immediately").val();
            var text_area_send = $("#text_area_send").val();


            var formData = {
                send_user_name  : send_user_name,
                send_email_address: send_email_address,
                architect  : architect,
                immediately: immediately,
                text_area_send: text_area_send,
            };

            $.ajax({
                method: "POST",
                url: "async/sendLink.php",
                dataType: "json",
                data: formData

            }).done(function(result) {
                if (result.type === "error") {

                    toastr.error('Excuse me, your sign up has not been sent.The email is already exist');
                } else {
                    document.getElementById("send_Link").reset();
                    toastr.success('Thank you,  sent successfully.');
                    setTimeout(function () {

                    }, 1000);
                }

            });
        },


    invalidHandler: function (e, validator) {
            // $("div.error").hide();
        },
    });

    $('#interview-form').validate({
        rules: {
            interview_name: {
                required: true
            },

            interview_email: {
                required: true,
                email:true
            },
            interview_subject: {
                required: true,
            },
            text_area_interview:{
                required:true,
            }
        },
        messages: {
            interview_name: "Enter your  name",
            interview_email: "Enter your email",
            interview_subject: "Enter your subject",
            text_area_interview:"Enter min 250,max 500 characters",
        },
        errorElement: 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function (error, element) {
            // if (element.attr("name") == "first_name" )
            //     $(".error-textarea").html(error);
            // else if (element.attr("name") == "email" )
            //     $(".error-email").html(error);

            if (element.attr("name") == "interview_name")
                $(".error-interview-name").html(error);
            else if (element.attr("name") == "interview_email")
                $(".error-interview-email").html(error);
            else if (element.attr("name") == "interview_subject")
                $(".error-interview-subject").html(error);
            else if (element.attr("name") == "text_area_interview")
                $(".error-interview-textarea").html(error);

            else
                error.insertAfter(element);
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:

            var interview_name = $("#interview_name").val();
            var interview_email = $("#interview_email").val();
            var interview_subject = $("#interview_subject").val();
            var text_area_interview = $("#text_area_interview").val();

            var formData = {
                interview_name: interview_name,
                interview_email: interview_email,
                interview_subject: interview_subject,
                text_area_interview: text_area_interview,

            };
            $.ajax({
                method: "POST",
                url: "async/sendInterview.php",
                dataType: "json",
                data: formData

            }).done(function (result) {

                if (result.type === "error") {
                    $resultDiv.addClass("text-danger");
                    $resultDiv.text(result.text);
                    toastr.error('Excuse me, your sign up has not been sent.The email is already exist')
                } else {
                    document.getElementById("register-form").reset();
                            toastr.success('Thank you, your sign up has been sent successfully.');
                    setTimeout(function () {
                     }, 1000);
                }
            });

        },
        invalidHandler: function (e, validator) {
            // $("div.error").hide();
        },
    });

    $('#reject-form').validate({
        rules: {
            reject_name: {
                required: true
            },

            reject_address: {
                required: true,
                email:true
            },
            reject_textarea: {
                required: true,
            },

        },
        messages: {
            reject_name: "Enter your  name",
            reject_address: "Enter your email",
            reject_textarea: "Enter your textarea",

        },
        errorElement: 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function (error, element) {
            // if (element.attr("name") == "first_name" )
            //     $(".error-textarea").html(error);
            // else if (element.attr("name") == "email" )
            //     $(".error-email").html(error);

            if (element.attr("name") == "reject_name")
                $(".error-reject-name").html(error);
            else if (element.attr("name") == "reject_address")
                $(".error-reject-email").html(error);
            else if (element.attr("name") == "reject_textarea")
                $(".error-reject-textarea").html(error);

            else
                error.insertAfter(element);
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:

            var reject_name = $("#reject_name").val();
            var reject_address = $("#reject_address").val();
            var reject_textarea = $("#reject_textarea").val();

            var formData = {
                reject_name: reject_name,
                reject_address: reject_address,
                reject_textarea: reject_textarea,


            };
            $.ajax({
                method: "POST",
                url: "async/sendReject.php",
                dataType: "json",
                data: formData

            }).done(function (result) {

                if (result.type === "error") {
                    $resultDiv.addClass("text-danger");
                    $resultDiv.text(result.text);
                    toastr.error('Excuse me, your sign up has not been sent.The email is already exist')
                } else {
                    document.getElementById("register-form").reset();
                    toastr.success('Thank you, your sign up has been sent successfully.');
                    setTimeout(function () {
                    }, 1000);
                }
            });

        },
        invalidHandler: function (e, validator) {
            // $("div.error").hide();
        },
    });


    $("#square1_cover").click(function () {
        square1_cover(true);
    });
    $("#square2_cover").click(function () {
        square2_cover(true);
    });
    $("#square3_cover").click(function () {
        square3_cover(true);
    });
    $("#home-link").click(function () {
        view_overlay_home(true);
    });
    $("#interview").click(function () {
        view_overlay(true);
    });
    $("#reject").click(function () {
        view_overlay_reject(true);
    });
    $("#square1").click(function () {
        square1(true);
    });
    $("#square2").click(function () {
        square2(true);
    });
    $("#square3").click(function () {
        square3(true);
    });

    $("#word-see").click(function () {
        word(true);
    });

    $('#when_come').data('datepicker');

    $("#read").click(function () {
        read(true);
    });
    $("#read1").click(function () {
        read1(true);
    });
    $("#uploadVideo").click(function ( e) {

        $("input[name=fileType]").val("video");
    });
    $("#uploadDoc1, #uploadDoc2").click(function ( e) {

        $("input[name=fileType]").val("doc");
    });

});


