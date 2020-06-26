<?php
// Track Streamer Link Fetcher
class track_link extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT track_link FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_link(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_link) {
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>