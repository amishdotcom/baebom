<?php
class track_upc extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT upc FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_upc(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_upc) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>