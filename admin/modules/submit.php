<?php

if( ! defined( 'NINACODER' ) ) {

	die( "Hacking attempt!" );

}

if(isset($_GET['action'])) $action = $_GET['action'];

if( $action == "edit" ){
	
	if(isset($_GET['id'])) $id = $db->safesql($_GET['id']);


	if(isset($_POST['title'])){

		$title = $db->safesql(trim($_POST['title']));

        $artist = $db->safesql(trim($_POST['artist']));

        $lyrics = $db->safesql(trim($_POST['lyrics']));


        if($_FILES["file"]["name"]){

            $cover = altworkUploader("cover");

		}

		if($title && $artist && $cover){

			$db->query ("UPDATE ninacoder_contribute SET title = '$title', artist = '$artist',  cover = '$cover', lyrics = '$lyrics' WHERE id = '$id'");

		}else if($title && $artist){

            $db->query ("UPDATE ninacoder_contribute SET title = '$title', artist = '$artist', lyrics = '$lyrics' WHERE id = '$id'");

		}

    }

	$row =$db->super_query("SELECT * FROM `ninacoder_contribute` WHERE id = '$id'");
	
	if(!$row['id']) die("Lyrics doese not exits");


    $content = <<<HTML
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}">Control Panel</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}?do=submit">Submissions Manager</a>
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
	
	$db->query("DELETE FROM ninacoder_contribute WHERE id = '$id'");

    $msg = msg_box("success", "Lyrics has been deleted!", "do=submit");

}else{
	if( isset( $_GET['p'] ) ) $page = intval( $_GET['p'] );
	if( !$page OR $page < 0 ) $page = 1;
	$start = ($page-1) * 20;
	
	if( isset( $_GET['q'] ) ) $q = $db->safesql( $_GET['q'] );

	$db->query("SELECT * FROM ninacoder_contribute WHERE approve = 0 ORDER BY id DESC, approve DESC LIMIT $start, 20");

	while($row = $db->get_row()){

        $row = stripslashes_deep($row);

        $row['lyrics'] = nl2br($row['lyrics']);

		$song_list .= <<<HTML
              <tr id="submit_{$row['id']}">
              	<td><a href="/{$config['admin_path']}?do=submit&action=edit&id={$row['id']}">{$row['name']}</a></td>
              	<td>{$row['email']}</td>
                <td>{$row['title']}</td>
                <td>{$row['artist']}</td>
                <td>
                	<a href="javascript:;" class="btn btn-sm btn-success approve-lyrics" data-id="{$row['id']}" data-hash="{$row['hash']}">Approve</a> <a href="/{$config['admin_path']}?do=submit&action=edit&id={$row['id']}" class="btn btn-sm btn-info">Edit</a> <button onclick="var r=confirm('Are you sure by deleting this song?');if (r==true){window.location='{$PHP_SELF}?do=submit&action=delete&id={$row['id']}'}; return false;" class="btn btn-sm btn-danger" type="button">Remove</button>
            	</td>
              </tr>
HTML;
}
	
	if($q){
		$total = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_contribute WHERE title LIKE '%$q%' AND approve = 0");
		$pages = navigation("/{$config['admin_path']}?do=submit&q=" . urlencode($q) . "&p={page}", $total['count'], 20);
	}else{
		$total = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_contribute WHERE approve = 0");
		$pages = navigation("/{$config['admin_path']}?do=submit&p={page}", $total['count'], 20);
	}
	
	$q = stripslashes($q);
	
	$content = <<<HTML
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}">Control Panel</a>
    </li>
    <li class="breadcrumb-item active">Submissions Manager ({$total['count']} lyrics)</li>
</ol>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                	<th>Submitter Name</th>
                	<th>Email</th>
                    <th>Song Name</th>
                    <th>Artist/Band</th>
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
