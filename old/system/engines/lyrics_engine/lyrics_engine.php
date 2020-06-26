<?php
//Please Replace Anything nwe you put in both the IF Statements

if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Includes
//----------------------------

//Global Includes
include '../../../switches/cdn.php';
include '../../../switches/db.php';
include '../../../system/reset_module/reset_module.php';
include '../../../switches/offsite_links_controls.php';
?>
<?php
//Core Functional Includes
include '../../../includes/db_fetchers/lyrics_track_name.php';
include '../../../includes/db_fetchers/lyrics_lyricist.php';
include '../../../includes/db_fetchers/lyrics_content.php';
include '../../../includes/db_fetchers/lyrics_album_name.php';
include '../../../includes/db_fetchers/lyrics_composer_main.php';
include '../../../includes/db_fetchers/track_artist.php'; //Also being used for Headers
include '../../../includes/db_fetchers/duration.php';
include '../../../includes/db_fetchers/lyrics_label_copyright.php';
include '../../../includes/transit_id_extractor_lyrics.php';
include '../../../includes/db_fetchers/image_hash.php';

//Includes For Track Links
include '../../../includes/db_fetchers/track_link_fetcher.php';
include '../../../includes/db_fetchers/track_iTunes_link_fetcher.php';
include '../../../includes/db_fetchers/video_link_fetcher.php';
include '../../../includes/track_host_predictor.php';
include '../../../includes/video_host_predictor.php';

//Unuseable Function(Required Only for Headers Data)
include '../../../includes/headers_data/header_db_fetchers/image_hash.php';
include '../../../includes/headers_data/header_db_fetchers/release_date.php';

//Central Header Include
include '../../../includes/central_header.php';

//UI Include
include("lyrics_inside/ui_lyrics.php");

}

if($sub_page_type == 'other' OR $sub_page_type == 'na'){

	//Includes
//----------------------------

//Global Includes
include '../../switches/cdn.php';
include '../../switches/db.php';
include '../../system/reset_module/reset_module.php';
include '../../switches/offsite_links_controls.php';
?>
<?php
//Core Functional Includes
include '../../includes/db_fetchers/lyrics_track_name.php';
include '../../includes/db_fetchers/lyrics_lyricist.php';
include '../../includes/db_fetchers/lyrics_content.php';
include '../../includes/db_fetchers/lyrics_album_name.php';
include '../../includes/db_fetchers/lyrics_composer_main.php';
include '../../includes/db_fetchers/track_artist.php'; //Also being used for Headers
include '../../includes/db_fetchers/duration.php';
include '../../includes/db_fetchers/lyrics_label_copyright.php';
include '../../includes/transit_id_extractor_lyrics.php';
include '../../includes/db_fetchers/image_hash.php';

//Includes For Track Links
include '../../includes/db_fetchers/track_link_fetcher.php';
include '../../includes/db_fetchers/track_iTunes_link_fetcher.php';
include '../../includes/db_fetchers/video_link_fetcher.php';
include '../../includes/track_host_predictor.php';
include '../../includes/video_host_predictor.php';

//Unuseable Function(Required Only for Headers Data)
include '../../includes/headers_data/header_db_fetchers/image_hash.php';
include '../../includes/headers_data/header_db_fetchers/release_date.php';

//Central Header Include
include '../../includes/central_header.php';

//UI Include
include("lyrics_inside/ui_lyrics.php");

}
?>

  </head>

  <body>
<?php

if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Ads Code Include
include '../../../includes/ad_unit.php';

//Core Functional Includes
include("lyrics_inside/index.php");
include '../../../includes/conn_close.php';
}

if($sub_page_type == 'other' OR $sub_page_type == 'na'){

//Ads Code Include
include '../../includes/ad_unit.php';

//Core Functional Includes
include("lyrics_inside/index.php");
include '../../includes/conn_close.php';

}
?>


  </body>
</html>