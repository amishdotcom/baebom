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
include '../../includes/db_fetchers/album_name.php';
include '../../includes/db_fetchers/title_year.php';
include '../../includes/db_fetchers/image_hash.php';

//Includes For Album Links
include '../../includes/db_fetchers/imdb_link_fetcher.php';
include '../../includes/db_fetchers/wikipedia_link_fetcher.php';
include '../../includes/db_fetchers/album_link_fetcher.php';
include '../../includes/db_fetchers/iTunes_link_fetcher.php';
include '../../includes/album_host_predictor.php';

//Unuseable Functions(Required Only for Headers Data)
include '../../includes/db_fetchers/label.php';
include '../../includes/db_fetchers/composer_main.php';
include '../../includes/headers_data/header_db_fetchers/image_hash.php';
include '../../includes/headers_data/header_db_fetchers/release_date.php';

//Central Header Include
include '../../includes/central_header.php';

//UI Include
include("tracklist_inside/ui_tracklist.php");

?>
  </head>

  <body>
<?php

//Ads Code Include
include '../../includes/ad_unit.php';

//Core Functional Includes
include 'tracklist_inside/index.php';
include '../../includes/central_footer.php';
include '../../includes/conn_close.php';
?>

  </body>
</html>