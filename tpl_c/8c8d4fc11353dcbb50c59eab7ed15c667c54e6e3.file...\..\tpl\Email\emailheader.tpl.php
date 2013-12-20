<?php /* Smarty version Smarty-3.1.7, created on 2013-12-20 20:32:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/tpl/Email/emailheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1592503552b49b4dc66826-71110635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c8d4fc11353dcbb50c59eab7ed15c667c54e6e3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/tpl/Email/emailheader.tpl',
      1 => 1365061522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1592503552b49b4dc66826-71110635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Charset' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52b49b4dc70ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b49b4dc70ae')) {function content_52b49b4dc70ae($_smarty_tpl) {?>
<?php echo '<?xml';?> version="1.0" encoding="<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
" />
		<style type="text/css">
			@import url(<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/email.css);
		</style>
	</head>
	<body><?php }} ?>