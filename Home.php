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
            <div class="blue_span">
                <span >http://www.cvlink.co/jamesorior</span>
            </div>
            <div id="home-link" class="home-button">
                <a> <button>Share CVLink</button></a>
            </div>
        </div>
    </div>
</header>
<div id="home">
    <div class="angle-home">
        <div id="about">

                <div class="row home-row">
                    <div class="col-xl-6 home-left" >
                        <div class="square_book">
                            <h1 class="user-name">James Orior: </h1>
                            <div class="square_book_span"><span> Hardworking, Trustworthy, Dynamic, and Determined Individual</span></div>


                            <button class="delete_video_home">
                                Upload pitch
                            </button>

                        </div>

                        <div id="demo" class="square_video_box">
                            <div class="square_video">
                                <img src="images/video.png">
                                <p><span>No video pitch found</span><br>
                                <span>CVLink with video pitch less than 5 min long, get 75% chance of landing an interview or call back</span></p>
                                <button class="upload-video" onclick="loadVid()">Upload video</button>
                            </div>
                        </div>
                    </div>

                    <div id="demo-vid" class="col-xl-6 home-right" >
                        <div class="square_book repost">
                            <h1 class="user-name"> My Document Repository</h1>
                        </div>

                        <div class="square_video_box">
                            <div class="square_video">
                                <img src="images/w_open.png">
                                <p><span>No document found</span><br>
                                <span>you shoud have at least 1 CV copy to share your CVLink</span></p>

                                <button class="upload-video" onclick="loadDoc()">Upload documents</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
<hr style="background: #077cff">

 <div class="overlay-home" style="overflow: scroll; display: none">

    <div class="overlay-home-bg" onclick="hide_overlay_home()">
    </div>
    <div class="white-background">
        <header class="cv-header">
            <a href="javascript: void (0);" onclick="hide_overlay_home()"><img src="images/red%20triangle.png"></a>
            <h1>Send CVlink</h1>
        </header>

        <div class="content">
            <div class="content-space">
            </div>
            <div class="reject-full">
                <div class="from-span">
                    <span>To:</span>
                </div>

                <div class="input-text">
                    <input type="text" placeholder="Sender name" class="from-reject-input">
                    <hr>
                </div>
            </div>



            <div class="reject-full">
                <div class="from-span">
                    <span></span>
                </div>
                <div class="input-text">
                    <input type="text" placeholder="Sender email address" class="from-reject-input">
                    <hr>
                </div>
            </div>

            <div class="reject-full">
                <div class="from-span" style="margin-top: 12px;" >
                    <div class="your-subject">
                        <span>Your subject</span>
                    </div>
                </div>
                <div  class="input-text">
                    <div class="subject">

                        <div class="subject-e-g">
                            <input  type="text" placeholder="Subject e.g.Congratulations you're invited to attend interview" class="from-reject-input">
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


            <div class="reject-full">

                <div class="input-text">

                    <textarea id="text-area" placeholder="cover letter template contents goes here"></textarea>

                </div>
            </div>


        </div>
    </div>
</div>

<?php
require_once( "common/footer.php" );
?>


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