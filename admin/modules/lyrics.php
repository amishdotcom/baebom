<?php

if( ! defined( 'NINACODER' ) ) {

	die( "Hacking attempt!" );

}

if(isset($_GET['action'])) $action = $_GET['action'];

if( $action == "add" ){

    if(isset($_POST['title'])){

        $title = $db->safesql(trim($_POST['title']));

        $artist = $db->safesql(trim($_POST['artist']));

        $lyrics = $db->safesql(trim($_POST['lyrics']));


        if($_FILES["file"]["name"]){

            $cover = altworkUploader("cover");

        }

        $hash = gen_uuid($_TIME . $title . $artist . rand());

        if($title && $artist){

            $db->query ("INSERT INTO ninacoder_lyrics SET title = '$title', artist = '$artist',  cover = '$cover', lyrics = '$lyrics', hash = '$hash'");

            $msg = msg_box("success", "Lyrics has been added in to database!", "do=lyrics&action=add");
        }

    }

    $content = <<<HTML
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}">Control Panel</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}?do=lyrics">Lyrics Manager</a>
    </li>
    <li class="breadcrumb-item active">Add lyrics</li>
</ol>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus fa-fw"></i> Adding a lyrics</div>
    <div class="card-body">
        <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="title" value="" required>
            </div>
            <div class="form-group">
                <label>Artist</label>
                <input class="form-control" type="text" name="artist" value="" required>
            </div>
            <div class="form-group">
                <label>Select new cover</label>
                <input class="form-control" type="file" name="file">
            </div>
            <div class="form-group">
                <label>Lyrics content </label>
                <textarea name="lyrics" class="form-control" rows="20">{$row['lyrics']}</textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="action" value="edit">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
</div>
HTML;


}elseif( $action == "edit" ){
	
	if(isset($_GET['id'])) $id = $db->safesql($_GET['id']);


	if(isset($_POST['title'])){

		$title = $db->safesql(trim($_POST['title']));

        $artist = $db->safesql(trim($_POST['artist']));

        $lyrics = $db->safesql(trim($_POST['lyrics']));


        if($_FILES["file"]["name"]){

            $cover = altworkUploader("cover");

		}

		if($title && $artist && $cover){

			$db->query ("UPDATE ninacoder_lyrics SET title = '$title', artist = '$artist',  cover = '$cover', lyrics = '$lyrics' WHERE id = '$id'");

		}else if($title && $artist){

            $db->query ("UPDATE ninacoder_lyrics SET title = '$title', artist = '$artist', lyrics = '$lyrics' WHERE id = '$id'");

		}

    }

	$row =$db->super_query("SELECT * FROM `ninacoder_lyrics` WHERE id = '$id'");
	
	if(!$row['id']) die("Lyrics doese not exits");

    $row = stripslashes_deep($row);

    $content = <<<HTML
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}">Control Panel</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}?do=lyrics">Lyrics Manager</a>
    </li>
    <li class="breadcrumb-item active">Edit lyrics</li>
</ol>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-edit fa-fw"></i> Edit {$row['title']} by {$row['artist']} </div>
    <div class="card-body">
        <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="title" value="{$row['title']}" required>
            </div>
            <div class="form-group">
                <label>Artist</label>
                <input class="form-control" type="text" name="artist" value="{$row['artist']}" required>
            </div>
HTML;

	if($row["cover"]) $content .= <<<HTML
		<div class="form-group">
		  <label>Current Cover</label>
			<img src="{$row["cover"]}" width="100" height="100">
		 </div>
HTML;

	$content .= <<<HTML
			<div class="form-group">
			  <label>Select new cover</label>
				<input class="form-control" type="file" name="file">
			</div>
			<div class="form-group">
			  <label>Lyrics content </label>
				<textarea name="lyrics" class="form-control" rows="20">{$row['lyrics']}</textarea>
			</div>
			<div class="form-group">
				<label></label>
				<input type="hidden" name="action" value="edit">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
		</form>
    </div>
</div>
HTML;


}elseif($action == "delete"){
	
	if(isset($_GET['id'])) $id = $db->safesql(trim($_GET['id']));
	
	$db->query("DELETE FROM ninacoder_lyrics WHERE id = '$id'");

    $msg = msg_box("success", "Lyrics has been deleted!", "do=lyrics");

}else{
	if( isset( $_GET['p'] ) ) $page = intval( $_GET['p'] );
	if( !$page OR $page < 0 ) $page = 1;
	$start = ($page-1) * 20;
	
	if( isset( $_GET['q'] ) ) $q = $db->safesql( $_GET['q'] );
	
	if($q){
			$db->query("SELECT id, title, artist, cover FROM ninacoder_lyrics WHERE title LIKE '%$q%' LIMIT $start,20");
	}else{

		$db->query("SELECT id, title, artist, cover FROM ninacoder_lyrics ORDER BY id DESC LIMIT $start,20");

	}
	while($row = $db->get_row()){

		$row['top'] ? $discover_class = "btn-success" : $discover_class = "btn-default";

        $row = stripslashes_deep($row);

		$song_list .= <<<HTML
              <tr>
                <td id="track_{$row['id']}" class="editable" title="Double click to edit">{$row['title']}</td>
                <td>{$row['artist']}</td>
                <td>
                	<a href="/{$config['admin_path']}?do=lyrics&action=edit&id={$row['id']}" title="Edit"><i class="fa fa-edit fa-fw"></i></a> <a onclick="var r=confirm('Are you sure by deleting this song?');if (r==true){window.location='{$PHP_SELF}?do=lyrics&action=delete&id={$row['id']}'}; return false;" href=":;" title="Remove"><i class="fa fa-remove fa-fw"></i></a>
            	</td>
              </tr>
HTML;
}
	
	if($q){
		$total = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_lyrics WHERE title LIKE '%$q%'");
		$pages = navigation("/{$config['admin_path']}?do=lyrics&q=" . urlencode($q) . "&p={page}", $total['count'], 20);
	}else{
		$total = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_lyrics");
		$pages = navigation("/{$config['admin_path']}?do=lyrics&p={page}", $total['count'], 20);
	}
	
	$q = stripslashes($q);
	
	$content = <<<HTML
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}">Control Panel</a>
    </li>
    <li class="breadcrumb-item active">Lyrics manager ({$total['count']})</li>
</ol>
<div class="row">
    <div class="col-lg-12">
        <p>
            <a href="/{$config['admin_path']}?do=lyrics&action=add" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Add new lyrics</a>
        </p>
        <form mothod="GET" action="{$PHP_SELF}">
            <div class="form-group input-group">
            	<input type="hidden" name="do" value="lyrics">
			    <input type="text" class="form-control" name="q" value="{$q}" placeholder="Enter song name">
			    <span class="input-group-btn">
			        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
			        </button>
			    </span>
			</div>
        </form>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title (double click to edit)</th>
                    <th>Artist</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {$song_list}
            </tbody>

        </table>
        <div class="pagination pagination-right">
            <ul class="pagination">
                {$pages}
            </ul>
        </div>
    </div>
</div>
HTML;
}
?>
