<?php
class title_year extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT year FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new title_year(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$title_year) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>