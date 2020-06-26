<?php
//----------------------------------------------------------------------Album


if($page_type=='album')
{
if(isset($album_name)){
//Link Scrapers ----
//Link Scraper for Album's Navigation Bar Tracklist Entry
class album_nav_tracklist_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT tracklist_internal_link_id FROM $t1 WHERE album='$album_name'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new album_nav_tracklist_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$album_nav_scraped_tracklist_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}
}

//----------------------------------------------------------------------Track


if($page_type=='track')
{
if(isset($album_name)){
//Link Scrapers ----
//Link Scraper for Track's Navigation Bar Tracklist Entry
class track_nav_tracklist_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT tracklist_internal_link_id FROM $t1 WHERE album='$album_name'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new track_nav_tracklist_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_nav_scraped_tracklist_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//----

//Link Scraper for Track's Navigation Bar Album Entry
class track_nav_album_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT album_internal_link_id FROM $t1 WHERE album='$album_name'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new track_nav_album_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_nav_scraped_album_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}

//----

//Link Scraper for Track's Navigation Bar Lyrics Entry
class track_nav_lyrics_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT lyrics_internal_link_id FROM $t2 WHERE $mod='$mod_val'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new track_nav_lyrics_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$track_nav_scraped_lyrics_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}

//----------------------------------------------------------------------Tracklist


if($page_type=='tracklist')
{
if(isset($album_name)){
//Link Scrapers ----
//Link Scraper for Tracklist's Navigation Bar Album Entry
class album_nav_tracklist_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT album_internal_link_id FROM $t1 WHERE album='$album_name'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new album_nav_tracklist_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$tracklist_nav_scraped_album_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}
}
//----------------------------------------------------------------------Lyrics


if($page_type=='lyrics')
{

if(isset($album_name)){
//Link Scrapers ----
//Link Scraper for Lyrics's Navigation Bar Tracklist Entry
class lyrics_nav_tracklist_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT tracklist_internal_link_id FROM $t1 WHERE album='$album_name'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new lyrics_nav_tracklist_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lyrics_nav_scraped_tracklist_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//----

//Link Scraper for Lyrics's Navigation Bar Album Entry
class lyrics_nav_album_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT album_internal_link_id FROM $t1 WHERE album='$album_name'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new lyrics_nav_album_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lyrics_nav_scraped_album_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}

//----

//Link Scraper for Lyrics's Navigation Bar Track Entry
class lyrics_nav_track_scraper extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT track_internal_link_id FROM $t2 WHERE $mod='$mod_val'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new lyrics_nav_track_scraper(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$lyrics_nav_scraped_track_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}


//----------------------------------------------------------------------SERP


//if($page_type=='serp')
//{}
//Nothing Extra Required to fetch or check in SERP (Reserve Handle)

?>