<?php
require_once( "../common/load.php" );
global $user, $isLogin;

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();


$postData["usPassword"] = $_POST["usPassword"];
$postData["usEmail"] = $_POST["usEmail"];
$error_flag = 0;
$error = "Your Email or Password is invalid";

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

    $usEmail     = isset( $_POST["usEmail"] ) ? $_POST["usEmail"] : "";
    $usPassword  = isset( $_POST["usPassword"] ) ? $_POST["usPassword"] : "";

    $user = CVUser::isLoginByEmail($usEmail, $usPassword);

    if ($user) {
        CV_setLogin($user["usToken"]);
        $queryResult = $user['usName'];

        $error = "";
        $result = "OK";
    } else {
        $error_flag = 1;

    }

    $data['type'] = $result;
    $data['data']   = $queryResult;
    $data['text']  = $error;
    header( 'Content-Type: application/json' );
    echo json_encode( $data );
}


