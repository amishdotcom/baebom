<?php
// iTunes Track Link Fetcher
class track_link_iTunes extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT track_link_itunes FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_link_iTunes(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_link_iTunes) {
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>