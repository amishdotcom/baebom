<?php
	if((empty($album_link)) AND (empty($iTunes_album_link)) AND (empty($IMDb_link)) AND (empty($wiki_link)) AND (empty($title_year)) AND (empty($im))){
	echo "<br><br><div class=\"text-center\" style=\"font-weight:bold;color:red\">No Data</div><br><br><br><br>";
	}
?>

<br>
<?php if((isset($album_link)) OR (isset($iTunes_album_link)) OR (isset($IMDb_link)) OR (isset($wiki_link)) OR (isset($title_year)) OR (isset($im))){
echo"<hr class=\"line_seperator\">

<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"$site_root/system/engines/tracklist_engine/tracklist_inside/vendor/bootstrap/css/bootstrap.min$reset_module\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"$site_root/system/engines/tracklist_engine/tracklist_inside/vendor/animate/animate$reset_module\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"$site_root/system/engines/tracklist_engine/tracklist_inside/vendor/perfect-scrollbar/perfect-scrollbar$reset_module\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"$site_root/system/engines/tracklist_engine/tracklist_inside/css/main$reset_module\">
<!--===============================================================================================-->

<div class=\"auto_scroll_y\">
<div class=\"limiter\">
	<div class=\"container-table100\">
		<div class=\"wrap-table100\">
			<div class=\"table100 ver1\">
				<div class=\"wrap-table100-nextcols js-pscroll\">
					<div class=\"table100-nextcols\">
					<!-- bae Table -->
						<table>
							<thead>
								<tr class=\"row100 head\">
									<th class=\"cell100 track\">Track</th>
									<th class=\"cell100 music\">Music</th>
									<th class=\"cell100 lyrics\">Lyrics</th>
									<th class=\"cell100 artist\">Artist</th>
									<th class=\"cell100 length\">Duration</th>
									<th class=\"cell100 isrc\">ISWC</th>
									<th class=\"cell100 isrc\">ISRC</th>
									<th class=\"cell100 upc\">UPC</th>
									<th class=\"cell100 recording_date\">Recording Date</th>
									<th class=\"cell100 producer\">Producer</th>
									<th class=\"cell100 recording_studio\">Recording Studio</th>
									<th class=\"cell100 recorded_by\">Recorded By</th>
									<th class=\"cell100 arranger_manager\">Arranger/Manager</th>
									<th class=\"cell100 instruments\">Instruments</th>
									<th class=\"cell100 programmers\">Programmers</th>
									<th class=\"cell100 dubbing_engineer\">Sound Dubbing Engineer</th>
									<th class=\"cell100 mixing_and_mastering\">Mixing and Mastering</th>
									<th class=\"cell100 music_assistant\">Music Assistant</th>
									<th class=\"cell100 video_director\">Video Director</th>
									<th class=\"cell100 additional_info\">Additional Info</th>
								</tr>
							</thead>
							<tbody>";	}  ?>				<?php

//Function to Count UPC Digits and convert/set schema Accordingly
function count_digit($number) {
  return strlen($number);
}

//Big Table
//Notice : Big Table has its own internal link fetchers
class music_tracklist extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT track_name,music,lyrics,artist,TIME_FORMAT(duration, '%H:%i:%s'),iswc,isrc,upc,recording_date,producer,recording_studio,recorded_by,arranged_managed_by,instruments_by,programmers,sound_dubbing_engineer,mixing_and_mastering,music_assistant,video_director,additional_info,track_internal_link_id FROM $t2 WHERE $mod='$mod_val' ORDER BY Order_id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
	{
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {

//---------------------------------------------------------------


      $data = "\n<tr class=\"row100 body\">\n<td class=\"cell100 track\"><a class=\"tie\" href=\"$track_bridge$row[20]/\">" . $row[0] . 
				"</a></td>\n<td class=\"cell100 music\">" . $row[1] .
				"</td>\n<td class=\"cell100 lyrics\">" . $row[2] .
				"</td>\n<td class=\"cell100 artist\">" . $row[3] .
				"</td>\n<td class=\"cell100 duration\">" . $row[4] .
				"</td>\n<td class=\"cell100 iswc\">" . $row[5] .
				"</td>\n<td class=\"cell100 isrc\">" . $row[6] .
				"</td>\n<td class=\"cell100 upc\">" . $row[7] .
				"</td>\n<td class=\"cell100 recording date\">" . $row[8] .
				"</td>\n<td class=\"cell100 producer\">" . $row[9] .
				"</td>\n<td class=\"cell100 recording studio\">" . $row[10] .
				"</td>\n<td class=\"cell100 recorded by\">" . $row[11] .
				"</td>\n<td class=\"cell100 arranged/managed by\">" . $row[12] .
				"</td>\n<td class=\"cell100 instruments by\">" . $row[13] .
				"</td>\n<td class=\"cell100 programmers\">" . $row[14] .
				"</td>\n<td class=\"cell100 sound dubbing engineer\">" . $row[15] .
				"</td>\n<td class=\"cell100 mixing and mastering\">" . $row[16] .
				"</td>\n<td class=\"cell100 music assistant\">" . $row[17] .
				"</td>\n<td class=\"cell100 video director\">" . $row[18] .
				"</td>\n<td class=\"cell100 additional info\">" . $row[19] .
				"</tr>\n";
      print $data;
    }
  }
		}catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
?>

<?php if((isset($album_link)) OR (isset($iTunes_album_link)) OR (isset($IMDb_link)) OR (isset($wiki_link)) OR (isset($title_year)) OR (isset($im))){
echo"						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>";} ?>

<style>button{outline:1px solid;border:1px solid}</style>

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

<?php if((isset($album_link)) OR (isset($iTunes_album_link)) OR (isset($IMDb_link)) OR (isset($wiki_link)) OR (isset($title_year)) OR (isset($im))){
echo"<!--===============================================================================================-->
<script src=\"$site_root/system/engines/tracklist_engine/tracklist_inside/vendor/perfect-scrollbar/perfect-scrollbar.min$reset_module\"></script>
<script>
	$('.js-pscroll').each(function(){
		var ps = new PerfectScrollbar(this);
		$(window).on('resize', function(){
			ps.update();
		})
		$(this).on('ps-x-reach-start', function(){
			$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
		});
		$(this).on('ps-scroll-x', function(){
			$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
		});
	});
</script>
";} ?>
