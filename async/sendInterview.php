<?php
require_once( "../common/load.php" );
global $user, $cvVerify;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instantiation and passing `true` enables exceptions

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
    $interview_email     = filter_var($_POST["interview_email"], FILTER_SANITIZE_STRING);
    $interview_subject      = filter_var($_POST["interview_subject"], FILTER_SANITIZE_EMAIL);
    $text_area_interview      = filter_var($_POST["text_area_interview"], FILTER_SANITIZE_EMAIL);

    $to_Email   	= $interview_email; //Replace with recipient email address
    $subject        = 'CVlink'; //Subject line for emails

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

    $message_Body = "<strong>Name: </strong>". $interview_name ."<br>";
    $message_Body .= "<strong>Email: </strong>". $interview_email ."<br>";
    $message_Body .= "<strong>Subject: </strong>". $interview_subject ."<br>";
    $message_Body .= "<strong>Template: </strong>". $text_area_interview ."<br>";



    $headers = "From: " . strip_tags($interview_email) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($interview_email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $isExist = CVUser::getUserByEmail($interview_email);

    if ($isExist) {
        $output = json_encode(array('type'=>'error', 'text' => ''));
        die($output);
    } else {
        $queryResult = CVUser::insertUser($postData);
        if ($queryResult) {

            $queryResult = $cvVerify->insertVerify($queryResult, $postData);
            $cvVerify_link = SITE_URL."/verify_email.php?token=".$postData["usVerify_link"];
            $emailTemplate = file_get_contents("../templates/email/interview.html");

            $sentMail = @mail($to_Email, $subject, $emailTemplate, $headers);
        }
    }
//
//    $mail = new PHPMailer(true);

//    try {
//        //Server settings
//        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
//        $mail->isSMTP();                                            // Send using SMTP
//        $mail->Host       = 'in-v3.mailjet.com';                    // Set the SMTP server to send through
//        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//        $mail->Username   = 'bd9884215dd3f3ebae8f9bcd8ca3d18b';                     // SMTP username
//        $mail->Password   = 'ade1c46fa7a13f6a1b27b21990b17487';                               // SMTP password
//        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
//        $mail->Port       = 587;                                    // TCP port to connect to
//
//        //Recipients
//        $mail->setFrom($interview_email, 'Mailer');
//        $mail->addAddress('vewefi1378@jmail7.com');     // Add a recipient
//
//        // Attachments
////        $mail->addAttachment('/jhuy89uioklp/file.kkk.gz');         // Add attachments
////        $mail->addAttachment('/images/yellow-sa.png', 'new.jpg');    // Optional name
//
//        // Content
//        $mail->isHTML(true);                                  // Set email format to HTML
//        $mail->Subject = 'Here is the subject';
//        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//
//
//        $mail->send();
//        echo 'Message has been sent';
//    } catch (Exception $e) {
//        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//    }
//
//
//    $data['type'] = $result;
//    $data['data']   = $queryResult;
//    $data['text']  = $error;
//    header( 'Content-Type: application/json' );
//    echo json_encode( $data );
}
