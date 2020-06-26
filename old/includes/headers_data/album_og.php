
<!-- Facebook -->
<meta property="og:title" content="<?php if(isset($album_name)){echo $album_name;} ?><?php if(isset($composer_main)){echo " by $composer_main";} ?><?php echo " on $site_name"; ?>" />
<meta property="og:description" content="<?php if(isset($album_name)){echo "Album $album_name";} ?><?php if(isset($composer_main)){echo " by $composer_main";} ?><?php echo " on $site_name"; ?>" />
<meta property="og:type" content="music.album" />
<meta property="og:image" content="<?php if(isset($im)){echo "$cdn/$images/$im$reset_module";} ?>" />
<?php
if(isset($im)){
$path = "$cdn/$images/$im$ext";
include '../../includes/getimagesize.php';}
?>
<meta property="og:image:height" content="<?php if(isset($height)){echo $height;} ?>" />
<meta property="og:image:width" content="<?php if(isset($width)){echo $width;} ?>" />
<meta property="og:url" content="<?php echo $current_page_url ?>" />
<meta property="og:site_name" content="<?php echo $site_name ?>" />
<meta property="music:release_date" content="<?php if(isset($meta_release_date)){echo $meta_release_date;} ?>" />
<meta property="fb:app_id" content="<?php echo $fb_app_id ?>" />

<!-- Twitter -->
<meta property="twitter:title" content="<?php if(isset($album_name)){echo $album_name;} ?><?php if(isset($composer_main)){echo " by $composer_main";} ?><?php echo " on $site_name"; ?>" />
<meta property="twitter:description" content="<?php if(isset($album_name)){echo "Album $album_name";} ?><?php if(isset($composer_main)){echo " by $composer_main";} ?><?php echo " on $site_name"; ?>" />
<meta property="twitter:url" content="<?php echo $current_page_url ?>" />
<meta property="twitter:site" content="<?php echo $tweet_handle ?>" />
<meta property="twitter:card" content="summary" />
<meta property="twitter:image" content="<?php if(isset($im)){echo "$cdn/$images/$im$reset_module";} ?>" />
