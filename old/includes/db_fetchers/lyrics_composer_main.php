<?php
class lyrics_composer_main extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT music FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new lyrics_composer_main(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lyrics_composer_main) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>