<?php
//Includes
//----------------------------

//Global Includes
include '../../switches/cdn.php';
include '../../switches/db.php';
include '../../system/reset_module/reset_module.php';
include '../../switches/offsite_domains.php';
include '../../switches/offsite_links_controls.php';
?>
<?php
//Core Functional Includes
include '../../includes/album_id_extractor.php';
include '../../includes/db_fetchers/album_name.php';
include '../../includes/db_fetchers/title_year.php';
include '../../includes/db_fetchers/label.php';
include '../../includes/db_fetchers/composer_main.php';
include '../../includes/db_fetchers/album_type.php';
include '../../includes/db_fetchers/country.php';
include '../../includes/db_fetchers/release_date.php';
include '../../includes/db_fetchers/genre.php';
include '../../includes/db_fetchers/lyricist_main.php';
include '../../includes/db_fetchers/picturized_on.php';
include '../../includes/db_fetchers/image_hash.php';

//Includes For Album Links
include '../../includes/db_fetchers/imdb_link_fetcher.php';
include '../../includes/db_fetchers/wikipedia_link_fetcher.php';
include '../../includes/db_fetchers/album_link_fetcher.php';
include '../../includes/db_fetchers/iTunes_link_fetcher.php';
include '../../includes/album_host_predictor.php';

//Unuseable Functions(Required Only for Headers Data)
include '../../includes/headers_data/header_db_fetchers/release_date.php';

//Central Header Include
include '../../includes/central_header.php';

//UI Include
include("album_inside/ui_album.php");

?>
  </head>

  <body>
<?php

//Ads Code Include
include '../../includes/ad_unit.php';

//Core Functional Includes
include '../../includes/total_tracks.php';
include '../../includes/db_fetchers/duration.php';
include '../../includes/related_album_check.php';
include("album_inside/index.php");
include '../../includes/central_footer.php';
include '../../includes/conn_close.php';
?>

  </body>
</html>