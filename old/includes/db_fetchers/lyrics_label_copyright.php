<?php
class label_lyrics_copyright extends RecursiveIteratorIterator{}

//Transit_id Finder
try {
    $stmt = $conn->prepare("SELECT transit_id FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new label_lyrics_copyright(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$transit_id_lyrics_copyright) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(isset($transit_id_lyrics_copyright)){
try {
    $stmt = $conn->prepare("SELECT label FROM $t1 WHERE transit_id='$transit_id_lyrics_copyright'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new label_lyrics_copyright(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$label_lyrics_copyright) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
?>