
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> nolawyer.org.uk </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">

     <link href="images/onboarding_icon2_u12.png" rel="icon">

<!--    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i" rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">-->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://js.stripe.com/v3"></script>


</head>

<body>
<div class="background">
    <div class="white-background">
        <header class="cv-header">
            <a href="recruiter_<?php echo SITE_URL;?>"><img src="images/red%20triangle.png"></a>
            <h1>Send rejection & feedback</h1>
        </header>

        <div class="content">
            <div class="content-space">
            </div>
            <div class="reject-full">
                <div class="from-span">
                     <span>From:</span>
                </div>

                <div class="input-text">
                    <input  type="text" placeholder="Sender name" class="from-reject-input">
                    <hr>
                </div>
            </div>

            <div class="reject-full">
                <div class="from-span">
                        <span></span>
                    </div>
                    <div class="input-text">
                        <input  type="text" placeholder="Sender email address" class="from-reject-input">
                        <hr>
                    </div>
            </div>

            <div class="reject-full">
                <div class="from-span" style="margin-top: 12px;" >
                    <span> To:</span>
                </div>
                <div  class="input-text">
                    <input id="to-james-reject" type="text" placeholder="James Orior" class="from-reject-input">
                    <hr style="margin-top: 3px">
                </div>
            </div>


            <p class="select"> Select why you're rejecting James Orior Application</p>

            <div class="reject-full">
                <div class="from-span">
                </div>
                <div  class="input-text">
                    <div class="square_reject-div">
                        <div class="square-reject-ajax">
                            <span>Little years of experience</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >No relevant experience</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >Not a Good Fit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reject-full">
                <div class="from-span">
                </div>
                <div  class="input-text">
                    <div class="square_reject-div">
                        <div class="square-reject-ajax1">
                            <span>Did not meet the full list of essential criteria</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >No desired experience</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="reject-full">
                <div class="from-span">
                </div>
                <div  class="input-text">
                    <div class="square_reject-div">
                        <div class="square-reject-ajax1">
                            <span>Not enough evidence of experience / portfolio</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >Other candidates were better</span>
                        </div>

                    </div>
                </div>
            </div>

            <p class="select"> What is your honest recommendation for James Orior so he can improve on his or her next application</p>

            <div class="reject-full">
                <div class="from-span">
                </div>
                <div  class="input-text">
                    <div class="square_reject-div">
                        <div class="square-reject-ajax">
                            <span>Do some work experience</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >Improve on CV contents</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >Do a Certification Course</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reject-full">
                <div class="from-span">
                </div>
                <div  class="input-text">
                    <div class="square_reject-div">
                        <div class="square-reject-ajax">
                            <span>Improve on portfolio contents</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >Apply for Entry / Junior Roles</span>
                        </div>
                        <div class="square-reject-ajax">
                            <span >Do a Certification Course</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="reject-full">
                <div class="from-span">
                </div>
                <div  class="input-text">
                    <textarea id="reject-textarea"  placeholder="Enter details for your selections"></textarea>
                </div>
            </div>


        </div>
    </div>
</div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
<!--    <script src="lib/jquery/jquery-3.2.1.min.js"></script>-->
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/additional-methods.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script src="js/book.js"></script>

</body>
</html>
