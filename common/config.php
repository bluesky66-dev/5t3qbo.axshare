<?php
ob_start();
session_start();

if ( $_SERVER['SERVER_NAME'] == 'localhost' ) {
	define( "DB_TYPE", "mysql" );
	define( "DB_HOSTNAME", "localhost" );
	define( "DB_USERNAME", "root" );
	define( "DB_PASSWORD", "" );
	define( "DB_DATABASE", "cvlink" );
} else {
    define( "DB_TYPE", "mysql" );
    define( "DB_HOSTNAME", "localhost" );
    define( "DB_USERNAME", "id12392180_cvlink" );
    define( "DB_PASSWORD", "cvlink" );
    define( "DB_DATABASE", "id12392180_cvlink" );
}

define( "HOST_SERVER", $_SERVER['SERVER_NAME'] );
define( "SITE_NAME", "CVLink" );
define( "NO_PROFILE_PHOTO", "img/profile/noPhoto.png" );
define( "NO_MEDIA_PHOTO", "img/noPhoto.png" );

define( "CV_ADMIN_EMAIL", "" );

if ( $_SERVER['SERVER_NAME'] == 'localhost' ) {
	define( "CV_BACKEND", "" );
	define( "CV_FRONTEND", "" );
    define("CV_SERVER_DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']."/");
    define("CV_MEDIA_DIR", $_SERVER['DOCUMENT_ROOT']."/uploads/");
    define("CV_MEDIA_PATH", "/uploads/");
}else{
	define( "CV_BACKEND", "" );
	define( "CV_FRONTEND", "" );
	define("CV_SERVER_DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']."/");
	define("CV_MEDIA_DIR", $_SERVER['DOCUMENT_ROOT']."/uploads/");
	define("CV_MEDIA_PATH", "/uploads/");
}

?>