<?php

@session_start ();
@ob_start ();
@ob_implicit_flush ( 0 );

@error_reporting ( E_ALL ^ E_NOTICE );
@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );
@ini_set ( 'error_reporting', E_ALL ^ E_NOTICE );

define ( 'ROOT_DIR', dirname ( __FILE__ ) );

define ( 'INCLUDE_DIR', ROOT_DIR . '/includes' );

define ( 'ADMIN_DIR', ROOT_DIR . '/admin' );

@include (INCLUDE_DIR . '/config.inc.php');

require_once INCLUDE_DIR . '/class/_class_mysql.php';

require_once INCLUDE_DIR . '/db.php';

include_once(ROOT_DIR . "/admin/functions.php");

define ( 'NINACODER', true );

$term = urlencode(trim($_REQUEST['term']));

$api = file_get_contents("https://itunes.apple.com/search?term=" . $term . "&limit=1");

$api = json_decode($api);

$track_url = $api->results{0}->trackViewUrl;

$track_url = $track_url . "&at=" . $config['itunes_aff'];

header("Location: " . $track_url);

?>