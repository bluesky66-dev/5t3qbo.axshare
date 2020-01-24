<?php
require_once( "../common/load.php" );
global $user;
if ( ! $user || ! MD_isAdmin() ) {
    header( "Status: 404 Not Found" );
    exit();
}

$result      = "success";
$error       = "";
$queryResult = false;
$data        = array();

$salesAction    = $_POST['salesAction'];
$shopId        = isset( $_POST["shopId"] ) ? $_POST["shopId"] : 0;
$sales       = isset( $_POST["sales"] ) ? $_POST["sales"] : 0;
if ($salesAction == 'save') {
    if ($shopId && $sales) {
        MDSales::checkSales($shopId, $sales);
    }
}

if ( ! $queryResult ) {
    $result = "failed";
}
$data['result'] = $result;
$data['data']   = $queryResult;
$data['error']  = $error;
header( 'Content-Type: application/json' );
echo json_encode( $data );