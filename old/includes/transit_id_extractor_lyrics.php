<?php
/* Album id Extractor */

class album_id_seeker extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT transit_id FROM $t2 where $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new album_id_seeker(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$transit_id) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>