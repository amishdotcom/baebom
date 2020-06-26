<?php
class track_rec_studio extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT recording_studio FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_rec_studio(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_rec_studio) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>