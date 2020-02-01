<?php
require_once( "common/load.php" );
global $cvVerify;

if (isset($_GET['token']) && $_GET['token']) {
    $token = $_GET['token'];
    $result = $cvVerify->activeUser($token);
    if ($result) {
        header("Location: /?verified=email");
        exit();
    }
}
header("Location: /");
exit();