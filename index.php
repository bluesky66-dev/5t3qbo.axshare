<?php
require_once( "common/header.php" );
global $user, $isLogin;

$userName = "";
$url = $_GET['_url'];

$url = trim($url, "/");
if (!$url) {
    require_once "landing.php";
} elseif ($url) {
    $userName = $url;
    $cvUser = CVUser::getUserByUsername($userName);
    if ($user && $isLogin == "Y" && $url==$user['usName']) {
        require_once "Home.php";
    } else {
        require_once "recruiter_home.php";
    }
}