<?php
error_reporting(0);
//baebom Instant Live Search (Author: Amish Dotcom)
include '../../../../switches/cdn.php';
include '../../../../switches/db.php';

	$keyword = trim($_GET['term']); // this is user input

	$sugg_json = array();    // this is for displaying json data as a autosearch suggestion
	$json_row = array();     // this is for stroring mysql results in json string


	$keyword = preg_replace('/\s+/', ' ', $keyword); // it will replace multiple spaces from the input.

			//----Filtering and Formatting for Input----//
			//Removing the Brackets from Input
			$keyword = str_replace(array( '(', ')' ), '', $keyword);
			//Removing Dots from Input
			$keyword = str_replace(".", "", $keyword);
			//Removing the emdash
			$keyword = str_replace('-', '', $keyword);
			//Removing the Keywords like album, track, tracklist, lyrics, video
			$keyword = str_replace('album', '', $keyword);
			$keyword = str_replace('track', '', $keyword);
			$keyword = str_replace('tracklist', '', $keyword);
			$keyword = str_replace('lyrics', '', $keyword);
			$keyword = str_replace('video', '', $keyword);
			$keyword = str_replace('-', '', $keyword);
			//Removing the Special Characters from Input
			$keyword = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $keyword);

	//If Input is a Special Character then Shuffle the Results
	if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', trim($_GET['term'])) OR preg_match('/'.preg_quote('^\'£$%^&*()}{@#~?><,@|-=-_+-¬', '/').'/', trim($_GET['term'])) OR trim($_GET['term']) == ":" OR trim($_GET['term']) == "/" OR trim($_GET['term']) == "." OR trim($_GET['term']) == '"' OR trim($_GET['term']) == ";" OR trim($_GET['term']) == "[" OR trim($_GET['term']) == "]" OR trim($_GET['term']) == "!" OR trim($_GET['term']) == "album" OR trim($_GET['term']) == "track" OR trim($_GET['term']) == "tracklist" OR trim($_GET['term']) == "lyrics" OR trim($_GET['term']) == "video"){
														$query = 'SELECT meta_instant, meta_url_id FROM sm WHERE meta_instant LIKE :term ORDER BY RAND() LIMIT 11'; // select query

														}
	//If Input isn't a Special Character then Don't Shuffle the Results
	else{
	$query = 'SELECT meta_instant, meta_url_id FROM sm WHERE meta_instant LIKE :term LIMIT 11'; // select query
		}

	//LIMIT 11 to limit Showing of 11 Search Results Only (Above in Query)

	$stmt = $conn->prepare( $query );
	$stmt->execute(array(':term'=>"%$keyword%"));

	if ( $stmt->rowCount()>0 ) {
		
		while($recResult = $stmt->fetch(PDO::FETCH_ASSOC)) {
															//----Meta URL Formatter----//
															//Meta URL Prefixer
															$meta_url_raw = $recResult['meta_url_id'];
															$meta_url_trace = substr($meta_url_raw, 0,3);
															if($meta_url_trace == "alb"){$meta_url_id = "$site_root/album/$meta_url_raw";}
															if($meta_url_trace == "tck"){$meta_url_id = "$site_root/track/$meta_url_raw";}
															if($meta_url_trace == "tcl"){$meta_url_id = "$site_root/tracklist/$meta_url_raw";}
															if($meta_url_trace == "lyr"){$meta_url_id = "$site_root/lyrics/$meta_url_raw";}
															if($meta_url_trace == "vid"){$meta_url_id = "$site_root/video/$meta_url_raw";}
															
															$json_row["id"] = $meta_url_id;
															$json_row["value"] = "";
															$json_row["label"] = $recResult['meta_instant'];
															array_push($sugg_json, $json_row);
															}
								} else {
										$json_row["id"] = "#";
										$json_row["value"] = "";
										$json_row["label"] = "Nothing Found!";
										array_push($sugg_json, $json_row);
										}
	
	$jsonOutput = json_encode($sugg_json, JSON_UNESCAPED_SLASHES); 
	print $jsonOutput;

?>