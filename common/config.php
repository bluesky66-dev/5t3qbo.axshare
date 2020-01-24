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
	define( "DB_USERNAME", "root" );
	define( "DB_PASSWORD", "" );
	define( "DB_DATABASE", "cvlink" );
}

define( "HOST_SERVER", $_SERVER['SERVER_NAME'] );
define( "SITE_NAME", "Etsy Script" );
define( "NO_PROFILE_PHOTO", "img/profile/noPhoto.png" );
define( "NO_MEDIA_PHOTO", "img/noPhoto.png" );


?>