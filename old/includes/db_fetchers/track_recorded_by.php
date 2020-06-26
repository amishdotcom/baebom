<?php
class track_recorded_by extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT recorded_by FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_recorded_by(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_recorded_by) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>