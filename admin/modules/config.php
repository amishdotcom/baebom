<?php

if( $member_id && $member_id['user_group'] != 1 ) {

	die("No login");

}

if( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['save_config']) {
	
	$save_con = $_POST['save_con'];
	
	$handler = fopen( ROOT_DIR . "/includes/config.inc.php", "w" );
	
	fwrite( $handler, "<?PHP \n\n//ninacoder.com Configurations\n\n\$config = array (\n\n" );

	foreach ( $save_con as $name => $value ) {

        $value = trim(stripslashes($value));

        if($name == "ad_480_60" || $name == "ad_300_250"  || $name == "ad_responsive") {

            $value = urlencode($value);

        }

        $value = str_replace('"', "", $value);

        $config[$name] = $value;

		fwrite( $handler, "'{$name}' => \"{$value}\",\n\n" );

	}
	fwrite( $handler, ");\n\n" );

	fwrite( $handler,"\n\n?>" );

	fclose( $handler );

    clear_cache();
	
	$msg = msg_box("success", "Changes saved!", "do=config");
		
}

if( ! $handle = opendir( "./templates" ) ) {

    die( "Cannot open folder ./templates" );

}

while ( false !== ($file = readdir( $handle )) ) {

    if( is_dir( ROOT_DIR . "/templates/$file" ) and ($file != "." and $file != "..") ) {

        $sys_con_skins_arr[$file] = $file;

    }

}

$template_choose = makeDropDown( $sys_con_skins_arr, "save_con[template]", "{$config['template']}" );

$coverflow_choose = makeDropDown( array(1 => "On", 0 => "Off"), "save_con[coverflow]", "{$config['coverflow']}" );

$offline_choose = makeDropDown( array(1 => "Yes", 0 => "No"), "save_con[offline]", "{$config['offline']}" );

$mail_choose = makeDropDown( array("php" => "PHP Mail()", "smtp" => "SMTP"), "save_con[mail_metod]", "{$config['mail_metod']}" );

$config['ad_480_60'] = urldecode($config['ad_480_60']);

$config['ad_300_250'] = urldecode($config['ad_300_250']);

$config['ad_responsive'] = urldecode($config['ad_responsive']);

$content = <<<HTML
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{$config['admin_path']}">Control Panel</a>
  </li>
  <li class="breadcrumb-item active">General Settings</li>
</ol>
<div class="row">
    <div class="col-lg-12" style="margin-bottom:30px;">
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item"><a class="nav-link active" href="#config" data-toggle="pill">General Options</a></li>
            <li class="nav-item"><a href="#safe" class="nav-link"  data-toggle="pill">Script safety control</a></li>
            <li class="nav-item"><a href="#email" class="nav-link" data-toggle="pill">E-mail options</a></li>
            <li class="nav-item"><a href="#social" class="nav-link" data-toggle="pill">Third party API</a></li>
            <li class="nav-item"><a href="#seo" class="nav-link" data-toggle="pill">SEO System</a></li>
            <li class="nav-item"><a href="#ads" class="nav-link" data-toggle="pill">Ads System</a></li>
        </ul>
        <form method="post" action="">
            <div class="tab-content" id="myTabContent" style="margin-top:30px;">
                <div id="config" class="tab-pane fade show active">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Site name:</label>
                                        <input class="form-control" name="save_con[site_title]" value="{$config['site_title']}" required>
                                        <p class="help-block">The name will be displayed at the top of your browser.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Site URL:</label>
                                        <input class="form-control" placeholder="http://example.com" name="save_con[site_url]" value="{$config['site_url']}" required>
                                        <p class="help-block">Example: http://www.mysite.com/ (<strong style="color:red">/</strong> at last)</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Language encoding:</label>
                                        <input class="form-control" placeholder="utf-8" name="save_con[charset]" value="{$config['charset']}" required>
                                        <p class="help-block">Specify which character-encoding has been used.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Website description:</label>
                                        <input class="form-control" name="save_con[description]" value="{$config['description']}" required>
                                        <p class="help-block">A short description of your site. Keep it under 200 characters!</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Meta keywords:</label>
                                        <textarea class="form-control" rows="3" name="save_con[keyword]" required>{$config['keyword']}</textarea>
                                        <p class="help-block">Use comma to separate keywords.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Skin Template:</label>
                                        {$template_choose} 
                                        <p class="help-block">Set the default theme for your site.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>The site is offline:</label>
                                        {$offline_choose}
                                        <p class="help-block">Enable or disable access to your site.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Offline reason:</label>
                                        <textarea class="form-control" rows="3" name="save_con[offline_reason]">{$config['offline_reason']}</textarea>
                                        <p class="help-block">Offline reason message.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="safe" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>The File Admin Panel:</label>
                                        <input class="form-control" value="{$config['admin_path']}" name="save_con[admin_path]">
                                        <p class="help-block">You can change a file name adminpanel. By default it admin.php if you specify a new file don`t forget to rename it on a server, is underlined only a file name, without way instructions to it.</p>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Define the largest file size allowed for upload (in kilobytes):</label>
                                        <input class="form-control" value=""{$config['max_file_size']}" name="save_con[max_file_size]">
                                        <p class="help-block">One MB equals to 1024 kb. Set to 0 to disable.</p>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Enable SmartCache to reduce server load:</label>
                                        <select class="form-control" disabled>
                                                <option>Yes</option>
                                            </select>
                                        <p class="help-block">Enable SmartCache to reduce server load.</p>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Enable advertising system:</label>
                                        <select class="form-control">
                                            	<option>No</option>
                                                <option>Yes</option>
                                            </select>
                                        <p class="help-block">Enable or disable advertising system of the site.</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="email" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Contact email:</label>
                                        <input class="form-control" value="{$config['admin_mail']}" name="save_con[admin_mail]">
                                        <p class="help-block">If you choose to give an e-mail address your site users will be able to contact you.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Use e-mail system::</label>
                                        {$mail_choose}
                                        <p class="help-block">Define what site e-mail system is used. PHP Mail is preferable.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>SMTP host:</label>
                                        <input class="form-control" value="{$config['smtp_host']}" name="save_con[smtp_host]">
                                        <p class="help-block">Default — localhost</p>
                                    </div>
                                    <div class="form-group">
                                        <label>SMTP port:</label>
                                        <input class="form-control" placeholder="25" value="{$config['smtp_port']}" name="save_con[smtp_port]">
                                        <p class="help-block">Usually — 25</p>
                                    </div>
                                    <div class="form-group">
                                        <label>SMTP user name:</label>
                                        <input class="form-control" value="{$config['smtp_user']}" name="save_con[smtp_user]">
                                        <p class="help-block">Not required if 'localhost' is used.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>SMTP password:</label>
                                        <input class="form-control" value="{$config['smtp_pass']}" name="save_con[smtp_pass]">
                                        <p class="help-block">Not required if 'localhost' is used.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="social" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Amazon affiliate code:</label>
                                        <input class="form-control" value="{$config['amazon_aff']}" name="save_con[amazon_aff]">
                                        <p class="help-block">Ex: nb_sb_noss</p>
                                    </div>
                                    <div class="form-group">
                                        <label>iTunes affiliate code:</label>
                                        <input class="form-control" value="{$config['itunes_aff']}" name="save_con[itunes_aff]">
                                        <p class="help-block">Ex: 1010lc5t</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook fanpage:</label>
                                        <input class="form-control" value="{$config['facebook_fan_page']}" name="save_con[facebook_fan_page]">
                                        <p class="help-block">Ex: https://www.facebook.com/ninathecoder</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter Page:</label>
                                        <input class="form-control" value="{$config['twitter_page']}" name="save_con[twitter_page]">
                                        <p class="help-block">Ex: https://twitter.com/therock</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Google+ page:</label>
                                        <input class="form-control" value="{$config['google_plus_page']}" name="save_con[google_plus_page]">
                                        <p class="help-block">Ex: https://plus.google.com/+HouseontherockOrgNg</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #F57E02;color: #fff;">
                                    <i class="fa fa-bar-chart-o"></i> Google Analytics Code
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="8" name="save_con[analytics_code]">{$config['analytics_code']}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: red;color: #fff;">
                                    <i class="fa fa-bar-chart-o"></i> Youtube API Key
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input class="form-control" name="save_con[youtbe_api_key]" value="{$config['youtbe_api_key']}">
                                        <p class="help-block">Look like: AIzaSyDg62G-1SscQEWEzz9a0STYKaV_GgHw7H8</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="seo" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info">
                                <p class="help-block">Tag can use for all: {site_title} - Put this to have global site title anywhere you want.</p>
                                NOTE: DO NOT USE DOUBLE QUOTES IN THIS SECTION
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #5FBEAA;color: #fff;">
                                    Lyrics page
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info">
                                        <p class="help-block">Tag can use: {artistName} - Artist name.</p>
                                        <div class="form-group">
                                            <label>Lyrics page title:</label>
                                            <input class="form-control" name="save_con[lyrics_page_title]" value="{$config['lyrics_page_title']}">
                                        </div>
                                        <div class="form-group">
                                            <label>Lyrics page description:</label>
                                            <input class="form-control" name="save_con[lyrics_page_desc]" value="{$config['lyrics_page_desc']}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #FFBD4A;color: #fff;">
                                    Search
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info">
                                    <p class="help-block">Tag can use: <br>{searchKeyword} - Keyword which is searching.</p>
                                    <div class="form-group">
                                        <label>Search for lyrics page title:</label>
                                        <input class="form-control" name="save_con[search_page_title]" value="{$config['search_page_title']}">
                                    </div>
                                    <div class="form-group">
                                        <label>Search for lyrics description:</label>
                                        <input class="form-control" name="save_con[search_page_desc]" value="{$config['search_page_desc']}">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ads" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #1565c0;color: #fff;">
                                    <i class="fa fa-bar-chart-o"></i> 480x60
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" name="save_con[ad_480_60]">{$config['ad_480_60']}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #1565c0;color: #fff;">
                                    <i class="fa fa-bar-chart-o"></i> 300x250
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" name="save_con[ad_300_250]">{$config['ad_300_250']}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #1565c0;color: #fff;">
                                    <i class="fa fa-bar-chart-o"></i> Responsive
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" name="save_con[ad_responsive]">{$config['ad_responsive']}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input name="save_config" value="true" type="hidden">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-info">Reset</button>
        </form>
    </div>
</div>
HTML;
?>
