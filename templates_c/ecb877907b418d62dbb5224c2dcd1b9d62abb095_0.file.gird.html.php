<?php
/* Smarty version 3.1.32, created on 2018-05-27 12:18:44
  from '/Users/lechchut/Dropbox/On Business/NiNaCoder Lyrics Script/upload/templates/Default/lyrics_item/gird.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0a3fb4ee1236_45093567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb877907b418d62dbb5224c2dcd1b9d62abb095' => 
    array (
      0 => '/Users/lechchut/Dropbox/On Business/NiNaCoder Lyrics Script/upload/templates/Default/lyrics_item/gird.html',
      1 => 1518074663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0a3fb4ee1236_45093567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/lechchut/Dropbox/OnBusiness/NiNaCoderLyricsScript/upload/vendor/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><div class="lyrics-item-gird des-inside otr col-3">
	<a href="<?php echo $_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['view_url'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
 lyrics" class="thumb _trackLink">
		<img width="200" src="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['cover'],'60x60','200x200');?>
" alt="Album <?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
" class="img-responsive" />
	</a>
	<div class="des">
		<h3 class="title-item txt-primary ellipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['view_url'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
 lyrics" class="_trackLink" tracking="_frombox=home_hotalbum"><?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title']);?>
</a></h3>
		<div class="inblock ellipsis">
			<h4 class="title-sd-item txt-info ellipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['search_by_artist'];?>
" title="Nghệ sĩ <?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['top']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['artist']);?>
</a></h4> </div>
	</div> <span class="item-mask"></span>
</div><?php }
}
