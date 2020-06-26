<?php
//***********************************************************************************************************
//This File Uses isset php function to first determine if a variable is set or not, The Required Frame only Runs if the required variable is found
//This File Doesn't Works with Big Table (Big Table contains its own link Schemas)
//***********************************************************************************************************

//Section - Track Link Fetcher
//-----------------------------------------------------------------------------------------------------------

if (isset($track_name)) {
class track_link_scraper1 extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT track_internal_link_id FROM $t2 WHERE track_name='$track_name'");
	$stmt->execute();
    /// set the resulting array to associative
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	foreach(new track_link_scraper1(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$scraped_track_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}

//Section - Album Link Fetcher
//-----------------------------------------------------------------------------------------------------------

//Link Scraper for Track Album and Lyrics Album
if($page_type=='track' OR $page_type=='lyrics' OR $page_type=='tracklist')		//This is Done to Prevent it from Album Page Collisions
{
if (isset($album_name)) {
class album_link_scraper1 extends RecursiveIteratorIterator{}
try {
	$stmt = $conn->prepare("SELECT album_internal_link_id FROM $t1 WHERE album='$album_name'");
	$stmt->execute();

    /// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new album_link_scraper1(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$scraped_album_link_id) {}
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
}
?>