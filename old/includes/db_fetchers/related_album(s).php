<?php
//Related Album Printer
if ($album_engine_check>1)
{
class lsatlra extends RecursiveIteratorIterator{}
class related_album extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT album FROM $t1 where album_id=$album_id and $mod<>'$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new related_album(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$related_album) {	//Ist Loop
		
		//Link Scraper for Related Album
		$stmt = $conn->prepare("SELECT album_internal_link_id FROM $t1 WHERE album='$related_album'");
		$stmt->execute();
		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new lsatlra(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lsatlra) {	//IInd Loop
		
		echo "<span><a class=\"tie\" href=\"$album_bridge$lsatlra/\">$related_album</a></span>&nbsp;<br>";
		
    }
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}
?>