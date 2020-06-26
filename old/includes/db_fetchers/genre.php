<?php
class genre extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT genre FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new genre(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$genre) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>