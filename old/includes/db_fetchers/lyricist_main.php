<?php
class lyricist_main extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT lyricist_main FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new lyricist_main(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lyricist_main) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>