<?php
/* Smarty version 3.1.32, created on 2019-07-16 15:16:47
  from '/var/www/baebom.com/public_html/templates/Default/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d2dce3fb97068_56061530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87b9cb016b3d81f23a57d564551526fdc53a029f' => 
    array (
      0 => '/var/www/baebom.com/public_html/templates/Default/search.tpl',
      1 => 1519384682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2dce3fb97068_56061530 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-menu group">
	<div class="sta-result group">
		<div class="pull-left">
			<h1><?php echo stripslashes($_smarty_tpl->tpl_vars['keyword']->value);?>
</h1> > Search results
		</div>
	</div>
	<div class="section medium-margin-top">
		<?php
$__section_lyric_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lyrics_search']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_lyric_0_total = $__section_lyric_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_lyric'] = new Smarty_Variable(array());
if ($__section_lyric_0_total !== 0) {
for ($__section_lyric_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] = 0; $__section_lyric_0_iteration <= $__section_lyric_0_total; $__section_lyric_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']++){
?>
		<div class="item-song">
			<?php if ($_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['cover']) {?>
				<a title="<?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['artist'];?>
 lyrics" href="<?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['view_url'];?>
" class="thumb pull-left fn-link">
					<img width="60" alt="<?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['artist'];?>
 lyrics" src="<?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['cover'];?>
" class="fn-thumb">
				</a>
			<?php }?>
			<div class="title-song">
				<h3><a href="<?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['view_url'];?>
" class="txt-primary fn-highlight" title="<?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['artist'];?>
 lyrics"><?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lyrics_search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lyric']->value['index'] : null)]['artist'];?>
 lyrics</a></h3>
			</div>
		</div>
		<?php
}
}
?>
	</div>
</div>

<?php }
}
