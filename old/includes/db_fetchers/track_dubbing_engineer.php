<?php
class track_dubbing_engineer extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT sound_dubbing_engineer FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_dubbing_engineer(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_dubbing_engineer) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>