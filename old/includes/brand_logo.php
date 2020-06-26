<?php include '../switches/cdn.php'; ?>
 <a class="navbar-brand" href="<?php echo $site_root ?>">
 <?php
 if($page_type=='lyrics'){
if($sub_page_type == 'hinglish' OR $sub_page_type == 'hindi' OR $sub_page_type == 'english' OR $sub_page_type == 'telugu' OR $sub_page_type == 'tamil' OR $sub_page_type == 'malayalam' OR $sub_page_type == 'punjabi'){
echo"  <img src=\"$site_root/system/images/baebom_logo$reset_module\" width=\"30\" height=\"40\" alt=\"baebom_logo\" title=\"baebom - The Music Database\">";
}
if($sub_page_type == 'other' OR $sub_page_type == 'na'){
//DNS Prefetch Identifier
echo"  <img src=\"$site_root/system/images/baebom_logo$reset_module\" width=\"30\" height=\"40\" alt=\"baebom_logo\" title=\"baebom - The Music Database\">";
}
}
else{
//DNS Prefetch Identifier
echo"  <img src=\"$site_root/system/images/baebom_logo$reset_module\" width=\"30\" height=\"40\" alt=\"baebom_logo\" title=\"baebom - The Music Database\">";
}
?>
 </a>