<?php
class track_mix_mas extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT mixing_and_mastering FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_mix_mas(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_mix_mas) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>