<?php
class track_composer extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT music FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_composer(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_composer) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>