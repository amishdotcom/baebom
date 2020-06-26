<?php
$page_type='dmca';
include 'includes/cdn.php';
include 'includes/plugs.php';
?>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!–– An Amish Dotcom Software ––>
  <head>
<title><?php echo $dmca_page_title ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#f22056">
<?php include 'includes/external_files_cdn.php'; ?>
<meta name="description" content="<?php echo $description_dmca ?>" />
<meta name="keywords" content="<?php echo $keywords_dmca ?>" />
<meta name="robots" content="<?php echo $robots_dmca ?>" />
<meta name="distribution" content="<?php echo $distribution_dmca ?>" />
<meta name="revisit-after" content="<?php echo $robots_revisit_after_dmca ?>" />
<meta name="copyright" content="<?php echo $copyright ?>" />
<meta name="reply_to" content="<?php echo $reply_to ?>" />
<meta property="pageType" content="<?php echo $pageType_dmca ?>" />
<meta name="web_content_type" content="<?php echo $web_content_type_dmca ?>" />
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
<meta property="og:title" content="<?php echo $dmca_page_title ?>" />
<meta property="og:description" content="<?php echo $description_dmca ?>" />
<meta property="og:type" content="website.<?php echo $pageType_dmca ?>" />
<meta property="og:image" content="<?php echo $images_directory ?>baebom_exclusive" />
<meta property="og:image:height" content="<?php echo $og_image_height ?>" />
<meta property="og:image:width" content="<?php echo $og_image_width ?>" />
<meta property="og:url" content="<?php echo $current_page_url ?>" />
<meta property="og:site_name" content="<?php echo $site_name ?>" />
<meta property="fb:app_id" content="<?php echo $fb_app_id ?>" />

<!-- Twitter -->
<meta property="twitter:title" content="<?php echo $dmca_page_title ?>" />
<meta property="twitter:description" content="<?php echo $description_dmca ?>" />
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

<p class="head">DMCA</p>
<div class="content">
<br>
<p class="py08">You can use this page to send a DMCA Notice to <?php echo $site_name ?></p>
<br><br>
<p class="py02">Your notification must:</p>
<p>• Be in writing (this includes both hardcopy or digital)</p>
<p>• Be signed (whether in writing of via electronic signature) by the copyright owner or agent</p>
<p>• Identify the original copyrighted work (or works if there ar multiple) you claim has been infringed</p>
<p>• Identify the material that is infringing your copyrighted work</p>
<p>• Include contact information so that we can reach you, if necessary</p>
<p>• Include a statement your complaint is in “good faith”</p>
<p>• Include a statement the information in the notification is accurate, and</p>
<p>• Include a statement that under penalty of perjury you are authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</p>
<br>
<p class="py12">&nbsp;&nbsp;&nbsp;&nbsp;(Tap here to see a SAMPLE <span class="py12"><a href="<?php $site_root ?>/exclusive/nullvoid/DMCA_example" target="_blank">DMCA TAKEDOWN NOTICE TEMPLATE)</a></span></p>
<br><br>
<p class="py02">and send it to</p>
<br>
<p class="py16"><a href="mailto:founder@cybertronics.org.in?subject=DMCA Notice">founder@cybertronics.org.in</a></p>
</div>

<style>
@media only screen and (max-width: 340px){
	.py08{font-size:30px}
	ul.py02{font-size:14px}
	.py16{font-size:13px}
}
@media only screen and (max-width: 290px){
	.py08{font-size:25px}
	ul.py02{font-size:13px}
	p,.py16{font-size:11px}
}
</style>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>