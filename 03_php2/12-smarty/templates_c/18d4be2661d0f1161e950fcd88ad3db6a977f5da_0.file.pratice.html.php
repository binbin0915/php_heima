<?php
/* Smarty version 3.1.30, created on 2018-08-20 20:54:43
  from "F:\Second-mysql\Day-11\pratice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7aba13007957_16350435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d4be2661d0f1161e950fcd88ad3db6a977f5da' => 
    array (
      0 => 'F:\\Second-mysql\\Day-11\\pratice.html',
      1 => 1534769682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7aba13007957_16350435 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\Second-mysql\\Day-12\\Smart\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
姓名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <br>
年龄：<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
<br>
<!-- 用户名：<?php echo $_GET['name'];?>
<br>
密码：<?php echo $_GET['password'];?>
<br>
网站域名：<?php echo $_SERVER['SERVER_NAME'];?>
<br>
服务器IP地址：<?php echo $_SERVER['SERVER_ADDR'];?>
<br>
客户端IP地址：<?php echo $_SERVER['REMOTE_ADDR'];?>
<br>
网站根目录：<?php echo $_SERVER['DOCUMENT_ROOT'];?>
<br> -->

PHP时间戳：<?php echo time();?>
<br>
Smarty时间戳：<?php echo time();?>
<br>
PHP时间戳格式化：<?php echo date("Y-m-d H:i:s");?>
<br>
Smarty时间戳格式化：<?php echo smarty_modifier_date_format(time(),'%Y-$m-$d  %H:%M:%S');
}
}
