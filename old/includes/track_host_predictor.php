<?php
//Warning!
//This File Contains Operations for Multiple Type of Pages
//Please make sure that any Intended changes made to this File is reflected on Every Type of Page Instance Defined Here and Even the Sister File of it


if($page_type=='album')
{
//Track Link Host Predictor
ob_start(); //Start output buffer
echo $row[4];

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$track_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

}

elseif($page_type=='track')
{
//Track Link Host Predictor
ob_start(); //Start output buffer
echo $track_link;

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$track_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

}

elseif($page_type=='lyrics')
{
//Track Link Host Predictor
ob_start(); //Start output buffer
echo $track_link;

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$track_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

}

elseif($page_type=='video')
{
//Track Link Host Predictor
ob_start(); //Start output buffer
echo $track_link;

$url = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$parse = parse_url($url);

ob_start(); //Start output buffer
echo $parse['host'];

$track_host_raw = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

}

//Total 18 Foreign Sites and Default(Domained)
if($track_host_raw == 'www.saavn.com' OR $track_host_raw == 'saavn.com' OR $track_host_raw == 'www.jiosaavn.com' OR $track_host_raw == 'jiosaavn.com')
{
	$track_host = 'Saavn';
}
elseif($track_host_raw == 'www.gaana.com' OR $track_host_raw == 'gaana.com')
{
	$track_host = 'Gaana';
}
elseif($track_host_raw == 'www.raaga.com' OR $track_host_raw == 'raaga.com')
{
	$track_host = 'Raaga';
}
elseif($track_host_raw == 'www.dhingana.com' OR $track_host_raw == 'dhingana.com')
{
	$track_host = 'Dhingana';
}
elseif($track_host_raw == 'www.radiocity.in' OR $track_host_raw == 'radiocity.in')
{
	$track_host = 'RadioCity';
}
elseif($track_host_raw == 'www.wynk.in' OR $track_host_raw == 'wynk.in')
{
	$track_host = 'Wynk Music';
}
elseif($track_host_raw == 'www.hungama.com' OR $track_host_raw == 'hungama.com')
{
	$track_host = 'Hungama';
}
elseif($track_host_raw == 'www.bollywoodhungama.com' OR $track_host_raw == 'bollywoodhungama.com')
{
	$track_host = 'Bollywood Hungama';
}
elseif($track_host_raw == 'www.itunes.apple.com' OR $track_host_raw == 'itunes.apple.com')
{
	$track_host = 'iTunes';
}
elseif($track_host_raw == 'www.youtube.com' OR $track_host_raw == 'youtube.com')
{
	$track_host = 'Youtube';
}
elseif($track_host_raw == 'www.saregama.com' OR $track_host_raw == 'saregama.com')
{
	$track_host = 'Saregama';
}
elseif($track_host_raw == 'www.timesmusic.com' OR $track_host_raw == 'timesmusic.com')
{
	$track_host = 'Times Music';
}
elseif($track_host_raw == 'www.pandora.com' OR $track_host_raw == 'pandora.com')
{
	$track_host = 'Pandora';
}
elseif($track_host_raw == 'www.soundcloud.com' OR $track_host_raw == 'soundcloud.com')
{
	$track_host = 'Soundcloud';
}
elseif($track_host_raw == 'www.spotify.com' OR $track_host_raw == 'spotify.com')
{
	$track_host = 'Spotify';
}
elseif($track_host_raw == 'www.play.google.com' OR $track_host_raw == 'play.google.com')
{
	$track_host = 'Google Play Music';
}
elseif($track_host_raw == 'www.last.fm' OR $track_host_raw == 'last.fm')
{
	$track_host = 'Last.fm';
}
elseif($track_host_raw == 'www.myspace.com' OR $track_host_raw == 'myspace.com')
{
	$track_host = 'My Space';
}
else
{
	$track_host = $track_host_raw;
}
?>