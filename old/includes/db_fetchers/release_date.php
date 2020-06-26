<?php
class release_date extends RecursiveIteratorIterator{}
try {
	//Converting to Usual Format from ISO 8601 date format
    $stmt = $conn->prepare("SELECT DATE_FORMAT(release_date, '%e %M %Y') FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new release_date(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$release_date) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>