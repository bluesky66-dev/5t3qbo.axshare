<?php
require_once( "../common/load.php" );
global $user;



$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();


$postData["password"] = $_POST["password"];
$postData["reset_password"] = $_POST["reset_password"];
$postData["token"] = $_POST["token"];
$error_flag = 0;
$error = "";

if($_POST) {
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        //exit script outputting json data
        $output = json_encode(
            array(
                'type'=>'error',
                'text' => 'Request must come from Ajax'
            ));

        die($output);
    }

    $reset = $cvVerify->passwordUser($postData["token"]);
    $result = CVUser::updatePassword($reset[0]["user_id"], $postData);
    if (!$result) {
        $result = "error";
    }

    $data['type'] = $result;
    $data['data']   = $queryResult;
    $data['text']  = $error;
    header( 'Content-Type: application/json' );
    echo json_encode( $data );
}


