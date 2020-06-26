<?php
class picturized_on extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT picturized_on FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new picturized_on(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$picturized_on) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>