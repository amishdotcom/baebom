<?php
//Transit_id Finder for Album Name
class album_name extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT transit_id FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_name(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$transit_id) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(isset($transit_id)){
//Function to Get Album Name
try {
    $stmt = $conn->prepare("SELECT album FROM $t1 WHERE transit_id='$transit_id'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_name(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$album_name) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
?>