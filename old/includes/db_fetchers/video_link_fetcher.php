<?php
//To Check if Video links are Allowed or not (Global Switch)
if($video == 'ON'){

// Video Link Fetcher
class video_link extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT track_link_video FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new video_link(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$video_link) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}
?>