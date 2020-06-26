<?php
/* Smarty version 3.1.32, created on 2019-07-16 17:40:53
  from '/var/www/baebom.com/public_html/templates/pdf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d2df0052589d0_95476332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03b4f14c8f2d907a7e3e49e67b394a191776d5e0' => 
    array (
      0 => '/var/www/baebom.com/public_html/templates/pdf.tpl',
      1 => 1518604740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2df0052589d0_95476332 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html
		PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<style>
		body {
			margin: 18pt 18pt 24pt 18pt;
		}

		h1,h2 {
			font-family: georgia,serif;
			font-weight: bold;
		}

		p {
			font-family: georgia,serif;
			text-align: center;
			font-size: 1em;
			margin: 0.5em;
			padding: 10px;
		}
	</style>
</head>
<body>
<h1>
	<center><?php echo $_smarty_tpl->tpl_vars['lyrics']->value['title'];?>
</center>
</h1>
<h2>
	<a href="<?php echo search_url($_smarty_tpl->tpl_vars['lyrics']->value['artist']);?>
" name="Find more lyrics by $artist"><center><?php echo $_smarty_tpl->tpl_vars['lyrics']->value['artist'];?>
</center></a>
</h2>
<p><?php echo nl2br($_smarty_tpl->tpl_vars['lyrics']->value['lyrics']);?>
</p>
<p>Lyrics provided by <a href="<?php echo $_smarty_tpl->tpl_vars['urlprovided']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['urlprovided']->value;?>
</center><p>
</body>
</html><?php }
}
