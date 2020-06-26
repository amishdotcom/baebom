<?php
/* Album id Extractor */

class album_id_seeker extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT album_id FROM $t1 where $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new album_id_seeker(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$album_id_tmp) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
if(isset($album_id_tmp)){$album_id = $album_id_tmp;} else {$album_id = "NULL";}
?>