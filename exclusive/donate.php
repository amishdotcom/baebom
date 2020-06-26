<?php
$page_type='donate';
include 'includes/cdn.php';
include 'includes/plugs.php';
?>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!–– An Amish Dotcom Software ––>
  <head>
<title><?php echo $donate_page_title ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#f22056">
<?php include 'includes/external_files_cdn.php'; ?>
<meta name="description" content="<?php echo $description_donate ?>" />
<meta name="keywords" content="<?php echo $keywords_donate ?>" />
<meta name="robots" content="<?php echo $robots_donate ?>" />
<meta name="distribution" content="<?php echo $distribution_donate ?>" />
<meta name="revisit-after" content="<?php echo $robots_revisit_after_donate ?>" />
<meta name="copyright" content="<?php echo $copyright ?>" />
<meta name="reply_to" content="<?php echo $reply_to ?>" />
<meta property="pageType" content="<?php echo $pageType_donate ?>" />
<meta name="web_content_type" content="<?php echo $web_content_type_donate ?>" />
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
<meta property="og:title" content="<?php echo $donate_page_title ?>" />
<meta property="og:description" content="<?php echo $description_donate ?>" />
<meta property="og:type" content="website.<?php echo $pageType_donate ?>" />
<meta property="og:image" content="<?php echo $images_directory ?>baebom_exclusive" />
<meta property="og:image:height" content="<?php echo $og_image_height ?>" />
<meta property="og:image:width" content="<?php echo $og_image_width ?>" />
<meta property="og:url" content="<?php echo $current_page_url ?>" />
<meta property="og:site_name" content="<?php echo $site_name ?>" />
<meta property="fb:app_id" content="<?php echo $fb_app_id ?>" />

<!-- Twitter -->
<meta property="twitter:title" content="<?php echo $donate_page_title ?>" />
<meta property="twitter:description" content="<?php echo $description_donate ?>" />
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

<p class="head">Contribute / Donate</p>
<div class="content">
<p><center>Hi I am <a style="color:red" href="<?php echo $dotcom_fb_link ?>" target="_blank">Amish Dotcom</a> the Founder of this Website want to say some few words to you. <br><br>I am just a regular Engineering Student and i fund this website from my own pockets and also this website doesn't generate any revenue because there isn't enough traffic to monitize.<br>So I would be thankful to you if you would like to Donate some Amount to me.<br><br>We have two options here:<br><br><b>1.Paypal Donate</b><br><br><a style="color:red" href="http://paypal.me/clubindiana" target="_blank">paypal.me/clubindiana</a><br><br><b>2.Paytm</b><br><br><img style='display:block;' id='Donate Using Paytm' src='data:image/png;base64,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'/><br> or Send it to my Paytm Wallet at <span style="color:red">7055627401</span></center></p>
</div>
<br><br><br><br><br><br><br>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>