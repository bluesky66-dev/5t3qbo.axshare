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
    if(!isset($_POST["password"]) || !isset($_POST["reset_password"]) || !isset($_POST["token"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().

    $password      = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $reset_password      = filter_var($_POST["reset_password"], FILTER_SANITIZE_STRING);
    $token     = filter_var($_POST["token"], FILTER_SANITIZE_STRING);

    if(strlen($password)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid Password!'));
        die($output);
    }
    if(strlen($reset_password)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid reset Password!'));
        die($output);
    }
    if(strlen($token)<3) //check  message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Too short user line! Please enter something.'));
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


