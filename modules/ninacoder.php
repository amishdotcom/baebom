<?php

$db->query("SELECT tag FROM `ninacoder_tags` ORDER BY ID DESC LIMIT 0,20");

while ($row = $db->get_row($sql_result)){
	
	$tags[] = $row;
	
}

$pop_json = build_top_lyrics("pop", 14);

$dance_json = build_top_lyrics("dance", 17);

$top_lyrics = build_top_lyrics("top");

$smarty->assign('top', $top_lyrics);

$smarty->assign('dance', $dance_json);

$smarty->assign('pop', $pop_json);

$smarty->assign('tags', $tags);

$smarty->assign('ft', $featured);

$smarty->assign('new', $new_lyrics);

$content = $smarty->fetch("main.tpl");

?>