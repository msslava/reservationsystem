<?php /* Smarty version Smarty-3.1.7, created on 2013-12-20 20:32:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Ajax/reservation/save_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171587914852b49b4dd265b7-18012287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7340b35d67225669126d5defbd24de076e438d6b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Ajax/reservation/save_successful.tpl',
      1 => 1365061522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171587914852b49b4dd265b7-18012287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ReferenceNumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52b49b4dd3caa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b49b4dd3caa')) {function content_52b49b4dd3caa($_smarty_tpl) {?>
<div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"dialog-success.png"),$_smarty_tpl);?>
<br/>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationCreated'),$_smarty_tpl);?>
</div>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourReferenceNumber','args'=>$_smarty_tpl->tpl_vars['ReferenceNumber']->value),$_smarty_tpl);?>
</div>
	
	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>