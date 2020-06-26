<?php
class track_producer extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT producer FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_producer(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_producer) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>