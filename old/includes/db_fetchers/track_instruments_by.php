<?php
class track_instruments_by extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT instruments_by FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_instruments_by(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_instruments_by) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>