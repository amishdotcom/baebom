<?php
/**
 * 2018 NiNaCoder
 * @author: NiNaCoder <ninacoder2510@gmail.com>
 * © 2018 NiNaCoder https://ninacoder.com
 * International Registered Trademark & Property of NiNaCoder
 */

require_once (__DIR__ . '/includes/init.php');

require_once(__DIR__ . '/vendor/smarty/Smarty.class.php');

//General smarty template
//More info about Smarty https://www.smarty.net/documentation
$smarty = new Smarty;

//Get template folder (can change template folder in admin panel)
$smarty->setTemplateDir(ROOT_DIR . '/templates/' . $config['template']);

$smarty->assign("config", $config);

$smarty->assign('current_url', curPageURL());

//Build meta tags, get value from includes/config.inc.php file
$meta['title'] = trim(stripslashes($config['site_title']));

$meta['description'] = trim(stripslashes($config['description']));

$meta['keywords'] = trim(stripslashes($config['keyword']));

$do = trim($_REQUEST['do']);

$smarty->assign('PATH', $do);

switch ( $do ) {
    case "add" :
        include ROOT_DIR . '/modules/add.php';
        break;
	case "view" :
		include ROOT_DIR . '/modules/view.php';
		break;
	case "search" :
		include ROOT_DIR . '/modules/search.php';
		break;
	default :
		include (ROOT_DIR . '/modules/ninacoder.php');
}

//Set global config for javascript
$javascript_config = "
<script>
	var site_url = '{$config['site_url']}';
	var amazon_aff = '{$config['amazon_aff']}';
	var youtbe_api_key = '{$config['youtbe_api_key']}';
</script>";

$smarty->assign('JAVASCRIPT_CONFIG', $javascript_config);

//get top country song and soul song song from iTunes
//More info could be found at https://affiliate.itunes.apple.com/resources/documentation/itunes-store-web-service-search-api/
$country_json = build_top_lyrics("country", 6);

$soul_json = build_top_lyrics("soul", 15);

$smarty->assign('soul', $soul_json);

$smarty->assign('ct', $country_json);

//Choose to enable caching or not
$smarty->caching = false;

$smarty->cache_lifetime = 120;

$smarty->assign("site_title", $meta['title']);

$smarty->assign("description", $meta['description']);

$smarty->assign("site_keywords", $meta['keywords']);

$smarty->assign("javascript_config", $javascript_config);

$smarty->assign("social_image", $meta['social_image']);

$smarty->assign("content", $content);

$smarty->display('index.tpl');

$db->close ();

GzipOut();

?>