<?php
class track_isrc extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT isrc FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_isrc(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_isrc) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>