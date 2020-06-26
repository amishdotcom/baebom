<?php
class composer_main extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT composer_main FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new composer_main(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$composer_main) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>