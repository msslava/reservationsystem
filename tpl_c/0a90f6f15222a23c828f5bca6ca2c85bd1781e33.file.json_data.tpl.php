<?php /* Smarty version Smarty-3.1.7, created on 2013-12-20 20:36:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140219711452b49c332441b1-04329891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a90f6f15222a23c828f5bca6ca2c85bd1781e33' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/json_data.tpl',
      1 => 1365061524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140219711452b49c332441b1-04329891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52b49c3328a9a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b49c3328a9a')) {function content_52b49c3328a9a($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!=''){?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>