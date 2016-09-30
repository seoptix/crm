<?php /* Smarty version Smarty-3.1.7, created on 2016-09-21 14:55:49
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/SMSNotifier/StatusWidget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29449335957e29f758150b3-66427677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4adb32506e152ec6e08e59e2b6d2d8ce92b73df7' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/SMSNotifier/StatusWidget.tpl',
      1 => 1467846194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29449335957e29f758150b3-66427677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e29f7586979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e29f7586979')) {function content_57e29f7586979($_smarty_tpl) {?>

<div>
	<table width="100%" cellpadding="3" cellspacing="1" border="0" class="lvt small">
		<tr>
			<td nowrap="nowrap" bgcolor="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('statuscolor');?>
" width="25%"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('tonumber');?>
</td>
		</tr>
	</table>
</div><?php }} ?>