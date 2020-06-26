<?php
//Outputing Lyrics Content with its Language--------------------------

//Priorities for Content Languages Selection
//hinglish
//hindi
//english
//telugu
//tamil
//malayalam
//punjabi
//other (bso,na,nv,ins,bsoi)


try {
	$stmt = $conn->prepare("SELECT lyrics_content_hinglish,lyrics_content_hindi,lyrics_content_english,lyrics_content_telugu,lyrics_content_tamil,lyrics_content_malayalam,lyrics_content_punjabi,lyrics_content_other FROM $t2 WHERE $mod='$mod_val'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {

						if($sub_page_type == 'hinglish'){$lyrics_content = "$row[0]"; $lyrics_content_language = "Hinglish";}//Outputing Hinglish
						if($sub_page_type == 'hindi'){$lyrics_content = "$row[1]"; $lyrics_content_language = "Hindi";}//Outputing Hindi
						if($sub_page_type == 'english'){$lyrics_content = "$row[2]"; $lyrics_content_language = "English";}//Outputing English
						if($sub_page_type == 'telugu'){$lyrics_content = "$row[3]"; $lyrics_content_language = "Telugu";}//Outputing Telugu
						if($sub_page_type == 'tamil'){$lyrics_content = "$row[4]"; $lyrics_content_language = "Tamil";}//Outputing Tamil
						if($sub_page_type == 'malayalam'){$lyrics_content = "$row[5]"; $lyrics_content_language = "Malayalam";}//Outputing Malayalam
						if($sub_page_type == 'punjabi'){$lyrics_content = "$row[6]"; $lyrics_content_language = "Punjabi";}//Outputing Punjabi
						if($sub_page_type == 'other'){$lyrics_content = "$row[7]";}//Outputing Other
						if($sub_page_type == 'na'){$lyrics_content = "";}//Outputing Not Available


		}}catch (PDOException $e){print $e->getMessage();}
?>