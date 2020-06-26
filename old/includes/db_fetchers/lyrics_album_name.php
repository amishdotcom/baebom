<?php
class album_name extends RecursiveIteratorIterator{}

//Transit_id Finder
try {
    $stmt = $conn->prepare("SELECT transit_id FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_name(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$transit_id) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(isset($transit_id)){
    try {
    $stmt = $conn->prepare("SELECT Album,Album_name_hindi,Album_name_telugu,Album_name_tamil,Album_name_malayalam,Album_name_punjabi FROM $t1 WHERE transit_id='$transit_id'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
	if($sub_page_type == 'hinglish'){$album_name = "$row[0]";}
	if($sub_page_type == 'hindi'){$album_name = "$row[1]";}
	if($sub_page_type == 'english'){$album_name = "$row[0]";}
	if($sub_page_type == 'telugu'){$album_name = "$row[2]";}
	if($sub_page_type == 'tamil'){$album_name = "$row[3]";}
	if($sub_page_type == 'malayalam'){$album_name = "$row[4]";}
	if($sub_page_type == 'punjabi'){$album_name = "$row[5]";}
	if($sub_page_type == 'other'){$album_name = "$row[0]";}
	if($sub_page_type == 'na'){$album_name = "$row[0]";}
	}
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	}
?>