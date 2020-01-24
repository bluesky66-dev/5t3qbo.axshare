
function upsign() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
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
    }).done(function( responseText ) {
        $('#text-area-interview').text(responseText);
    });
}
function square2() {

    $.ajax({
        method: "GET",
        url: "square2.html",
    }).done(function( responseText ) {
        $('#text-area-interview').text(responseText);
    });
}
function square3() {

    $.ajax({
        method: "GET",
        url: "square3.html",
    }).done(function( responseText ) {
        $('#text-area').text(responseText);
    });
}
function square1_cover() {
    $.ajax({
        method: "GET",
        url: "square1-cover.html",
    }).done(function( responseText ) {
        $('#text-area-interview').text(responseText);
    });
}
function square2_cover() {

    $.ajax({
        method: "GET",
        url: "square2-cover.html",
    }).done(function( responseText ) {
        $('#text-area').text(responseText);
    });
}
function square3_cover() {

    $.ajax({
        method: "GET",
        url: "square3-cover.html",
    }).done(function( responseText ) {
        $('#text-area').text(responseText);
    });
}
function view_overlay() {
    $('.overlay').css('display', 'block') ;

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
function word(){
    $('.word').css('display','block');
    $('.word').css('position','absolute');
    $('.word').css('top','30px');

}
function insign(){
    $('.login').css('display','none');
    $('.login-signin').css('display','block');
}
function upsign(){
    $('.login-signin').css('display','none');
    $('.login').css('display','block');
}
function forgotpass(){
    $('.login-signin').css('display','none');
    $('.forgot-screen').css('display','block');
}
function never(){

    $('.forgot-screen').css('display','none');
    $('.login-signin').css('display','block');
}
function nextoverlay(){

    $('.overlay-home').css('display','none');
    $('.overlay-next-home').css('display','block');
}
function backoverlay(){
    $('.overlay-next-home').css('display','none');
    $('.overlay-home').css('display','block');
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
    var name=/^[A-Za-z\s]+$/;
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
    }  else {
        $("#about_result").css('display', 'none');
    }




}

function read1(show) {
    if (show) {
        $("#about_result1").css('display', 'block');
        $("#about_result1").css('font-size', '13px');
        $("#about_result1").css('font-weight', '400');
    }  else {
        $("#about_result1").css('display', 'none');
    }
}

function signup() {//var $result = $("#result");
    var formData = window.localStorage.getItem('formData');//payment hours account get
    formData = JSON.parse(formData);
    var email = formData.email;
    var first_name = formData.first_name;
    var last_name = formData.last_name;
    var password = formData.password;
    var user_liner = formData.user_liner;

    // test
    $.ajax({
        method: "POST",
        url: "CVUser.php",
        dataType: "json",
        data: {
            usFirstName: first_name,
            usLastName: last_name,
            usPassword: password,
            usEmail: email,
            userLiner: user_liner,
        }

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
}


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

            },
            user_liner: {
                required: true,
            },


        },
        errorElement : 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function(error, element) {
            if (element.attr("name") == "first_name" )
                error.insertAfter(".square-sign-box");
            else if  (element.attr("name") == "phone" )
                error.insertAfter(".some-other-class");
            else
                error.insertAfter(element);
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:
            var email = $("#email").val();
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var password = $("#password").val();
            var user_line = $("#user_liner").val();

            var formData = {
                email: email,
                first_name: first_name,
                last_name: last_name,
                password: password,
                user_line: user_line,

            };
            $.ajax({
                method: "POST",
                url: "async/register.php",
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
    $('#login-form').validate({
        rules: {
            email: {
                required: true,
                // email: true
            },
            password: {
                required: true,

            },
        },
        errorElement : 'div',
        errorLabelContainer: '.errorTxt',
        errorPlacement: function(error, element) {
            if (element.attr("name") == "first_name" )
                error.insertAfter(".square-sign-box");
            //border-red//

            else if  (element.attr("name") == "phone" )
                error.insertAfter(".some-other-class");
            else
                error.insertAfter(element);
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            // some other code
            // maybe disabling submit button
            // then:
            var email = $("#email").val();
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var password = $("#password").val();
            var user_line = $("#user_liner").val();

            var formData = {
                email: email,
                first_name: first_name,
                last_name: last_name,
                password: password,
                user_line: user_line,

            };
            $.ajax({
                method: "POST",
                url: "async/register.php",
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


