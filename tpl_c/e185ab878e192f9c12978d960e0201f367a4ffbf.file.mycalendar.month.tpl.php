<?php /* Smarty version Smarty-3.1.7, created on 2013-12-20 20:36:57
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Calendar/mycalendar.month.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125142810752b49c59b765a4-23462764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e185ab878e192f9c12978d960e0201f367a4ffbf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Calendar/mycalendar.month.tpl',
      1 => 1365061522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125142810752b49c59b765a4-23462764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PrevLink' => 0,
    'MonthName' => 0,
    'DisplayDate' => 0,
    'NextLink' => 0,
    'Today' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52b49c59bd97b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b49c59bd97b')) {function content_52b49c59bd97b($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cssFiles'=>'css/calendar.css,css/jquery.qtip.min.css,scripts/css/fullcalendar.css','printCssFiles'=>'scripts/css/fullcalendar.print.css'), 0);?>


<div class="calendarHeading">

	<div style="float:left;">
		<a href="<?php echo $_smarty_tpl->tpl_vars['PrevLink']->value;?>
"><img src="img/arrow_large_left.png" alt="Back" /></a>
		<?php echo $_smarty_tpl->tpl_vars['MonthName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Year();?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['NextLink']->value;?>
"><img src="img/arrow_large_right.png" alt="Forward" /></a>
	</div>

	<div style="float:right;">
		<a href="<?php echo PersonalCalendarUrl::Create($_smarty_tpl->tpl_vars['Today']->value,CalendarTypes::Month);?>
" alt="Today" title="Today"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-day.png"),$_smarty_tpl);?>
</a>
		<a href="<?php echo PersonalCalendarUrl::Create($_smarty_tpl->tpl_vars['Today']->value,CalendarTypes::Week);?>
" alt="Week" title="Week"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Week'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
</a>
	</div>

	<div class="clear">&nbsp;</div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('Calendar/mycalendar.common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('view'=>'month'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>