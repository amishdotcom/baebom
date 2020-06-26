<?php

//Websites Major Variables
$site_name = "baebom";
//$site_root = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$site_root = "https://www.baebom.com/old";
$current_page_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$cdn = "https://www.baebom.com/old/cdn";
$custom_site_root = "https://www.baebom.com/old";
//Please Also Update CDN on 'img-thumb-generator-script.php' file

//Url Files Variables
$album_bridge = "$custom_site_root/album/";
$tracklist_bridge = "$custom_site_root/tracklist/";
$track_bridge = "$custom_site_root/track/";
$video_bridge = "$custom_site_root/video/";
$lyrics_bridge = "$custom_site_root/lyrics/";

/* Path Variables */
$images = 'baebom/media/images';
$thumbs = 'baebom/media/images/thumbs';
$search_page_loc = "$site_root/search";

?>