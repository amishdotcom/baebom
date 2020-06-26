<?php
class track_lyricist extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT lyrics FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_lyricist(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_lyricist) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>