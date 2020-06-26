<?php

class track_indiana_id extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT indiana_id FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_indiana_id(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$indiana_id) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>