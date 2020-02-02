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


    //additional php validation

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    $usEmail     = isset( $_POST["usEmail"] ) ? $_POST["usEmail"] : "";

    $isExist = CVUser::getUserByEmail($email);

    echo json_encode($isExist);

    if (!$isExist) {
        $output = json_encode(array('type'=>'error', 'text' => 'The email is not exist!'));
        die($output);
    } else {
        $postData["type"] = "PS";
        $queryResult = $cvVerify->insertVerify($isExist["usId"], $postData);
        $cvVerify_link = "http://localhost:7003/reset_password.php?token=".$postData["usVerify_link"];
        // $sentMail = @mail($to_Email, $subject, $cvVerify_link, $headers);
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
