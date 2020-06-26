<br><br>
<!-- Album Name & Year(Joint) Specific -->
<h1 class="album_name"><span>&nbsp;&nbsp;<?php if(isset($album_name)){echo "$album_name";} else {echo "";} ?></span>&nbsp;<span class="title_year"><?php if(isset($title_year)){echo "($title_year)";} else {echo "";} ?></span></h1>

<?php
	if((empty($album_name)) AND (empty($album_link)) AND (empty($iTunes_album_link)) AND (empty($IMDb_link)) AND (empty($wiki_link)) AND (empty($title_year)) AND (empty($im)) AND (empty($genre)) AND (empty($album_type)) AND (empty($country)) AND (empty($release_date)) AND (empty($label)) AND (empty($count_songs)) AND (empty($total_duration)) AND (empty($album_lang_test)) AND (empty($composer_main)) AND (empty($lyricist_main)) AND (empty($picturized_on))){
	echo "<br><br><div class=\"text-center\" style=\"font-weight:bold;color:red\">No Data</div><br>";
	}
?>

<script>
if ( $(window).width() < 560) {
  //Add your javascript for large screens here
  document.write('<br><img class="mobile_Img_thumb_display" id="myImg" src="<?php if(isset($im)){echo "$cdn/$thumbs/$im$reset_module";} ?>" alt="album_image" title="<?php if(isset($album_name)){echo "$album_name Poster";} ?>"><br>');
}
</script>

<br>
<?php
include '../../includes/db_fetchers/album_language_tester.php'; //Music Languages Tester

// Empty Entries Hider
	if(isset($im)){$dnim = "";}else{$dnim=" style=\"display:none\"";}
	if(isset($genre)){$dn0 = "";}else{$dn0=" style=\"display:none\"";}
	if(isset($album_type)){$dn2 = "";}else{$dn2=" style=\"display:none\"";}
	if(isset($country)){$dn1 = "";}else{$dn1=" style=\"display:none\"";}
	if(isset($release_date)){$dn3 = "";}else{$dn3=" style=\"display:none\"";}
	if(isset($label)){$dn4 = "";}else{$dn4=" style=\"display:none\"";}
	if(isset($count_songs)){$dn5 = "";}else{$dn5=" style=\"display:none\"";}
	if(isset($total_duration)){$dn6 = "";}else{$dn6=" style=\"display:none\"";}
	if(isset($album_lang_test)){$dn7 = "";}else{$dn7=" style=\"display:none\"";}
	if(isset($composer_main)){$dn8 = "";}else{$dn8=" style=\"display:none\"";}
	if(isset($lyricist_main)){$dn9 = "";}else{$dn9=" style=\"display:none\"";}
	if(isset($picturized_on)){$dn10 = "";}else{$dn10=" style=\"display:none\"";}
?>
<?php
//Related Album Ajuster into Table
if ($album_engine_check>1)
{
echo "<style>.genre_head,.country_head,.album_type_head,.release_date_head,.label_head,.tot_tracks_head,.duration_head,.language_head,.composer_head,.lyricist_head,.actors_head,.rel_album_head{font-weight:bold;width:130px;min-width:130px}</style>\n";
}
?>

<!-- Table 1 (Album Table) -->
<table class="table">
 <tr>
  <td <?php echo $dnim ?>class="thumb_box" <?php
//Related Album Ajuster into Table
if ($album_engine_check>1)
{
echo "rowspan=\"12\"\n";
}
elseif ($album_engine_check==1)
{
echo "rowspan=\"11\"\n";	
}
?>
   <!-- Loading Image into Table -->
   <div id="album_image">
    <img class="img-thumbnail" id="myImg" src="<?php if(isset($im)){echo "$cdn/$thumbs/$im$reset_module";} ?>" alt="album_image" title="<?php if(isset($album_name)){echo "$album_name Poster";} ?>">
    <div id="myModal" class="modal">
     <span class="close">&times;</span>
     <img class="modal-content" id="img01" src="<?php if(isset($im)){echo "$cdn/$images/$im$reset_module";} ?>">
     <div id="caption"><?php if(isset($album_name)){echo $album_name;} ?></div>
    </div>
   <script type="text/javascript" src="<?php echo $site_root ?>/system/js/main_image_loader<?php echo $reset_module ?>"></script>
   </div>
   <!---->
  </td>
  <td <?php echo $dn0 ?>class="genre_head">Genre:&nbsp;</td><td<?php echo $dn0 ?>><?php if(isset($genre)){echo $genre;} ?></td>
 </tr>
 <tr<?php echo $dn1 ?>><td class="country_head">Country:&nbsp;</td><td class="country_content"><?php if(isset($country)){echo $country;} ?></td></tr>
 <tr<?php echo $dn2 ?>><td class="album_type_head">Album Type:&nbsp;</td><td class="album_type_content"><?php if(isset($album_type)){echo $album_type;} ?></td></tr>
 <tr<?php echo $dn3 ?>><td class="release_date_head">Release Date:&nbsp;</td><td class="release_date_content"><?php if(isset($release_date)){echo $release_date;} ?></td></tr>
 <tr<?php echo $dn4 ?>><td class="label_head">Label:&nbsp;</td><td class="label_content"><?php if(isset($label)){echo $label;} ?></td></tr>
 <tr<?php echo $dn5 ?>><td class="tot_tracks_head">Tracks:&nbsp;</td><td class="tot_tracks_content"><?php if(isset($count_songs)){echo $count_songs;} ?>
 </td></tr>
 <tr<?php echo $dn6 ?>><td class="duration_head">Duration:&nbsp;</td><td class="duration_content"><?php if(isset($total_duration)){echo $total_duration;} ?></td></tr>
 <tr<?php echo $dn7 ?>><td class="language_head">Language:&nbsp;</td><td class="language_content"><?php include '../../includes/db_fetchers/music_language(s).php'; //Music Languages Include ?>
 <tr<?php echo $dn8 ?>><td class="composer_head">Composer:&nbsp;</td><td class="composer_content"><?php if(isset($composer_main)){echo $composer_main;} ?></td></tr>
 <tr<?php echo $dn9 ?>><td class="lyricist_head">Lyricist:&nbsp;</td><td class="lyricist_content"><?php if(isset($lyricist_main)){echo $lyricist_main;} ?></td></tr>
 <tr<?php echo $dn10 ?>><td class="actors_head">Actors:&nbsp;</td><td class="actors_content"><?php if(isset($picturized_on)){echo $picturized_on;} ?></td></tr>
<?php
//Related Album Printer
if ($album_engine_check>1)
{
	if ($album_engine_check==2)
	{//Printing the Related Album if Only one Related Album is Found
	echo"<tr><td class=\"rel_album_head\">Related Album:&nbsp;</td><td class=\"rel_album_content\">";
	}
	if ($album_engine_check>2)
	{//Printing the Related Album if more than one Related Album is Found
	echo"<tr><td class=\"rel_album_head\">Related Albums:&nbsp;</td><td class=\"rel_album_content\">";
	}
}
include '../../includes/db_fetchers/related_album(s).php';
?>
</table>

<br>
<div class="text-center"><?php if(($external_album_host == 'ON' AND isset($album_link)) OR ($itunes == 'ON' AND isset($iTunes_album_link))){
echo "<span class=\"out_ref\">Stream on : </span>";} ?>
<?php
//External Album Host Enabler Checker
if($external_album_host == 'ON' AND isset($album_link)){
include '../../includes/ext_button_selector_album.php';echo "&nbsp;&nbsp;";} ?>

<?php
//External iTunes Host Enabler Checker
if($itunes == 'ON' AND isset($iTunes_album_link)){echo "<button class=\"ext-Button\" onclick=\"window.location.href='$iTunes_album_link'\">iTunes <i class=\"fa fa-apple\"></i></button>";} ?>
</div>
<br>
<div class="text-center"><?php if(($imdb == 'ON' AND isset($IMDb_link)) OR ($wikipedia == 'ON' AND isset($wiki_link))){
echo "<span class=\"out_ref\">View on : </span>";} ?>
<?php
//External IMDb Host Enabler Checker
if($imdb == 'ON' AND isset($IMDb_link)){echo "<button class=\"ext-Button\" onclick=\"window.location.href='$imdb_domain$IMDb_link'\">IMDb <i class=\"fa fa-imdb\"></i></button>";echo "&nbsp;&nbsp;";} ?>
<?php
//External Wikipedia Host Enabler Checker
if($wikipedia == 'ON' AND isset($wiki_link)){echo "<button class=\"ext-Button\" onclick=\"window.location.href='$wiki_link'\">Wikipedia <i class=\"fa fa-wikipedia-w\"></i></button>";} ?>
</div>

<br><br>
<!-- Copy to Clipboard Engine -->
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>

<?php
if(isset($count_songs))
{
echo "
<h3 class=\"track_list_head text-center\"><a href=\"$tracklist_bridge$album_nav_scraped_tracklist_link_id/\" style=\"color:red\">Track List</a></h3>
<hr class=\"tracklist_seperator\">

<!-- Table 2 (Tracklist Table) -->
<table class=\"table2 table-hover\">
  <thead>
    <tr>
      <th class=\"tcklst_head_serial\" scope=\"col\">#</th>
      <th class=\"tcklst_head_track\" scope=\"col\">Track</th>
      <th class=\"tcklst_head_artist\" scope=\"col\">ARTIST</th>
      <th class=\"tcklst_head_duration\" scope=\"col\"><svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\"> <path class=\"fill_path\" fill-rule=\"nonzero\" d=\"M8 0c4.4 0 8 3.6 8 8s-3.6 8-8 8-8-3.6-8-8 3.6-8 8-8zm0 14.4c3.52 0 6.4-2.88 6.4-6.4 0-3.52-2.88-6.4-6.4-6.4-3.52 0-6.4 2.88-6.4 6.4 0 3.52 2.88 6.4 6.4 6.4zM8.25 4v3.957L12 10.01l-.667.989L7 8.565V4h1.25z\" opacity=\".5\"></path> </svg></th>
	  <th class=\"tcklst_head_more\" scope=\"col\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <g fill=\"red\" fill-rule=\"evenodd\"> <path class=\"fill_path\" d=\"M7 12a2 2 0 1 1-3.999.001A2 2 0 0 1 7 12M14 12a2 2 0 1 1-3.999.001A2 2 0 0 1 14 12M21 12a2 2 0 1 1-3.999.001A2 2 0 0 1 21 12\"></path> </g> </svg></th>
    </tr>
  </thead>
  <tbody>";

//set counter variable 
$counter = 1;

//Big Table (Album Page)
//Notice : Big Table has its own internal link fetchers
class music_tracklist extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT track_name,artist,TIME_FORMAT(duration, '%i:%s'),track_internal_link_id,track_link,track_link_iTunes,track_link_video,lyrics_internal_link_id FROM $t2 WHERE $mod='$mod_val' ORDER BY Order_id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
	{
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {

//To Check if all aren't turned off by Admin or aren't empty
if($external_album_host == 'ON' OR $itunes == 'ON' OR $video == 'ON' OR $lyric == 'ON' OR strlen($row[3])>0)
{
//Track Link Availability Check, ON/OFF Check and Thrower
if($external_album_host == 'OFF'){$track_dat = "";}
if($external_album_host == 'ON'){
if(strlen($row[4])<=0){$track_dat = "";}
elseif(strlen($row[4])>0){
include '../../includes/track_host_predictor.php';
$track_dat = "\n       <li><a href=\"$row[4]\">Stream on $track_host</a></li>";}}

//iTunes Link Availability Check, ON/OFF Check and Thrower
if($itunes == 'OFF'){$iTunes_dat = "";}
if($itunes == 'ON'){
if(strlen($row[5])<=0){$iTunes_dat = "";}
elseif(strlen($row[5])>0){$iTunes_dat = "\n       <li><a href=\"$row[5]\">Stream on iTunes</a></li>";}}

//Video Link Availability Check, ON/OFF Check and Thrower
if($video == 'OFF'){$video_dat = "";}
if($video == 'ON'){
if(strlen($row[6])<=0){$video_dat = "";}
elseif(strlen($row[6])>0){
include '../../includes/video_host_predictor.php';
$video_dat = "\n       <li><a href=\"$row[6]\">Watch on $video_host</a></li>";}}

//Lyrics Link Availability Check, ON/OFF Check and Thrower
if($lyric == 'OFF'){$lyrics_dat = "";}
if($lyric == 'ON'){
if(strlen($row[7])<=0){$lyrics_dat = "";}
elseif(strlen($row[7])>0){$lyrics_dat = "\n       <li><a href=\"$lyrics_bridge$row[7]/\" rel=\"nofollow\">View Lyrics</a></li>";}}

//Internal Track Link Availability Check and Thrower
if(strlen($row[3])<=0){$track_int_dat = "";}
elseif(strlen($row[3])>0){$track_int_dat = "\n       <li><a href=\"$track_bridge$row[3]/\">Get Track Info</a></li>";}

$more_head = "     <div class=\"dropdown\">
      <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">More</button>
      <ul class=\"dropdown-menu\">";
$more_end = "  </ul>
     </div>";
$copy_link = "\n       <p hidden id=\"ctc$counter\">$track_bridge$row[3]/</p>
       <li onclick=\"copyToClipboard('#ctc$counter')\"><a>Copy link</a></li>";
$more_menu = "$more_head$track_dat$iTunes_dat$video_dat$lyrics_dat$copy_link$track_int_dat
    $more_end";

$more_print = "    <td class=\"tcklst_more\">\n" . $more_menu .
				"\n    </td>\n   </tr>";

}
		
	
		$data = "\n   <tr class=\"track_table_content\">\n    <th class=\"tcklst_serial\" onclick=\"window.location='$track_bridge$row[3]/'\" scope=\"row serial\">" . $counter .
				"</th>\n    <td class=\"tcklst_track\" onclick=\"window.location='$track_bridge$row[3]/'\">" . $row[0] . 
				"</td>\n    <td class=\"tcklst_artist\" onclick=\"window.location='$track_bridge$row[3]/'\">" . $row[1] .
				"</td>\n    <td class=\"tcklst_duration\" onclick=\"window.location='$track_bridge$row[3]/'\">" . $row[2] .
				"</td>\n$more_print";
      print $data;
	  $counter++; //increment counter by 1 on every pass
    }
  }
		}catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
echo"\n  </tbody>";
echo"\n</table>\n<br><br><br>";
}
?>


<!-- JSON-LD for schema.org -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "MusicAlbum",
    <?php if(isset($album_name)){echo "\"name\" : \"$album_name\",\n";} ?>
	<?php if(isset($title_year)){echo "\"copyrightYear\" : \"$title_year\",\n";} ?>
	<?php if(isset($im)){echo "\"thumbnailUrl\" : \"$cdn/$thumbs/$im$reset_module\",\n";} ?>
	<?php if(isset($im)){echo "\"Image\" : \"$cdn/$images/$im$reset_module\",\n";} ?>
    <?php if(isset($album_type)){echo "\"albumProductionType\": \"$album_type\",\n";} ?>
    <?php if(isset($genre)){echo "\"genre\": \"$genre\",\n";} ?>
	<?php if(isset($release_date)){echo "\"datePublished\" : \"$release_date\",\n";} ?>
	<?php if(isset($count_songs)){echo "\"numTracks\" : \"$count_songs\",\n";} ?>
    "track": {
            "@type": "ItemList",
			<?php if(isset($count_songs)){echo "\"numberOfItems\" : \"$count_songs\",\n";} ?>
            "itemListElement": [
					<?php try {
    $stmt = $conn->prepare("SELECT track_name,artist,TIME_FORMAT(duration, '%i:%s'),isrc,recording_date,producer,recording_studio,additional_info FROM $t2 WHERE $mod='$mod_val' ORDER BY Order_id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
	$pos_count = "1";
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
		if($pos_count == "1"){$pc = "";}else{$pc = ",";}	//For Printing Comma only if its not the First loop cycle
				if(isset($row[0]) OR isset($row[1]) OR isset($row[2]) OR isset($row[3]) OR isset($row[4]) OR isset($row[5]) OR isset($row[6]) OR isset($row[7])){echo "					$pc{\n					  \"@type\": \"ListItem\"\n			 		  ,\"position\": $pos_count\n					  ,\"item\": {\n							  \"@type\": \"MusicRecording\"\n";}if(isset($row[0])){echo "							  ,\"name\": \"$row[0]\"\n";}if(isset($row[1])){echo "							  ,\"byArtist\": \"$row[1]\"\n";}if(isset($row[2])){echo "							  ,\"duration\": \"$row[2]\"\n";}if(isset($row[3])){echo "							  ,\"isrcCode\": \"$row[3]\"\n";}if(isset($row[4])){echo "							  ,\"dateCreated\": \"$row[4]\"\n";}if(isset($row[5])){echo "							  ,\"producer\": \"$row[5]\"\n";}if(isset($row[6])){echo "							  ,\"locationCreated\": \"$row[6]\"\n";}if(isset($row[7])){echo "							  ,\"description\": \"$row[7]\"\n";}if(isset($row[0]) OR isset($row[1]) OR isset($row[2]) OR isset($row[3]) OR isset($row[4]) OR isset($row[5]) OR isset($row[6]) OR isset($row[7])){echo"					  }\n				    }\n";}
				$pos_count = $pos_count + 1;
				}}catch(PDOException $e){echo "Error: " . $e->getMessage();} 
		?>
            ]
    }
}
</script>
