<?php
class track_duration extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT TIME_FORMAT(duration, '%h:%i:%s') FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new track_duration(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_duration) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(isset($track_duration)){
$parsed = date_parse($track_duration);
$seconds =$parsed['minute'] * 60 + $parsed['second'];
}
?>