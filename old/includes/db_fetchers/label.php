<?php
class label extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT label FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new label(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$label) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>