<?php

$success = false;

$hash = $db->safesql ( $_REQUEST ['hash'] );

$db->query ( "SELECT id, hash, title, artist, lyrics, count, cover FROM ninacoder_lyrics where hash = '$hash'" );

$row = $db->get_row ();

if ($hash && ! $row ['id']) {

    header("HTTP/1.0 404 Not Found");

    echo file_get_contents(ROOT_DIR . "/templates/404.tpl");

    die ();

}else {

    $row = stripslashes_deep($row);

	$smarty->assign("lyrics", $row);

}

if(isset($_POST['name'])){

    $title = $db->safesql(trim($_POST['title']));

    $artist = $db->safesql(trim($_POST['artist']));

    $lyrics = $db->safesql(trim($_POST['lyrics']));

    $name = $db->safesql(trim($_POST['name']));

    $email = $db->safesql(trim($_POST['email']));

    $hash = $db->safesql(trim($_POST['hash']));

    if($title && $artist && $lyrics){

        $db->query ("INSERT INTO ninacoder_contribute SET title = '$title', artist = '$artist', name = '$name', email = '$email', lyrics = '$lyrics', hash = '$hash'");

    }

    $success = true;

}

$smarty->assign ( "success", $success );

$content = $smarty->fetch("add.tpl");

?>