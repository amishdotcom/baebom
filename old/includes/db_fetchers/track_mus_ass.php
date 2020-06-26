<?php
class track_mus_ass extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT music_assistant FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_mus_ass(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_mus_ass) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>