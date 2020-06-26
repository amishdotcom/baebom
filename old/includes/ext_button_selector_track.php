<?php	//Please Copy the Same in (ext_button_selector_album.php)
if($track_host_raw == 'www.saavn.com' OR $track_host_raw == 'saavn.com' OR $track_host_raw == 'www.jiosaavn.com' OR $track_host_raw == 'jiosaavn.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">JioSaavn <img src=\"../../system/images/saavn.png\" class=\"ext_btn_saavn\"></img></button>";
}
elseif($track_host_raw == 'www.gaana.com' OR $track_host_raw == 'gaana.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Gaana <img src=\"../../system/images/gaana.png\" class=\"ext_btn_gaana\"></img></button>";
}
elseif($track_host_raw == 'www.raaga.com' OR $track_host_raw == 'raaga.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Raaga <img src=\"../../system/images/raaga.png\" class=\"ext_btn_raaga\"></img></button>";
}
elseif($track_host_raw == 'www.radiocity.in' OR $track_host_raw == 'radiocity.in')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">RadioCity <img src=\"../../system/images/radiocity.png\" class=\"ext_btn_radiocity\"></img></button>";
}
elseif($track_host_raw == 'www.wynk.in' OR $track_host_raw == 'wynk.in')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Wynk <img src=\"../../system/images/wynk.png\" class=\"ext_btn_wynk\"></img></button>";
}
elseif($track_host_raw == 'www.hungama.com' OR $track_host_raw == 'hungama.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Hungama <img src=\"../../system/images/hungama.png\" class=\"ext_btn_hungama\"></img></button>";
}
elseif($track_host_raw == 'www.saregama.com' OR $track_host_raw == 'saregama.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Saregama <img src=\"../../system/images/saregama.png\" class=\"ext_btn_saregama\"></img></button>";
}
elseif($track_host_raw == 'www.timesmusic.com' OR $track_host_raw == 'timesmusic.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Times Music <img src=\"../../system/images/timesmusic.png\" class=\"ext_btn_times_mus\"></img></button>";
}
elseif($track_host_raw == 'www.pandora.com' OR $track_host_raw == 'pandora.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Pandora <img src=\"../../system/images/pandora.png\" class=\"ext_btn_pandora\"></img></button>";
}
elseif($track_host_raw == 'www.soundcloud.com' OR $track_host_raw == 'soundcloud.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">SoundCloud <i class=\"fa fa-soundcloud\"></i></button>";
}
elseif($track_host_raw == 'www.spotify.com' OR $track_host_raw == 'spotify.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Spotify <i class=\"fa fa-spotify\"></i></button>";
}
elseif($track_host_raw == 'www.play.google.com' OR $track_host_raw == 'play.google.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">Google Play Music <img src=\"../../system/images/googleplaymusic.png\" class=\"ext_btn_gpm\"></img></button>";
}
elseif($track_host_raw == 'www.last.fm' OR $track_host_raw == 'last.fm')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\">last.fm <i class=\"fa fa-lastfm\"></i></button>";
}
elseif($track_host_raw == 'www.myspace.com' OR $track_host_raw == 'myspace.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link'\"><img src=\"../../system/images/myspace.png\" class=\"ext_btn_myspace\"></img></button>";
}
?>