<?php
//To Check if IMDb links are Allowed or not (Global Switch)
if($external_album_host == 'ON'){

// Album Streamer Link Fetcher
class album_link extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT album_link FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_link(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$album_link) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
?>