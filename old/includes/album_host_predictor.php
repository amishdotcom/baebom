<?php

//Album Link Host Predictor
ob_start(); //Start output buffer
echo $album_link;

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$album_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

//
//Total 16 Foreign Sites and Default(Domained)
if($album_host_raw == 'www.saavn.com' OR $album_host_raw == 'saavn.com' OR $album_host_raw == 'www.jiosaavn.com' OR $album_host_raw == 'jiosaavn.com')
{
	$album_host = 'JioSaavn';
}
elseif($album_host_raw == 'www.gaana.com' OR $album_host_raw == 'gaana.com')
{
	$album_host = 'Gaana';
}
elseif($album_host_raw == 'www.raaga.com' OR $album_host_raw == 'raaga.com')
{
	$album_host = 'Raaga';
}
elseif($album_host_raw == 'www.radiocity.in' OR $album_host_raw == 'radiocity.in')
{
	$album_host = 'RadioCity';
}
elseif($album_host_raw == 'www.wynk.in' OR $album_host_raw == 'wynk.in')
{
	$album_host = 'Wynk Music';
}
elseif($album_host_raw == 'www.hungama.com' OR $album_host_raw == 'hungama.com')
{
	$album_host = 'Hungama';
}
elseif($album_host_raw == 'www.itunes.apple.com' OR $album_host_raw == 'itunes.apple.com')
{
	$album_host = 'iTunes';
}
elseif($album_host_raw == 'www.youtube.com' OR $album_host_raw == 'youtube.com')
{
	$album_host = 'Youtube';
}
elseif($album_host_raw == 'www.saregama.com' OR $album_host_raw == 'saregama.com')
{
	$album_host = 'Saregama';
}
elseif($album_host_raw == 'www.timesmusic.com' OR $album_host_raw == 'timesmusic.com')
{
	$album_host = 'Times Music';
}
elseif($album_host_raw == 'www.pandora.com' OR $album_host_raw == 'pandora.com')
{
	$album_host = 'Pandora';
}
elseif($album_host_raw == 'www.soundcloud.com' OR $album_host_raw == 'soundcloud.com')
{
	$album_host = 'Soundcloud';
}
elseif($album_host_raw == 'www.spotify.com' OR $album_host_raw == 'spotify.com')
{
	$album_host = 'Spotify';
}
elseif($album_host_raw == 'www.play.google.com' OR $album_host_raw == 'play.google.com')
{
	$album_host = 'Google Play Music';
}
elseif($album_host_raw == 'www.last.fm' OR $album_host_raw == 'last.fm')
{
	$album_host = 'Last.fm';
}
elseif($album_host_raw == 'www.myspace.com' OR $album_host_raw == 'myspace.com')
{
	$album_host = 'My Space';
}
else
{
	$album_host = $album_host_raw;
}
?>