<?php
//Includes
//----------------------------

//Global Includes
include 'switches/cdn.php';
include 'switches/db.php';
include 'system/reset_module/reset_module.php';

//Page Defination
$page_type = 'root_index';

//Central Header Include
include 'includes/central_header.php';
?>
  </head>

  <body>
<?php

//Ads Code Include
include 'includes/ad_unit.php';

//Core Functional Includes
include("system/engines/root_search/index.php");

include 'includes/conn_close.php';
?>


  </body>
</html>