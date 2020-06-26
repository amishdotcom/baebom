<?php
/* Smarty version 3.1.32, created on 2019-07-16 15:12:05
  from '/var/www/baebom.com/public_html/templates/Default/lyrics_item/widget.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d2dcd25dd1ea5_72272082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3c5595d5322a24ea90b8f5c1ae1bb6250b348b' => 
    array (
      0 => '/var/www/baebom.com/public_html/templates/Default/lyrics_item/widget.html',
      1 => 1519310208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2dcd25dd1ea5_72272082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/baebom.com/public_html/vendor/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)) < 15) {
if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)) == 0) {?>
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
<?php }
}
}
}
