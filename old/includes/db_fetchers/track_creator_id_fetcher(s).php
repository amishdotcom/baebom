<?php
if(isset($cid_fetch)){
try {
		$stmt = $conn->prepare("SELECT creator_id FROM $t4 WHERE cid='$cid_fetch'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
		
        echo "$row[0]<br>";
    		
		}
	}catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

}
?>