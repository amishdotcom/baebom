<?php
include '../../includes/db_fetchers/imdb_link_fetcher.php';
include '../../includes/db_fetchers/wikipedia_link_fetcher.php';
include '../../includes/db_fetchers/album_link_fetcher.php';
include '../../includes/db_fetchers/iTunes_link_fetcher.php';
include '../../includes/album_host_predictor.php';
?>

<!---- Album External Links Loader ---->

<!-- Downside svg Rectangle -->
<div class="svg_rect"><svg></svg>
<!-- IMDb icon & link loader-->
<?php
//To Check if IMDb links are Allowed or not (Global Switch)
if($imdb == 'ON')
{
//To Check if Album really contains IMDb link or not and then Print it
if(strlen($IMDb_link)<=0)
{
	echo"<a class=\"imdb_link\" title=\"No IMDb Page Found\"> </a>";
}
if(strlen($IMDb_link)>0)
{
	echo"<a class=\"imdb_link\" title=\"IMDb Page\" href=\"$IMDb_link\"> </a>";
}
}
elseif($imdb == 'OFF')
{
	echo"<a class=\"imdb_link\" title=\"IMDb Links are Turned OFF\"> </a>";
}
?>

<!-- Wikipedia icon & link loader-->
<?php
//To Check if Wikipedia links are Allowed or not (Global Switch)
if($wikipedia == 'ON')
{
//To Check if Album really contains Wikipedia link or not and then Print it
if(strlen($wiki_link)<=0)
{
	echo"<a class=\"wiki_link\" title=\"Wikipedia Page not Found\"> </a>";
}
if(strlen($wiki_link)>0)
{
	echo"<a class=\"wiki_link\" title=\"Wikipedia Page\" href=\"$wiki_link\"> </a>";
}
}
elseif($wikipedia == 'OFF')
{
	echo"<a class=\"wiki_link\" title=\"Wikipedia Links are Turned OFF\"> </a>";
}
?>

<!-- Album icon & link loader-->
<?php
//To Check if External Music Hosts are Allowed or not (Global Switch)
if($external_album_host == 'ON')
{
//To Check if Album really contains Album link or not and then Print it
if(strlen($album_link)<=0)
{
	echo"<a class=\"album_link\" title=\"No External Music Host Found for $album_name\"> </a>";
}
if(strlen($album_link)>0)
{
	echo"<a class=\"album_link\" title=\"Listen to $album_name Songs on $album_host\" href=\"$album_link\"> </a>";
}
}
elseif($external_album_host == 'OFF')
{
	echo"<a class=\"album_link\" title=\"External Music Links are Turned OFF\"> </a>";
}
?>

<!-- iTunes icon & link loader-->
<?php
//To Check if iTunes Links are Allowed or not (Global Switch)
if($itunes == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($iTunes_album_link)<=0)
{
	echo"<a class=\"iTunes_album_link\" title=\"$album_name not Found on iTunes\"> </a>";
}
if(strlen($iTunes_album_link)>0)
{
	echo"<a class=\"iTunes_album_link\" title=\"Buy or Stream Online $album_name on iTunes\" href=\"$iTunes_album_link\"> </a>";
}
}
elseif($itunes == 'OFF')
{
	echo"<a class=\"iTunes_album_link\" title=\"iTunes Links are Turned OFF\"> </a>";
}
?>
</div>
<!---->