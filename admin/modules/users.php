<?php

if( ! defined( 'NINACODER' ) ) {

	die("You don't have permission in this place!");

}

if(isset($_GET['action'])) $action = $_GET['action'];


if( $action == "edit" ){
	
	if(isset($_GET['id'])) $id = intval($_GET['id']);
	
	if($_POST['m_username']){
		
		$username = $db->safesql($_POST['m_username']);

		$email = $db->safesql($_POST['email']);

		$user_group = $db->safesql($_POST['usergroup']);

		$name = $db->safesql($_POST['name']);

		if($_POST['m_password']) $password =  password_hash(trim($_POST['m_password']),PASSWORD_DEFAULT );
		
		if($username){
			
			if($_POST['m_password']) $db->query("UPDATE ninacoder_users SET username='$username', password='$password', email='$email', user_group='$user_group', name='$name' WHERE user_id='$id'");

			else $db->query("UPDATE ninacoder_users SET username='$username', email='$email', user_group='$user_group', name='$name' WHERE user_id='$id'");
			
			header("Location: /{$config['admin_path']}?do=users");
			
		}else{
			
			die("Username, email must be filled!");
			
		}
	}
	
	$row = $db->super_query("SELECT * FROM ninacoder_users WHERE user_id = '$id'");
	
	if(!$row['user_id']) die("User not exits");
	
	$group_control = get_groups($row['user_group']);
	
	$content = <<<HTML
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}">Control Panel</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{$config['admin_path']}?do=users">Users Manager</a>
    </li>
    <li class="breadcrumb-item active">Edit user</li>
</ol>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-edit fa-fw"></i> Edit {$row['username']} </div>
    <div class="card-body">
        <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" type="text" name="m_username" value="{$row['username']}" required/>
                    </div>
                    <div class="form-group">
                        <label>FullName</label>
                        <input class="form-control" type="text" name="name" value="{$row['name']}"/>
                    </div>
                    <div class="form-group">
                        <label>New password</label>
                        <input class="form-control" type="text" name="m_password"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" value="{$row['email']}"/>
                    </div>
                    <div class="form-group">
                        <label>Usergroup</label>
                        <select class="form-control" name="usergroup">{$group_control}</select>
                    </div>
                    <input type="hidden" name="doAdd" value="true">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-info">Reset</button>
		</form>
    </div>
</div>
HTML;

}else{
	if( isset( $_GET['p'] ) ) $page = intval( $_GET['p'] );
	if( !$page OR $page < 0 ) $page = 1;
	$start = ($page-1) * 20;
	if( isset( $_GET['q'] ) ) $q = $db->safesql( $_GET['q'] );
	
	if($q){
		$db->query("SELECT * FROM ninacoder_users WHERE username LIKE '%$q%' ORDER BY user_group ASC LIMIT $start,20");
	}else{
		$db->query("SELECT * FROM ninacoder_users ORDER BY user_group ASC LIMIT $start,20");
	}
	while($row = $db->get_row()){
	$bio = shorter($row['bio'],150);
	$user_list .= <<<HTML
              <tr>
                <td><a href="/{$config['admin_path']}?do=users&action=edit&id={$row['user_id']}">{$row['username']}</a></td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
               	<td>{$row['user_group']}</td>
 				<td><a class="btn btn-info btn-sm" href="/{$config['admin_path']}?do=users&action=edit&id={$row['user_id']}">Edit</a><!--  <button class="btn btn-danger btn-sm delete-user" type="button" data-id="{$row['user_id']}">Delete</a> -->
				</td>
              </tr>
HTML;
}
	
	if($q){
		$total = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_users WHERE username LIKE '%$q%'");
		$pages = navigation("{$config['admin_path']}?do=users&q=" . urlencode($q) . "&p={page}", $total['count'], 20);
	}else{
		$total = $db->super_query("SELECT COUNT(*) AS count FROM ninacoder_users");
		$pages = navigation("{$config['admin_path']}?do=users&p={page}", $total['count'], 20);
	}	
	
	$content = <<<HTML
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/{$config['admin_path']}">Control Panel</a>
    </li>
    <li class="breadcrumb-item active">User Manager ({$total['count']} users)</li>
</ol>
<div class="row">
    <div class="col-lg-12">
        <form mothod="GET" action="{$PHP_SELF}">
            <div class="form-group input-group">
                <input type="hidden" name="do" value="users">
                <input type="text" class="form-control" name="q" value="{$q}" placeholder="Enter username">
                <span class="input-group-btn">
			        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
			        </button>
			    </span>
            </div>
        </form>
        <table class="table table-bordered table-striped">
            <colgroup>
                <col class="span1">
                <col class="span7">
            </colgroup>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Group</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {$user_list}
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
