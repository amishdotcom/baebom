<?php
/* Smarty version 3.1.32, created on 2018-05-27 12:18:45
  from '/Users/lechchut/Dropbox/On Business/NiNaCoder Lyrics Script/upload/templates/Default/lyrics_item/list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0a3fb505d6c3_88661858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f6804a9959383a843d2b1d62d1904467fdeb938' => 
    array (
      0 => '/Users/lechchut/Dropbox/On Business/NiNaCoder Lyrics Script/upload/templates/Default/lyrics_item/list.html',
      1 => 1518065824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0a3fb505d6c3_88661858 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="fn-song">
	<a class="thumb pull-left _trackLink" href="<?php echo $_smarty_tpl->tpl_vars['i']->value['view_url'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
">
		<img width="50" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['title']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['i']->value['cover'];?>
" />
	</a>
	<h3 class="txt-primary ellipsis">
		<a class=" list-item-width _trackLink" href="<?php echo $_smarty_tpl->tpl_vars['i']->value['view_url'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['title']);?>
</a>
	</h3>
	<span class="inblock">
		<h4 class="ellipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['search_by_artist'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['i']->value['artist']);?>
</a></h4>
	</span>
</li><?php }
}