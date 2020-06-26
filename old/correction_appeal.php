<?php
include 'switches/cdn.php';
include 'system/reset_module/reset_module.php';
$page_type='cora';
include 'includes/central_header.php';
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
  <link rel="stylesheet" href="<?php echo $site_root ?>/system/css/exclusive/exclusive<?php echo $reset_module ?>">

  </head>

  <body>

<?php include 'includes/central_navig_bar.php' ?>


<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head">Correction Appeal</p>
<div class="content">
<br>
<p class="py02">Use the format below to throw a Correction Appeal to baebom</p>
<br>
<p>Contact : <span class="py14">{INCLUDE YOUR CONTACT INFORMATION (Your Name is must)}</span></p>
<p>Work : <span class="py14">{WHAT YOU DO/WHO YOU ARE/QUALIFICATION/WHAT YOU DO ONLINE}</span></p>
<p>Page : <span class="py14">{URLs WHERE THE ERROR EXISTS}</span></p>
<p>Typo : <span class="py14">{SPECIFY THE ERROR PRESENT}</span></p>
<p>Error Details : <span class="py14">{DETAILS ABOUT THE ERROR IN THE DATA}</span></p>
<p>Correction : <span class="py14">{DATA TO BE PLACED IN PLACE OF TYPO}</span></p>
<p>Reference : <span class="py14">{PLEASE PROVIDE A REFERENCE SO AS TO LET US VERIFY THE CORRECTION/YOU CAN ALSO UPLOAD AN IMAGE OF THE PROOF/OR ANY URL LEADING TO BE THE PROOF}</span></p>
<br><br>
<p class="py02">and send it to</p>
<br>
<p class="py16"><a href="mailto:founder@cybertronics.org.in?subject=Correction Appeal&body=Contact :%0dWork :%0dPage :%0dTypo :%0dError Details :%0dCorrection :%0dReference :">founder@cybertronics.org.in</a></p>
</div>

<style>
@media only screen and (max-width: 340px){
	.py02{font-size:13px}
	.py14{font-size:14px}
	.py16{font-size:13px}
	.p{font-size:12px}
}
@media only screen and (max-width: 290px){
	.py02{font-size:12px}
	.py14{font-size:12px}
	.py14{font-size:12px}
	.p{font-size:11px}
}
</style>

<?php
include 'includes/central_footer.php'
?>
	
  </body>
</html>