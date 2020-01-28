<?php
require_once( "../common/load.php" );
global $user;
if ( ! $user || ! CV_isAdmin() ) {
    header( "Status: 404 Not Found" );
    exit();
}

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();

$catAction    = $_POST['catAction'];
$catId     = isset($_POST["catId"]) ? $_POST["catId"] : 0;

if ( $catAction == "insert" ) {
    $queryResult = MDCategory::insert( $_POST );
} elseif ( $catAction == "update" ) {
    $queryResult = MDCategory::update( $catId, $_POST );
} elseif ( $catAction == "delete" ) {
    $queryResult = MDCategory::delete( $catId );
}

if ( ! $queryResult ) {
    $result = "failed";
}

$data['result'] = $result;
$data['data']   = $queryResult;
$data['error']  = $error;
header( 'Content-Type: application/json' );
echo json_encode( $data );