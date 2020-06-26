<?php
class country extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT country FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new country(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$country) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>