<?php
require_once( "common/header.php" );
?>
<header id="header">
    <div class="header-relative">
        <div class="logo">
            <div class="logo-img">
                <a href="Home.php"><img src="images/tag.png"></a>
            </div>
            <div class="logo-span">
                <a href="Home.php"><span>CVLink</span></a>
            </div>

        </div>

        <div class="header-home">

            <div id="home-link" class="home-button">
                <a> <button>Share CVLink</button></a>
            </div>
        </div>
    </div>
</header>
<div id="home">
    <div class="angle-home">
        <div id="about">
            <div class="email-url">
                <div class="blue_span">
                    <span >http://www.cvlink.co/</span>
                    <span>
                        <?php echo $url?>
                    </span>
                </div>
            </div>

            <div class="row home-row">
                <div class="col-xl-6 home-left" >
                    <div class="square_book">

                        <div class="square_book_span"><span> Hardworking, Trustworthy, Dynamic, and Determined Individual</span></div>
                        <button class="delete_video_home">
                            Upload pitch
                        </button>

                    </div>

                    <form id="demo" class="square_video_box" action="async/upload.php" method="post" enctype="multipart/form-data">
                        <div class="square_video">
                            <img src="images/re-video.png">
                            <p><span>No video pitch found</span><br>
                            <span>CVLink with video pitch less than 5 min long, get 75% chance of landing an interview or call back</span></p>
                            <button class="upload-video" onclick="loadVid()" type="submit" value="Upload Image" name="submit">Upload video</button>
                        </div>

                        <div class="square-video-video-box" style="display: none" type="file" name="fileToUpload" id="fileToUpload>
                        <div class="square-video-video embed-responsive embed-responsive-16by9" >
<!--                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ohf_1212tqM? frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay=1; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen=yes" scrolling="no" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>-->

                    </form>
                </div>
            </div>

            <div id="demo-vid" class="col-xl-6 home-right" >
                        <div class="square_book repost">
                            <h1 class="user-name repository"> My Document Repository</h1>
                            <button class="delete_video_home">
                                Upload documents
                            </button>
                        </div>

                        <div class="square_video_box">
                            <div class="square_video">
                                <img src="images/re-word.png">
                                <p><span>No document found</span><br>
                                <span>you shoud have at least 1 CV copy to share your CVLink</span></p>
                                <button class="upload-video" onclick="loadDoc()">Upload documents</button>

                            </div>

                        </div>
                    </div>

        </div>
    </div>
</div>


<div class="overlay-home" style=" display: none">

    <div class="overlay-home-bg" onclick="hide_overlay_home()">
    </div>
    <div class="white-background">
        <header class="cv-header">
            <a href="javascript: void (0);" onclick="hide_overlay_home()"><img src="images/re-triangle.png"></a>
            <h1>Send CVlink</h1>
        </header>
        <div class="content">
            <div class="content-space">
            </div>
            <div class="reject-full">
                <div class="from-span">
                    <span>Recruiter's name</span>
                </div>
            </div>

            <div class="reject-full">
                <div class="input-text">
                    <input type="text" placeholder="Recruiters name" class="from-reject-input">
                    <hr>
                </div>
            </div>

            <div class="reject-full">
                <div class="from-span">
                    <span>Recruiter's email address</span>
                </div>
            </div>

            <div class="reject-full">
                <div class="input-text">
                    <input type="text" placeholder="Recruiters email address" class="from-reject-input">
                    <hr>
                </div>
            </div>

            <div class="reject-full">
                <div class="from-span">
                    <span>Your subject</span>
                </div>
            </div>

            <div class="reject-full row" >
                <div class="" style="width: 100%;">
                <div class="input-text-1">
                    <div class=""  style="padding-left: 0;flex: 1">
                        <input type="text" placeholder="job title e.g User Experience Architect" class="from-reject-input-1">
                        <hr >
                    </div>

                    <div class="" style="padding-left: 20px;padding-right: 0px">
                        <input type="text" placeholder="Immediately Availal" class="from-reject-input-2">
                        <hr>
                    </div>
                </div>
                </div>

            </div>

            <div class="reject-full">

                    <div class="square_invite-div">
                        <div id="square1_cover" class="square-invite-ajax">
                            <button onclick="square1_cover()"><span>Cover Letter Template 1</span></button>
                        </div>
                        <div id="square2_cover" class="square-invite-ajax">
                            <button onclick="square2_cover()"><span>Cover Letter Template 2</span></button>
                        </div>
                        <div id="square3_cover" class="square-invite-ajax">
                            <button onclick="square3_cover()"><span>Cover Letter Template 3</span></button>
                        </div>
                    </div>

            </div>

            <div class="reject-full-textarea">
                <div class="input-text">

                    <textarea rows=""  id="text-area"  placeholder="cover letter template contents goes here" minlength="250" maxlength="500"></textarea>

                </div>
            </div>

            <div class="back-overlay">

                    <div class="overlay-home-bottom" onclick="nextoverlay()">
                        <a href="javascript: void (0);">
                        <img src="images/overlay-bottom.png">
                        <span>&nbsp Send CVLink</span>
                        </a>
                    </div>

            </div>


        </div>
    </div>
</div>

<div class="overlay-next-home" style="overflow: scroll; display: none">

    <div class="overlay-home-bg" onclick="hide_overlay_home()">
    </div>
    <div class="white-background">
        <header class="cv-header">
            <a href="javascript: void (0);" onclick="hide_overlay_home()"><img src="images/re-triangle.png"></a>
            <h1>Send CVlink</h1>
        </header>

        <div class="next-home">
           <div class="reject-full" style="flex: 1;margin-bottom: 10px;">
               <div class="home-next-p">
                   <p>Your CVLink "http://www.cvlink.co/jamesorior</p>
                   <p>has been sent successfuly to</p>
                   <p>Name</p>
              <p> Email address</p>
               </div>
           </div>

            <div class="back-overlay">
                <a href="javascript: void (0);">
                <div class="overlay-home-bottom" onclick="backoverlay()">
                        <span>Send Another CVLink &nbsp;</span>
                        <img src="images/next-bottom.png">
                </div></a>

            </div>


        </div>


    </div>
</div>

<?php
require_once( "common/footer.php" );
?>
