<?php
if($page_type=='album' OR $page_type=='track' OR $page_type=='tracklist')
{
//Page Type Identifier
include '../../switches/header_switches/header_data_main.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Page Type Identifier
include '../../../switches/header_switches/header_data_main.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Page Type Identifier
include '../../switches/header_switches/header_data_main.php';
}
}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Page Type Identifier
include 'switches/header_switches/header_data_main.php';
}
elseif($page_type=='dmca_ex')
{
//Page Type Identifier
include '../switches/header_switches/header_data_main.php';
}
?>
<?php
if($page_type=='album' OR $page_type=='track' OR $page_type=='tracklist')
{
//Page Title
include '../../switches/header_switches/page_title.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Page Title
include '../../../switches/header_switches/page_title.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Page Title
include '../../switches/header_switches/page_title.php';
}
}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Page Type Identifier
include 'switches/header_switches/page_title.php';
}
elseif($page_type=='dmca_ex')
{
//Page Type Identifier
include '../switches/header_switches/page_title.php';
}
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<?php
if($page_type=='album' OR $page_type=='track')
{
//Masthead Inclusion
include '../../switches/header_switches/masthead.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Masthead Inclusion
include '../../../switches/header_switches/masthead.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Masthead Inclusion
include '../../switches/header_switches/masthead.php';
}
}
elseif($page_type=='root_index' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Masthead Inclusion
include 'switches/header_switches/masthead.php';
}
elseif($page_type=='dmca_ex')
{
//Masthead Inclusion
include '../switches/header_switches/masthead.php';
}
?>
  <head>
<title><?php echo $page_title ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
//External Files CDN Inclusion
if($page_type == 'album' OR $page_type == 'track' OR $page_type == 'tracklist'){include '../../switches/header_switches/external_files_cdn.php';}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer'){include 'switches/header_switches/external_files_cdn.php';}
elseif($page_type=='lyrics'){if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../switches/header_switches/external_files_cdn.php';}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../switches/header_switches/external_files_cdn.php';}}
?>
<?php
//Dynamic Changes for Page Description and Keywords
													//Root Index Page Type Check for Description and Keywords----------------------------
if($page_type == 'root_index'){include 'includes/headers_data/root_page_description.php';include 'includes/headers_data/root_page_keywords.php';}
													//Album Page Type Check for Description and Keywords----------------------------
elseif($page_type == 'album'){include '../../includes/headers_data/album_page_description.php';include '../../includes/headers_data/album_page_keywords.php';}
													//Track Page Type Check for Description and Keywords----------------------------
elseif($page_type == 'track'){include '../../includes/headers_data/track_page_description.php';include '../../includes/headers_data/track_page_keywords.php';}
													//Tracklist Page Type Check for Description and Keywords----------------------------					
elseif($page_type == 'tracklist'){include '../../includes/headers_data/tracklist_page_description.php';include '../../includes/headers_data/tracklist_page_keywords.php';}
													//Lyrics Page Type Check for Description and Keywords----------------------------				
elseif($page_type=='lyrics'){if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/headers_data/lyrics_page_description.php';include '../../../includes/headers_data/lyrics_page_keywords.php';}if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/headers_data/lyrics_page_description.php';include '../../includes/headers_data/lyrics_page_keywords.php';}}
													//About Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'about'){include 'includes/headers_data/about_page_description.php';include 'includes/headers_data/about_page_keywords.php';}
													//Vision Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'vision'){include 'includes/headers_data/vision_page_description.php';include 'includes/headers_data/vision_page_keywords.php';}
													//Privacy Policy Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'policy'){include 'includes/headers_data/privacy_policy_page_description.php';include 'includes/headers_data/privacy_policy_page_keywords.php';}
													//Terms Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'terms'){include 'includes/headers_data/terms_page_description.php';include 'includes/headers_data/terms_page_keywords.php';}
													//Contact Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'contact'){include 'includes/headers_data/contact_page_description.php';include 'includes/headers_data/contact_page_keywords.php';}
													//DMCA Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'dmca'){include 'includes/headers_data/dmca_page_description.php';include 'includes/headers_data/dmca_page_keywords.php';}
													//Correction Appeal Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'cora'){include 'includes/headers_data/cora_page_description.php';include 'includes/headers_data/cora_page_keywords.php';}
													//Developer Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'developer'){include 'includes/headers_data/developer_page_description.php';include 'includes/headers_data/developer_page_keywords.php';}
													//Masthead Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'masthead'){include 'includes/headers_data/masthead_page_description.php';include 'includes/headers_data/masthead_page_keywords.php';}
													//Report a Bug Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'reportbug'){include 'includes/headers_data/reportbug_page_description.php';include 'includes/headers_data/reportbug_page_keywords.php';}
													//Help Adding Content Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'hac'){include 'includes/headers_data/hac_page_description.php';include 'includes/headers_data/hac_page_keywords.php';}
													//Report Broken Link Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'rbl'){include 'includes/headers_data/rbl_page_description.php';include 'includes/headers_data/rbl_page_keywords.php';}
													//Join Hands Page Type Check for Description and Keywords----------------------------				
elseif($page_type == 'join_hands'){include 'includes/headers_data/join_hands_page_description.php';include 'includes/headers_data/join_hands_page_keywords.php';}
													//Site Version Type Check for Description and Keywords----------------------------				
elseif($page_type == 'siteversion'){include 'includes/headers_data/siteversion_page_description.php';include 'includes/headers_data/siteversion_page_keywords.php';}
													//Database Version Type Check for Description and Keywords----------------------------				
elseif($page_type == 'dbversion'){include 'includes/headers_data/dbversion_page_description.php';include 'includes/headers_data/dbversion_page_keywords.php';}
													//Donate Type Check for Description and Keywords----------------------------				
elseif($page_type == 'donate'){include 'includes/headers_data/donate_page_description.php';include 'includes/headers_data/donate_page_keywords.php';}
													//Disclaimer Type Check for Description and Keywords----------------------------				
elseif($page_type == 'donate'){include 'includes/headers_data/disclaimer_page_description.php';include 'includes/headers_data/disclaimer_page_keywords.php';}
?>
<?php
if($page_type=='album' OR $page_type=='track' OR $page_type=='tracklist')
{
//Robots Meta Inclusion
include '../../switches/header_switches/meta_robots.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Robots Meta Inclusion
include '../../../switches/header_switches/meta_robots.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Robots Meta Inclusion
include '../../switches/header_switches/meta_robots.php';
}
}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Robots Meta Inclusion
include 'switches/header_switches/meta_robots.php';
}
elseif($page_type=='dmca_ex')
{
//Robots Meta Inclusion
include '../switches/header_switches/meta_robots.php';
}
?>
<?php
if($page_type=='album' OR $page_type=='track')
{
//Distribution Inclusion
include '../../switches/header_switches/distribution.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Distribution Inclusion
include '../../../switches/header_switches/distribution.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Distribution Inclusion
include '../../switches/header_switches/distribution.php';
}
}
elseif($page_type=='root_index' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Distribution Inclusion
include 'switches/header_switches/distribution.php';
}
elseif($page_type=='dmca_ex')
{
//Distribution Inclusion
include '../switches/header_switches/distribution.php';
}
?>
<?php
if($page_type=='album' OR $page_type=='track')
{
//Revisit After Inclusion
include '../../switches/header_switches/revisit-after.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Revisit After Inclusion
include '../../../switches/header_switches/revisit-after.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Revisit After Inclusion
include '../../switches/header_switches/revisit-after.php';
}
}
elseif($page_type=='root_index' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Revisit After Inclusion
include 'switches/header_switches/revisit-after.php';
}
elseif($page_type=='dmca_ex')
{
//Revisit After Inclusion
include '../switches/header_switches/revisit-after.php';
}
?>
<meta name="msvalidate.01" content="<?php echo $msvalidatehash ?>" />
<meta name="google-site-verification" content="<?php echo $googlehash ?>" />
<meta name="yandex-verification" content="<?php echo $yandexhash ?>" />
<meta name="copyright" content="<?php echo $head_copyright ?>" />
<meta name="reply-to" content="<?php echo $reply_to_email ?>" />
<?php //Page id Inclusion & Calculator
if($page_type=='album' OR $page_type=='track' OR $page_type=='tracklist' OR $page_type=='video')
{
include '../../includes/headers_data/page_id_calculator.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
include '../../../includes/headers_data/page_id_calculator.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
include '../../includes/headers_data/page_id_calculator.php';
}
}
 ?>
<?php
if($page_type=='album' OR $page_type=='track' OR $page_type=='tracklist')
{
//Page Type Identifier
include '../../switches/header_switches/pagetype.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Page Type Identifier
include '../../../switches/header_switches/pagetype.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Page Type Identifier
include '../../switches/header_switches/pagetype.php';
}
}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Page Type Identifier
include 'switches/header_switches/pagetype.php';
}
elseif($page_type=='dmca_ex')
{
//Page Type Identifier
include '../switches/header_switches/pagetype.php';
}
?>
<?php
if($page_type=='album' OR $page_type=='track' OR $page_type=='tracklist')
{
//Web Content Type Identifier
include '../../switches/header_switches/web_content_type.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Web Content Type Identifier
include '../../../switches/header_switches/web_content_type.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Web Content Type Identifier
include '../../switches/header_switches/web_content_type.php';
}
}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Web Content Type Identifier
include 'switches/header_switches/web_content_type.php';
}
elseif($page_type=='dmca_ex')
{
//Web Content Type Identifier
include '../switches/header_switches/web_content_type.php';
}
?>
<link rel="author" content="<?php echo $head_author ?>" />
<?php
if($page_type=='album' OR $page_type=='track' OR $page_type=='tracklist')
{
//DNS Prefetch Identifier
include '../../switches/header_switches/dns_prefetch.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//DNS Prefetch Identifier
include '../../../switches/header_switches/dns_prefetch.php';
}
elseif($sub_page_type == 'other' OR $sub_page_type == 'na'){
//DNS Prefetch Identifier
include '../../switches/header_switches/dns_prefetch.php';
}
}
elseif($page_type=='root_index' OR $page_type=='serp' OR $page_type=='about' OR $page_type=='vision' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='contact' OR $page_type=='dmca' OR $page_type=='cora' OR $page_type=='developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Web Content Type Identifier
include 'switches/header_switches/dns_prefetch.php';
}
elseif($page_type=='dmca_ex')
{
//Web Content Type Identifier
include '../switches/header_switches/dns_prefetch.php';
}
?>

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-57x57<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-60x60<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-72x72<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-76x76<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-114x114<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-120x120<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-144x144<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-152x152<?php echo $reset_module ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site_root ?>/system/favicon/apple-touch-icon-180x180<?php echo $reset_module ?>" />
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $site_root ?>/system/favicon/favicon-32x32<?php echo $reset_module ?>" />
<link rel="icon" type="image/png" sizes="194x194" href="<?php echo $site_root ?>/system/favicon/favicon-194x194<?php echo $reset_module ?>" />
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $site_root ?>/system/favicon/android-chrome-192x192<?php echo $reset_module ?>" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $site_root ?>/system/favicon/favicon-16x16<?php echo $reset_module ?>" />
<link rel="manifest" href="<?php echo $site_root ?>/system/favicon/site<?php echo $reset_module ?>" />
<link rel="mask-icon" href="<?php echo $site_root ?>/system/favicon/safari-pinned-tab<?php echo $reset_module ?>" color="#f22056" />
<link rel="shortcut icon" href="<?php echo $site_root ?>/system/favicon/favicon<?php echo $reset_module ?>" />
<meta name="msapplication-TileColor" content="#2d89ef" />
<meta name="msapplication-TileImage" content="<?php echo $site_root ?>/system/favicon/mstile-144x144<?php echo $reset_module ?>" />
<meta name="msapplication-config" content="<?php echo $site_root ?>/system/favicon/browserconfig<?php echo $reset_module ?>" />
<meta name="theme-color" content="#ffffff" />
<?php
//Dynamic Changes for Page Description and Keywords
													//Root Index Type Check for Open Graph----------------------------
if($page_type == 'root_index'){include 'includes/headers_data/root_og.php';}
													//Album Page Type Check for Open Graph----------------------------
elseif($page_type == 'album'){include '../../includes/headers_data/album_og.php';}
													//Track Page Type Check for Open Graph----------------------------
elseif($page_type == 'track'){include '../../includes/headers_data/track_og.php';}
													//Tracklist Page Type Check for Open Graph----------------------------					
elseif($page_type == 'tracklist'){include '../../includes/headers_data/tracklist_og.php';}
													//Lyrics Page Type Check for Open Graph----------------------------				
elseif($page_type=='lyrics'){if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){include '../../../includes/headers_data/lyrics_og.php';}if($sub_page_type == 'other' OR $sub_page_type == 'na'){include '../../includes/headers_data/lyrics_og.php';}}
													//About Page Type Check for Open Graph----------------------------				
elseif($page_type == 'about'){include 'includes/headers_data/about_og.php';}
													//Vision Page Type Check for Open Graph----------------------------				
elseif($page_type == 'vision'){include 'includes/headers_data/vision_og.php';}
													//Policy Page Type Check for Open Graph----------------------------				
elseif($page_type == 'policy'){include 'includes/headers_data/privacy_policy_og.php';}
													//Terms Page Type Check for Open Graph----------------------------				
elseif($page_type == 'terms'){include 'includes/headers_data/terms_og.php';}
													//Contact Page Type Check for Open Graph----------------------------				
elseif($page_type == 'contact'){include 'includes/headers_data/contact_og.php';}
													//DMCA Page Type Check for Open Graph----------------------------				
elseif($page_type == 'dmca'){include 'includes/headers_data/dmca_og.php';}
													//Correction Appeal Page Type Check for Open Graph----------------------------				
elseif($page_type == 'cora'){include 'includes/headers_data/cora_og.php';}
													//Developer Page Type Check for Open Graph----------------------------				
elseif($page_type == 'developer'){include 'includes/headers_data/developer_og.php';}
													//Masthead Page Type Check for Open Graph----------------------------				
elseif($page_type == 'masthead'){include 'includes/headers_data/masthead_og.php';}
													//Report a Bug Page Type Check for Open Graph----------------------------				
elseif($page_type == 'reportbug'){include 'includes/headers_data/reportbug_og.php';}
													//Help Adding Content Page Type Check for Open Graph----------------------------				
elseif($page_type == 'hac'){include 'includes/headers_data/hac_og.php';}
													//Report Broken Link Page Type Check for Open Graph----------------------------				
elseif($page_type == 'rbl'){include 'includes/headers_data/rbl_og.php';}
													//Join Hands Page Type Check for Open Graph----------------------------				
elseif($page_type == 'join_hands'){include 'includes/headers_data/join_hands_og.php';}
													//Site Version Page Type Check for Open Graph----------------------------
elseif($page_type == 'siteversion'){include 'includes/headers_data/siteversion_og.php';}
													//Database Version Page Type Check for Open Graph----------------------------	
elseif($page_type == 'dbversion'){include 'includes/headers_data/dbversion_og.php';}
													//Donate Page Type Check for Open Graph----------------------------				
elseif($page_type == 'dbversion'){include 'includes/headers_data/donate_og.php';}
													//Disclaimer Type Check for Open Graph----------------------------				
elseif($page_type == 'dbversion'){include 'includes/headers_data/disclaimer_og.php';}
?>
<?php
if($page_type == 'album' OR $page_type == 'track' OR $page_type == 'tracklist')
{
//Analytics Code Inclusion
include '../../includes/analytics.php';
}
elseif($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
//Analytics Code Inclusion
include '../../../includes/analytics.php';
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//Analytics Code Inclusion
include '../../includes/analytics.php';
}
}
elseif($page_type == 'root_index' OR $page_type == 'serp' OR $page_type == 'about' OR $page_type == 'vision' OR $page_type == 'policy' OR $page_type == 'terms' OR $page_type == 'contact' OR $page_type == 'dmca' OR $page_type == 'cora' OR $page_type == 'developer' OR $page_type == 'masthead' OR $page_type == 'reportbug' OR $page_type == 'hac' OR $page_type == 'rbl' OR $page_type == 'join_hands' OR $page_type == 'siteversion' OR $page_type == 'dbversion' OR $page_type == 'donate' OR $page_type == 'disclaimer')
{
//Analytics Code Inclusion
include 'includes/analytics.php';
}
elseif($page_type=='dmca_ex')
{
//Analytics Code Inclusion
include '../includes/analytics.php';
}
?>

