<?php
include 'switches/cdn.php';
include 'system/reset_module/reset_module.php';
$page_type='masthead';
include 'includes/central_header.php';
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
  <link rel="stylesheet" href="<?php echo $site_root ?>/system/css/exclusive/exclusive<?php echo $reset_module ?>">

  </head>

  <body>

<?php include 'includes/central_navig_bar.php' ?>

<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head">Masthead</p>
<div class="content">
<p>This Website is Exclusively Thought / Founded / Designed / Processed / Developed / Hosted by : <a href="https://www.facebook.com/amishdotcom/" target="_blank">Amish Dotcom</a></p>
</div>
<br><br><br><br><br><br><br><br>

<style>
@media only screen and (max-width: 525px){
	p,.py11{font-size:12px}
}
@media only screen and (max-width: 290px){
	p,.py11{font-size:11px}
}
</style>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>