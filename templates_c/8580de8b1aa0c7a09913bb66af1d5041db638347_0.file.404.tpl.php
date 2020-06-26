<?php
/* Smarty version 3.1.32, created on 2019-09-18 23:50:00
  from '/var/www/baebom.com/public_html/templates/Default/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d82a688ecf997_83369516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8580de8b1aa0c7a09913bb66af1d5041db638347' => 
    array (
      0 => '/var/www/baebom.com/public_html/templates/Default/404.tpl',
      1 => 1518084912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d82a688ecf997_83369516 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#f22056">
    <title>This page can’t be found</title>
</head>

<body>
    <div style="text-align:center;margin-top:10%;font-family:Arial;">
        <div style="font-size:50px">404 Not Found</div>
        <br><br>
        <form method="GET" action="/search.html">
        	<input type="text" value="" style="border-radius: 3px; height: 40px;width: 90%;font-size: 20px;border: 5px solid #ccc" placeholder="What are you looking for ..." name="q">
        </form>
    </div>
</body>
</html><?php }
}
