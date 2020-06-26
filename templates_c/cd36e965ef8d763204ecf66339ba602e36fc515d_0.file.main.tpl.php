<?php
/* Smarty version 3.1.32, created on 2019-07-16 15:12:04
  from '/var/www/baebom.com/public_html/templates/Default/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d2dcd24ad6a51_05252758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd36e965ef8d763204ecf66339ba602e36fc515d' => 
    array (
      0 => '/var/www/baebom.com/public_html/templates/Default/main.tpl',
      1 => 1519397490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lyrics_item/gird.html' => 1,
    'file:lyrics_item/list.html' => 2,
  ),
),false)) {
function content_5d2dcd24ad6a51_05252758 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hot-lyrics">
	<h1 class="title-section has-link"> <a title="Hot Lyrics">What's hot</a> </h1>
	<p class="section-description">See what's is trending</p>
	<div class="row">
		<?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['top']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
?>
			<?php $_smarty_tpl->_subTemplateRender('file:lyrics_item/gird.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php
}
}
?>
	</div>
</div>
<div class="clearfix"></div>
<div class="section">
	<div class="row">
		<div class="col-6">
			<h2 class="title-section"><a title="Dance lyrics">Dance song lyrics</a></h2>
			<div class="list-item lyrics-hover effect">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dance']->value, 'i', false, NULL, 'foo', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
?>
						<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)) < 15) {?>
							<?php $_smarty_tpl->_subTemplateRender('file:lyrics_item/list.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		</div>
		<div class="col-6">
			<h2 class="title-section"><a title="Pop Lyrics">Pop song lyrics</a></h2>
			<div class="list-item lyrics-hover effect">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pop']->value, 'i', false, NULL, 'foo', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
?>
						<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)) < 15) {?>
							<?php $_smarty_tpl->_subTemplateRender('file:lyrics_item/list.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
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


<?php }
}
