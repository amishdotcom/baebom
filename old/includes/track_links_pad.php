<!---->
<?php
include '../../includes/db_fetchers/track_link_fetcher.php';
include '../../includes/db_fetchers/track_iTunes_link_fetcher.php';
include '../../includes/db_fetchers/video_link_fetcher.php';
include '../../includes/db_fetchers/lyrics_link_fetcher.php';
include '../../includes/track_host_predictor.php';
include '../../includes/video_host_predictor.php';
?>

<!-- Downside svg Rectangle -->
<div class="svg_rect"><svg></svg>
<!---- Album External Links Loader ---->
<!-- Track icon & External Host link loader-->
<?php
//To Check if External Music Hosts are Allowed or not (Global Switch)
if($external_album_host == 'ON')
{
//To Check if Track really contains External Host link or not and then Print it
if(strlen($track_link)<=0)
{
	echo"<a class=\"track_link\" title=\"No External Music Host Found for $track_name\"> </a>";
}
if(strlen($track_link)>0)
{
	echo"<a class=\"track_link\" title=\"Listen to $track_name on $track_host\" href=\"$track_link\"> </a>";
}
}
elseif($external_album_host == 'OFF')
{
	echo"<a class=\"track_link\" title=\"External Music Links are Turned OFF\"> </a>";
}
?>

<!-- iTunes Album icon & link loader-->
<?php
//To Check if iTunes Links are Allowed or not (Global Switch)
if($itunes == 'ON')
{
//To Check if Track really contains iTunes link or not and then Print it
if(strlen($track_link_iTunes)<=0)
{
	echo"<a class=\"iTunes_track_link\" title=\"$track_name not Found on iTunes\"> </a>";
}
if(strlen($track_link_iTunes)>0)
{
	echo"<a class=\"iTunes_track_link\" title=\"Buy or Stream Online $track_name on iTunes\" href=\"$track_link_iTunes\"> </a>";
}
}
elseif($itunes == 'OFF')
{
	echo"<a class=\"iTunes_track_link\" title=\"iTunes Links are Turned OFF\"> </a>";
}
?>

<!-- Video icon & link loader-->
<?php
//To Check if Video Links are Allowed or not (Global Switch)
if($video == 'ON')
{
//To Check if Track really contains Video link or not and then Print it
if(strlen($video_link)<=0)
{
	echo"<a class=\"video_track_link\" title=\"$track_name Video not Found\"> /a>";
}
if(strlen($video_link)>0)
{
	echo"<a class=\"video_track_link\" title=\"Watch $track_name on $video_host\" href=\"$video_link\"> /a>";
}
}
elseif($video == 'OFF')
{
	echo"<a class=\"video_track_link\" title=\"Videos are Turned OFF\"> </a>";
}
?>

<!-- Lyrics icon & link loader-->
<?php
//To Check if Video Links are Allowed or not (Global Switch)
if($lyric == 'ON')
{
//To Check if Track really contains Lyrics Content or not and then Print it

{
	echo"<a class=\"lyrics_link\" title=\"$track_name Lyrics not Found\"> </a>";
}

{
	echo"<a class=\"lyrics_link\" title=\"See $track_name Lyrics on baebom\" href=\"$lyrics_link\"> </a>";
}
}
elseif($lyric == 'OFF')
{
	echo"<a class=\"lyrics_link\" title=\"Lyrics are Turned OFF\"> </a>";
}
?>
</div>
