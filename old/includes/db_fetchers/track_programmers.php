<?php
class track_programmers extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT programmers FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_programmers(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_programmers) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>