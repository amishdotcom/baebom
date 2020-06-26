<?php
//To Check if IMDb links are Allowed or not (Global Switch)
if($imdb == 'ON'){

// IMDb Album Link Fetcher
class IMDb_link extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT imdb_link FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new IMDb_link(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$IMDb_link) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
?>