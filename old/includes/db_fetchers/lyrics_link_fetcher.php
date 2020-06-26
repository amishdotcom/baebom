<?php
//To Check if Lyrics links are Allowed or not (Global Switch)
if($lyric == 'ON'){

// Lyrics Link Fetcher
class lyrics_link extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT lyrics_internal_link_id FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new lyrics_link(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lyrics_link) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}
?>