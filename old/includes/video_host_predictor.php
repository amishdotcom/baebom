<?php
//Warning!
//This File Contains Operations for Multiple Type of Pages
//Please make sure that any Intended changes made to this File is reflected on Every Type of Page Instance Defined Here and Even the Sister File of it


if($page_type=='album')
{
//Video Link Host Predictor
ob_start(); //Start output buffer
echo $row[6];

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$video_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

}

elseif($page_type=='track')
{
//Video Link Host Predictor
ob_start(); //Start output buffer
echo $video_link;

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$video_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

}

elseif($page_type=='lyrics')
{
//Video Link Host Predictor
ob_start(); //Start output buffer
echo $video_link;

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$video_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

}

//Total 14 Foreign Sites and Default(Domained)
if($video_host_raw == 'www.youtube.com' OR $video_host_raw == 'youtube.com' OR $video_host_raw == 'youtu.be' OR $video_host_raw == 'www.youtu.be')
{
	$video_host = 'Youtube';
}
elseif($video_host_raw == 'www.netflix.com' OR $video_host_raw == 'netflix.com')
{
	$video_host = 'Netflix';
}
elseif($video_host_raw == 'www.vimeo.com' OR $video_host_raw == 'vimeo.com')
{
	$video_host = 'Vimeo';
}
elseif($video_host_raw == 'www.yahoo.com' OR $video_host_raw == 'yahoo.com' OR $video_host_raw == 'view.yahoo.com')
{
	$video_host = 'Yahoo';
}
elseif($video_host_raw == 'www.dailymotion.com' OR $video_host_raw == 'dailymotion.com')
{
	$video_host = 'Dailymotion';
}
elseif($video_host_raw == 'www.hulu.com' OR $video_host_raw == 'hulu.com')
{
	$video_host = 'Hulu';
}
elseif($video_host_raw == 'www.twitch.tv' OR $video_host_raw == 'twitch.tv')
{
	$video_host = 'Twitch';
}
elseif($video_host_raw == 'www.liveleak.com' OR $video_host_raw == 'liveleak.com')
{
	$video_host = 'LiveLeak';
}
elseif($video_host_raw == 'www.vine.co' OR $video_host_raw == 'vine.co')
{
	$video_host = 'Vine';
}
elseif($video_host_raw == 'www.ustream.tv' OR $video_host_raw == 'ustream.tv' OR $video_host_raw == 'video.ibm.com' )
{
	$video_host = 'Ustream';
}
elseif($video_host_raw == 'www.break.com' OR $video_host_raw == 'break.com')
{
	$video_host = 'Break';
}
elseif($video_host_raw == 'www.tv.com' OR $video_host_raw == 'tv.com')
{
	$video_host = 'tv.com';
}
elseif($video_host_raw == 'www.metacafe.com' OR $video_host_raw == 'metacafe.com')
{
	$video_host = 'metacafe';
}
elseif($video_host_raw == 'www.viewster.com' OR $video_host_raw == 'viewster.com')
{
	$video_host = 'viewster';
}
else
{
	$video_host = $video_host_raw;
}
?>