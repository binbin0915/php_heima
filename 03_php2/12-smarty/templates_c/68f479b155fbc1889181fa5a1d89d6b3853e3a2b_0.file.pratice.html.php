<?php
/* Smarty version 3.1.30, created on 2018-08-20 22:46:49
  from "F:\Second-mysql\Day-12\pratice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7ad459bfa7d1_57782573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f479b155fbc1889181fa5a1d89d6b3853e3a2b' => 
    array (
      0 => 'F:\\Second-mysql\\Day-12\\pratice.html',
      1 => 1534776407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7ad459bfa7d1_57782573 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\Second-mysql\\Day-12\\Smart\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- 姓名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <br>
年龄：<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
<br> -->

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

<!-- PHP时间戳：<?php echo time();?>
<br>
Smarty时间戳：<?php echo time();?>
<br>
PHP时间戳格式化：<?php echo date("Y-m-d H:i:s");?>
<br>
Smarty时间戳格式化：<?php echo smarty_modifier_date_format(time(),'%Y-$m-$d  %H:%M:%S');?>
 -->

<!-- 加载配置文件 -->
<!-- <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "config.conf", $_GET['lan'], 0);
?>


在视图文件访问配置变量
<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'a');?>
<br>
<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'b');?>
<br>
<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'c');?>

 -->

<!-- <table border="1">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
	<tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', true);
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->iteration++;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table> -->
<!-- <table border="1">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', true);
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->iteration++;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['value']->first) {?>
	<tr>
		<td>值</td>
		<td>索引</td>
		<td>从0开始计数</td>
		<td>从1开始计数</td>
		<td>是否为第一次循环</td>
		<td>是否为最后一次循环</td>
		<td>循环总次数</td>
	</tr>
<?php }?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->index;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->first;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->last;?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['value']->last) {
echo $_smarty_tpl->tpl_vars['value']->total;
}?></td>
	</tr>
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
 -->
<!-- <table border="1">
	<?php
$__section_a_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_a']) ? $_smarty_tpl->tpl_vars['__smarty_section_a'] : false;
$__section_a_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_a_0_total = $__section_a_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_a'] = new Smarty_Variable(array());
if ($__section_a_0_total != 0) {
for ($__section_a_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] = 0; $__section_a_0_iteration <= $__section_a_0_total; $__section_a_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']++){
?>
	<tr>
		<?php
$__section_q_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_q']) ? $_smarty_tpl->tpl_vars['__smarty_section_q'] : false;
$__section_q_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_q_1_total = $__section_q_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_q'] = new Smarty_Variable(array());
if ($__section_q_1_total != 0) {
for ($__section_q_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_q']->value['index'] = 0; $__section_q_1_iteration <= $__section_q_1_total; $__section_q_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_q']->value['index']++){
?>
		<td><?php echo $_smarty_tpl->tpl_vars['arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_q']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_q']->value['index'] : null)];?>
</td>
		<?php
}
}
if ($__section_q_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_q'] = $__section_q_1_saved;
}
?>
	</tr>
	<?php
}
}
if ($__section_a_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_a'] = $__section_a_0_saved;
}
?>
</table> -->

<!-- <h3>控制循环起点，步长值</h3>
<?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_start = min(5, $__section_i_2_loop);
$__section_i_2_total = min(ceil(($__section_i_2_loop - $__section_i_2_start)/ 2), 3);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_2_start; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] += 2){
?>
	<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>

<?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
 -->

<h3>判断当兵的年龄</h3>
<?php if ($_GET['age'] >= 18 && $_GET['age'] <= 25) {?>
<font color="red">你符合当兵的需求</font>
<?php } else { ?>
<font color="pink">抱歉，您不符合需求</font>
<?php }?>

















<?php }
}
