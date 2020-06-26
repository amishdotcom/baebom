<?php

class total_tracks_scan extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT COUNT(transit_id) FROM $t2 GROUP BY Transit_id HAVING $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new total_tracks_scan(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$count_songs) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>