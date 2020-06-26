<?php
class album_type extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT album_type FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_type(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$album_type) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>