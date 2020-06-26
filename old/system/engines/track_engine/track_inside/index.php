<h1 class="page_main_heading text-center">Track Info</h1>
<br>

<?php
	if((empty($track_upc)) AND (empty($dur_fetch)) AND (empty($track_name)) AND (empty($album_name)) AND (empty($track_duration)) AND (empty($ct_hide)) AND (empty($cid_fetch)) AND (empty($track_link)) AND (empty($track_link_iTunes)) AND (empty($video_link)) AND (empty($lyrics_content))){
	echo "<br><br><br><div class=\"text-center\" style=\"font-weight:bold;color:red\">No Data</div><br><br><br>";
	}
?>

<!-- Big Table(Track) -->
<table>
<?php

//Duration Fetcher
class dur_fetch extends RecursiveIteratorIterator{}
try {$stmt = $conn->prepare("SELECT TIME_FORMAT(duration,'%H') FROM $t2 WHERE $mod='$mod_val'");$stmt->execute();$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
foreach(new dur_fetch(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$dur_fetch) {}	}
catch(PDOException $e) {echo "Error: " . $e->getMessage();}

//Duration Check for Bighand
if(isset($dur_fetch)){
if($dur_fetch>0)
{
	//Duration Fetcher
class track_duration_full extends RecursiveIteratorIterator{}
try {$stmt = $conn->prepare("SELECT TIME_FORMAT(duration, '%H:%i:%s') FROM $t2 WHERE $mod='$mod_val'");$stmt->execute();$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
foreach(new track_duration_full(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_duration) {}	}
catch(PDOException $e) {echo "Error: " . $e->getMessage();}
}

//Duration Check for Shorthand
if($dur_fetch<=0)
{
	//Duration Fetcher
class track_duration_shorthand extends RecursiveIteratorIterator{}
try {$stmt = $conn->prepare("SELECT TIME_FORMAT(duration, '%i:%s') FROM $t2 WHERE $mod='$mod_val'");$stmt->execute();$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
foreach(new track_duration_shorthand(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_duration) {}	}
catch(PDOException $e) {echo "Error: " . $e->getMessage();}	
}

}

//Scraper Inclusion
include '../../includes/link_scraper.php';

//Big Table Printer
class music_tracklist extends RecursiveIteratorIterator{}
try {
		
    $stmt = $conn->prepare("SELECT music,lyrics,artist,iswc,isrc,upc,recording_date,producer,recording_studio,recorded_by,arranged_managed_by,instruments_by,programmers,sound_dubbing_engineer,mixing_and_mastering,music_assistant,video_director,additional_info,cid FROM $t2 WHERE $mod='$mod_val'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {	//Ist Loop

	// Empty Entries Hider
	if(empty($track_name)){$tn = " style=\"display:none\"";}else{$tn="";}
	if(empty($row[0])){$dn0 = " style=\"display:none\"";}else{$dn0="";}
	if(empty($row[1])){$dn1 = " style=\"display:none\"";}else{$dn1="";}
	if(empty($row[2])){$dn2 = " style=\"display:none\"";}else{$dn2="";}
	if(empty($album_name)){$dn_an = " style=\"display:none\"";}else{$dn_an="";}
	if(empty($track_duration)){$dn_td = " style=\"display:none\"";}else{$dn_td="";}
	if(empty($row[3])){$dn3 = " style=\"display:none\"";}else{$dn3="";}
	if(empty($row[4])){$dn4 = " style=\"display:none\"";}else{$dn4="";}
	if(empty($row[5])){$dn5 = " style=\"display:none\"";}else{$dn5="";}
	if(empty($row[6])){$dn6 = " style=\"display:none\"";}else{$dn6="";}
	if(empty($row[7])){$dn7 = " style=\"display:none\"";}else{$dn7="";}
	if(empty($row[8])){$dn8 = " style=\"display:none\"";}else{$dn8="";}
	if(empty($row[9])){$dn9 = " style=\"display:none\"";}else{$dn9="";}
	if(empty($row[10])){$dn10 = " style=\"display:none\"";}else{$dn10="";}
	if(empty($row[11])){$dn11 = " style=\"display:none\"";}else{$dn11="";}
	if(empty($row[12])){$dn12 = " style=\"display:none\"";}else{$dn12="";}
	if(empty($row[13])){$dn13 = " style=\"display:none\"";}else{$dn13="";}
	if(empty($row[14])){$dn14 = " style=\"display:none\"";}else{$dn14="";}
	if(empty($row[15])){$dn15 = " style=\"display:none\"";}else{$dn15="";}
	if(empty($row[16])){$dn16 = " style=\"display:none\"";}else{$dn16="";}
	if(empty($row[17])){$dn17 = " style=\"display:none\"";}else{$dn17="";}
	if(empty($row[18])){$ct_hide = " style=\"display:none\"";}else{$ct_hide="";}
	
      $data = "<tr$tn><td class=\"track_name\">$track_name</td></tr>
<tr><td class=\"atng\"></td></tr>\n<tr$dn0><td class=\"music_head\">Music:&nbsp;</td><td class=\"music_content\">" . $row[0] .
				"</td></tr>\n<tr$dn1><td class=\"lyrics_head\">Lyricist:&nbsp;</td><td class=\"lyricist_content\">" . $row[1] .
				"</td></tr>\n<tr$dn2><td class=\"artist_head\">Artist:&nbsp;</td><td class=\"artist_content\">" . $row[2] .
				"</td></tr>\n<tr$dn_an><td class=\"album_head\">Album:&nbsp;</td><td class=\"album_content\"><a class=\"taie\" href=\"$album_bridge$scraped_album_link_id/\">" . $album_name .
				"</a></td></tr>\n<tr$dn_td><td class=\"duration_head\">Duration:&nbsp;</td><td class=\"duration_content\">" . $track_duration .
				"</td></tr>\n<tr$dn3><td class=\"iswc_head\">ISWC:&nbsp;</td><td class=\"iswc_content\">" . $row[3] .
				"</td></tr>\n<tr$dn4><td class=\"isrc_head\">ISRC:&nbsp;</td><td class=\"isrc_content\">" . $row[4] .
				"</td></tr>\n<tr$dn5><td class=\"upc_head\">UPC:&nbsp;</td><td class=\"upc_content\">" . $row[5] .
				"</td></tr>\n<tr$dn6><td class=\"rec_date_head\">Recording Date:&nbsp;</td><td class=\"rec_date_content\">" . $row[6] .
				"</td></tr>\n<tr$dn7><td class=\"producer_head\">Producer:&nbsp;</td><td class=\"producer_content\">" . $row[7] .
				"</td></tr>\n<tr$dn8><td class=\"rec_studio_head\">Recording Studio:&nbsp;</td><td class=\"rec_studio_content\">" . $row[8] .
				"</td></tr>\n<tr$dn9><td class=\"rec_by_head\">Recorded by:&nbsp;</td><td class=\"rec_by_content\">" . $row[9] .
				"</td></tr>\n<tr$dn10><td class=\"arr_mgr_head\">Arranger/Manager:&nbsp;</td><td class=\"arr_mgr_content\">" . $row[10] .
				"</td></tr>\n<tr$dn11><td class=\"instruments_head\">Instruments By:&nbsp;</td><td class=\"instruments_content\">" . $row[11] .
				"</td></tr>\n<tr$dn12><td class=\"programmers_head\">Programmers:&nbsp;</td><td class=\"programmers_content\">" . $row[12] .
				"</td></tr>\n<tr$dn13><td class=\"dubb_engg_head\">Sound Dubbing Engineer:&nbsp;</td><td class=\"dubb_engg_content\">" . $row[13] .
				"</td></tr>\n<tr$dn14><td class=\"mix_and_mas_head\">Mixing and Mastering:&nbsp;</td><td class=\"mix_and_mas_content\">" . $row[14] .
				"</td></tr>\n<tr$dn15><td class=\"music_assis_head\">Music Assistant:&nbsp;</td><td class=\"music_assis_content\">" . $row[15] .
				"</td></tr>\n<tr$dn16><td class=\"video_dir_head\">Video Director:&nbsp;</td><td class=\"video_dir_content\">" . $row[16] .
				"</td></tr>\n<tr$dn17><td class=\"add_info_head\">Additional Info:&nbsp;</td><td class=\"add_info_content\">" . $row[17] .
				"</td></tr>\n<!-- 3 Lines Break -->\n<tr><td class=\"atng\"><br><br><br></td></tr>\n<!---->\n";
      print $data;
    }
  }catch (PDOException $e) {
    print $e->getMessage();
}

if(isset($ct_hide)){
echo "<!-- Creators Table -->\n<tr><td class=\"creators_head\"$ct_hide>Creator(s)</td> <td class=\"creator_id_head\"$ct_hide><span class=\"text\" title=\"Name Number of international IPI system\">Creator-Id&nbsp;<span class=\"question\" title=\"Name Number of international IPI system\">&nbsp;</span></span></td> <td class=\"role_head\"$ct_hide>Role</td></tr>\n<tr><td class=\"creators_content\"$ct_hide>";	//Printer
}

//Creator Fetcher via loop
class creator_id_fetch_for_creator extends RecursiveIteratorIterator{}
if(isset($cid_fetch)){
try {
    $stmt = $conn->prepare("SELECT creator_id FROM $t4 WHERE cid='$cid_fetch'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new creator_id_fetch_for_creator(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$creator_id_fetch_for_creator) {
		
		try {
		$stmt = $conn->prepare("SELECT creator FROM $t3 WHERE creator_id='$creator_id_fetch_for_creator'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{	//Ist Loop
		
        echo "$row[0]<br>";
    		
		}
	}catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}


	}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}

if(isset($ct_hide)){
echo "</td> <td class=\"creator_id_content\"$ct_hide>";	//Printer

include '../../includes/db_fetchers/track_creator_id_fetcher(s).php';	//Track ID Fetcher from Specific Function

echo "</td> <td class=\"role_content\"$ct_hide>";	//Printer
}


//Track CID Roles Fetcher via loop
if(isset($cid_fetch)){
try {
	$stmt = $conn->prepare("SELECT cid_role1,cid_role2 FROM $t4 WHERE cid='$cid_fetch'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
	{
	if($row[0]=="C"){$role1="Composer";}elseif($row[0]=="A"){$role1="Author";}elseif($row[0]==NULL){$role1="";}	//Role Calc For cid_role1
	if($row[1]=="C"){$role2="/Composer";}elseif($row[1]=="A"){$role2="/Author";}elseif($row[1]==NULL){$role2="";} //Role Calc For cid_role2
	
	echo "<span class=\"text\" title=\"$role1$role2\">$row[0]$row[1]&nbsp;<span class=\"question\" title=\"$role1$role2\">&nbsp;</span></span><br>";

	}
	
}catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}}
echo "\n<tr><td class=\"atng\"></td></tr>";
echo "\n<tr><td class=\"atng\"></td></tr>";
echo "\n</td></tr>\n<!---->\n</table>\n";	//Printer


?>
<br>
<div class="text-center"><?php if(($external_album_host == 'ON' AND isset($track_link)) OR ($itunes == 'ON' AND isset($track_link_iTunes)) OR ($video == 'ON' AND isset($video_link))){
echo "<span class=\"out_ref\">Stream on : </span>";} ?>
<?php
//External Album Host Enabler Checker
if($external_album_host == 'ON' AND isset($track_link)){include '../../includes/ext_button_selector_track.php';echo "&nbsp;&nbsp;";} ?>

<?php
//External iTunes Host Enabler Checker
if($itunes == 'ON' AND isset($track_link_iTunes)){echo "<button class=\"ext-Button\" onclick=\"window.location.href='$track_link_iTunes'\">iTunes <i class=\"fa fa-apple\"></i></button>";echo "&nbsp;&nbsp;";} ?>

<?php
//External Video Host Enabler Checker
if($video == 'ON' AND isset($video_link)){include '../../includes/ext_button_selector_video.php';} ?>
</div>
<br>
<div class="text-center"><?php if($lyric == 'ON' AND isset($lyrics_content)){
echo "<span class=\"out_ref\"></span>";} ?>
<?php
//Internal Lyrics Host Enabler Checker
if($lyric == 'ON' AND isset($lyrics_link)){echo "<span class=\"out_ref\">View : </span><button class=\"ext-Button\" onclick=\"window.location.href='$lyrics_bridge$lyrics_link/'\" rel=\"nofollow\">Lyrics <i class=\"fa fa-music\"></i></button>";} ?>
</div>
<br><br>


<!-- JSON-LD for schema.org -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "MusicAlbum",
    <?php if(isset($album_name)){echo "\"name\" : \"$album_name\",\n";} ?>
	<?php if(isset($im)){echo "\"thumbnailUrl\" : \"$cdn/$thumbs/$im$reset_module\",\n";} ?>
	<?php if(isset($im)){echo "\"Image\" : \"$cdn/$images/$im$reset_module\",\n";} ?><?php try {
    $stmt = $conn->prepare("SELECT track_name,artist,TIME_FORMAT(duration, '%i:%s'),isrc,recording_date,producer,recording_studio,additional_info FROM $t2 WHERE $mod='$mod_val' ORDER BY Order_id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
				if(isset($row[0]) OR isset($row[1]) OR isset($row[2]) OR isset($row[3]) OR isset($row[4]) OR isset($row[5]) OR isset($row[6]) OR isset($row[7])){echo "	\"track\": {\n		   \"@type\": \"MusicRecording\"\n";}if(isset($row[0])){echo "		   ,\"name\": \"$row[0]\"\n";}if(isset($row[1])){echo "		   ,\"byArtist\": \"$row[1]\"\n";}if(isset($row[2])){echo "		   ,\"duration\": \"$row[2]\"\n";}if(isset($row[3])){echo "		   ,\"isrcCode\": \"$row[3]\"\n";}if(isset($row[4])){echo "		   ,\"dateCreated\": \"$row[4]\"\n";}if(isset($row[5])){echo "		   ,\"producer\": \"$row[5]\"\n";}if(isset($row[6])){echo "							  ,\"locationCreated\": \"$row[6]\"\n";}if(isset($row[7])){echo "		   ,\"description\": \"$row[7]\"\n";}echo"			}\n}\n";
				}}catch(PDOException $e){echo "Error: " . $e->getMessage();}
		?>
</script>
