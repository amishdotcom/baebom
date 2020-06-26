<?php
echo "<meta name=\"description\" content=\"Tracklist for album "; if(isset($album_name)){echo "$album_name";} if(isset($title_year)){echo " released in year $title_year ";}

class tracks_names extends RecursiveIteratorIterator{}try {$stmt = $conn->prepare("SELECT track_name FROM $t2 WHERE $mod='$mod_val'"); $stmt->execute();$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); echo "containing Tracks : "; foreach(new tracks_names(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$tracks_out) {echo "$tracks_out, ";}}catch(PDOException $e) {echo "Error: " . $e->getMessage();}

if(isset($label)){echo "labelled by $label, ";} if(isset($composer_main)){echo "having music by $composer_main, ";} echo "on $site_name\" />";
?>