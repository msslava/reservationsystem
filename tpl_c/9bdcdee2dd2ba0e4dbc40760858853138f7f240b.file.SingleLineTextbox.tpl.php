<?php /* Smarty version Smarty-3.1.7, created on 2013-12-20 20:31:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Controls/Attributes/SingleLineTextbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152347398052b49b238e9f85-72648558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bdcdee2dd2ba0e4dbc40760858853138f7f240b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Controls/Attributes/SingleLineTextbox.tpl',
      1 => 1365061522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152347398052b49b238e9f85-72648558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributeName' => 0,
    'attribute' => 0,
    'align' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52b49b2390c98',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b49b2390c98')) {function content_52b49b2390c98($_smarty_tpl) {?>
<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Label(), ENT_QUOTES, 'UTF-8', true);?>
</label>
<?php if ($_smarty_tpl->tpl_vars['align']->value=='vertical'){?>
<br/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['readonly']->value){?>
<span class="attributeValue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }else{ ?>
<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
" class="customAttribute textbox" />
<?php }?><?php }} ?>