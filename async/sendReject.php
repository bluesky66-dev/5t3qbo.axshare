<?php
require_once( "../common/load.php" );
global $user, $cvVerify;

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();

$postData["reject_name"] = $_POST["reject_name"];
$postData["reject_address"] = $_POST["reject_address"];
$postData["reject_textarea"] = $_POST["reject_textarea"];

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
    if(!isset($_POST["reject_name"]) || !isset($_POST["reject_address"]) || !isset($_POST["reject_textarea"]) || !isset($_POST["immediately"]) || !isset($_POST["text_area_send"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $reject_name      = filter_var($_POST["reject_name"], FILTER_SANITIZE_STRING);
    $cv_username      = filter_var($_POST["cv_username"], FILTER_SANITIZE_STRING);
    $reject_address     = filter_var($_POST["reject_address"], FILTER_SANITIZE_STRING);
    $reject_textarea      = filter_var($_POST["reject_textarea"], FILTER_SANITIZE_STRING);

    //additional php validation
    if(strlen($reject_name)<3) // If length is less than 3 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'First Name is too short or empty!'));
        die($output);
    }

    if(!filter_var($reject_address, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    if(strlen($reject_textarea)<3) //check  message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Too short textarea'));
        die($output);
    }


    $headers = "From: " . strip_tags($reject_address) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reject_address) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $cvUser = CVUser::getUserByUsername($cv_username);

    $to_Email   	= $cvUser["usEmail"]; //Replace with recipient email address
    $subject        = $reject_name; //Subject line for emails

    $emailTemplate = file_get_contents("../templates/email/reject.html");
    $emailTemplate = str_replace(
        array("{reject_textarea}"),
        array( $reject_textarea),
        $emailTemplate
    );

    $sentMail = @mail($to_Email, $subject, $emailTemplate, $headers);
    $output = json_encode(array('type'=>'OK', 'text' => ''));
    die($output);
}

