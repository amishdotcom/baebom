<?php
if($page_type == 'album' OR $page_type == 'tracklist')
{

class album_tracklist_meta_release_date extends RecursiveIteratorIterator{}

try {
	//Converting to Usual Format from ISO 8601 date format
    $stmt = $conn->prepare("SELECT DATE_FORMAT(release_date, '%Y-%m-%d') FROM $t1 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new album_tracklist_meta_release_date(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$meta_release_date) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}

elseif($page_type == 'track' OR $page_type == 'video')
{

/*Transit_id Calculator*/
class transit_id_calc_release_date extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT transit_id FROM $t2 WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new transit_id_calc_release_date(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$transit_id_calc_release_date) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(isset($transit_id_calc_release_date)){
try {
	//Converting to Usual Format from ISO 8601 date format
    $stmt = $conn->prepare("SELECT DATE_FORMAT(release_date, '%Y-%m-%d') FROM $t1 WHERE transit_id='$transit_id_calc_release_date'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new transit_id_calc_release_date(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$meta_release_date) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}
}

elseif($page_type == 'lyrics')
{

/*Transit_id Calculator*/
class transit_id_calc_release_date extends RecursiveIteratorIterator{}

try {
    $stmt = $conn->prepare("SELECT transit_id FROM `$t2` WHERE $mod='$mod_val'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new transit_id_calc_release_date(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$transit_id_calc_release_date) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(isset($transit_id_calc_release_date)){
class lyrics_meta_release_date extends RecursiveIteratorIterator{}
try {
	//Converting to Usual Format from ISO 8601 date format
    $stmt = $conn->prepare("SELECT DATE_FORMAT(release_date, '%Y-%m-%d') FROM $t1 WHERE transit_id='$transit_id_calc_release_date'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new lyrics_meta_release_date(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$meta_release_date) {}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}

}
?>