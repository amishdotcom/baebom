<?php
include 'switches/cdn.php';
include 'system/reset_module/reset_module.php';
$page_type='policy';
include 'includes/central_header.php';
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $site_root ?>/system/css/central<?php echo $reset_module ?>">
  <link rel="stylesheet" href="<?php echo $site_root ?>/system/css/exclusive/exclusive<?php echo $reset_module ?>">

  </head>

  <body>

<?php include 'includes/central_navig_bar.php' ?>

<h1 class="baebom_exclusive_logo"></h1>
<hr class="line1" />

<p class="head">Data Policy</p>
<div class="content">
<p>This policy describes the information we process on baebom :</p>
<br>
<p class="py01">Data Collection</p>
<p><ul class="py02"><li>Album Information</li></ul></p>
<p>We collect the entire information about the music albums such as the album name, its genre, country, album type, release date, label, duration, language, composer, lyricist, actors, track list, lyrics all known tracks information etc. from various sources such as Open Internet, Music Websites, Music encyclopedias, Music Sharing Websites, Local Sources, Local Music Disks, etc.</p>
<p><ul class="py02"><li>External Links</li></ul></p>
<p>All the Outbound links from baebom such as informative links (IMDb, Wikipedia) and Album Streaming Links (Streaming Platforms, iTunes, Video Links) etc are collected from the Open Internet and the respective webpages from their respective websites manually and no bot was deployed to do so, also no automated system was involved in the process. All the links shared on the websites lies in the publically shareable domain and doesn't violates any of the policy of respective service providers and if it does then you may <a href="<?php echo "$site_root/contact" ?>">Contact Us</a>.</p>
<p><ul class="py02"><li>Registration Information</li></ul></p>
<p>All the Registraion Information regarding music is fetched from the sources below :</p>
<p>1. ISWC (International Standard Musical Work Code) of an Individual Track is fetched from ISWC Public Database at <a href="http://iswcnet.cisac.org/">http://iswcnet.cisac.org/</a></p>
<p>2. ISRC (International Standard Recording Code) of an Individual Track is fetched from ISRC Public Database at <a href="https://isrcsearch.ifpi.org">https://isrcsearch.ifpi.org</a></p>
<p>3. UPC (Universal Product Code) of an Individual Track is fetched from ISRC Public Database at <a href="https://isrcsearch.ifpi.org">https://isrcsearch.ifpi.org</a></p>
<p><ul class="py02"><li>Information Collected Automatically</li></ul></p>
<p>Several type of basic browsing Information is automatically detected when you visit baebom such as your IP ADDRESS and your LOCATION etc. which is mostly saved to the server logs and is only recorded for security purposes.</p>
</div>

<style>
@media only screen and (max-width: 340px){
	.py01{font-size:30px}
	ul.py02{font-size:14px}
}
@media only screen and (max-width: 290px){
	.py01{font-size:25px}
	ul.py02{font-size:13px}
	p{font-size:11px}
}
</style>

<?php
include 'includes/central_footer.php'
?>

  </body>
</html>