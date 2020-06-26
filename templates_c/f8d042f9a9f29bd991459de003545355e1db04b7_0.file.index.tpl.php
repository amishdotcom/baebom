<?php
/* Smarty version 3.1.32, created on 2018-08-11 14:53:19
  from '/Users/lechchut/Dropbox/On Business/NiNaCoder Lyrics Script/upload/templates/Default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6e95ef0fbfa3_02009215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8d042f9a9f29bd991459de003545355e1db04b7' => 
    array (
      0 => '/Users/lechchut/Dropbox/On Business/NiNaCoder Lyrics Script/upload/templates/Default/index.tpl',
      1 => 1533973994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lyrics_item/widget.html' => 1,
  ),
),false)) {
function content_5b6e95ef0fbfa3_02009215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/lechchut/Dropbox/OnBusiness/NiNaCoderLyricsScript/upload/vendor/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
	<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:url" content="SET_YOUR" />
	<meta name="twitter:site" content="@SET_YOUR" />
	<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
" />
	<meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['social_image']->value;?>
" />

	<!-- facebook -->
	<meta property="fb:app_id" content="SET_YOUR" />
	<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
" />
	<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['social_image']->value;?>
" />
	<meta property="og:image:width" content="200" />
	<meta property="og:image:height" content="200" />

	<link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
templates/Default/images/favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
templates/Default/css/style.css" media="all" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
templates/Default/css/icons.css" media="all" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
templates/Default/css/swiper.min.css" media="all" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
libs/js/swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['javascript_config']->value;?>

</head>
<body>
	<div id="fb-root"></div>
	<header>
		<div class="container group">
			<div class="logo">
				<a href="/" title="{$config.site_url}" class="hide-text"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
templates/Default/images/logo.png" alt="{$config.site_url}" height="40px"/></a>
			</div>
			<div class="section-search" id="sug">
				<form class="search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
search.html" id="_lyricsSearch" action="" onsubmit="check_search();return false;">
					<input type="text" autocomplete="off" class="input-txt" placeholder="Enter lyrics title or artist name" name="q" id="search_keyword" >
					<span class="input-btn">
						<button class="zicon btn hide-text" type="submit">Search</button>
					</span>
				</form>
			</div>
			<div class="share-icons hide_on_mobile">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['facebook_fan_page'];?>
" target="_blank"><i class="fa fa-facebook-square"></i></a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['twitter_page'];?>
" target="_blank"><i class="fa fa-twitter-square"></i></a>
			</div>
		</div>
	</header>
	<div class="wrapper-page">
		<div class="wrap-body container col-12 no-padding">
			<div class="wrap-content col-9">
				<?php echo urldecode($_smarty_tpl->tpl_vars['config']->value['ad_responsive']);?>

				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				<?php echo urldecode($_smarty_tpl->tpl_vars['config']->value['ad_responsive']);?>

			</div>
			<div class="wrap-sidebar col-3">
				<?php echo urldecode($_smarty_tpl->tpl_vars['config']->value['ad_responsive']);?>

				<?php if ($_smarty_tpl->tpl_vars['PATH']->value == 'view') {?>
				<div class="widget widget-countdown">
					<h3 class="title-section sz-title-sm"><?php echo $_smarty_tpl->tpl_vars['lyrics']->value['artist'];?>
 Lyrics</h3>
					<div class="widget-content no-padding no-border" id="songRec">
						<ul class="fn-list">
							<?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['related']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
?>
							<li class="fn-item">
								<a href="<?php echo $_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['view_url'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
 lyrics" class="thumb fn-link"> <img class="fn-thumb" width="50" src="<?php echo $_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['cover'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
 lyrics" /> </a>
								<h3 class="song-name ellipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['view_url'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
 lyrics" class="txt-primary fn-link fn-name"><?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
</a></h3>
								<div class="inblock ellipsis fn-artist_list">
									<h4 class="singer-name txt-info fn-artist"><a href="<?php echo $_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['search_by_artist'];?>
" title="Find <?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
 lyrics"><?php echo stripslashes($_smarty_tpl->tpl_vars['related']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
</a></h4>
								</div>
							</li>
							<?php
}
}
?>
						</ul>
					</div>
				</div>
				<?php }?>
				<div class="widget widget-tab hide_on_mobile">
					<h3 class="title-section sz-title-sm"> <a title="R&B/Soul song lyric" class="fn-detail_link _chart_song">R&B/Soul song lyric</i></a></h3>
					<div class="tab-pane widget-song-countdown">
						<div class="widget-content no-padding no-border _chart_song">
							<ul class="fn-list">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soul']->value, 'i', false, NULL, 'foo', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
?>
									<?php $_smarty_tpl->_subTemplateRender('file:lyrics_item/widget.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				</div>
				<div class="widget widget-tab hide_on_mobile">
					<h3 class="title-section sz-title-sm"> <a title="Country song lyrics" class="fn-detail_link _chart_song">Country song lyrics</i></a></h3>
					<div class="tab-pane widget-song-countdown">
						<div class="widget-content no-padding no-border _chart_song">
							<ul class="fn-list">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ct']->value, 'i', false, NULL, 'foo', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
?>
								<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)) < 15) {?>
								<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)) == 0) {?>
								<li class="fn-first first-item fn-song">
									<a class="zthumb fn-link" href="<?php echo $_smarty_tpl->tpl_vars['i']->value['view_url'];?>
">
										<img alt="" class="fn-thumb"  src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
templates/Default/images/space.gif" style="background-color: transparent; background-image: url(&quot;<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['i']->value['cover'],'60x60','300x300');?>
&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: center center; -moz-background-size: auto auto; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; background-size: cover;">
									</a>
									<div class="des"> <span class="rank rank-1 fn-order">1</span>
										<h3 class="song-name ellipsis"><a class="txt-primary fn-link fn-name" href="<?php echo $_smarty_tpl->tpl_vars['i']->value['view_url'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['title']);?>
</a></h3>
										<div class="inblock singer-name ellipsis fn-artist_list">
											<h4 class="txt-info fn-artist"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['search_by_artist'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
 lyrics"><?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
</a></h4></div>
									</div> <span class="item-mask"></span>
								</li>
								<?php } else { ?>
								<li class="fn-item fn-song"> <span class="rank rank-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)+1;?>
 fn-order"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)+1;?>
</span>
									<h3 class="song-name ellipsis"><a title="<?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['title']);?>
 by <?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
 lyrics" class="txt-primary fn-link fn-name" href="<?php echo $_smarty_tpl->tpl_vars['i']->value['view_url'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['title']);?>
</a></h3>
									<div class="inblock singer-name ellipsis fn-artist_list">
										<h4 class="txt-info fn-artist"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['search_by_artist'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
 lyrics"><?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
</a></h4>
									</div>
								</li>
								<?php }?>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<footer class="col-12">
		<div class="container">
			<div class="row" style="margin-top: 0">
				<div class="copyright" itemscope itemtype="http://schema.org/Organization">
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
add">Submit Lyrics</a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>exclusive/about">About</a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>exclusive/policy">Privacy Policy</a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>exclusive/terms">Terms</a> <a href="mailto:founder@cybertronics.org.in">Contact</a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>exclusive/dmca">DMCA</a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>exclusive/developer">Developer</a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>exclusive/donate">Donate</a> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>exclusive/disclaimer">Disclaimer</a></p>
					<p style="font-size: 12px;">All lyrics are property and copyright of their owners. All lyrics provided for non commercial and personal use only.</p>
					<p>&copy; 2019 - 2020 <a href="https://www.cybertronics.org.in/" target="_blank"><span itemprop="name">Cybertronics/span></a></p>
				</div>
			</div>
		</div>
	</footer>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
libs/js/common.js"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['config']->value['analytics_code'];?>

	<?php echo '<script'; ?>
>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=259712504407178";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
</body>
</html><?php }
}
