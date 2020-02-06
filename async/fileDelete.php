<?php
require_once( "../common/load.php" );
global $user, $cvFileManager, $cvFile;
$postData    = array();

$docId = $_POST["delete"];



if($_POST) {
    //check if its an ajax request, exit if not
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        //exit script outputting json data
        $output = json_encode(
            array(
                'type' => 'error',
                'text' => 'Request must come from Ajax'
            ));

        die($output);
    }

    $result = $cvFile->fileDelete($docId);

    $data['type'] = $result;

    header( 'Content-Type: application/json' );
    echo json_encode( $data );

}
    ?>