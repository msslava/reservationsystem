<?php /* Smarty version Smarty-3.1.7, created on 2013-12-25 20:15:30
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Export/ical.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100608101452bb2ed25a4a77-90973916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7cef558aa76ffc66f7d34f20bc33ee3fced5d98' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../tpl/Export/ical.tpl',
      1 => 1365061524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100608101452bb2ed25a4a77-90973916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpScheduleItVersion' => 0,
    'Reservations' => 0,
    'reservation' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52bb2ed264153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bb2ed264153')) {function content_52bb2ed264153($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/reservationsystem/lib/Common/../../lib/external/Smarty/plugins/modifier.regex_replace.php';
?>
BEGIN:VCALENDAR
VERSION:2.0
METHOD:REQUEST
PRODID:-//phpScheduleIt//NONSGML <?php echo $_smarty_tpl->tpl_vars['phpScheduleItVersion']->value;?>
//EN
<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Reservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
BEGIN:VEVENT
CLASS:PUBLIC
CREATED:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateCreated,'key'=>'ical'),$_smarty_tpl);?>

DESCRIPTION:<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reservation']->value->Description,"/\r\n|\n|\r/m","\n ");?>

DTSTAMP:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateCreated,'key'=>'ical'),$_smarty_tpl);?>

DTSTART:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateStart,'key'=>'ical'),$_smarty_tpl);?>

DTEND:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateEnd,'key'=>'ical'),$_smarty_tpl);?>

LOCATION:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Location;?>

ORGANIZER;CN=<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Organizer;?>
:MAILTO:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->OrganizerEmail;?>

<?php if ($_smarty_tpl->tpl_vars['reservation']->value->RecurRule!=''){?>
RRULE:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->RecurRule;?>

<?php }?>
SUMMARY:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Summary;?>

UID:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
&<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>

SEQUENCE:0
URL:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReservationUrl;?>

X-MICROSOFT-CDO-BUSYSTATUS:BUSY
END:VEVENT
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['reservation']->value->StartReminder!=null){?>
BEGIN:VALARM
TRIGGER;RELATED=START:-PT<?php echo $_smarty_tpl->tpl_vars['reservation']->value->StartReminder->MinutesPrior();?>
M
ACTION:DISPLAY
DESCRIPTION:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Summary;?>

END:VALARM
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['reservation']->value->EndReminder!=null){?>
BEGIN:VALARM
TRIGGER;RELATED=END:-PT<?php echo $_smarty_tpl->tpl_vars['reservation']->value->EndReminder->MinutesPrior();?>
M
ACTION:DISPLAY
DESCRIPTION:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Summary;?>

END:VALARM
<?php }?>
END:VCALENDAR<?php }} ?>