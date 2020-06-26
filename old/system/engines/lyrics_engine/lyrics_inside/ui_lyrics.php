
<!-- baebom Multicast Header ---->

<!-- The main baebom ui Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/ui_lyrics<?php echo $reset_module ?>">
<!---->

<!-- Header Elements-->
<header>

<!-- Baebom Search Bar Stylesheet Loader-->
<link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/js/jquery/ui/1.10.1/themes/base/minified/jquery-ui.min<?php echo $reset_module ?>">
<script type="text/javascript" src="<?php echo $site_root ?>/system/js/jquery/jquery-1.9.1.min<?php echo $reset_module ?>"></script>
<script type="text/javascript" src="<?php echo $site_root ?>/system/js/jquery/ui/1.10.1/jquery-ui.min<?php echo $reset_module ?>"></script>
<?php
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
echo"<script type=\"text/javascript\" src=\"$site_root/system/engines/root_search/instant/instant_search_content_pages_lyrics$reset_module\"></script>";
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
echo"<script type=\"text/javascript\" src=\"$site_root/system/engines/root_search/instant/instant_search_content_pages$reset_module\"></script>";
}
?>

<!---->

<!-- The main Navigation Bar-->
<?php
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
include '../../../includes/central_navig_bar.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
include '../../includes/central_navig_bar.php';
}
?>
<!---->

<!-- Baebom Search Bar -->
<form method="get" action="<?php echo $search_page_loc ?>" onsubmit="return do_search()">
 <input id="q" type="text" name="q" placeholder="Search baebom" class="auto">
</form>
<!---->

<!-- Other Tracks Loader Assembly-->
<link type="text/css" rel="stylesheet" href="<?php echo $site_root ?>/system/plugins/lightslider/dist/css/lightslider<?php echo $reset_module ?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo $site_root ?>/system/plugins/lightslider/dist/css/main<?php echo $reset_module ?>"/>
<script src="<?php echo $site_root ?>/system/plugins/lightslider/dist/js/lightslider<?php echo $reset_module ?>"></script>
<script src="<?php echo $site_root ?>/system/plugins/lightslider/dist/js/main<?php echo $reset_module ?>"></script>

</header>
<!---->
