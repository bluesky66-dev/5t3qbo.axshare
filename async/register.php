<?php
require_once( "../common/load.php" );
global $user, $cvVerify;

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
$postData["usVerify_link"] = CV_generateRandom(30);

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

    $to_Email   	= $email; //Replace with recipient email address
    $subject        = 'CVLink'; //Subject line for emails

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


    $headers = "From: " . strip_tags($email) . "\r\n";
//    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $isExist = CVUser::getUserByEmail($email);

    if ($isExist) {
        $output = json_encode(array('type'=>'error', 'text' => ''));
        die($output);
    } else {
        $queryResult = CVUser::insertUser($postData);
        if ($queryResult) {
            $postData["type"] = "RG";
            $queryResult = $cvVerify->insertVerify($queryResult, $postData);
            $cvVerify_link = SITE_URL."/verify_email.php?token=".$postData["usVerify_link"];
            $emailTemplate = file_get_contents("../templates/email/checkmail_email.php");
            $emailTemplate = str_replace(
                array("{account_activation_link}", "{site_url}", "{site_name}","{admin_email}",),
               array( $cvVerify_link, SITE_URL,SITE_NAME,$email),
                $emailTemplate
            );
            $sentMail = @mail($to_Email, $subject, $emailTemplate, $headers);
        }
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
