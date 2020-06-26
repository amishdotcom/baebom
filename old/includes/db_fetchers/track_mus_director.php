<?php
class track_vid_director extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT video_director FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_vid_director(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_vid_director) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>