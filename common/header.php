<?php require_once( "load.php" );
global $user, $isLogin;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> nolawyer.org.uk </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">

    <link href="images/onboarding_icon2_u12.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://js.stripe.com/v3"></script>
    <script>
        function loadVid() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "video.html", true);
            xhttp.send();
        }

        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo-vid").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "pdf-png.html", true);
            xhttp.send();
        }


    </script>
</head>
<body>
