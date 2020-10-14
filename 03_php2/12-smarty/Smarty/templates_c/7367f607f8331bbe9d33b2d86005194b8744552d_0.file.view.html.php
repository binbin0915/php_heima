<?php
/* Smarty version 3.1.30, created on 2018-08-20 17:28:08
  from "E:\itcast\lesson\Smarty\view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7a89a8af02b1_86856764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7367f607f8331bbe9d33b2d86005194b8744552d' => 
    array (
      0 => 'E:\\itcast\\lesson\\Smarty\\view.html',
      1 => 1534757281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7a89a8af02b1_86856764 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\itcast\\lesson\\Smarty\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Smarty模板引擎</title>
</head>
<body>

<h2>字符串截取调节器truncate应用</h2>
原始字符串：<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<br>
截取字符串：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['title']->value,10);?>
<br>
截取字符串：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['title']->value,10,'');?>
<br><?php }
}
