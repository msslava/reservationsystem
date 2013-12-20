<?php /* Smarty version Smarty-3.1.7, created on 2013-12-20 20:33:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Calendar/calendar.filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479573652b49b9812ea81-09046603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cdc92bea4cb6ff4e07ade4b5399e032487f47a8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Calendar/calendar.filter.tpl',
      1 => 1365061522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479573652b49b9812ea81-09046603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filters' => 0,
    'filter' => 0,
    'subfilter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52b49b98165f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b49b98165f1')) {function content_52b49b98165f1($_smarty_tpl) {?>
<div id="filter">
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangeCalendar"),$_smarty_tpl);?>

<select id="calendarFilter" class="textbox">
<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value->GetFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['filter']->value->Id();?>
" class="schedule" <?php if ($_smarty_tpl->tpl_vars['filter']->value->Selected()){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['filter']->value->Name();?>
</option>
	<?php  $_smarty_tpl->tpl_vars['subfilter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subfilter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value->GetFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subfilter']->key => $_smarty_tpl->tpl_vars['subfilter']->value){
$_smarty_tpl->tpl_vars['subfilter']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Id();?>
" class="resource" <?php if ($_smarty_tpl->tpl_vars['subfilter']->value->Selected()){?>selected="selected"<?php }?>>-- <?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Name();?>
</option>
	<?php } ?>
<?php } ?>

</select>
</div><?php }} ?>