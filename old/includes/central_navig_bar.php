<?php
if($page_type == 'album' OR $page_type == 'track' OR $page_type == 'tracklist'){include '../../includes/central_navbar_engine.php';}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/central_navbar_engine.php';}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/central_navbar_engine.php';}}
elseif($page_type == 'serp'){include 'includes/central_navbar_engine.php';}
?>
<nav class="navbar navbar-expand-lg navbar-light">
<?php
if($page_type == 'album' OR $page_type == 'track' OR $page_type == 'tracklist'){include '../../includes/brand_logo.php';}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/brand_logo.php';}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/brand_logo.php';}}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion'){include 'includes/brand_logo.php';}
?>
  
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
 </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <a class="nav-link" href="<?php echo $site_root ?>">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo "$site_root/about" ?>">About</a>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Share
      </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_page_url ?>" target="_blank" title="Share Current Page on Facebook">Facebook</a>
        <a class="dropdown-item" href="https://twitter.com/share?url=<?php echo $current_page_url ?>" target="_blank" title="Share Current Page on Twitter">Twitter</a>
	    <a class="dropdown-item" href="https://www.reddit.com/submit?url=<?php echo $current_page_url ?>" target="_blank" title="Share Current Page on Reddit">Reddit</a>
	    <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_page_url ?>" target="_blank" title="Share Current Page on LinkedIn">LinkedIn</a>
         <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="mailto:?subject=Have%20a%20look%20at%20this%20Address&body=<?php echo $current_page_url ?>" target="_blank" title="Email Current Page to a Friend">Email</a>
        <a class="dropdown-item" href="javascript:;" onclick="window.print()" target="_blank" title="Print Current Page">Print</a>
       </div>
     </li>	  
	  
	 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Navigation
      </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">	<?php

if($page_type=='album')
{
	if(isset($album_nav_scraped_tracklist_link_id) AND isset($album_name)){
		echo"\n        <a class=\"dropdown-item\" href=\"$tracklist_bridge$album_nav_scraped_tracklist_link_id/\" title=\"Navigate to Tracklist of $album_name\">Tracklist</a>\n";
	}
}

elseif($page_type=='track')
{
	if(isset($track_nav_scraped_album_link_id) AND isset($album_name)){
		echo"\n        <a class=\"dropdown-item\" href=\"$album_bridge$track_nav_scraped_album_link_id/\" title=\"Navigate to Album Info of $album_name\">Album</a>\n";}
	if(isset($track_nav_scraped_tracklist_link_id) AND isset($album_name)){
		echo"        <a class=\"dropdown-item\" href=\"$tracklist_bridge$track_nav_scraped_tracklist_link_id/\" title=\"Navigate to Tracklist of $album_name\">Tracklist</a>\n";}
	if(isset($track_nav_scraped_lyrics_link_id) AND isset($track_name)){
		echo"        <a class=\"dropdown-item\" href=\"$lyrics_bridge$track_nav_scraped_lyrics_link_id/\" title=\"Navigate to Lyrics of $track_name\" rel=\"nofollow\">Lyrics</a>\n";}
}

elseif($page_type=='tracklist')
{
	if(isset($tracklist_nav_scraped_album_link_id) AND isset($album_name)){
		echo"\n        <a class=\"dropdown-item\" href=\"$album_bridge$tracklist_nav_scraped_album_link_id/\" title=\"Navigate to Album Info of $album_name\">Album</a>\n";}
}

elseif($page_type=='lyrics')
{
	if(isset($lyrics_nav_scraped_album_link_id) AND isset($album_name)){
		echo"\n        <a class=\"dropdown-item\" href=\"$album_bridge$lyrics_nav_scraped_album_link_id/\" title=\"Navigate to Album Info of $album_name\">Album</a>\n";}
	if(isset($lyrics_nav_scraped_tracklist_link_id) AND isset($album_name)){
		echo"\n        <a class=\"dropdown-item\" href=\"$tracklist_bridge$lyrics_nav_scraped_tracklist_link_id/\" title=\"Navigate to Tracklist of $album_name\">Tracklist</a>\n";}
	if(isset($lyrics_nav_scraped_track_link_id) AND isset($track_name)){
		echo"\n        <a class=\"dropdown-item\" href=\"$track_bridge$lyrics_nav_scraped_track_link_id/\" title=\"Navigate to Lyrics of $track_name\">Track</a>\n";}
}

elseif($page_type=='serp')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
}

elseif($page_type=='about')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='vision')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='policy')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='terms')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='contact')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
}

elseif($page_type=='dmca')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='masthead')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='developer')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='cora')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='reportbug')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='hac')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='rbl')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='join_hands')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='siteversion')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='dbversion')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='donate')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

elseif($page_type=='disclaimer')
{
echo"\n       <a class=\"dropdown-item\" href=\"$site_root\" title=\"Go to baebom Search\">Home</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/about\" title=\"About baebom\">About</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/vision\" title=\"Our Vision\">Vision</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/policy\" title=\"Policy\">Policy</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/terms\" title=\"Terms of Use\">Terms</a>\n";
echo"\n       <a class=\"dropdown-item\" href=\"$site_root/contact\" title=\"Contact Us\">Contact</a>\n";
}

echo"       </div>\n";
echo"     </li>\n";

	  ?>

	 <?php

if($page_type=='album')
{
//To Check if both aren't turned off by Admin
if($external_album_host == 'ON' OR $itunes == 'ON')
{
//To Check if This Dropdown has values or not
if(isset($album_link) OR isset($iTunes_album_link))
{
echo"<li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Stream";
echo"       </a>\n";
echo"      <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
//Album link loader
//To Check if External Music Hosts are Allowed or not (Global Switch)
if($external_album_host == 'ON')
{
//To Check if Album really contains Album link or not and then Print it
if(strlen($album_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$album_link\" title=\"Listen to $album_name Songs on $album_host\">$album_host</a>\n";
}
}

//iTunes link loader
//To Check if iTunes Links are Allowed or not (Global Switch)
if($itunes == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($iTunes_album_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$iTunes_album_link\" title=\"Buy or Stream Online $album_name on iTunes\">iTunes</a>\n";
}
}

echo"      </div>\n";
echo"     </li>\n\n";
}
}

//To Check if both aren't turned off by Admin
if($imdb == 'ON' OR $wikipedia == 'ON')
{
//To Check if This Dropdown has values or not
if(isset($IMDb_link) OR isset($wiki_link))
{
echo"	 <li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Resources";
echo"       </a>\n";
echo"	  <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
//IMDb link loader
//To Check if IMDb links are Allowed or not (Global Switch)
if($imdb == 'ON')
{
//To Check if Album really contains Album link or not and then Print it
if(strlen($IMDb_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$imdb_domain$IMDb_link\" title=\"View IMDb for $album_name\">IMDb</a>\n";
}
}

//iTunes link loader
//To Check if iTunes Links are Allowed or not (Global Switch)
if($wikipedia == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($wiki_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$wiki_link\" title=\"View Wikipedia for $album_name\">Wikipedia</a>\n";
}
}

echo"      </div>\n";
echo"     </li>\n";
}
}


}

//---------------------

if($page_type=='track')
{
//To Check if both aren't turned off by Admin
if($external_album_host == 'ON' OR $itunes == 'ON' OR $video == 'ON')
{
//To Check if This Dropdown has values or not
if(isset($track_link) OR isset($track_link_iTunes) OR isset($video_link))
{
echo"<li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Stream";
echo"       </a>\n";
echo"	  <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
//Album link loader
//To Check if External Music Hosts are Allowed or not (Global Switch)
if($external_album_host == 'ON')
{
//To Check if Album really contains Album link or not and then Print it
if(strlen($track_link)>0)
{
echo"       <a class=\"dropdown-item\" href=\"$track_link\" title=\"Listen to $track_name on $track_host\">$track_host</a>\n";
}
}

//iTunes link loader
//To Check if iTunes Links are Allowed or not (Global Switch)
if($itunes == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($track_link_iTunes)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$track_link_iTunes\" title=\"Buy or Stream Online $track_name on iTunes\">iTunes</a>\n";
}
}

//Video link loader
//To Check if Video Links are Allowed or not (Global Switch)
if($video == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($video_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$video_link\" title=\"Watch $track_name on $video_host\">$video_host</a>\n";
}
}

echo"      </div>\n";
echo"     </li>\n";
}
}

//To Check if both aren't turned off by Admin
if($lyric == 'ON')
{
//To Check if This Dropdown has values or not
if(isset($lyrics_content))
{
echo"\n	 <li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Resources";
echo"      </a>\n";
echo"	  <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
echo"	   <a class=\"dropdown-item\" href=\"$lyrics_bridge$lyrics_link/\" title=\"View Lyrics for $track_name\">Lyrics</a>\n";
echo"      </div>\n";
echo"     </li>\n";
}
}


}

//---------------------

if($page_type=='tracklist')
{
//To Check if both aren't turned off by Admin
if($external_album_host == 'ON' OR $itunes == 'ON')
{
//To Check if This Dropdown has values or not
if(isset($album_link) OR isset($iTunes_album_link))
{
echo"<li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Stream";
echo"       </a>\n";
echo"      <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
//Album link loader
//To Check if External Music Hosts are Allowed or not (Global Switch)
if($external_album_host == 'ON')
{
//To Check if Album really contains Album link or not and then Print it
if(strlen($album_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$album_link\" title=\"Listen to $album_name Songs on $album_host\">$album_host</a>\n";
}
}

//iTunes link loader
//To Check if iTunes Links are Allowed or not (Global Switch)
if($itunes == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($iTunes_album_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$iTunes_album_link\" title=\"Buy or Stream Online $album_name on iTunes\">iTunes</a>\n";
}
}

echo"      </div>\n";
echo"     </li>\n\n";
}
}

//To Check if both aren't turned off by Admin
if($imdb == 'ON' OR $wikipedia == 'ON')
{
//To Check if This Dropdown has values or not
if(isset($IMDb_link) OR isset($wiki_link))
{
echo"	 <li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Resources";
echo"       </a>\n";
echo"	  <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
//IMDb link loader
//To Check if IMDb links are Allowed or not (Global Switch)
if($imdb == 'ON')
{
//To Check if Album really contains Album link or not and then Print it
if(strlen($IMDb_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$imdb_domain$IMDb_link\" title=\"View IMDb for $album_name\">IMDb</a>\n";
}
}

//iTunes link loader
//To Check if iTunes Links are Allowed or not (Global Switch)
if($wikipedia == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($wiki_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$wiki_link\" title=\"View Wikipedia for $album_name\">Wikipedia</a>\n";
}
}

echo"      </div>\n";
echo"     </li>\n";
}
}


}

//---------------------

if($page_type=='lyrics')
{
//To Check if both aren't turned off by Admin
if($external_album_host == 'ON' OR $itunes == 'ON' OR $video == 'ON')
{
//To Check if This Dropdown has values or not
if(isset($track_link) OR isset($track_link_iTunes) OR isset($video_link))
{
echo"<li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Stream";
echo"       </a>\n";
echo"	  <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
//Album link loader
//To Check if External Music Hosts are Allowed or not (Global Switch)
if($external_album_host == 'ON')
{
//To Check if Album really contains Track link or not and then Print it
if(strlen($track_link)>0)
{
echo"       <a class=\"dropdown-item\" href=\"$track_link\" title=\"Listen to $track_name on $track_host\">$track_host</a>\n";
}
}

//iTunes link loader
//To Check if iTunes Links are Allowed or not (Global Switch)
if($itunes == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($track_link_iTunes)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$track_link_iTunes\" title=\"Buy or Stream Online $track_name on iTunes\">iTunes</a>\n";
}
}

//Video link loader
//To Check if Video Links are Allowed or not (Global Switch)
if($video == 'ON')
{
//To Check if Album really contains iTunes link or not and then Print it
if(strlen($video_link)>0)
{
echo"	   <a class=\"dropdown-item\" href=\"$video_link\" title=\"Watch $track_name on $video_host\">$video_host</a>\n";
}
}

echo"      </div>\n";
echo"     </li>\n";
}
}

try {
	$stmt = $conn->prepare("SELECT lyrics_content_hinglish,lyrics_content_hindi,lyrics_content_english,lyrics_content_telugu,lyrics_content_tamil,lyrics_content_malayalam,lyrics_content_punjabi,lyrics_content_other FROM $t2 WHERE $mod='$mod_val'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {

if(strlen($row[0])>0 OR strlen($row[1])>0 OR strlen($row[2])>0 OR strlen($row[3])>0 OR strlen($row[4])>0 OR strlen($row[5])>0 OR strlen($row[6])>0){
echo"<li class=\"nav-item dropdown\">\n";
echo"      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo"          Language";
echo"       </a>\n";
echo"	  <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
}

if(strlen($row[0])>0){echo"	   <a class=\"dropdown-item\""; if($sub_page_type == 'hinglish'){} else{echo"href=\"../hinglish/\"";} echo " title=\"Read $track_name Lyrics in Hinglish"; if($sub_page_type == 'hinglish'){echo" (Current Tab)";} echo"\">Hinglish</a>\n";}
if(strlen($row[1])>0){echo"	   <a class=\"dropdown-item\""; if($sub_page_type == 'hindi'){} else{echo"href=\"../hindi/\"";} echo " title=\"Read $track_name Lyrics in Hindi"; if($sub_page_type == 'hindi'){echo" (Current Tab)";} echo"\">Hindi</a>\n";}
if(strlen($row[2])>0){echo"	   <a class=\"dropdown-item\""; if($sub_page_type == 'english'){} else{echo"href=\"../english/\"";} echo " title=\"Read $track_name Lyrics in English"; if($sub_page_type == 'english'){echo" (Current Tab)";} echo"\">English</a>\n";}
if(strlen($row[3])>0){echo"	   <a class=\"dropdown-item\""; if($sub_page_type == 'telugu'){} else{echo"href=\"../telugu/\"";} echo " title=\"Read $track_name Lyrics in Telugu"; if($sub_page_type == 'telugu'){echo" (Current Tab)";} echo"\">Telugu</a>\n";}
if(strlen($row[4])>0){echo"	   <a class=\"dropdown-item\""; if($sub_page_type == 'tamil'){} else{echo"href=\"../tamil/\"";} echo " title=\"Read $track_name Lyrics in Tamil"; if($sub_page_type == 'tamil'){echo" (Current Tab)";} echo"\">Tamil</a>\n";}
if(strlen($row[5])>0){echo"	   <a class=\"dropdown-item\""; if($sub_page_type == 'malayalam'){} else{echo"href=\"../malayalam/\"";} echo " title=\"Read $track_name Lyrics in Malayalam"; if($sub_page_type == 'malayalam'){echo" (Current Tab)";} echo"\">Malayalam</a>\n";}
if(strlen($row[6])>0){echo"	   <a class=\"dropdown-item\""; if($sub_page_type == 'punjabi'){} else{echo"href=\"../punjabi/\"";} echo " title=\"Read $track_name Lyrics in Punjabi"; if($sub_page_type == 'punjabi'){echo" (Current Tab)";} echo"\">Punjabi</a>\n";}



	}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(strlen($row[0])>0 OR strlen($row[1])>0 OR strlen($row[2])>0 OR strlen($row[3])>0 OR strlen($row[4])>0 OR strlen($row[5])>0 OR strlen($row[6])>0){
echo"      </div>\n
     </li>\n";
}

}

	  ?>

    </ul>
  </div>
</nav>