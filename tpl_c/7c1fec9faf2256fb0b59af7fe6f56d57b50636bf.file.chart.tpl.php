<?php /* Smarty version Smarty-3.1.7, created on 2013-12-16 20:31:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Reports/chart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156086734552af552a6b82a0-37699635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c1fec9faf2256fb0b59af7fe6f56d57b50636bf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Reports/chart.tpl',
      1 => 1365061524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156086734552af552a6b82a0-37699635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52af552a6d56a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af552a6d56a')) {function content_52af552a6d56a($_smarty_tpl) {?>
<div class="clear"></div>
<div id="chart-indicator" style="display:none; text-align: center;">
	<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
...</h3>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl);?>

</div>

<div id="chartdiv" style="margin:auto;height:400px;width:80%"></div>

<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/plugins/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/plugins/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/plugins/jqplot.pointLabels.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jqplot/plugins/jqplot.dateAxisRenderer.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$(document).on('loaded', '#report-no-data, #report-results', function () {
			var chart = new Chart();
			chart.clear();
		});
	});
</script><?php }} ?>