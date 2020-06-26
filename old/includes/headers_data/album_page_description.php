<?php
echo "<meta name=\"description\" content=\"View album "; if(isset($album_name)){echo "$album_name ";} if(isset($title_year)){echo "released in the year $title_year ";}

class tracks_names_description extends RecursiveIteratorIterator{}try {$stmt = $conn->prepare("SELECT track_name FROM $t2 WHERE $mod='$mod_val'"); $stmt->execute();$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); echo "containing Tracks : "; foreach(new tracks_names_description(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$tracks_names_description){echo "$tracks_names_description, ";}}catch(PDOException $e) {echo "Error: " . $e->getMessage();}

if(isset($label)){echo "labelled by $label, ";} if(isset($composer_main)){echo "having music by $composer_main, ";} if(isset($lyricist_main)){echo "and lyrics penned by $lyricist_main, ";}  echo "on $site_name\" />";
?>