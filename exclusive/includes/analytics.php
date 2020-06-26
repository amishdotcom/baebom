<?php
if($page_type=='about' OR $page_type=='policy' OR $page_type=='terms' OR $page_type=='dmca' OR $page_type=='developer' OR $page_type=='donate' OR $page_type=='disclaimer')
{include '../includes/config.inc.php';}
if($page_type=='dmca_ex'){include '../../includes/config.inc.php';}
echo $config['analytics_code'];
echo "\n";
?>