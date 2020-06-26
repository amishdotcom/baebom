<?php
class cid_fetch extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT cid FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new cid_fetch(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$cid_fetch) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>