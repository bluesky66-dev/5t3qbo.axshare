<?php
require_once( "common/header.php" );
global $userName, $cvUser;

?>

<header id="header">
    <div   class="recruiter">
        <div class="rec-logo">
            <div class="logo-img">
                <a href="recruiter_<?php echo SITE_URL;?>"><img src="images/tag.png"></a>
            </div>
            <div class="logo-span">
                <a href="recruiter_<?php echo SITE_URL;?>"><span>CVLink</span></a>
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
                                <h1 class="user-name" ><?php echo $cvUser["usFirstName"]." ".$cvUser["usLastName"];?> : </h1>
                                <div class="square_book_span">
                                <span>Hardworking, Trustworthy, Dynamic, and Determined Individual</span>
                                </div>

                            </div>

                            <div id="demo" class="square_video_box" >
                                <?php
                                $videoFile = $cvFile->selectVideo();

                                if ($videoFile) {
                                    if (($videoFile["file_ext"])){
                                        $videoFileUrl =  $videoFile["file_type"]."/".$videoFile["file_url"];
                                        ?>
                                        <video style="width: 97%;height: 97%" controls>
                                            <source src="/uploads/<?php echo $videoFileUrl;?>" type="video/mp4">
                                        </video>


                                        <?php

                                    } else {

                                        ?>
                                        <div class="square-video-video-box" style="display: none" type="file" name="fileToUpload" id="fileToUpload>
                                            <div class="square-video-video embed-responsive embed-responsive-16by9" >
                                        <iframe class="embed-responsive-item" src="<?php echo $videoFile["file_name"];?>" scrolling="no" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

                                        <?php
                                    }

                                }
                                ?>

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Select file to upload</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body ">

                                                <div class="">

                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#menu1" style="color: #ffffff;background-color: rgba(7, 124, 255, 1);">Paste file URL</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#menu2" style="color: rgba(7, 124, 255, 1);;">Upload an file</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Tab panes -->
                                                    <div class="tab-content">

                                                        <div id="menu1" class="container tab-pane fade active show"><br>

                                                            <form id="upload" class="" method="POST" enctype="multipart/form-data">
                                                                <input type="hidden" name="fileType" value="">
                                                                <input  type="text" name="fileName"  id="recipient-name" class="modal-input">
                                                                <div class="modal-bottom">
                                                                    <input class="modal-submit" id="upload" type="submit"  value="Upload file" name="submit" >
                                                                    <button type="button" class="modal-close" data-dismiss="modal" style="font-family: 'Poppins Medium', 'Poppins Regular', 'Poppins';">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div id="menu2" class="container tab-pane fade"><br>
                                                            <h5></h5>
                                                            <form id="upload" class="form-inline" method="POST" enctype="multipart/form-data">
                                                                <input type="hidden" name="fileType" value="">
                                                                <input type="file"  type="file"  name="fileToUpload" id="fileToUpload" style="border: 0;">
                                                                <div class="modal-bottom">
                                                                    <input class="modal-submit"  id="upload" type="submit"  value="Upload file" name="submit" style="">
                                                                    <button type="button" class=" modal-close" data-dismiss="modal" style=";">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-6  rec-right" >
                                <div id="rec-doc" class="square_book">
                                    <h1 class="user-name" > My Document Repository</h1>
                                </div>
                            <div class=" row square-col-video-box">
                                <?php
                                $docFiles = $cvFile->selectDoc();
                                if ($docFiles) {
                                    foreach ($docFiles as $docFile) {
                                        $docFileUrl = "";
                                        if (filter_var($docFile["file_url"], FILTER_VALIDATE_URL)) {
                                            $docFileUrl = $docFile["file_url"];
                                        } else {
                                            $docFileUrl = "/uploads/" . $docFile["file_type"] . "/" . $docFile["file_url"];
                                        }
                                        switch ($docFile["file_ext"]) {
                                            case "doc":
                                                {
                                                    ?>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 wordFile<?php echo $docFile["id"] ?> ">
                                                        <img src="images/document.png" class="word-see"
                                                             onclick="word(<?php echo $docFile["id"] ?>) ">
                                                        <p class="bold-p"><?php echo $docFile["file_name"]; ?></p>
                                                        <?php
                                                        $docDate = $docFile["create_time"];
                                                        ?>
                                                        <p class="solid-p"><?php echo $docDate; ?></p>
                                                        <div class="word" id="doc<?php echo $docFile["id"] ?>"
                                                             style="display: none">
                                                            <div class="word-select">
                                                                <span>Select action</span>
                                                            </div>
                                                            <a href="<?php echo $docFileUrl ?>" download>
                                                                <div class="download"
                                                                     onclick="downloadHide(<?php echo $docFile["id"] ?>)">
                                                                    <span>Download</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    break;
                                                }
                                            case "pdf":
                                                {
                                                    ?>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 wordFile<?php echo $docFile["id"] ?> ">
                                                        <img src="images/pdf.png" class="word-see"
                                                             onclick="word(<?php echo $docFile["id"] ?>) ">
                                                        <p class="bold-p"><?php echo $docFile["file_name"]; ?></p>
                                                        <?php
                                                        $docDate = $docFile["create_time"];
                                                        ?>
                                                        <p class="solid-p"><?php echo $docDate; ?></p>
                                                        <div class="word" id="doc<?php echo $docFile["id"] ?>"
                                                             style="display: none">
                                                            <div class="word-select">
                                                                <span>Select action</span>
                                                            </div>
                                                            <a href="<?php echo $docFileUrl ?>" download>
                                                                <div class="download"
                                                                     onclick="downloadHide(<?php echo $docFile["id"] ?>)">
                                                                    <span>Download</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    break;
                                                }
                                            case "xlsx":
                                                {
                                                    ?>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 wordFile<?php echo $docFile["id"] ?> ">
                                                        <img src="images/xlsx.png" class="word-see"
                                                             onclick="word(<?php echo $docFile["id"] ?>) ">
                                                        <p class="bold-p"><?php echo $docFile["file_name"]; ?></p>
                                                        <?php
                                                        $docDate = $docFile["create_time"];
                                                        ?>
                                                        <p class="solid-p"><?php echo $docDate; ?></p>
                                                        <div class="word" id="doc<?php echo $docFile["id"] ?>"
                                                             style="display: none">
                                                            <div class="word-select">
                                                                <span>Select action</span>
                                                            </div>
                                                            <a href="<?php echo $docFileUrl ?>" download>
                                                                <div class="download"
                                                                     onclick="downloadHide(<?php echo $docFile["id"] ?>)">
                                                                    <span>Download</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    break;
                                                }
                                            case "ppt":
                                                {
                                                    ?>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 wordFile<?php echo $docFile["id"] ?> ">
                                                        <img src="images/ppt.png" class="word-see"
                                                             onclick="word(<?php echo $docFile["id"] ?>) ">
                                                        <p class="bold-p"><?php echo $docFile["file_name"]; ?></p>
                                                        <?php
                                                        $docDate = $docFile["create_time"];
                                                        ?>
                                                        <p class="solid-p"><?php echo $docDate; ?></p>
                                                        <div class="word" id="doc<?php echo $docFile["id"] ?>"
                                                             style="display: none">
                                                            <div class="word-select">
                                                                <span>Select action</span>
                                                            </div>
                                                            <a href="<?php echo $docFileUrl ?>" download>
                                                                <div class="download"
                                                                     onclick="downloadHide(<?php echo $docFile["id"] ?>)">
                                                                    <span>Download</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    break;
                                                }
                                            case "jpeg":
                                                {
                                                    ?>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 wordFile<?php echo $docFile["id"] ?> ">
                                                        <img src="images/jpeg.png" class="word-see"
                                                             onclick="word(<?php echo $docFile["id"] ?>) ">
                                                        <p class="bold-p"><?php echo $docFile["file_name"]; ?></p>
                                                        <?php
                                                        $docDate = $docFile["create_time"];
                                                        ?>
                                                        <p class="solid-p"><?php echo $docDate; ?></p>
                                                        <div class="word" id="doc<?php echo $docFile["id"] ?>"
                                                             style="display: none">
                                                            <div class="word-select">
                                                                <span>Select action</span>
                                                            </div>
                                                            <a href="<?php echo $docFileUrl ?>" download>
                                                                <div class="download"
                                                                     onclick="downloadHide(<?php echo $docFile["id"] ?>)">
                                                                    <span>Download</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    break;
                                                }
                                            case "png":
                                                {
                                                    ?>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 wordFile<?php echo $docFile["id"] ?> ">
                                                        <img src="images/png.png" class="word-see"
                                                             onclick="word(<?php echo $docFile["id"] ?>) ">
                                                        <p class="bold-p"><?php echo $docFile["file_name"]; ?></p>
                                                        <?php
                                                        $docDate = $docFile["create_time"];
                                                        ?>
                                                        <p class="solid-p"><?php echo $docDate; ?></p>
                                                        <div class="word" id="doc<?php echo $docFile["id"] ?>"
                                                             style="display: none">
                                                            <div class="word-select">
                                                                <span>Select action</span>
                                                            </div>
                                                            <a href="<?php echo $docFileUrl ?>" download>
                                                                <div class="download"
                                                                     onclick="downloadHide(<?php echo $docFile["id"] ?>)">
                                                                    <span>Download</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    break;
                                                }
                                        }
                                    }
                                } ?>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <input type="hidden" name="cv_username" id="cv_username" value="<?php echo $userName;?>">
    <div class="overlay" style="display: none">
        <div class="overlay-bg" onclick="hide_overlay()"></div>
            <div class="background" ></div>
            <div class="white-background">
                <header class="cv-header">
                    <a href="javascript: void (0);"  onclick="hide_overlay()" ><img  src="images/re-triangle.png"></a>
                    <h1>Send interview invite</h1>
                </header>
                <form id="interview-form">

                    <div class="content">

                        <div class="content-space">
                        </div>
                        <div class="reject-full2">
                            <div class="from-span2">
                                <span>From:</span>
                            </div>
                        </div>
                        <div class="error-interview-name">
                            <div class="col-md-12">
                                <div class="" style=""></div>
                            </div>
                        </div>

                        <div class="reject-full2">
                            <div class="input-text">
                                <input id="interview_name" name="interview_name" type="text" placeholder="Sender name" class="from-reject-input">
                                <hr style="border-top: 1px solid white;margin-bottom: 0">
                            </div>
                        </div>

                        <div class="error-interview-email">
                            <div class="col-md-12">
                                <div class="" style=""></div>
                            </div>
                        </div>

                        <div class="reject-full2">
                            <div class="input-text">
                                <input id="interview_email" name="interview_email" type="text" placeholder="Sender email address" class="from-reject-input">
                                <hr>
                            </div>
                        </div>

                        <div class="reject-full2">
                            <div class="from-span2">
                                <span>Applicant email address</span>
                            </div>
                        </div>

                        <div class="reject-full2">
                            <div class="input-text">
                                <input id="to-james" name="to-james" type="text" placeholder="" value="<?php echo $cvUser["usEmail"];?>" class="from-reject-input" disabled>
                                <hr style="margin-top: 3px">
                            </div>
                        </div>

                        <div class="reject-full2">
                            <div class="from-span2">
                                <span>Your subject</span>
                            </div>
                        </div>

                        <div class="error-interview-subject">
                            <div class="col-md-12">
                                <div class="" style=""></div>
                            </div>
                        </div>

                        <div class="reject-full2">
                            <div class="subject-e-g">
                                <input id="interview_subject" name="interview_subject"  type="text" placeholder="Subject e.g.Congratulations you're invited to attend interview" class="from-reject-input">
                                <hr>
                            </div>
                        </div>

                        <div class="reject-full">
                            <div class="square_invite-div">
                                <div class="square-invite-ajax">
                                    <a href="javascript: void (0);" type="submit" onclick="square1()"> <span>Interview Invitation Template 1</span> </a>
                                </div>
                                <div class="square-invite-ajax">
                                    <a href="javascript: void (0);" type="submit" onclick="square2()"> <span >Interview Invitation Template 2</span> </a>
                                </div>
                                <div class="square-invite-ajax">
                                    <a href="javascript: void (0);" type="submit" onclick="square3()"> <span >Interview Invitation Template 3</span> </a>
                                </div>
                            </div>
                        </div>

<!--                        <div class="error-interview-textarea">-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="" style=""></div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="reject-full-textarea">
                            <div class="input-text">
                                <textarea  id="text_area_interview" name="text_area_interview"  placeholder="Enter details for your selections" minlength="250" ></textarea>
                            </div>
                        </div>

                        <div class="">
                            <div class="drag">
                                Drag and Drop or Click to attached file
                            </div>
                        </div>

                        <div class="back-overlay">
                            <button class="overlay-home-bottom" type="submit">
                                    <span>&nbsp Send invite &nbsp &nbsp</span>
                                    <img src="images/overlay-bottom.png">
                            </button>

                        </div>
                    </form>

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
        <form id="reject-form">
            <div class="content">

                <div class="content-space2">
                </div>
                <div class="reject-full2">
                    <div class="from-span2">
                        <span>From:</span>
                    </div>
                </div>

                <div class="error-reject-name">
                    <div class="col-md-12">
                        <div class="" style=""></div>
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="input-text">
                        <input id="reject_name" name="reject_name"   type="text" placeholder="Sender name" class="from-reject-input">
                        <hr style="border-top: 1px solid white;margin-bottom: 0">
                    </div>
                </div>

                <div class="error-reject-email">
                    <div class="col-md-12">
                        <div class="" style=""></div>
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="input-text">
                        <input id="reject_address" name="reject_address" type="text" placeholder="Sender email address" class="from-reject-input">
                        <hr>
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="from-span2">
                        <span>Applicant email address</span>
                    </div>
                </div>

                <div class="reject-full2">

                    <div class="input-text">
                        <input id="to-james1" type="text" placeholder="" value="<?php echo $cvUser["usEmail"];?>" class="from-reject-input" disabled>
                        <hr style="margin-top: 3px">
                    </div>
                </div>

                <div class="reject-full2">
                    <div class="select"> Select why you're rejecting <?php echo $cvUser["usFirstName"]." ".$cvUser["usLastName"];?> Application</div>
                </div>
                    <div id="myDIV">
                        <div class="reject-full">
                                <div class="square_reject-div">
                                    <div class="btActive  square-reject-half">
                                        Little years of experience
                                    </div>
                                    <div class="btActive square-reject-half">
                                        No relevant experience
                                    </div>
                            </div>
                        </div>

                        <div class="reject-full">
                            <div class=" square_reject-div">
                                <div class="btActive square-reject-full">
                                    Did not meet the full list of essential criteria
                                </div>
                            </div>
                        </div>

                        <div class="reject-full">
                            <div class=" square_reject-div">
                                <div class="btActive square-reject-ajax1">
                                    Not enough experience / portfolio
                                </div>
                                <div class="btActive square-reject-ajax">
                                    No Certification
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="reject-full">
                            <p class="select"> What is your honest recommendation for <?php echo $cvUser["usFirstName"]." ".$cvUser["usLastName"];?> so he can improve on his or her next application</p>
                        </div>

                <div id="myDIV2">
                    <div class="reject-full">
                        <div class="square_reject-div">
                            <div class="bActive square-reject-half">
                                <span>Do some work experience</span>
                            </div>
                            <div class="bActive square-reject-half">
                                <span >Improve on CV contents</span>
                            </div>

                        </div>
                    </div>

                    <div class="reject-full">
                        <div class="square_reject-div">
                            <div class="bActive square-reject-half">
                                <span>Improve on portfolio contents</span>
                            </div>
                            <div class="bActive square-reject-half">
                                <span >Apply for Entry / Junior Roles</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="error-reject-textarea">
                    <div class="col-md-12">
                        <div class="" style=""></div>
                    </div>
                </div>
                <div class="reject-full-textarea">
                        <textarea id="reject_textarea" name="reject_textarea"  placeholder="Enter details for your selections"></textarea>
                </div>
                <div class="">
                    <div class="drag1">
                        Drag and Drop or Click to attached file
                    </div>
                </div>
                <div class="back-overlay">
                    <button class="overlay-home-bottom2" type="submit">
                            <span>Send rejection / feedback</span>
                            <img src="images/pear.png">
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>





<?php
require_once( "common/footer.php" );
?>


