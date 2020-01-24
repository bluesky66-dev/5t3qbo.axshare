<?php
require_once( "../common/load.php" );
global $user;

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();

$postData["usFirstName"] = $_POST["first_name"];
$postData["usLastName"] = $_POST["last_name"];
$postData["usPassword"] = $_POST["password"];
$postData["usEmail"] = $_POST["email"];
$postData["userLiner"] = $_POST["user_line"];

$queryResult = CVUser::insertUser($postData);

if ( ! $queryResult ) {
    $result = "failed";
}
$data['result'] = $result;
$data['data']   = $queryResult;
$data['error']  = $error;
header( 'Content-Type: application/json' );
echo json_encode( $data );