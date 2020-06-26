<?php	//Please Copy the Same in (ext_button_selector_track.php)
if($album_host_raw == 'www.saavn.com' OR $album_host_raw == 'saavn.com' OR $album_host_raw == 'www.jiosaavn.com' OR $album_host_raw == 'jiosaavn.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">JioSaavn <img src=\"../../system/images/saavn.png\" class=\"ext_btn_saavn\"></img></button>";
}
elseif($album_host_raw == 'www.gaana.com' OR $album_host_raw == 'gaana.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Gaana <img src=\"../../system/images/gaana.png\" class=\"ext_btn_gaana\"></img></button>";
}
elseif($album_host_raw == 'www.raaga.com' OR $album_host_raw == 'raaga.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Raaga <img src=\"../../system/images/raaga.png\" class=\"ext_btn_raaga\"></img></button>";
}
elseif($album_host_raw == 'www.radiocity.in' OR $album_host_raw == 'radiocity.in')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">RadioCity <img src=\"../../system/images/radiocity.png\" class=\"ext_btn_radiocity\"></img></button>";
}
elseif($album_host_raw == 'www.wynk.in' OR $album_host_raw == 'wynk.in')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Wynk <img src=\"../../system/images/wynk.png\" class=\"ext_btn_wynk\"></img></button>";
}
elseif($album_host_raw == 'www.hungama.com' OR $album_host_raw == 'hungama.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Hungama <img src=\"../../system/images/hungama.png\" class=\"ext_btn_hungama\"></img></button>";
}
elseif($album_host_raw == 'www.saregama.com' OR $album_host_raw == 'saregama.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Saregama <img src=\"../../system/images/saregama.png\" class=\"ext_btn_saregama\"></img></button>";
}
elseif($album_host_raw == 'www.timesmusic.com' OR $album_host_raw == 'timesmusic.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Times Music <img src=\"../../system/images/timesmusic.png\" class=\"ext_btn_times_mus\"></img></button>";
}
elseif($album_host_raw == 'www.pandora.com' OR $album_host_raw == 'pandora.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Pandora <img src=\"../../system/images/pandora.png\" class=\"ext_btn_pandora\"></img></button>";
}
elseif($album_host_raw == 'www.soundcloud.com' OR $album_host_raw == 'soundcloud.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">SoundCloud <i class=\"fa fa-soundcloud\"></i></button>";
}
elseif($album_host_raw == 'www.spotify.com' OR $album_host_raw == 'spotify.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Spotify <i class=\"fa fa-spotify\"></i></button>";
}
elseif($album_host_raw == 'www.play.google.com' OR $album_host_raw == 'play.google.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">Google Play Music <img src=\"../../system/images/googleplaymusic.png\" class=\"ext_btn_gpm\"></img></button>";
}
elseif($album_host_raw == 'www.last.fm' OR $album_host_raw == 'last.fm')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\">last.fm <i class=\"fa fa-lastfm\"></i></button>";
}
elseif($album_host_raw == 'www.myspace.com' OR $album_host_raw == 'myspace.com')
{
	echo "<button class=\"ext-Button\" onclick=\"window.location.href='$album_link'\"><img src=\"../../system/images/myspace.png\" class=\"ext_btn_myspace\"></img></button>";
}
?>