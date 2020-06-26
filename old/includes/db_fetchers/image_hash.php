<?php
/*Image Extension Specifier*/
$ext = '.jpg';
/*-------------------------*/

/*Image Hash Code Fetcher*/
class main_image extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT image_hash FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new main_image(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$im) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
/*-------------------------*/
?>
