<?php
require_once( "../common/load.php" );
global $user, $cvFileManager;
$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();

$cvFileManager->setSubFolder("image");
$fileName = $cvFileManager->uploadFile("fileToUpload");
echo $fileName;
?>




