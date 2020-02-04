<?php
require_once( "../common/load.php" );
global $user, $cvVerify;
$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();

$postData["fileToUpload"] = $_POST["fileToUpload"];
$postData["fileName"] = $_POST["fileName"];

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//uploads/fine.jpg
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//jpg




$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//uploads/fine.jpg
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//jpg

$queryResult = CVUser::insertUpdate($target_file, $FileType);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
// Allow certain file formats
if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
    && $FileType != "gif" && $FileType != "mp4" && $FileType != "ogg" && $FileType != "webm" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    try {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ".basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } catch (Exception $error) {
        echo $error->getMessage();
    }
}

//if($_POST) {
////check if its an ajax request, exit if not
//
//    if(!isset($_POST["fileToUpload"]) || !isset($_POST["fileName"]) )
//    {
//        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
//        die($output);
//    }
//
//    //Sanitize input data using PHP filter_var().
////    $fileToUpload       = filter_var($_POST["fileToUpload"], FILTER_SANITIZE_STRING);
////    $fileName     = filter_var($_POST["fileName"], FILTER_SANITIZE_STRING);
//
//
//
//    $queryResult = CVUser::insertUpload($postData);
//
//
//
//    if ( ! $queryResult ) {
//        $result = "failed";
//    }
//    $data['type'] = $result;
//    $data['data']   = $queryResult;
//    $data['text']  = $error;
//    header( 'Content-Type: application/json' );
//    echo json_encode( $data );
//}
?>




