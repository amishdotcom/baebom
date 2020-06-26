<?php
//To Check if Wikipedia links are Allowed or not (Global Switch)
if($wikipedia == 'ON'){

// Wikipedia Album Link Fetcher
class wiki_link extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT wiki_link FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new wiki_link(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$wiki_link) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
?>