<?php
class lyricist_lyrics extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT lyrics FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new lyricist_lyrics(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lyricist_lyrics) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>