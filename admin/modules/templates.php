<?php

if( ! defined( 'NINACODER' ) ) {

	die("You don't have permission in this place!");

}

if (!@is_dir ( ROOT_DIR . '/templates/')) {
	die ( "Template not found!" );
}

if(!is_writable(ROOT_DIR . '/templates/')) {
	
	$fail_templates = '<div class="alert alert-danger">
				<strong>Warring!</strong> folder <strong>/templates</strong> is not writable! Please CHMOD 777 folder /templates.
			</div>';

} else $fail_templates = "";

$content = <<<HTML
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Templates</h1>
    </div>
</div>
<div class="row">
	<div class="row-fluid">
		<div class="span12">
		{$fail_templates}
		{$fail_templates_c}
			<table class="table table-bordered table-striped">
				<colgroup>
				<col class="span1">
				<col class="span7">
				</colgroup>
				<thead>
					<tr>
						<th>File</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
			          <tr>
			            <td width="100px"><div id="filetree" class="filetree"></div></td>
			            <td><div id="fileedit" style="border: solid 1px #BBB;height: 510px;padding:5px"><h2>Please choose a file to edit</h2></div><p></p></td>
			          </tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
HTML;

?>