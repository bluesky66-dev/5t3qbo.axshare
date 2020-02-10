<?php
require_once( "../common/load.php" );
global $user, $cvVerify;

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();

$postData["interview_name"] = $_POST["interview_name"];
$postData["interview_email"] = $_POST["interview_email"];
$postData["interview_subject"] = $_POST["interview_subject"];
$postData["text_area_interview"] = $_POST["text_area_interview"];

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
    if(!isset($_POST["interview_name"]) || !isset($_POST["interview_email"]) || !isset($_POST["interview_subject"]) || !isset($_POST["text_area_interview"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $interview_name       = filter_var($_POST["interview_name"], FILTER_SANITIZE_STRING);
    $cv_username      = filter_var($_POST["cv_username"], FILTER_SANITIZE_STRING);
    $interview_email     = filter_var($_POST["interview_email"], FILTER_SANITIZE_STRING);
    $interview_subject      = filter_var($_POST["interview_subject"], FILTER_SANITIZE_EMAIL);
    $text_area_interview      = filter_var($_POST["text_area_interview"], FILTER_SANITIZE_EMAIL);

    //additional php validation
    if(strlen($interview_name)<3) // If length is less than 3 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'First Name is too short or empty!'));
        die($output);
    }

    if(!filter_var($interview_email, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    if(strlen($interview_subject)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid subject!'));
        die($output);
    }
    if(strlen($text_area_interview)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid subject!'));
        die($output);
    }

    $headers = "From: " . strip_tags($interview_email) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($interview_email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $cvUser = CVUser::getUserByUsername($cv_username);

    $to_Email   	= $cvUser["usEmail"]; //Replace with recipient email address
    $subject        = $interview_subject; //Subject line for emails

    $emailTemplate = file_get_contents("../templates/email/interview.html");
    $emailTemplate = str_replace(
        array("{text_area_interview}"),
        array( $text_area_interview),
        $emailTemplate
    );

    $sentMail = @mail($to_Email, $subject, $emailTemplate, $headers);
    $output = json_encode(array('type'=>'OK', 'text' => ''));
    die($output);
}
