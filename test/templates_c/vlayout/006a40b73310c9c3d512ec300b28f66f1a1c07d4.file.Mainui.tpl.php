<?php /* Smarty version Smarty-3.1.7, created on 2016-09-21 12:39:41
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106844868557e27f8d2fcee2-13824594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '006a40b73310c9c3d512ec300b28f66f1a1c07d4' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1467846192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106844868557e27f8d2fcee2-13824594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e27f8d36036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e27f8d36036')) {function content_57e27f8d36036($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>