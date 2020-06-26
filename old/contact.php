<?php
include 'switches/cdn.php';
include 'system/reset_module/reset_module.php';
$page_type='contact';
include 'includes/central_header.php';
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
  <link rel="stylesheet" href="<?php echo $site_root ?>/system/css/exclusive/exclusive<?php echo $reset_module ?>">

  </head>

  <body>

<?php include 'includes/central_navig_bar.php' ?>

<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head">Contact Us</p>
<div class="content">
<br>
<p class="py08">Contact me (The Founder) anytime on the following Email/Mobile and share or report whatever you want.</p>
<p class="py09">(All the Queries, Reports, Business Queries, DMCA Notices, Personal Messages, Get in Touch are Welcomed)</p>
<br><br>
<p class="py10">AMISH DOTCOM</p>
<p class="py11">Mobile: <a href="tel:+917055627401">(+91) 705 5627 401</a></p>
<p class="py11">Email: <a href="mailto:founder@cybertronics.org.in">founder@cybertronics.org.in</a></p>
</div>

<style>
@media only screen and (max-width: 340px){
	.py08{font-size:28px}
	ul.py09{font-size:14px}
	.py10{font-size:18px}
	.py11{font-size:13px}
}
@media only screen and (max-width: 290px){
	.py08{font-size:20px}
	ul.py09{font-size:13px}
	p,.py11{font-size:11px}
}
</style>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>