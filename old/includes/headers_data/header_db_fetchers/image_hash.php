<?php
/*Image Extension Specifier*/
$ext = '.jpg';
/*-------------------------*/

/*Transit_id Calculator*/
class transit_id_calc_image_hash extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT transit_id FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new transit_id_calc_image_hash(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$transit_id_calc_image_hash) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(isset($transit_id_calc_image_hash)){
/*Image Hash Code Fetcher*/
class main_image_header extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT image_hash FROM $t1 WHERE transit_id='$transit_id_calc_image_hash'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new main_image_header(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$im) {
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
/*-------------------------*/
?>
