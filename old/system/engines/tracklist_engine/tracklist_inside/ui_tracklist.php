
<!-- baebom Multicast Header ---->

<!-- The main baebom ui Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/ui_tracklist<?php echo $reset_module ?>">
<!---->

<!-- Header Elements-->
<header>

<!-- Baebom Search Bar Stylesheet Loader-->
<link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/js/jquery/ui/1.10.1/themes/base/minified/jquery-ui.min<?php echo $reset_module ?>">
<script type="text/javascript" src="<?php echo $site_root ?>/system/js/jquery/jquery-1.9.1.min<?php echo $reset_module ?>"></script>
<script type="text/javascript" src="<?php echo $site_root ?>/system/js/jquery/ui/1.10.1/jquery-ui.min<?php echo $reset_module ?>"></script>
<script type="text/javascript" src="<?php echo $site_root ?>/system/engines/root_search/instant/instant_search_content_pages<?php echo $reset_module ?>"></script>
	
<!-- The main Navigation Bar-->
<?php
include '../../includes/central_navig_bar.php';
?>

<!---->

<!-- Baebom Search Bar -->
<form method="get" action="<?php echo $search_page_loc ?>" onsubmit="return do_search()">
<input id="q" type="text" name="q" placeholder="Search baebom" class="auto">
</form>
<!---->

<?php
//Scraper Inclusion
include '../../includes/link_scraper.php';
?>
<br>
<?php if((isset($scraped_album_link_id)) AND (isset($album_name)) AND (isset($title_year))){
echo"<div class=\"album_name\"><span><a class=\"taie\" href=\"$album_bridge$scraped_album_link_id/\">$album_name</a></span>&nbsp;<span class=\"title_year\">($title_year)</span></div>";} ?>

<br><br><br>
<!-- Tracklist Main Image Specific -->
<div id="album_image">
<!-- Trigger the Modal -->
<?php if((isset($album_name)) AND (isset($im))){
echo"<img id=\"myImg\" title=\"$album_name Poster\"; src=\"$cdn/$thumbs/$im$reset_module\"><br>\n";} ?>
<!-- The Modal -->
<div id="myModal" class="modal">
<!-- The Close Button -->
<span class="close">&times;</span>
<!-- Modal Content (The Image) -->
<?php if(isset($im)){ echo"<img class=\"modal-content\" id=\"img01\"; src=\"$cdn/$images/$im$reset_module\">\n";} ?>
<!-- Modal Caption (Image Text) -->
<div id="caption"><?php if(isset($album_name)){echo $album_name;} ?></div>
</div>
<!-- Album Main Image Javascript loader -->
<script type="text/javascript" src="<?php echo $site_root ?>/system/js/main_image_loader<?php echo $reset_module ?>"></script>
</div>

</header>
<!---->
