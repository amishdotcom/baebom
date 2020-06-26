<?php
/**
 * 2018 NiNaCoder
 * @author: NiNaCoder <ninacoder2510@gmail.com>
 * © 2018 NiNaCoder https://ninacoder.com
 * International Registered Trademark & Property of NiNaCoder
 */

$hash = $db->safesql ( $_REQUEST ['hash'] );

$stop = FALSE;

if (! $hash) die ( "Sorry! There is no lyrics for your request!" );

	$db->query ( "SELECT id, title, artist, lyrics, count, cover FROM ninacoder_lyrics where hash = '$hash'" );

	$row = $db->get_row ();
	
	if (! $row ['id']) {

		header("HTTP/1.0 404 Not Found");

        $smarty->display('404.tpl');

        $db->close ();

		die ();

}

$row = array_map('stripslashes', $row);

$lyrics_cover = $row['cover'];

function metro_url($title, $artist){
	
	global $config;
	
	$title = str_replace("(Live Acoustic)", "", $title);

	$title = str_replace("(Instrumental)", "", $title);

	$title = explode("(", $title);

	$title = strtolower($title[0]);

	$title = trim(strip_tags($title));
	
	$title = preg_replace("/[^a-zA-Z 0-9]+/", "", $title);
	
	$title = preg_replace("/[[:blank:]]+/"," ",$title);
	
	$title = str_replace(" ","-",$title);
	
	$artist = trim(strip_tags(strtolower($artist)));

    $artist = explode("&", $artist);

    $artist = trim($artist[0]);

    $artist = explode(",", $artist);

    $artist = trim($artist[0]);

	$artist = preg_replace("/[^a-zA-Z 0-9]+/", "", $artist);
	
	$artist = preg_replace("/[[:blank:]]+/"," ",$artist);
	
	$artist = str_replace(" ","-",$artist);
	
	$url = "http://www.metrolyrics.com/$title-lyrics-$artist.html";
	
  return $url;
  
}

function lyrics_com_url($title, $artist){
	
	global $config;
	
	$title = trim(strip_tags($title));
	
	$title = preg_replace("/[^a-zA-Z 0-9]+/", "", $title);
	
	$title = preg_replace("/[[:blank:]]+/"," ",$title);
	
	$title = str_replace(" ","-",$title);
	
	$artist = trim(strip_tags($artist));
	
	$artist = preg_replace("/[^a-zA-Z 0-9]+/", "", $artist);
	
	$artist = preg_replace("/[[:blank:]]+/"," ",$artist);
	
	$artist = str_replace(" ","-",$artist);
	
	$url = "http://www.lyrics.com/$title-lyrics-$artist.html";
	
  return $url;
  
}

function my_convert_encoding($string,$to,$from)
{
        // Convert string to ISO_8859-1
        if ($from == "UTF-8")
                $iso_string = utf8_decode($string);
        else
                if ($from == "UTF7-IMAP")
                        $iso_string = imap_utf7_decode($string);
                else
                        $iso_string = $string;

        // Convert ISO_8859-1 string to result coding
        if ($to == "UTF-8")
                return(utf8_encode($iso_string));
        else
                if ($to == "UTF7-IMAP")
                        return(imap_utf7_encode($iso_string));
                else
                        return($iso_string);
}

if ( ! $row ['lyrics']) {
		
	$title_remove_feat = explode("(feat.", $row['title']);

	$title_remove_feat = $title_remove_feat[0];

	$title_remove_feat = trim($title_remove_feat);

	$row ['url'] = metro_url($title_remove_feat, $row['artist']);

	$lyrics_text = get_content ( $row ['url'] );

	$lyrics_text = explode ( '<div id="lyrics-body-text" class="js-lyric-text">', $lyrics_text );

	$lyrics_text = explode ( '</sd-lyricbody>', $lyrics_text [1] );
	
	$lyrics_text = $lyrics_text [0];

	if($lyrics_text){

		$lyrics_text = explode ( '</p><div', $lyrics_text );

		if($lyrics_text [0]) {

			$part_one = $lyrics_text [0];

			$part_two = explode ( '<span class="label">See all</span>', $lyrics_text [1] );

			$part_two = $part_two[1];

			$part_two = explode ( '<p class="writers">', $part_two );

			$part_two = $part_two[0];

			$lyrics_text = $part_one . trim(strip_tags($part_two));

	
		}
	}

	/* add to remove related content */

	$allowed_tags = "<p>";
	
	$lyrics_text = strip_tags_content($lyrics_text, $allowed_tags);

	$lyrics_text = strip_tags($lyrics_text);

	$lyrics_text = implode("\n", array_map('trim', explode("\n", $lyrics_text)));

	$lyrics_text = preg_replace('/(\r\n|\r|\n)+/', "\n", $lyrics_text);

	$content = $lyrics_text;

	if ($content && (strlen($content) > 200)){
		
		$db->query ( "UPDATE ninacoder_lyrics SET lyrics='" . $db->safesql ( $content ) . "' WHERE id = '" . $row ['id'] . "'" );
		
	}else{
		
		$row ['url'] = lyrics_com_url($row['title'], $row['artist']);
		
		$lyrics_text = get_content ( $row ['url'] );
		
		$lyrics_text = explode ( '<div id="lyric_space">', $lyrics_text );

		$lyrics_text = explode ( '</div>', $lyrics_text [1] );

		$lyrics_text = $lyrics_text [0];

		$lyrics_text = html_entity_decode($lyrics_text);
		
		$lyrics_text = str_replace('LyricFind',"vlyrics.co", $lyrics_text);
		
		$lyrics_text = str_replace("\t","",$lyrics_text);
		
		$lyrics_text = str_replace("---","\n---\n",$lyrics_text);
		
		$content = strip_tags ( $lyrics_text );
		
		if($content && (strlen($content) > 200)) {

			$db->query ( "UPDATE ninacoder_lyrics SET lyrics='" . $db->safesql ( $content ) . "' WHERE id = '" . $row ['id'] . "'" );

		}
		
	}
	
	$content = trim($content);

	if($content && (strlen($content) > 200)){

		$row ['content'] = nl2br ( $content );

	}
	
} else {
	
	$db->query ( "UPDATE ninacoder_lyrics set count=count+1 where id = '" . $row ['id'] . "'" );
	
	$row ['lyrics'] = trim($row ['lyrics']);

	$row ['content'] = nl2br ( $row ['lyrics'] );
	
}


$row ['hash'] = $hash;

$row ['search_by_artist'] = search_url ( $row ['artist'] );

$row ['print'] = $config ['site_url'] . "download/print/" . file_name ( $row ['title'] . " " . $row ['artist'] ) . "-" . $hash . ".tpl";

$row ['pdf'] = $config ['site_url'] . "download/pdf/" . $hash;

$row ['txt'] = $config ['site_url'] . "download/text/" . $hash;

$row ['word'] = $config ['site_url'] . "download/word/" . $hash;

$lyrics = $row;

$sql_related = $db->query ( "SELECT hash,title,artist,cover FROM ninacoder_lyrics where artist = '" . $db->safesql ( $row ['artist'] ) . "' LIMIT 0,10" );

while ( $result_related = $db->get_row ( $sql_related ) ) {

	$result_related ['search_by_artist'] = search_url ( $result_related ['artist'] );

	$result_related ['view_url'] = lyrics_url ( $result_related ['title'], $result_related ['artist'], $result_related ['hash'] );

	$related [] = $result_related;

}

$artist = $db->super_query ( "SELECT name, hash, bio FROM ninacoder_artists WHERE name = '" . $db->safesql ( $row ['artist'] ) . "' LIMIT 0,1" );

if(strpos($lyrics['content'], 'document.write') !== false || strpos($lyrics['content'], 'jquery') !== false ){

	$db->query ( "UPDATE ninacoder_lyrics SET lyrics = '' WHERE hash = '" . $lyrics ['hash'] . "'" );

}

$meta = general_meta($config['lyrics_page_title'], $config['lyrics_page_desc'], "{lyricsName}", $lyrics['title'], "{artistName}", $lyrics['artist'], $lyrics['cover']);

$smarty->assign ( "lyrics_cover", $lyrics_cover );

$smarty->assign ( "lyrics", $lyrics );

$smarty->assign ( "related", $related );

$smarty->assign ( "similar", $similar );

$smarty->assign ( "artist", $artist );

$smarty->assign ( "hash", $hash );

$content = $smarty->fetch("view.tpl");

?>