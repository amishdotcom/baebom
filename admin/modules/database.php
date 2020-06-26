<?php

if( ! defined( 'NINACODER' ) ) {

	die("You don't have permission in this place!");

}

if( isset( $_REQUEST['restore'] ) ) $restore = $_REQUEST['restore']; else $restore = "";

if( $action == "dboption" and count( $_REQUEST['ta'] ) ) {
	$arr = $_REQUEST['ta'];
	reset( $arr );
	
	$tables = "";
	
	while ( list ( $key, $val ) = each( $arr ) ) {
		$tables .= ", `" . $db->safesql( $val ) . "`";
	}
	
	$tables = substr( $tables, 1 );
	if( $_REQUEST['whattodo'] == "optimize" ) {
		$query = "OPTIMIZE TABLE  ";
	} else {
		$query = "REPAIR TABLE ";
	}
	$query .= $tables;
	
	if( $db->query( $query ) ) {
		msg( "info", $lang['db_ok'], $lang['db_ok_1'] . "<br /><br /><a href=$PHP_SELF?do=dboption>" . $lang['db_prev'] . "</a>" );
	} else {
		msg( "error", $lang['db_err'], $lang['db_err_1'] . "<br /><br /><a href=$PHP_SELF?do=dboption>" . $lang['db_prev'] . "</a>" );
	}

}

$tabellen = "";

$db->query( "SHOW TABLES" );
while ( $row = $db->get_array() ) {
	$titel = $row[0];
	if( substr( $titel, 0, strlen( vass_ ) ) == vass_ ) {
		$tabellen .= "<option value=\"$titel\" selected>$titel</option>\n";
	}
}
$db->free();

if( function_exists( "bzopen" ) ) {
	$comp_methods[2] = 'BZip2';
}
if( function_exists( "gzopen" ) ) {
	$comp_methods[1] = 'GZip';
}
$comp_methods[0] = "No compress";

function fn_select($items, $selected) {
	$select = '';
	foreach ( $items as $key => $value ) {
		$select .= $key == $selected ? "<OPTION VALUE='{$key}' SELECTED>{$value}" : "<OPTION VALUE='{$key}'>{$value}";
	}
	return $select;
}
$comp_methods = fn_select( $comp_methods, '' );

define( 'PATH', ROOT_DIR . '/backup/' );

function file_select() {
	$files = array ('' );
	if( is_dir( PATH ) && $handle = opendir( PATH ) ) {
		while ( false !== ($file = readdir( $handle )) ) {
			if( preg_match( "/^.+?\.sql(\.(gz|bz2))?$/", $file ) ) {
				$files[$file] = $file;
			}
		}
		closedir( $handle );
	}
	return $files;
}

$files = fn_select( file_select(), '' );


$content = <<<HTML
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Backup & Restore</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p style="float:right;20px;">
    <SCRIPT LANGUAGE="JavaScript">
    function save(){
        dd=window.open('$PHP_SELF?do=dumper&action=backup','bcp','height=470,width=730,resizable=1,scrollbars=1')
        documentation.backup.target='bcp';
        documentation.backup.submit();
        dd.focus();
    }
    </SCRIPT>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#backup" data-toggle="pill">Backup</a></li>
			<li><a href="#restore" data-toggle="pill">Restore</a></li>
		</ul>
		<form method="post" action="" style="margin-top:20px;">
			<div class="tab-content" id="myTabContent">
				<div id="config" class="tab-pane fade">
					<form action="" method="post" >
						<fieldset>
							<label>Database</label>
							<select name="ta[]" multiple="multiple">{$tabellen}</select>
							<label class="checkbox">
							<input type="checkbox" name="allow_admin" {$allow_admin} value="1" {$admingroup}> OPTIMIZE Database?
							</label>
							<label class="checkbox">
							<input type="checkbox" name="allow_m_artists" {$allow_m_artists} value="1" {$admingroup}> REPAIR Database?
							</label>
							<label></label>
							<button type="button" class="btn" onclick="save();return false;">Apply</button>
						</fieldset>
					</form>
				</div>
				<div id="backup" class="tab-pane fade  active in">
					<form action="$PHP_SELF?do=dumper&action=backup" name="backup" id="backup" method="post">
						<fieldset>
							<label>Choose backup format</label>
							<SELECT NAME=comp_method>{$comp_methods}</SELECT>
							<label></label>
							<button type="button" class="btn btn-success" onclick="save();return false;">Backup</button>
						</fieldset>
					</form>
				</div>
    <SCRIPT LANGUAGE="JavaScript">
    function dbload(){
        dd=window.open('$PHP_SELF?do=dumper&action=restore','bcp','height=370,width=530,resizable=1,scrollbars=1')
        documentation.restore.target='bcp';
        documentation.restore.submit();dd.focus();
    }
    </SCRIPT>
				<div id="restore" class="tab-pane fade">
					<form action="$PHP_SELF?do=dumper&action=restore" name="restore" id="restore" method="post" >
						<fieldset>
							<label>Restore database from a backup</label>
							<SELECT NAME=file>{$files}</SELECT>
							<label></label>
							<button type="button" class="btn btn-success" onclick="dbload();return false;">Restore</button>
						</fieldset>
					</form>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
HTML;

?>