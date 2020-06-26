<?php

@session_start ();
@ob_start ();
@ob_implicit_flush ( 0 );

@error_reporting ( E_ALL ^ E_NOTICE );
@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );
@ini_set ( 'error_reporting', E_ALL ^ E_NOTICE );

define ( 'ROOT_DIR', dirname ( "../.." ) );

define ( 'INCLUDE_DIR', ROOT_DIR . '/includes' );

define ( 'ADMIN_DIR', ROOT_DIR . '/admin' );

require_once (INCLUDE_DIR . '/config.inc.php');

require_once INCLUDE_DIR . '/class/_class_mysql.php';

require_once INCLUDE_DIR . '/db.php';

include_once(ROOT_DIR . "/admin/functions.php");

$action = trim($_REQUEST['action']);

if(! $action ) die("Error!");

if($action == "approve") {

	$id = intval($_REQUEST['id']);

	$hash = $db->safesql($_REQUEST['hash']);

	if(! $id ) die("Error! No Id");

	$db->query("UPDATE ninacoder_contribute SET approve = 1 WHERE id = '$id'");

    $row = $db->super_query("SELECT * FROM ninacoder_contribute WHERE id = '$id'");

    if( $hash ) {

		if($row['cover']) {

            $db->query("UPDATE ninacoder_lyrics SET title = '" . $db->safesql($row["title"]) . "', artist = '" . $db->safesql($row["artist"]) . "', lyrics = '" . $db->safesql($row["lyrics"]) . "', cover = '" . $db->safesql($row["cover"]) . "' WHERE hash = '$hash'");

        } else {

		    $db->query("UPDATE ninacoder_lyrics SET title = '" . $db->safesql($row["title"]) . "', artist = '" . $db->safesql($row["artist"]) . "', lyrics = '" . $db->safesql($row["lyrics"]) . "' WHERE hash = '$hash'");

        }

	} else {

		$hash = gen_uuid($row["title"] . $row["artist"] . time ());

		$db->query("INSERT INTO ninacoder_lyrics SET title = '" . $db->safesql($row["title"]) . "', artist = '" . $db->safesql($row["artist"]) . "', lyrics = '" . $db->safesql($row["lyrics"]) . "', cover = '" . $db->safesql($row["cover"]) . "', hash = '$hash'");

		$db->query("UPDATE ninacoder_contribute SET hash = '$hash', approve = 1 WHERE id = '$id'");



	}

	$buffer["success"] = true;
}

echo json_encode($buffer);

$db->close();

?>