<?php
include 'switches/cdn.php';
include 'system/reset_module/reset_module.php';
$page_type='dbversion';
include 'includes/central_header.php';
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
  <link rel="stylesheet" href="<?php echo $site_root ?>/system/css/exclusive/exclusive<?php echo $reset_module ?>">

  </head>

  <body>
<style>.head{color:#d20505;margin-left:0%;font-size:25px}</style>
<?php include 'includes/central_navig_bar.php' ?>

<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head"><script>
if ( $(window).width() > 560) {
  document.write('&emsp;&emsp;&emsp;&emsp;');
}
else{
	document.write('&nbsp;&nbsp;');
}
</script>Database Version (Changelog)</p>
<br>
<div class="content">
<p style="color:#00668C"><b>0.1</b><p>
<p>(Released: 05-May-2019)</p>
<ul><li><p>Bollywood Songs (2015)</p></li></ul>
</div>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>