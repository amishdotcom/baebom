<?php	//Made in Refrence with "video_host_predictor.php", Please keep both Synchronised in the matter of Schema
if($video_host_raw == 'www.youtube.com' OR $video_host_raw == 'youtube.com' OR $video_host_raw == 'www.youtube.be' OR $video_host_raw == 'youtube.be' OR $video_host_raw == 'www.youtu.be' OR $video_host_raw == 'youtu.be')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$video_link'\">YouTube <i class=\"fa fa-youtube-play\"></i></button>";
}
elseif($video_host_raw == 'www.netflix.com' OR $video_host_raw == 'netflix.com')
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/netflix.png\" class=\"ext_btn_netflix\"></img></button>";
}
elseif($video_host_raw == 'www.vimeo.com' OR $video_host_raw == 'vimeo.com')
{
	echo "<button class=\"ext-Button\">Vimeo <i class=\"fa fa-vimeo\"></i></button>";
}
elseif($video_host_raw == 'www.yahoo.com' OR $video_host_raw == 'yahoo.com' OR $video_host_raw == 'view.yahoo.com')
{
	echo "<button class=\"ext-Button\">Yahoo <i class=\"fa fa-yahoo\"></i></button>";
}
elseif($video_host_raw == 'www.dailymotion.com' OR $video_host_raw == 'dailymotion.com')
{
	echo "<button class=\"ext-Button\">Dailymotion <img src=\"../../system/images/dailymotion.png\" class=\"ext_btn_dailymotion\"></img></button>";
}
elseif($video_host_raw == 'www.hulu.com' OR $video_host_raw == 'hulu.com')
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/hulu.png\" class=\"ext_btn_hulu\"></img></button>";
}
elseif($video_host_raw == 'www.twitch.tv' OR $video_host_raw == 'twitch.tv')
{
	echo "<button class=\"ext-Button\">Twitch <i class=\"fab fa-twitch\"></i></button>";
}
elseif($video_host_raw == 'www.liveleak.com' OR $video_host_raw == 'liveleak.com')
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/liveleak.png\" class=\"ext_btn_liveleak\"></img></button>";
}
elseif($video_host_raw == 'www.vine.co' OR $video_host_raw == 'vine.co')
{
	echo "<button class=\"ext-Button\">Vine <i class=\"fa fa-vine\"></i></button>";
}
elseif($video_host_raw == 'www.ustream.tv' OR $video_host_raw == 'ustream.tv' OR $video_host_raw == 'video.ibm.com' )
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/ibm.png\" class=\"ext_btn_ibm\"></img></button>";
}
elseif($video_host_raw == 'www.break.com' OR $video_host_raw == 'break.com')
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/break.png\" class=\"ext_btn_break\"></img></button>";
}
elseif($video_host_raw == 'www.tv.com' OR $video_host_raw == 'tv.com')
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/tvdotcom.png\" class=\"ext_btn_tvdotcom\"></img></button>";
}
elseif($video_host_raw == 'www.metacafe.com' OR $video_host_raw == 'metacafe.com')
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/metacafe.png\" class=\"ext_btn_metacafe\"></img></button>";
}
elseif($video_host_raw == 'www.viewster.com' OR $video_host_raw == 'viewster.com')
{
	echo "<button class=\"ext-Button\"><img src=\"../../system/images/viewster.png\" class=\"ext_btn_viewster\"></img></button>";
}
?>