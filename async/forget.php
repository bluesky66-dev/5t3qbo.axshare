<?php
require_once( "../common/load.php" );
global $user, $cvVerify;

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();
$postData    = array();


$postData["usEmail"] = $_POST["email"];
$postData["usVerify_link"] = CV_generateRandom(30);
$usEmail     = isset( $_POST["usEmail"] ) ? $_POST["usEmail"] : "";
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
    if(!isset($_POST["email"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().

    $email      = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);



    $to_Email   	= $email; //Replace with recipient email address
    $subject        = 'CVLink'; //Subject line for emails

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    $headers = "From: " . strip_tags($email) . "\r\n";
//    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $isExist = CVUser::getUserByEmail($email);

    if ($isExist) {
            $queryResult = $cvVerify->insertVerify($isExist["usId"], $postData);
            $cvVerify_link = SITE_URL."/reset_password_check.php?token=".$postData["usVerify_link"];
            $emailTemplate = file_get_contents("../templates/email/resetpw_email.php");
            $emailTemplate = str_replace(
                array("{password_reset_link}", "{admin_email}", "{site_url}"),
                array( $cvVerify_link,$email,SITE_URL,),
                $emailTemplate
            );
            $sentMail = @mail($to_Email, $subject, $emailTemplate, $headers);
    } else {
        $output = json_encode(array('type'=>'error', 'text' => 'error'));
        die($output);
    }
    $data['type'] = $result;
    $data['data']   = $queryResult;
    $data['text']  = $error;
    header( 'Content-Type: application/json' );
    echo json_encode( $data );
}
