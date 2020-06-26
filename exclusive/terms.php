<?php
$page_type='terms';
include 'includes/cdn.php';
include 'includes/plugs.php';
?>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!–– An Amish Dotcom Software ––>
  <head>
<title><?php echo $terms_page_title ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#f22056">
<?php include 'includes/external_files_cdn.php'; ?>
<meta name="description" content="<?php echo $description_terms ?>" />
<meta name="keywords" content="<?php echo $keywords_terms ?>" />
<meta name="robots" content="<?php echo $robots_terms ?>" />
<meta name="distribution" content="<?php echo $distribution_terms ?>" />
<meta name="revisit-after" content="<?php echo $robots_revisit_after_terms ?>" />
<meta name="copyright" content="<?php echo $copyright ?>" />
<meta name="reply_to" content="<?php echo $reply_to ?>" />
<meta property="pageType" content="<?php echo $pageType_terms ?>" />
<meta name="web_content_type" content="<?php echo $web_content_type_terms ?>" />
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
<meta property="og:title" content="<?php echo $terms_page_title ?>" />
<meta property="og:description" content="<?php echo $description_terms ?>" />
<meta property="og:type" content="website.<?php echo $pageType_terms ?>" />
<meta property="og:image" content="<?php echo $images_directory ?>baebom_exclusive" />
<meta property="og:image:height" content="<?php echo $og_image_height ?>" />
<meta property="og:image:width" content="<?php echo $og_image_width ?>" />
<meta property="og:url" content="<?php echo $current_page_url ?>" />
<meta property="og:site_name" content="<?php echo $site_name ?>" />
<meta property="fb:app_id" content="<?php echo $fb_app_id ?>" />

<!-- Twitter -->
<meta property="twitter:title" content="<?php echo $terms_page_title ?>" />
<meta property="twitter:description" content="<?php echo $description_terms ?>" />
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

<p class="head">Terms of Service</p>
<div class="content">
<p>Last updated: July 21, 2019</p>
<p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the <?php echo $custom_site_root ?> website (the "Service") operated by <?php echo $site_name ?> ("us", "we", or "our").</p>
<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
<h2>Links To Other Web Sites</h2>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by <?php echo $site_name ?>.</p>
<p><?php echo $site_name ?> has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that <?php echo $site_name ?> shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
<h2>Governing Law</h2>
<p>These Terms shall be governed and construed in accordance with the laws of Uttar Pradesh, India, without regard to its conflict of law provisions.</p>
<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
<h2>Changes</h2>
<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
<h2>Contact Us</h2>
<p>If you have any questions about these Terms, please <a href="mailto:<?php echo $reply_to ?>">Contact Us</a></p>
</div>
</br>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>