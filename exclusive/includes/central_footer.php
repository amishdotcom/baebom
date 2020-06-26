
<!--footer starts from here-->
<br><br>
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">baebom</h5>
<!--headin5_amrc-->
<p class="mb10">baebom is an upbuilding Internet Music Database which is expected to have the collection of all Music Albums and their respective Lyrics from round the globe. The Project is started by <a style="color:white" href="<?php echo $dotcom_fb_link ?>" target="_blank">Amish Dotcom</a> with a mission to provide Internet users round the globe with most Authentic Information related to music.</p>
<p><i class="fa fa-location-arrow"></i> Plot No.2, Knowledge Park III, Greater Noida, Uttar Pradesh 201306, India </p>
<p><i class="fa fa-phone"></i>  +91-7055627401  </p>
<p><i class="fa fa fa-envelope"></i> <?php echo $reply_to ?>  </p>
</div>


</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<?php if ($page_type == 'root_index'){echo "<li><a href=\"#\">Home</a></li>\n";} else {echo "<li><a href=\"$site_root\">Home</a></li>\n";} ?>
<?php if ($current_page_url == "$site_root/add"){echo "<li><a href=\"#\">Submit Lyrics</a></li>\n";} else {echo "<li><a href=\"$site_root/add\">Submit Lyrics</a></li>\n";} ?>
<?php if ($page_type == 'about'){echo "<li><a href=\"#\">About</a></li>\n";} else {echo "<li><a href=\"$site_root/exclusive/about\">About</a></li>\n";} ?>
<?php if ($page_type == 'policy'){echo "<li><a href=\"#\">Privacy Policy</a></li>\n";} else {echo "<li><a href=\"$site_root/exclusive/policy\">Privacy Policy</a></li>\n";} ?>
<?php if ($page_type == 'terms'){echo "<li><a href=\"#\">Terms</a></li>\n";} else {echo "<li><a href=\"$site_root/exclusive/terms\">Terms</a></li>\n";} ?>
<?php if ($page_type == 'contact'){echo "<li><a href=\"#\">Contact</a></li>\n";} else {echo "<li><a href=\"mailto:$reply_to\">Contact</a></li>\n";} ?>
<?php if ($page_type == 'dmca'){echo "<li><a href=\"#\">DMCA</a></li>\n";} else {echo "<li><a href=\"$site_root/exclusive/dmca\">DMCA</a></li>\n";} ?>
<?php if ($page_type == 'developer'){echo "<li><a href=\"#\">Developer</a></li>\n";} else {echo "<li><a href=\"$site_root/exclusive/developer\">Developer</a></li>\n";} ?>
<?php if ($page_type == 'donate'){echo "<li><a href=\"#\">Donate</a></li>\n";} else {echo "<li><a href=\"$site_root/exclusive/donate\">Donate</a></li>\n";} ?>
<?php if ($page_type == 'disclaimer'){echo "<li><a href=\"#\">Disclaimer</a></li>\n";} else {echo "<li><a href=\"$site_root/exclusive/disclaimer\">Disclaimer</a></li>\n";} ?>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @ 2019 <a href="<?php echo $copyright_owner_link ?>"><?php echo $copyright ?></a> | Designed & Developed by <a href="<?php echo $dotcom_fb_link ?>">Amish Dotcom</a></p>

<ul class="social_footer_ul">
<li><a href="<?php echo $fb_link ?>"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="<?php echo $twitter_link ?>"><i class="fab fa-twitter"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

<!-- JSON-LD for schema.org -->
<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "url" : "<?php echo $copyright_owner_link ?>",
  "founder" : "Amish Dotcom",
  "email": "founder@cybertronics.org.in",
  "contactPoint" : [
    { "@type" : "ContactPoint",
      "telephone" : "+91-7055627401",
      "contactType" : "customer service"
    } ] }
</script>

</footer>