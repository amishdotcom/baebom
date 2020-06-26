<?php
$page_type='about';
include 'includes/cdn.php';
include 'includes/plugs.php';
?>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!–– An Amish Dotcom Software ––>
  <head>
<title><?php echo $about_page_title ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#f22056">
<?php include 'includes/external_files_cdn.php'; ?>
<meta name="description" content="<?php echo $description_about ?>" />
<meta name="keywords" content="<?php echo $keywords_about ?>" />
<meta name="robots" content="<?php echo $robots_about ?>" />
<meta name="distribution" content="<?php echo $distribution_about ?>" />
<meta name="revisit-after" content="<?php echo $robots_revisit_after_about ?>" />
<meta name="copyright" content="<?php echo $copyright ?>" />
<meta name="reply_to" content="<?php echo $reply_to ?>" />
<meta property="pageType" content="<?php echo $pageType_about ?>" />
<meta name="web_content_type" content="<?php echo $web_content_type_about ?>" />
<link rel="author" content="<?php echo $author ?>" />

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $favicon_directory ?>apple-touch-icon-57x57" />
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $favicon_directory ?>apple-touch-icon-60x60" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $favicon_directory ?>apple-touch-icon-72x72" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $favicon_directory ?>apple-touch-icon-76x76" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $favicon_directory ?>apple-touch-icon-114x114" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $favicon_directory ?>apple-touch-icon-120x120" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $favicon_directory ?>apple-touch-icon-144x144" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $favicon_directory ?>apple-touch-icon-152x152" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon_directory ?>apple-touch-icon-180x180" />
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon_directory ?>favicon-32x32" />
<link rel="icon" type="image/png" sizes="194x194" href="<?php echo $favicon_directory ?>favicon-194x194" />
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $favicon_directory ?>android-chrome-192x192" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon_directory ?>favicon-16x16" />
<link rel="manifest" href="<?php echo $favicon_directory ?>site" />
<link rel="mask-icon" href="<?php echo $favicon_directory ?>safari-pinned-tab" color="#f22056" />
<link rel="shortcut icon" href="<?php echo $favicon_directory ?>favicon" />
<meta name="msapplication-TileColor" content="#2d89ef" />
<meta name="msapplication-TileImage" content="<?php echo $favicon_directory ?>mstile-70x70" />
<meta name="msapplication-config" content="<?php echo $favicon_directory ?>browserconfig" />
<meta name="theme-color" content="#ffffff" />

<!-- Facebook -->
<meta property="og:title" content="<?php echo $about_page_title ?>" />
<meta property="og:description" content="<?php echo $description_about ?>" />
<meta property="og:type" content="website.<?php echo $pageType_about ?>" />
<meta property="og:image" content="<?php echo $images_directory ?>baebom_exclusive" />
<meta property="og:image:height" content="<?php echo $og_image_height ?>" />
<meta property="og:image:width" content="<?php echo $og_image_width ?>" />
<meta property="og:url" content="<?php echo $current_page_url ?>" />
<meta property="og:site_name" content="<?php echo $site_name ?>" />
<meta property="fb:app_id" content="<?php echo $fb_app_id ?>" />

<!-- Twitter -->
<meta property="twitter:title" content="<?php echo $about_page_title ?>" />
<meta property="twitter:description" content="<?php echo $description_about ?>" />
<meta property="twitter:url" content="<?php echo $current_page_url ?>" />
<meta property="twitter:site" content="<?php echo $twitter_handle ?>" />
<meta property="twitter:card" content="summary" />
<meta property="twitter:image" content="<?php echo $images_directory ?>baebom_exclusive" />

<link rel="stylesheet" type="text/css" href="<?php echo $css_directory ?>central">
<link rel="stylesheet" type="text/css" href="<?php echo $css_directory ?>exclusive">

<?php include 'includes/analytics.php'; ?>

  </head>

  <body>

<?php include 'includes/central_navig_bar.php'; ?>

<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head">About <?php echo $site_name ?></p>
<div class="content">
<p><?php echo $site_name ?> is an upbuilding Internet Music Database which is expected to have the collection of all Music Albums and their respective Lyrics from round the globe. The Project is started with a mission to provide Internet users round the globe with most Authentic Information related to music.</p>
<p>The Project is being Developed by <a href="<?php echo $dotcom_fb_link ?>" target="_blank">Amish Dotcom</a> who also owns Internet Group <a href="<?php echo $copyright_owner_link ?>"><?php echo $copyright ?></a>. <?php echo $copyright ?> is determined to create web for the Next Generation.
<p><?php echo $site_name ?> provides its users an easy access to its Database through Search Engines, SERP's and its integrated Search Technology. <?php echo $site_name ?> provides information about any Music Album and lyrics and official video links.</p>
<p><?php echo $site_name ?> is currently in its very early stage and is currently looking for a positive support to help it let grow, if you want to help by any of the way then please <a href="mailto:<?php echo $reply_to ?>">Contact Us</a>.</p>
</div>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>