<?php
/* Related Album Check Engine */
class album_engine_check extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT COUNT(Album_id) FROM $t1 WHERE Album_id=$album_id GROUP BY Album_id");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_engine_check(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$album_engine_check_tmp) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
if(isset($album_engine_check_tmp)){$album_engine_check = $album_engine_check_tmp;} else {$album_engine_check = "";}
/* Related Album Check Engine(Finished) */
?>