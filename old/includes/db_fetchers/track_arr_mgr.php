<?php
class track_arr_mgr extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT arranged_managed_by FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_arr_mgr(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_arr_mgr) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>