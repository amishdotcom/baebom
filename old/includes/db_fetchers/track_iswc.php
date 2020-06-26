<?php
class track_iswc extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT iswc FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_iswc(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_iswc) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>