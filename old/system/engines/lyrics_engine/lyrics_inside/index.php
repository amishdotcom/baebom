<h1 class="page_main_heading text-center">Lyrics&nbsp;</h1>
<h5 class="small_screen_text text-center"><span class="sstn"><?php if(isset($track_name) AND isset($track_link)){echo "<span style=\"color:black\">for </span><a href=\"$track_bridge$lyrics_nav_scraped_track_link_id/\" style=\"color:red\">$track_name</a>";} ?></span></h5>

<?php

//Scraper Inclusion
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
include '../../../includes/link_scraper.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
include '../../includes/link_scraper.php';
}

?>
<?php
// Empty Entries Hider
	if(empty($track_name)){$dn0 = " style=\"display:none\"";}else{$dn0="";}
	if(empty($lyricist_lyrics)){$dn1 = " style=\"display:none\" ";}else{$dn1="";}
	if(empty($album_name)){$dn2 = " style=\"display:none\"";}else{$dn2="";}
	if(empty($lyrics_composer_main)){$dn3 = " style=\"display:none\"";}else{$dn3="";}
	if(empty($track_artist)){$dn4 = " style=\"display:none\"";}else{$dn4="";}
	if(empty($lyrics_content_language)){$dn5 = " style=\"display:none\"";}else{$dn5="";}
	if(empty($total_duration)){$dn6 = " style=\"display:none\"";}else{$dn6="";}
	if(empty($label_lyrics_copyright)){$dn7 = " style=\"display:none\"";}else{$dn7="";}
?>

<?php
if(empty($lyrics_content))
{
	echo "<span class=\"lyrics_content_na\">\n<br><br><br><br><span class=\"lna\">Lyrics Not Available<br><a style=\"font-size:11px;color:black\" href=\"mailto:founder@cybertronics.org.in?subject=Help Adding Lyrics for $page_title\">Help Adding Lyrics</a></span><br class=\"br1\"><br class=\"br2\"><br class=\"br3\"><br class=\"br4\"><br class=\"br5\"><br class=\"br6\">";
	
	echo "<br>";
	echo "<div class=\"text-center\">";
	if(($external_album_host == 'ON' AND isset($track_link)) OR ($itunes == 'ON' AND isset($track_link_iTunes)) OR ($video == 'ON' AND isset($video_link))){
	echo "<span class=\"out_ref\" style=\"color:black\">Stream on : </span>";}
	
	//External Album Host Enabler Checker
	if($external_album_host == 'ON' AND isset($track_link)){
		if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/ext_button_selector_lyrics.php';echo "&nbsp;&nbsp;";}
	if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/ext_button_selector_lyrics.php';echo "&nbsp;&nbsp;";}}
		

	//External iTunes Host Enabler Checker
	if($itunes == 'ON' AND isset($track_link_iTunes)){echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link_iTunes'\">iTunes <i class=\"fa fa-apple\"></i></button>";echo "&nbsp;&nbsp;";}

	//External Video Host Enabler Checker
	if($video == 'ON' AND isset($video_link)){
		if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/ext_button_selector_video.php';}
		if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/ext_button_selector_video.php';}
		}
	echo "</div>";
	
	if(isset($transit_id)){
	echo"\n\n<hr class=\"divider_other_tracks\">\n\n<p class=\"other_tracks\" style=\"color:black\">Other Tracks from Album</p><br>";

	echo"\n<div class=\"card\" style=\"width:18rem\">
  <ul class=\"list-group list-group-flush\">";
	
	try {
    $stmt = $conn->prepare("SELECT track_internal_link_id, track_name FROM $t2 where transit_id=$transit_id and $mod<>'$mod_val'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
      echo "\n   <li class=\"list-group-item\"><a class=\"taye sss\" href=\"$track_bridge$row[0]/\">$row[1]</a></li>";

    }
  }catch (PDOException $e) {
    print $e->getMessage();
	}
	}

  echo"\n  </ul>
</div>\n";
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
	include '../../../includes/central_footer.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
	include '../../includes/central_footer.php';
}
	echo"</span>\n";

}
elseif(isset($lyrics_content))
{
	echo "<span class=\"lyrics_content\"> \n<br>$lyrics_content<br><br><br><br>";
	
	echo "\n\n<span$dn7 class=\"dpch\"><span class=\"copyrightholder\">$track_name lyrics © $label_lyrics_copyright</span></span><br class=\"after_break\"><br class=\"after_break\">" . "\n";

	echo "<br>";
	echo "<div class=\"text-center\">";
	if(($external_album_host == 'ON' AND strlen($track_link)>0) OR ($itunes == 'ON' AND strlen($track_link_iTunes)>0) OR ($video == 'ON' AND strlen($video_link)>0)){
	echo "<span class=\"out_ref\">Stream on : </span>";}
	
	//External Album Host Enabler Checker
	if($external_album_host == 'ON' AND strlen($track_link)>0){
		if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/ext_button_selector_lyrics.php';}
		if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/ext_button_selector_lyrics.php';}
	}

	//External iTunes Host Enabler Checker
	if($itunes == 'ON' AND strlen($track_link_iTunes)>0){echo "&nbsp;&nbsp;<button class=\"ext-Button\" onclick=\"window.location.href='$track_link_iTunes'\">iTunes <i class=\"fa fa-apple\"></i></button>";echo "&nbsp;&nbsp;";}

	//External Video Host Enabler Checker
	if($video == 'ON' AND strlen($video_link)>0){
		if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/ext_button_selector_video.php';}
		if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/ext_button_selector_video.php';}
		}
	echo "</div>";

	echo"\n\n<hr class=\"divider_other_tracks\">\n\n<p class=\"other_tracks\">Other Tracks from Album</p><br>";

	echo"\n<div class=\"card\" style=\"width:18rem\">
  <ul class=\"list-group list-group-flush\">";
	
	try {
		
    $stmt = $conn->prepare("SELECT track_internal_link_id, track_name FROM $t2 where transit_id=$transit_id and $mod<>'$mod_val'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
      echo "\n   <li class=\"list-group-item\"><a class=\"taye\" href=\"$track_bridge$row[0]/\">$row[1]</a></li>";

    }
  }catch (PDOException $e) {
    print $e->getMessage();
}

  echo"\n  </ul>
</div>\n";

if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/central_footer.php';}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/central_footer.php';}
echo"\n</span>\n";
}
?>

<table>
 <tr<?php echo"$dn0" ?>><td><span class="track_name"><a class="track_name taie" href="<?php if(isset($lyrics_nav_scraped_track_link_id)){echo "$track_bridge$lyrics_nav_scraped_track_link_id/";} ?>"><?php if(isset($track_name)){echo "$track_name";} ?></a></span><br>&nbsp;&nbsp;<span<?php echo"$dn1" ?>class="lyricist_lyrics">written by <span class="lyrlcs"><?php if(isset($lyricist_lyrics)){echo "$lyricist_lyrics";} ?></span></span></td></tr>
 <tr<?php echo"$dn2" ?>><td><span style="color:black"><b><br>Album:</b>&nbsp;</span><span class="album_name taie"><?php if(isset($album_name)){echo "$album_name";} ?></span></td></tr>
 <tr<?php echo"$dn3" ?>><td><span style="color:black"><b>Music:</b>&nbsp;</span><span class="music_by"><?php if(isset($lyrics_composer_main)){echo "$lyrics_composer_main";} ?></span></td></tr>
 <tr<?php echo"$dn4" ?>><td><span style="color:black"><b>Artist (Singer):</b>&nbsp;</span><span class="artist"><?php if(isset($track_artist)){echo "$track_artist";} ?></span></td></tr>
 <tr<?php echo"$dn5" ?>><td><span style="color:black"><b>Lyrics Written in:</b>&nbsp;</span><span class="lyrics_lang"><?php if(isset($lyrics_content_language)){echo "$lyrics_content_language";} ?></span></td></tr>
 <tr<?php echo"$dn6" ?>><td><span style="color:black"><b>Duration:</b>&nbsp;</span><span class="duration"><?php if(isset($total_duration)){echo "$total_duration";} ?></span></td></tr>
 <tr<?php echo"$dn7" ?>><td class="copyrightholder"><?php if(isset($track_name)){echo "<br><br>$track_name";} ?> lyrics © <?php if(isset($label_lyrics_copyright)){echo "$label_lyrics_copyright";} ?></td></tr>
</table>

<!-- JSON-LD for schema.org -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "MusicAlbum",
    <?php if(isset($album_name)){echo "\"name\" : \"$album_name\",\n";} ?>
	<?php if(isset($im)){echo "\"thumbnailUrl\" : \"$cdn/$thumbs/$im$reset_module\",\n";} ?>
	<?php if(isset($im)){echo "\"Image\" : \"$cdn/$images/$im$reset_module\",\n";} ?><?php try {
    $stmt = $conn->prepare("SELECT track_name,music,lyrics,artist,TIME_FORMAT(duration, '%i:%s'),iswc,isrc,recording_date,producer,recording_studio,recorded_by,arranged_managed_by,instruments_by,programmers,sound_dubbing_engineer,mixing_and_mastering,music_assistant,video_director,additional_info FROM $t2 WHERE $mod='$mod_val' ORDER BY Order_id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
				if(isset($track_name) OR isset($lyrics_composer_main) OR isset($lyricist_lyrics) OR isset($track_artist) OR isset($total_duration) OR isset($lyrics_content_language) OR isset($label_lyrics_copyright) OR isset($lyrics_content_formatted)){echo "	\"track\": {\n		   \"@type\": \"MusicRecording\"\n";}if(isset($track_name)){echo "		   ,\"name\": \"$track_name\"\n";}if(isset($track_artist)){echo "		   ,\"byArtist\": \"$track_artist\"\n";}if(isset($total_duration)){echo "		   ,\"duration\": \"$total_duration\"\n";}if(isset($lyrics_content_language)){echo "		   ,\"inLanguage\": \"$lyrics_content_language\"\n";}if(isset($label_lyrics_copyright)){echo "		   ,\"copyrightHolder\": \"$label_lyrics_copyright\"\n";}echo"			}\n}\n";
				}}catch(PDOException $e){echo "Error: " . $e->getMessage();}
		?>
</script>
