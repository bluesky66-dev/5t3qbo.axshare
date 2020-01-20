
<?php
require_once( "common/header.php" );
?>
<body>
<header id="header">
    <div   class="recruiter">
        <div class="rec-logo">
            <div class="logo-img">
                <a href="recruiter_home.php"><img src="images/tag.png"></a>
            </div>
            <div class="logo-span">
                <a href="recruiter_home.php"><span>CVLink</span></a>
            </div>

        </div>
        <div class="logo-button">
        <button id="interview" class=" right_button btn" onclick="view_overlay()">Invite for interview</button>

        <button id="reject" class=" right_button2 btn" onclick="view_overlay_reject()">Reject CV</button>
        </div>
    </div>
</header>
    <div id="aboutScreen">
        <div  class="angle-recruiter">
            <div id="about">
                <div >
                    <div class="row rec-row ">
                        <div class="col-xl-6 rec-left" >
                            <div class="square_book">
                                <h1 class="user-name" >James Orior : </h1>
                                <div class="square_book_span">
                                <span>Hardworking, Trustworthy, Dynamic, and Determined Individual</span>
                                </div>
                                <button class="delete_video" >
                                    video pitch
                                </button>
                            </div>

                            <div class="square-rec-video-box">
                                <div class="square-rec-video embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ohf_1212tqM? frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay=1; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen=yes" scrolling="no" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                                </div>
                             </div>
                        </div>

                        <div class="col-xl-6  rec-right" >
                                <div id="rec-doc" class="square_book">
                                    <h1 class="user-name" > My Document Repository</h1>
                                </div>
                            <div class="square-col-video-box">
                                    <div class="square-col-video" >
                                        <div class="row">
                                            <div id="word-see" class="col-xl-3 " onclick="word()">
                                                <a > <img src="images/document.png"></a>
                                                <p class="bold-p">Document.doc</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/document.png">
                                                <p class="bold-p">Document.doc</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/pdf.png">
                                                <p class="bold-p">Document.pdf</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/pdf.png">
                                                <p class="bold-p">Document.pdf</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/jpeg.png">
                                                <p class="bold-p">Document.jpeg</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/png.png">
                                                <p class="bold-p">Document.png</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/jpeg.png">
                                                <p class="bold-p">Document.jpeg</p>
                                                <p class="solid-p">date updated</p>

                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                        </div>
                                    </div>
                                </div>

                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="background: #077cff">


    <div class="overlay" style="display: none">
        <div class="overlay-bg" onclick="hide_overlay()"></div>
            <div class="background" ></div>
            <div class="white-background">
                <header class="cv-header">
                    <a href="javascript: void (0);"  onclick="hide_overlay()" ><img  src="images/red%20triangle.png"></a>
                    <h1>Send interview invite</h1>
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
                            <input id="to-james" type="text" placeholder="James Orior" class="from-reject-input">
                            <hr style="margin-top: 3px">
                        </div>
                    </div>

                    <div class="reject-full">

                            <div class="subject">
                                <div class="your-subject">
                                    <span>Your subject line</span>
                                </div>
                                <div class="subject-e-g">
                                    <input  type="text" placeholder="Subject e.g.Congratulations you're invited to attend interview" class="from-reject-input">
                                    <hr>
                                </div>
                            </div>

                    </div>

                    <div class="reject-full">

                            <div class="square_invite-div">
                                <div class="square-invite-ajax">
                                    <button onclick="square1()"> <span>Interview Invitation Template 1</span> </button>
                                </div>
                                <div class="square-invite-ajax">
                                    <button onclick="square2()"> <span >Interview Invitation Template 2</span> </button>
                                </div>
                                <div class="square-invite-ajax">
                                    <button onclick="square3()"> <span >Interview Invitation Template 3</span> </button>
                                </div>
                            </div>

                    </div>



                    <div class="reject-full">


                            <textarea id="text-area"  placeholder="invite sample letter contents goes here"></textarea>


                    </div>


                </div>
            </div>

    </div>

    <div class="overlay-reject" style="display: none">
        <div class="overlay-bg" onclick="hide_overlay_reject()">

        </div>
        <div class="background" > </div>
        <div class="white-background">
            <header class="cv-header">
                <a href="javascript: void (0);"  onclick="hide_overlay_reject()"> <img  src="images/red%20triangle.png"></a>
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

                <div class="reject-full">
                <p class="select"> Select why you're rejecting James Orior Application</p>
                </div>

                <div class="reject-full">

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
                <div class="reject-full">

                        <div class="square_reject-div">
                            <div class="square-reject-ajax1">
                                <span>Did not meet the full list of essential criteria</span>
                            </div>
                            <div class="square-reject-ajax">
                                <span >No desired experience</span>
                            </div>

                        </div>

                </div>
                <div class="reject-full">

                        <div class="square_reject-div">
                            <div class="square-reject-ajax1">
                                <span>Not enough evidence of experience / portfolio</span>
                            </div>
                            <div class="square-reject-ajax">
                                <span >Other candidates were better</span>
                            </div>

                        </div>

                </div>

                <div class="reject-full">
                <p class="select"> What is your honest recommendation for James Orior so he can improve on his or her next application</p>
                </div>

                <div class="reject-full">


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

                <div class="reject-full">

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


                <div class="reject-full">

                        <textarea id="reject-textarea"  placeholder="Enter details for your selections"></textarea>


                </div>


            </div>
        </div>
    </div>

    <div class="word" style="display: none">
        <div class="word-select">
            <span>Select action</span>

        </div>
        <div class="download">
            <span>Download</span>

        </div>
    </div>

<?php
require_once( "common/header.php" );
?>


