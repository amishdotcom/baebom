<?php
//For Page Title
													//Album Page Title----------------------------
if($page_type == 'album')
{
	if (isset($album_name) AND isset($title_year)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo $album_name;  echo " ($title_year) - Album - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
	if (isset($album_name) AND empty($title_year)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo "$album_name - Album - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
	if (isset($title_year) AND empty($album_name)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo "($title_year) - Album - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
	if(empty($title_year) AND empty($album_name)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo "No Data - Album - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
	
}

													//Track Page Title----------------------------

elseif($page_type == 'track')
{
	if (isset($track_name) AND isset($album_name)){
	//Title Fetcher
	$page_title = "$track_name - Track | $album_name - baebom";
	}
	if (isset($track_name) AND empty($album_name)){
	$page_title = "$track_name - Track - baebom";
	}
	if (isset($album_name) AND empty($track_name)) {
	$page_title = "$album_name - Track - baebom";
	}
	if (empty($album_name) AND empty($track_name)){
	$page_title = "No Data - Track - baebom";
	}
}

													//Tracklist Page Title----------------------------
													
elseif($page_type == 'tracklist')
{
	if (isset($album_name) AND isset($title_year)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo $album_name;  echo " ($title_year) - Tracklist - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
	if (isset($album_name) AND empty($title_year)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo "$album_name - Tracklist - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
	if (isset($title_year) AND empty($album_name)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo "($title_year) - Tracklist - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
	if(empty($title_year) AND empty($album_name)){
	//Title Fetcher
	ob_start(); //Start output buffer
	echo "No Data - Tracklist - baebom";

	$page_title = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
	}
}

													//Lyrics Page Title----------------------------
													
elseif($page_type == 'lyrics')
{
	if (isset($track_name) AND isset($album_name)){
	//Title Fetcher
	$page_title = "$track_name - Lyrics | $album_name - baebom";
	}
	if (isset($track_name) AND empty($album_name)){
	$page_title = "$track_name - Lyrics - baebom";
	}
	if (isset($album_name) AND empty($track_name)) {
	$page_title = "$album_name - Lyrics - baebom";
	}
	if (empty($album_name) AND empty($track_name)){
	$page_title = "No Data - Lyrics - baebom";
	}
}
													//Video Page Title----------------------------
													
elseif($page_type == 'video')
{
	if (isset($track_name) AND isset($album_name)){
	//Title Fetcher
	$page_title = "$track_name - Video | $album_name - baebom";
	}
	if (isset($track_name) AND empty($album_name)){
	$page_title = "$track_name - Video - baebom";
	}
	if (isset($album_name) AND empty($track_name)) {
	$page_title = "$album_name - Video - baebom";
	}
	if (empty($album_name) AND empty($track_name)){
	$page_title = "No Data - Video - baebom";
	}
}
													//root_index Page Title----------------------------
													
elseif($page_type == 'root_index')
{
	//Title Fetcher
	$page_title = "baebom - The Music Search Engine";
}
													//serp Page Title----------------------------
													
elseif($page_type == 'serp')
{
	//Title Fetcher
	if(isset($_GET['q']))	{
	$keyword_0 = trim($_REQUEST['q']);
	$page_title = "$keyword_0 - baebom Search";	} else {$page_title = "Error - baebom Search";}
}

elseif($page_type == 'about')
{
	//Title Fetcher
	$page_title = "About - baebom";
}

elseif($page_type == 'vision')
{
	//Title Fetcher
	$page_title = "Vision - baebom";
}

elseif($page_type == 'policy')
{
	//Title Fetcher
	$page_title = "Policy - baebom";
}

elseif($page_type == 'terms')
{
	//Title Fetcher
	$page_title = "Terms of Service - baebom";
}

elseif($page_type == 'contact')
{
	//Title Fetcher
	$page_title = "Contact - baebom";
}

elseif($page_type == 'dmca')
{
	//Title Fetcher
	$page_title = "DMCA - baebom";
}

elseif($page_type == 'dmca_ex')
{
	//Title Fetcher
	$page_title = "DMCA Example Template - baebom";
}

elseif($page_type == 'cora')
{
	//Title Fetcher
	$page_title = "Correction Appeal - baebom";
}

elseif($page_type == 'developer')
{
	//Title Fetcher
	$page_title = "About Developer - baebom";
}

elseif($page_type == 'masthead')
{
	//Title Fetcher
	$page_title = "Masthead - baebom";
}
elseif($page_type == 'reportbug')
{
	//Title Fetcher
	$page_title = "Report a Bug - baebom";
}
elseif($page_type == 'hac')
{
	//Title Fetcher
	$page_title = "Help Adding Content - baebom";
}
elseif($page_type == 'rbl')
{
	//Title Fetcher
	$page_title = "Report Broken Link - baebom";
}
elseif($page_type == 'join_hands')
{
	//Title Fetcher
	$page_title = "Join Hands - baebom";
}
elseif($page_type == 'siteversion')
{
	//Title Fetcher
	$page_title = "Website Version - baebom";
}
elseif($page_type == 'dbversion')
{
	//Title Fetcher
	$page_title = "Database Version - baebom";
}
elseif($page_type == 'donate')
{
	//Title Fetcher
	$page_title = "Donate - baebom";
}
elseif($page_type == 'disclaimer')
{
	//Title Fetcher
	$page_title = "Disclaimer - baebom";
}
?>