<?php
global $pageName;
require_once( "load.php" );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> CV Link </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">

    <link href="images/favicon.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


<!--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>-->

    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <?php
    if (isset($pageName) && $pageName == 'terms') {
        ?>
        <link href="css/style1.css" rel="stylesheet">
        <?php
    }
    ?>
    <link href="css/style.css" rel="stylesheet">


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