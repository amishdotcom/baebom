<?php
try {
    $stmt = $conn->prepare("SELECT track_name,track_name_hindi,track_name_telugu,track_name_tamil,track_name_malayalam,track_name_punjabi FROM $t2 WHERE $mod='$mod_val'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
{
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
	if($sub_page_type == 'hinglish'){$track_name = "$row[0]";}
	if($sub_page_type == 'hindi'){$track_name = "$row[1]";}
	if($sub_page_type == 'english'){$track_name = "$row[0]";}
	if($sub_page_type == 'telugu'){$track_name = "$row[2]";}
	if($sub_page_type == 'tamil'){$track_name = "$row[3]";}
	if($sub_page_type == 'malayalam'){$track_name = "$row[4]";}
	if($sub_page_type == 'punjabi'){$track_name = "$row[5]";}
	if($sub_page_type == 'other'){$track_name = "$row[0]";}
	if($sub_page_type == 'na'){$track_name = "$row[0]";}
	}
	}
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
?>