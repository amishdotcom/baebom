<?php
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
include '../../includes/db_fetchers/track.php';
include '../../includes/db_fetchers/track_album_name.php';
include '../../includes/db_fetchers/track_composer.php';
include '../../includes/db_fetchers/track_lyricist.php';
include '../../includes/db_fetchers/track_artist.php';
include '../../includes/db_fetchers/track_cid_fetcher(s).php';

//Includes For Track Links
include '../../includes/db_fetchers/track_link_fetcher.php';
include '../../includes/db_fetchers/track_iTunes_link_fetcher.php';
include '../../includes/db_fetchers/video_link_fetcher.php';
include '../../includes/db_fetchers/lyrics_link_fetcher.php';
include '../../includes/track_host_predictor.php';
include '../../includes/video_host_predictor.php';

//Unuseable Functions(Required Only for Headers Data)
include '../../includes/headers_data/header_db_fetchers/image_hash.php';
include '../../includes/headers_data/header_db_fetchers/release_date.php';
include '../../includes/headers_data/header_db_fetchers/duration.php';

//Central Header Include
include '../../includes/central_header.php';

//UI Include
include("track_inside/ui_track.php");
?>
  </head>

  <body>
<?php

//Ads Code Include
include '../../includes/ad_unit.php';

//Core Functional Includes
include '../../includes/db_fetchers/track_iswc.php';
include '../../includes/db_fetchers/track_isrc.php';
include '../../includes/db_fetchers/track_upc.php';
include '../../includes/db_fetchers/track_producer.php';
include '../../includes/db_fetchers/track_rec_studio.php';
include '../../includes/db_fetchers/track_recorded_by.php';
include '../../includes/db_fetchers/track_arr_mgr.php';
include '../../includes/db_fetchers/track_instruments_by.php';
include '../../includes/db_fetchers/track_programmers.php';
include '../../includes/db_fetchers/track_dubbing_engineer.php';
include '../../includes/db_fetchers/track_mix_mas.php';
include '../../includes/db_fetchers/track_mus_ass.php';
include '../../includes/db_fetchers/track_mus_director.php';
include '../../includes/db_fetchers/track_add_info.php';
include 'track_inside/index.php';
include '../../includes/central_footer.php';
include '../../includes/conn_close.php';
?>

  </body>
</html>