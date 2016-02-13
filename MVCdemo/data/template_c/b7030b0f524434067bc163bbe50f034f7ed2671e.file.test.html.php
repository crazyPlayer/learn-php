<?php /* Smarty version Smarty-3.1.16, created on 2016-02-13 07:12:22
         compiled from "tpl\test.html" */ ?>
<?php /*%%SmartyHeaderCode:186356bec9466d3593-19399870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7030b0f524434067bc163bbe50f034f7ed2671e' => 
    array (
      0 => 'tpl\\test.html',
      1 => 1455343759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186356bec9466d3593-19399870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56bec94673d8f1_28311799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bec94673d8f1_28311799')) {function content_56bec94673d8f1_28311799($_smarty_tpl) {?><html>
<head>
<link href="css\style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<ul>
<li class="head">MEAL</li><li class="head">FOOD</li>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
<li><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</li>
<?php } ?>
<?php } ?>
</ul>
</body>
</html><?php }} ?>
