<?php
class album_lang_tester extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT music_language FROM $t1 WHERE album_id='$album_id'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_lang_tester(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$album_lang_test) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>