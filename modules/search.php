<?php
/**
 * 2018 NiNaCoder
 * @author: NiNaCoder <ninacoder2510@gmail.com>
 * © 2018 NiNaCoder https://ninacoder.com
 * International Registered Trademark & Property of NiNaCoder
 */

$keyword = strip_tags(trim($_REQUEST['q']));

$keyword = urlencode($keyword);

if(strlen($keyword) > 2) $db->query("INSERT IGNORE INTO ninacoder_tags SET tag='" . $db->safesql(str_replace("+", " ", $keyword)) . "'");

//Search from database

$db->query("SELECT hash, title, artist, cover FROM ninacoder_lyrics WHERE title LIKE '%" . $db->safesql(urldecode($keyword)) . "%' LIMIT 0, 10");

while ($row = $db->get_row()){

        $row = stripslashes_deep($row);

        $song['title'] = $row['title'];

        $song['artist'] = $row['artist'];

        $song['cover'] = $row['cover'];

        $song['view_url'] = lyrics_url($song['title'], $song['artist'], $row['hash']);

        $song['search_by_artist'] = search_url($song['artist']);

        $lyrics[] = $song;
}

//Search from itunes API

$lyrics_search = get_content("https://itunes.apple.com/search?term=" . $keyword . "&entity=song&limit=100&country=us");

$lyrics_search = json_decode($lyrics_search);

if ($lyrics_search)
{
	foreach ($lyrics_search->results as $result)
	{
		$title = $result->{'trackName'};

		$artist = $result->{'artistName'};

		$artist_id = $result->{'artistId'};

		$album = $result->{'collectionName'};

		$album_id = $result->{'collectionId'};

		$cover = $result->{'artworkUrl60'};

		$url = $result->{'trackId'};

		$hash = gen_uuid($title . $artist);

		$artist_hash = gen_uuid($artist);

		//fitter to remove get clean track name
		$title = str_replace("(Live)", "", $title);
		$title = str_replace("(Bonus Track)", "", $title);
		$title = trim($title);



		if(strlen($title) < 50){
			$song['title'] = $title;
			$song['artist'] = $artist;
			$song['album'] = $album;
			$song['cover'] = $cover;
			$song['view_url'] = lyrics_url($song['title'], $song['artist'], $hash);
			$song['search_by_artist'] = search_url($song['artist']);
		}

		if($title && $artist && $url && strlen($title) < 50) {
			$db->query("INSERT IGNORE INTO `ninacoder_lyrics` (title, artist, hash, cover, album_itunes_id) values ('".$db->safesql($title)."','".$db->safesql($artist)."','".$db->safesql($hash)."','".$db->safesql($cover)."','".$db->safesql($album_id)."')");
			$db->query("INSERT IGNORE INTO `ninacoder_artists` (name, hash, itunes_id) values ('".$db->safesql($artist)."','" . $db->safesql($artist_hash) . "', '" . $artist_id . "')");
			if($title) $lyrics[] = $song;
		}

	}
}

$smarty->assign("lyrics_search", $lyrics);

$smarty->assign("keyword", urldecode(str_replace('+',' ',$keyword)));

$meta = general_meta($config['search_page_title'], $config['search_page_desc'], "{searchKeyword}", urldecode(str_replace('+',' ',$keyword)));

$content = $smarty->fetch("search.tpl");

?>