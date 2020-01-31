<?php
require_once( "common/load.php" );
global $cvVerify;

$token = $_GET['token'];
$cvVerify->activeUser($token);
