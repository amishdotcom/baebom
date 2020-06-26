<?php
class track_add_info extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT additional_info FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_add_info(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_add_info) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>