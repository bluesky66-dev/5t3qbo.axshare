<?php
require_once( "../common/load.php" );
global $user, $cvVerify;

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();

$postData["send_user_name"] = $_POST["send_user_name"];
$postData["send_email_address"] = $_POST["send_email_address"];
$postData["architect"] = $_POST["architect"];
$postData["immediately"] = $_POST["immediately"];
$postData["text_area_send"] = $_POST["text_area_send"];

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
    if(!isset($_POST["send_user_name"]) || !isset($_POST["send_email_address"]) || !isset($_POST["architect"]) || !isset($_POST["immediately"]) || !isset($_POST["text_area_send"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $send_user_name      = filter_var($_POST["send_user_name"], FILTER_SANITIZE_STRING);
    $send_email_address     = filter_var($_POST["send_email_address"], FILTER_SANITIZE_STRING);
    $architect      = filter_var($_POST["architect"], FILTER_SANITIZE_STRING);
    $immediately     = filter_var($_POST["immediately"], FILTER_SANITIZE_STRING);
    $text_area_send     = filter_var($_POST["text_area_send"], FILTER_SANITIZE_STRING);


    //additional php validation
    if(strlen($send_user_name)<3) // If length is less than 3 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'First Name is too short or empty!'));
        die($output);
    }

    if(!filter_var($send_email_address, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    if(strlen($architect)<3) //check  message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Too short job title e.g User Experience Architect'));
        die($output);
    }
    if(strlen($immediately)<3) //check  message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Too short Immediately Availal.'));
        die($output);
    }
    if(strlen($text_area_send)<3) //check  message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Too short textarea.'));
        die($output);
    }


//            $sentMail = @mail($to_Email, $subject, $cvVerify_link, $headers);

    $data['type'] = $postData;

    header( 'Content-Type: application/json' );
    echo json_encode( $data );
}

