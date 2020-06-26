<?php
/* Smarty version 3.1.32, created on 2019-07-19 09:42:57
  from '/var/www/baebom.com/public_html/templates/Default/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d317481879d80_49042169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddb184ec8635f34528dc3e93dd25f77fb542e1ed' => 
    array (
      0 => '/var/www/baebom.com/public_html/templates/Default/view.tpl',
      1 => 1563522176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d317481879d80_49042169 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lyrics-header-info group">
	<div class="info-content otr">
		<div>
			<h1 class="txt-primary"><?php echo $_smarty_tpl->tpl_vars['lyrics']->value['title'];?>
 </h1> <span class="zadash">-</span>
			<div class="inline">
				<h2 class="txt-primary"><a href="<?php echo $_smarty_tpl->tpl_vars['lyrics']->value['search_by_artist'];?>
" title="Find lyrics of <?php echo $_smarty_tpl->tpl_vars['lyrics']->value['artist'];?>
"><?php echo $_smarty_tpl->tpl_vars['lyrics']->value['artist'];?>
</a></h2>
			</div>
		</div>
	</div>
</div>
<div class="section section mt20">
	<div class="media-func group fn-tabgroup">
		<a id="tabService" href="javascript:;" class="button-style-1 pull-left fn-tab hide_on_mobile"><i class="fa fa-download"></i> Download</a>
		<a id="tabShare" href="javascript:;" class="button-style-1 pull-left fn-tab"><i class="fa fa-share"></i> Share</a>
		<a href="https://www.amazon.com/s/ref=<?php echo $_smarty_tpl->tpl_vars['config']->value['amazon_aff'];?>
&url=search-alias%3Daps&field-keywords=<?php echo urldecode($_smarty_tpl->tpl_vars['lyrics']->value['title']);?>
+<?php echo urldecode($_smarty_tpl->tpl_vars['lyrics']->value['artist']);?>
&tag=azmo-20" class="button-style-1 pull-left" target="_blank"><i class="fa fa-amazon"></i> Buy MP3</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
itunes.php?term=<?php echo urldecode($_smarty_tpl->tpl_vars['lyrics']->value['title']);?>
+<?php echo urldecode($_smarty_tpl->tpl_vars['lyrics']->value['artist']);?>
" class="button-style-1 pull-left" target="_blank"><i class="fa fa-apple"></i> iTunes</a>

	</div>
	<div class="tab-pane line-bottom none fn-tab-panel fn-tab-panel-service po-r">
		<div class="service-container fn-sub-panel">
			<div class="row mb0">
				<div class="col-4">
					<ul class="dl-service fn-list">
						<li><a class="button btn-dark-blue small-button fn-320 fn-viprequire" href="<?php echo $_smarty_tpl->tpl_vars['lyrics']->value['txt'];?>
"><i class="fa fa-file-text"></i> Text</a><b>Text file is a kind of computer file that is structured as a sequence of lines of electronic text.</b></li>
						<li><a class="button btn-dark-blue small-button fn-320 fn-viprequire" href="<?php echo $_smarty_tpl->tpl_vars['lyrics']->value['word'];?>
"><i class="fa fa-file-word-o"></i> Word</a><b>Use for Microsoft Office Word or Open Office</b></li>
						<li><a class="button btn-dark-blue small-button fn-lossless fn-viprequire" href="<?php echo $_smarty_tpl->tpl_vars['lyrics']->value['pdf'];?>
"><i class="fa fa-file-pdf-o"></i> PDF</a><b>Use for Abobe Acrobat</b></li>
					</ul>
				</div>
			</div>
		</div>
		<span class="close fn-closetab"></span>
	</div>
	<div class="tab-pane line-bottom none fn-tab-panel fn-tab-panel-share po-r">
		<div class="fn-sub-panel fn-sub-embed embed-container" id="embedBox">
			<div class="share-icons">
				<a href="https://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" target="_blank"><i class="fa fa-facebook-square" style="color:#29487d"></i></a>
				<a href="http://twitter.com/share?url=<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&hashtags=baebomlyrics" target="_blank"><i class="fa fa-twitter-square" style="color:#1da1f2"></i></a>
			</div>
			<div class="context outside-textarea">
				<label class="ltitle">Embed code</label>
				<textarea id="embed" name="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['lyrics']->value['content'];?>
</textarea>
			</div>
			<div class="clearfix"></div>
		</div>
		<span class="close fn-closetab"></span>
	</div>
    <div id="videoplayer" class="none"></div>
	<div class="tab-pane fn-tab-videos none" style="margin-bottom: 20px">
        <div class="swiper-arrow-left"><i class="fa fa-chevron-left"></i></div>
        <div class="swiper-arrow-right"><i class="fa fa-chevron-right"></i></div>
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
        </div>

	</div>
	<div class="tab-pane fn-tab-panel-lyrics">
		<div id="_lyricContainer" class="content-block lyric-content">
			<div class="_lyricItem ">
				<h3><strong><?php echo $_smarty_tpl->tpl_vars['lyrics']->value['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lyrics']->value['artist'];?>
 Lyrics</strong></h3>
				<p id="lyrics" expand="rows4" class="_lyricContent">
					<br />
					<?php if (!$_smarty_tpl->tpl_vars['lyrics']->value['content']) {?>
						Missing lyrics <?php echo $_smarty_tpl->tpl_vars['lyrics']->value['title'];?>
!!!<br /> Know lyrics <?php echo $_smarty_tpl->tpl_vars['lyrics']->value['title'];?>
 by <?php echo $_smarty_tpl->tpl_vars['lyrics']->value['artist'];?>
? Don't keep it to yourself! <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
add?hash=<?php echo $_smarty_tpl->tpl_vars['lyrics']->value['hash'];?>
">Submit Now</a>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['lyrics']->value['content'];?>

					<?php }?>
				</p>
			</div>
			<div class="iLyric"> <span> <?php echo $_smarty_tpl->tpl_vars['lyrics']->value['title'];?>
 lyrics !!!</span> </div>
		</div>
	</div>
	<div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" data-numposts="5" data-width="100%"></div>
	<div class="tab-pane line-bottom none" id="newLyrics">
		<div class="tab-menu group">
			<ul>
				<li><a class="fn-tab" data-group=".fn-sub-panel-share" data-panel=".fn-sub-lyrics" href="#">Lyrics</a></li>
			</ul>
		</div>
		<div class="frm-lyrics group fn-sub-panel fn-sub-lyrics">
			<form name="frmLyrics" id="frmLyrics" action="/xhr/mydata/new-lyrics" method="post">
				<textarea name="content" cols="30" rows="10"></textarea>
				<input type="hidden" name="song_id" id="song_id" value="ZW7ODZ69" />
				<button class="button btn-dark-blue pull-right">Submit</button></form>
			<span class="close fn-close" data-box="#newLyrics"></span>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        youtube('<?php echo urlencode($_smarty_tpl->tpl_vars['lyrics']->value['title']);?>
+<?php echo urlencode($_smarty_tpl->tpl_vars['lyrics']->value['artist']);?>
');
    });
<?php echo '</script'; ?>
><?php }
}
