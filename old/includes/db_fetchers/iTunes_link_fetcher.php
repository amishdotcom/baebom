<?php
//To Check if iTunes links are Allowed or not (Global Switch)
if($itunes == 'ON'){

// iTunes Album Link Fetcher
class iTunes_album_link extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT album_link_itunes FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new iTunes_album_link(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$iTunes_album_link) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
?>