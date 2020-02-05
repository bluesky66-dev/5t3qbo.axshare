<?php

require_once( "common/header.php" );
if (isset($_POST["submit"])) {
    if (isset($_FILES["fileToUpload"])) {
        global $user, $cvFileManager,$cvFile;
        $result      = "success";
        $error       = "";
        $queryResult = false;
        $data        = array();
        $postData    = array();

        $cvFileManager->setSubFolder($_POST["fileType"]);
        $fileName = $cvFileManager->uploadFile("fileToUpload", $_POST["fileType"]);

    }
    if (isset($_POST["fileName"])) {
        $FileExt  = CV_getFileExtension( $_POST["fileName"] );
        $fileName = $cvFile->insert($_POST["fileName"], $_POST["fileType"], $FileExt);

    }



}
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

                        <div class="square_book_span"><span> Hardworking, Trustworthy, Dynamic, and Determined Individual</span>
                        </div>
                        <button class="delete_video_home">
                            Upload pitch
                        </button>
                    </div>

                    <div id="demo" class="square_video_box" >
                        <?php
                        $videoFile = $cvFile->selectVideo();

                        if ($videoFile) {
                        if (($videoFile["file_ext"])){
                            $videoFileUrl =  $videoFile["file_type"]."/".$videoFile["file_name"];
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

                        } else {
                            ?>

                            <div class="square_video">
                                <img src="images/re-video.png">
                                <p><span>No video pitch found</span><br>
                                    <span>CVLink with video pitch less than 5 min long, get 75% chance of landing an interview or call back</span></p>
                                <button id="uploadVideo" class="upload-video" data-toggle="modal" data-target="#myModal" >Upload video</button>
                            </div>
                            <?php
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

                <div id="demo-vid" class="col-xl-6 home-right" >
                        <div class="square_book repost">
                            <h1 class="user-name repository"> My Document Repository</h1>
                            <button id="uploadDoc1" class="delete_video_home"  data-toggle="modal" data-target="#myModal">
                                Upload documents
                            </button>
                        </div>


                            <div class=" row square_video_box">
                                <?php
                                $docFiles = $cvFile->selectDoc();

                                if ($docFiles) {

                                    foreach ($docFiles as $docFile) {
                                        switch ($docFile["file_ext"]) {
                                            case "doc": {
                                                ?>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" >
                                                    <img src="images/document.png" class="word-see" onclick="word(<?php echo $docFile["id"]?>) ">
                                                    <p class="bold-p"><?php echo $docFile["file_name"];?></p>
                                                    <?php
                                                    $docDate =  $docFile["create_time"];
                                                    ?>
                                                    <p class="solid-p"><?php echo $docDate;?></p>
                                                    <div class="word" id="doc<?php echo $docFile["id"]?>" style="display: none">
                                                        <div class="word-select">
                                                            <span>Select action</span>
                                                        </div>
                                                        <div class="download">
                                                            <span>Hide</span>
                                                        </div>
                                                        <div class="download">
                                                            <span>Delete</span>
                                                        </div>

                                                    </div>
                                                </div>


                                               <?php
                                                break;
                                            }
                                            case "pdf": {
                                                ?>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 " >
                                                    <img src="images/pdf.png" class="word-see" onclick="word(<?php echo $docFile["id"]?>) ">
                                                    <p class="bold-p"><?php echo $docFile["file_name"];?></p>
                                                    <?php
                                                    $docDate =  $docFile["create_time"];
                                                    ?>
                                                    <p class="solid-p"><?php echo $docDate;?></p>
                                                    <div class="word" id="doc<?php echo $docFile["id"]?>" style="display: none">
                                                        <div class="word-select">
                                                            <span>Select action</span>
                                                        </div>

                                                        <div class="download">
                                                            <span>Hide</span>
                                                        </div>
                                                        <div class="download">
                                                            <span>Delete</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            }
                                            case "xlsx": {
                                                ?>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" >
                                                    <img src="images/xlsx.png" class="word-see" onclick="word(<?php echo $docFile["id"]?>) ">
                                                    <p class="bold-p"><?php echo $docFile["file_name"];?></p>
                                                    <?php
                                                    $docDate =  $docFile["create_time"];
                                                    ?>
                                                    <p class="solid-p"><?php echo $docDate;?></p>
                                                    <div class="word" id="doc<?php echo $docFile["id"]?>" style="display: none">
                                                        <div class="word-select">
                                                            <span>Select action</span>
                                                        </div>

                                                        <div class="download">
                                                            <span>Hide</span>
                                                        </div>
                                                        <div class="download">
                                                            <span>Delete</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            }
                                            case "ppt": {
                                                ?>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" >
                                                    <img src="images/ppt.png" class="word-see" onclick="word(<?php echo $docFile["id"]?>) ">
                                                    <p class="bold-p"><?php echo $docFile["file_name"];?></p>
                                                    <?php
                                                    $docDate =  $docFile["create_time"];
                                                    ?>
                                                    <p class="solid-p"><?php echo $docDate;?></p>
                                                    <div class="word" id="doc<?php echo $docFile["id"]?>" style="display: none">
                                                        <div class="word-select">
                                                            <span>Select action</span>
                                                        </div>

                                                        <div class="download">
                                                            <span>Hide</span>
                                                        </div>
                                                        <div class="download">
                                                            <span>Delete</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            }
                                            case "jpeg": {
                                                ?>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" >
                                                    <img src="images/jpeg.png" class="word-see" onclick="word(<?php echo $docFile["id"]?>) ">
                                                    <p class="bold-p"><?php echo $docFile["file_name"];?></p>
                                                    <?php
                                                    $docDate =  $docFile["create_time"];
                                                    ?>
                                                    <p class="solid-p"><?php echo $docDate;?></p>
                                                    <div class="word" id="doc<?php echo $docFile["id"]?>" style="display: none">
                                                        <div class="word-select">
                                                            <span>Select action</span>
                                                        </div>

                                                        <div class="download">
                                                            <span>Hide</span>
                                                        </div>
                                                        <div class="download">
                                                            <span>Delete</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            }
                                            case "png": {
                                                ?>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" >
                                                    <img src="images/png.png" class="word-see" onclick="word(<?php echo $docFile["id"]?>) ">
                                                    <p class="bold-p"><?php echo $docFile["file_name"];?></p>
                                                    <?php
                                                    $docDate =  $docFile["create_time"];
                                                    ?>
                                                    <p class="solid-p"><?php echo $docDate;?></p>
                                                    <div class="word" id="doc<?php echo $docFile["id"]?>" style="display: none">
                                                        <div class="word-select">
                                                            <span>Select action</span>
                                                        </div>

                                                        <div class="download">
                                                            <span>Hide</span>
                                                        </div>
                                                        <div class="download">
                                                            <span>Delete</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            }
                                        }
                                    }

                                } else {
                                    ?>
                                    <div class="square_video">
                                        <img src="images/re-word.png">
                                        <p><span>No document found</span><br>
                                            <span>you shoud have at least 1 CV copy to share your CVLink</span></p>
                                        <button id="uploadDoc2" class="upload-video" data-toggle="modal" data-target="#myModal" ">Upload documents</button>
                                    </div>

                                    <?php
                                }

                                ?>



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
