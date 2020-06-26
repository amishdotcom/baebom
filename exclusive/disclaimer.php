<?php
$page_type='disclaimer';
include 'includes/cdn.php';
include 'includes/plugs.php';
?>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!–– An Amish Dotcom Software ––>
  <head>
<title><?php echo $disclaimer_page_title ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#f22056">
<?php include 'includes/external_files_cdn.php'; ?>
<meta name="description" content="<?php echo $description_disclaimer ?>" />
<meta name="keywords" content="<?php echo $keywords_disclaimer ?>" />
<meta name="robots" content="<?php echo $robots_disclaimer ?>" />
<meta name="distribution" content="<?php echo $distribution_disclaimer ?>" />
<meta name="revisit-after" content="<?php echo $robots_revisit_after_disclaimer ?>" />
<meta name="copyright" content="<?php echo $copyright ?>" />
<meta name="reply_to" content="<?php echo $reply_to ?>" />
<meta property="pageType" content="<?php echo $pageType_disclaimer ?>" />
<meta name="web_content_type" content="<?php echo $web_content_type_disclaimer ?>" />
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
<meta property="og:title" content="<?php echo $disclaimer_page_title ?>" />
<meta property="og:description" content="<?php echo $description_disclaimer ?>" />
<meta property="og:type" content="website.<?php echo $pageType_disclaimer ?>" />
<meta property="og:image" content="<?php echo $images_directory ?>baebom_exclusive" />
<meta property="og:image:height" content="<?php echo $og_image_height ?>" />
<meta property="og:image:width" content="<?php echo $og_image_width ?>" />
<meta property="og:url" content="<?php echo $current_page_url ?>" />
<meta property="og:site_name" content="<?php echo $site_name ?>" />
<meta property="fb:app_id" content="<?php echo $fb_app_id ?>" />

<!-- Twitter -->
<meta property="twitter:title" content="<?php echo $disclaimer_page_title ?>" />
<meta property="twitter:description" content="<?php echo $description_disclaimer ?>" />
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

<p class="head">Disclaimer</p>
<div class="content">
<p><center>All the information on this website is published in good faith and for general information purpose only. <?php echo $site_name ?> does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (<?php echo $custom_site_root ?>), is strictly at your own risk. will not be liable for any losses and/or damages in connection with the use of our website.

From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone ‘bad'.

Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</center></p>
<br><br>
<center><p class="py02">Intellectual property</p></center>
<p><center>All product names, logos, and brands are property of their respective owners. All company, product and service names used in this website are for identification purposes only. Use of these names, logos, and brands does not imply endorsement.<br><br>All lyrics on <?php echo $site_name ?> are property and copyright of their owners. All lyrics provided for non commercial and personal use only.</center></p>
<br><br>
<center><p class="py02">Consent</p></center>
<p><center>By using our website, you hereby consent to our disclaimer and agree to its <a href="<?php echo "terms" ?>">terms</a>.</center></p>
</div>
<br><br><br><br><br><br><br>


<?php
include 'includes/central_footer.php'
?>

  </body>
</html>