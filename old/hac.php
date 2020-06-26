<?php
include 'switches/cdn.php';
include 'system/reset_module/reset_module.php';
$page_type='hac';
include 'includes/central_header.php';
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
  <link rel="stylesheet" href="<?php echo $site_root ?>/system/css/exclusive/exclusive<?php echo $reset_module ?>">

  </head>

  <body>

<?php include 'includes/central_navig_bar.php' ?>

<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head">Help Adding Content</p>
<div class="content">
<p>As we develop baebom personally and it majorly requires entering data into databases. We have currently no fellow members to help us.</p>
<p>So if you have enough time to provide a voluntary service or you are either interested in helping us you can contact us on address below</p>
<br>
<p class="py16"><a href="mailto:founder@cybertronics.org.in?subject=I want to help adding content">founder@cybertronics.org.in</a></p>
</div>
<br><br><br><br>

<style>
@media only screen and (max-width: 340px){
	.py16{font-size:13px}
	.p{font-size:12px}
}
@media only screen and (max-width: 290px){
	.py16{font-size:12px}
	.p{font-size:11px}
}
</style>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>