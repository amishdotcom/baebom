<?php
class track_name extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT track_name FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_name(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_name) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>