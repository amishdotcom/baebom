<?php
// Change the Same for JSON-LD

try {
		$stmt = $conn->prepare("SELECT album_internal_link_id,music_language FROM $t1 WHERE album_id='$album_id'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
			$check_var = "$album_bridge$row[0]/";
			if($check_var == $current_page_url){
		echo "<a class=\"tie\">" . $row[1] ."</a>&nbsp;";
			}
			elseif($check_var != $current_page_url){
		echo "<a class=\"tie\" href=\"$album_bridge$row[0]/\">" . $row[1] ."</a>&nbsp;";
			}
	}
}catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
	echo "</td></tr>\n";
?>