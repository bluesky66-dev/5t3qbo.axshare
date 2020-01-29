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
$postData["userLiner"] = $_POST["user_liner"];
$postData["usCheckout"] = $_POST["check_out"];

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

    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["password"]) ||
        !isset($_POST["email"])|| !isset($_POST["user_liner"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $first_name       = filter_var($_POST["first_name"], FILTER_SANITIZE_STRING);
    $last_name     = filter_var($_POST["last_name"], FILTER_SANITIZE_STRING);
    $email      = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password      = filter_var($_POST["password"], FILTER_SANITIZE_EMAIL);
    $user_liner     = filter_var($_POST["user_liner"], FILTER_SANITIZE_STRING);

    //additional php validation
    if(strlen($first_name)<3) // If length is less than 3 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'First Name is too short or empty!'));
        die($output);
    }
    if(strlen($last_name)<3) // If length is less than 3 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Last Name is too short or empty!'));
        die($output);
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    if(strlen($password)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid Password!'));
        die($output);
    }
    if(strlen($user_liner)<3) //check  message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Too short user line! Please enter something.'));
        die($output);
    }
    $isExist = CVUser::getUserByEmail($email);

    if ($isExist) {
        $output = json_encode(array('type'=>'error', 'text' => 'The email is already exist!'));
        die($output);
    } else {
        $queryResult = CVUser::insertUser($postData);
    }

    if ( ! $queryResult ) {
        $result = "failed";
    }
    $data['type'] = $result;
    $data['data']   = $queryResult;
    $data['text']  = $error;
    header( 'Content-Type: application/json' );
    echo json_encode( $data );
}
