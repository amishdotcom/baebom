<?php
include 'switches/cdn.php';
include 'system/reset_module/reset_module.php';
$page_type='developer';
include 'includes/central_header.php';
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
  <link rel="stylesheet" href="<?php echo $site_root ?>/system/css/exclusive/exclusive<?php echo $reset_module ?>">

  </head>

  <body>

<?php include 'includes/central_navig_bar.php' ?>

<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head">About Developer</p>
<div class="content">
<p>The <a href="<?php echo $site_root ?>">baebom</a> is a musical project developed by <a href="https://www.facebook.com/amishdotcom" target="_blank"><b>Amish Dotcom</b></a></p>
<br>
<p class="amish_dotcom_image" alt="Amish Dotcom" title="Amish Dotcom"></p>
<br><br>
<p>I <a href="https://www.facebook.com/amishdotcom" target="_blank">Amish Dotcom</a> is the founder of Internet Web Group <a href="http://cybertronics.org.in" target="_blank">Cybertronics</a>. My Vision is to make the Information organized on the Internet for a better Tomorrow. I dream and make Internet web projects so that I can feel the breath inside me. I made <a href="<?php echo $site_root ?>">baebom</a> with a vision so that I can Organize the music over the Web more Accurately and Orderly. Someday however I think that I will succeed. If you want to support me then please write to <a href="mailto:founder@cybertronics.org.in?subject=I want to help in your Project" target="_blank">founder@cybertronics.org.in</a></p>
</div>

<?php
include 'includes/central_footer.php'
?>
	
  </body>
</html>