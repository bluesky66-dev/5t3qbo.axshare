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

function word() {
    $('.word').css('display', 'block');
    $('.word').css('position', 'absolute');
    $('.word').css('top', '30px');

}

function insign() {
    console.log("ddddddddddddd");
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

function never() {

    $('.forgot-screen').css('display', 'none');
    $('.login-signin').css('display', 'block');
}

function nextoverlay() {

    $('.overlay-home').css('display', 'none');
    $('.overlay-next-home').css('display', 'block');
}

function backoverlay() {
    $('.overlay-next-home').css('display', 'none');
    $('.overlay-home').css('display', 'block');
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
//         var $resultDiv = $(".contact-result");
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
                // email: true
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
            var $resultDiv = $(".contact-result-show");
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
                console.log('dddddd');
                $resultDiv.hide();
                $resultDiv.removeClass("text-success text-danger");
                if (result.type === "error") {
                    console.log('bbbbbbbbb');
                    $resultDiv.addClass("text-danger");
                    $resultDiv.text(result.text);
                } else {
                    console.log('aaaaaaaaa');
                    document.getElementById("register-form").reset();
                    $resultDiv.addClass("text-success");
                    $resultDiv.text("Thank you, your message has been sent successfully.");
                    setTimeout(function () {
                        $resultDiv.hide();
                        insign();
                    }, 1000);
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
            var email = $("#loginEmail").val();
            var password = $("#loginPass").val();
            if (!$('#remember-check').is(":checked")) {
                alert('You much agree the remember!');
                return false;
            }
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
                var $resultDiv = $(".contact-logo-show");
                $resultDiv.hide();
                $resultDiv.removeClass("text-success text-danger");
                if (result.type === "error") {
                    $resultDiv.addClass("text-danger");
                    $resultDiv.text(result.text);
                } else {
                    document.getElementById("login-form").reset();
                    $resultDiv.addClass("text-success");
                    $resultDiv.text("Thank you, You logged in successfully.");
                    window.location.href += "/" + result.data;
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
                // email: true
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
            var email = $("#email").val();


            var formData = {
                usEmail: email,
            };
            $.ajax({
                method: "POST",
                url: "async/",
                dataType: "json",
                data: formData

            }).done(function (result) {
                var $resultDiv = $(".contact-result");
                $resultDiv.show();
                $resultDiv.removeClass("text-success text-danger");
                if (result.type === "error") {
                    $resultDiv.addClass("text-danger");
                    $resultDiv.text(result.text);
                } else {
                    document.getElementById("contact-form").reset();
                    $resultDiv.addClass("text-success");
                    $resultDiv.text("Thank you, your message has been sent successfully.");
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
});


