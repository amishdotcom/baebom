<?php
/* Smarty version 3.1.32, created on 2019-07-19 08:56:28
  from '/var/www/baebom.com/public_html/templates/Default/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d31699cc711f5_78087494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83be7f96aef7521a26c3a77a50d40e5cecb2a4b5' => 
    array (
      0 => '/var/www/baebom.com/public_html/templates/Default/add.tpl',
      1 => 1563519374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d31699cc711f5_78087494 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['success']->value) {?>
	<div class="lyrics-header-info group">
		<div class="info-content otr">
			<div>
				<h1 class="txt-primary">Thank you, We will review the lyrics and make it public with your name as soon as possible.</h1>
			</div>
		</div>
	</div>
	<div class="section section mt20">
		<div class="tab-pane" id="newLyrics">
			<div class="group fn-sub-panel align-center" style="padding: 20px;background: #FFFAE6;">
				Please allow up to a week for submissions to be processed. <br />
				The most requested and currently popular lyrics will be processed first. <br />
				Our Team reserves the right to reject submissions. <br />
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="lyrics-header-info group">
		<div class="info-content otr">
			<div>
				<h1 class="txt-primary">Filling out this form will send lyrics directly to our Team.</h1>
			</div>
		</div>
	</div>
	<div class="section section mt20">
		<div class="tab-pane" id="newLyrics">
			<div class="frm-lyrics group fn-sub-panel fn-sub-lyrics">
				<form name="frmLyrics" action="" method="post">
					<input type="text" name="name" placeholder="Your name" required>
					<input type="text" name="email" placeholder="Your e-mail address" required>
					<input type="text" name="artist" placeholder="Artist/Band" required value="<?php if (isset($_smarty_tpl->tpl_vars['lyrics']->value['artist'])) {
echo $_smarty_tpl->tpl_vars['lyrics']->value['artist'];
}?>">
					<input type="text" name="title" placeholder="Song title" required value="<?php if (isset($_smarty_tpl->tpl_vars['lyrics']->value['title'])) {
echo $_smarty_tpl->tpl_vars['lyrics']->value['title'];
}?>">
					<textarea name="lyrics" cols="30" rows="10" placeholder="Lyrics" required></textarea>
					<input type="hidden" name="hash" value="<?php if (isset($_smarty_tpl->tpl_vars['lyrics']->value['hash'])) {
echo $_smarty_tpl->tpl_vars['lyrics']->value['hash'];
}?>">
					<button class="button btn-dark-blue pull-right">Submit</button>
				</form>
			</div>
		</div>
	</div>
<?php }
}
}
