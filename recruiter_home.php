<?php
require_once( "common/header.php" );
?>

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
                                            <div  class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 " onclick="word()">
                                                <div >
                                                <a > <img src="images/document.png" class="word-see"></a>
                                                </div>
                                                <p class="bold-p">Document.doc</p>
                                                <p class="solid-p">date updated</p>
                                                <div class="word" style="display: none">
                                                    <div class="word-select">
                                                        <span>Select action</span>
                                                    </div>

                                                    <div class="download">
                                                        <span>Download</span>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 " onclick="word()">
                                                <div >
                                                <img src="images/document.png" class="word-see">
                                                </div>
                                                <p class="bold-p">Document.doc</p>
                                                <p class="solid-p">date updated</p>
                                                <div class="word" style="display: none">
                                                    <div class="word-select">
                                                        <span>Select action</span>
                                                    </div>

                                                    <div class="download">
                                                        <span>Download</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" >
                                                <img src="images/pdf.png">
                                                <p class="bold-p">Document.pdf</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/pdf.png">
                                                <p class="bold-p">Document.pdf</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/jpeg.png">
                                                <p class="bold-p">Document.jpeg</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/png.png">
                                                <p class="bold-p">Document.png</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/jpeg.png">
                                                <p class="bold-p">Document.jpeg</p>
                                                <p class="solid-p">date updated</p>

                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/ppt.png">
                                                <p class="bold-p">Document.ppt</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
                                                <img src="images/xlsx.png">
                                                <p class="bold-p">Document.xlsx</p>
                                                <p class="solid-p">date updated</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 onclick="word()"">
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



    <div class="overlay" style="display: none">
        <div class="overlay-bg" onclick="hide_overlay()"></div>
            <div class="background" ></div>
            <div class="white-background">
                <header class="cv-header">
                    <a href="javascript: void (0);"  onclick="hide_overlay()" ><img  src="images/re-triangle.png"></a>
                    <h1>Send interview invite</h1>
                </header>

                <div class="content">
                    <div class="content-space">
                    </div>
                    <div class="reject-full2">
                        <div class="from-span2">
                            <span>From:</span>
                        </div>
                    </div>

                    <div class="reject-full2">
                        <div class="input-text">
                            <input type="text" placeholder="Sender name" class="from-reject-input">
                            <hr style="border-top: 1px solid white;margin-bottom: 0">
                        </div>
                    </div>

                    <div class="reject-full2">
                        <div class="input-text">
                            <input type="text" placeholder="Sender email address" class="from-reject-input">
                            <hr>
                        </div>
                    </div>

                    <div class="reject-full2">
                        <div class="from-span2">
                            <span>Applicant email addres</span>
                        </div>
                    </div>

                    <div class="reject-full2">

                        <div class="input-text">
                            <input id="to-james" type="text" placeholder="James Orior" class="from-reject-input">
                            <hr style="margin-top: 3px">
                        </div>
                    </div>

                    <div class="reject-full2">
                        <div class="from-span2">
                            <span>Your subject</span>
                        </div>
                    </div>
                    <div class="reject-full2">
                        <div class="subject-e-g">
                            <input  type="text" placeholder="Subject e.g.Congratulations you're invited to attend interview" class="from-reject-input">
                            <hr>
                        </div>
                    </div>
                    <div class="reject-full2">
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


                    <div class="reject-full-textarea">
                        <div class="input-text">
                            <textarea  id="text-area-interview"  placeholder="Enter details for your selections" minlength="250" maxlength="500"></textarea>
                        </div>
                    </div>

                    <div class="reject-full2">
                        <div class="drag">
                            Drag and Drop or Click to attached file
                        </div>
                    </div>

                    <div class="back-overlay">
                        <div class="overlay-home-bottom" onclick="nextoverlay()">
                            <a href="javascript: void (0);">

                                <span>&nbsp Send invite &nbsp &nbsp</span>
                                <img src="images/overlay-bottom.png">
                            </a>
                        </div>

                    </div>


                </div>
            </div>
    </div>

    <div class="overlay-reject" style="display: none">
        <div class="overlay-bg" onclick="hide_overlay_reject()">
        </div>
        <div class="background" > </div>
        <div class="white-background2">
            <header class="cv-header">
                <a href="javascript: void (0);"  onclick="hide_overlay_reject()"> <img  src="images/re-triangle.png"></a>
                <h1>Send rejection & feedback</h1>
            </header>

            <div class="content">

                <div class="content-space2">
                </div>
                <div class="reject-full2">
                    <div class="from-span2">
                        <span>From:</span>
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="input-text">
                        <input type="text" placeholder="Sender name" class="from-reject-input">
                        <hr style="border-top: 1px solid white;margin-bottom: 0">
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="input-text">
                        <input type="text" placeholder="Sender email address" class="from-reject-input">
                        <hr>
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="from-span2">
                        <span>Applicant email addres</span>
                    </div>
                </div>

                <div class="reject-full2">

                    <div class="input-text">
                        <input id="to-james1" type="text" placeholder="James Orior" class="from-reject-input">
                        <hr style="margin-top: 3px">
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="select"> Select why you're rejecting James Orior Application</div>
                </div>

                <div class="reject-full">
                        <div class="square_reject-div">
                            <div class=" square-reject-half">
                                <span>Little years of experience</span>
                            </div>
                            <div class=" square-reject-half">
                                <span >No relevant experience</span>
                            </div>

                    </div>
                </div>

                <div class="reject-full">
                        <div class="square_reject-div">
                            <div class="square-reject-full">
                                <span>Did not meet the full list of essential criteria</span>
                            </div>

                        </div>
                </div>

                <div class="reject-full">
                        <div class="square_reject-div">
                            <div class="square-reject-ajax1">
                                <span>Not enough experience / portfolio</span>
                            </div>
                            <div class="square-reject-ajax">
                                <span >No Certification</span>
                            </div>
                        </div>
                </div>

                <div class="reject-full">
                    <p class="select"> What is your honest recommendation for James Orior so he can improve on his or her next application</p>
                </div>

                <div class="reject-full">
                        <div class="square_reject-div">
                            <div class="square-reject-half">
                                <span>Do some work experience</span>
                            </div>
                            <div class="square-reject-half">
                                <span >Improve on CV contents</span>
                            </div>

                        </div>
                </div>

                <div class="reject-full">
                        <div class="square_reject-div">
                            <div class="square-reject-half">
                                <span>Improve on portfolio contents</span>
                            </div>
                            <div class="square-reject-half">
                                <span >Apply for Entry / Junior Roles</span>
                            </div>

                        </div>
                </div>

                <div class="reject-full-textarea">
                        <textarea id="reject-textarea"  placeholder="Enter details for your selections"></textarea>
                </div>

                <div class="reject-full2">
                    <div class="drag2">
                        Drag and Drop or Click to attached file
                    </div>
                </div>

                <div class="back-overlay">
                    <div class="overlay-home-bottom2" onclick="nextoverlay()">
                        <a href="javascript: void (0);">

                            <span>Send rejection / feedback</span>
                            <img src="images/pear.png">
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>





<?php
require_once( "common/footer.php" );
?>


