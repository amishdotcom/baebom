<?php
class track_artist extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT artist FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_artist(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_artist) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>