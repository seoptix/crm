<?php /* Smarty version Smarty-3.1.7, created on 2016-09-21 12:39:34
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/MainuiQuickLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71499439157e27f863eee11-54619681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a6a462ac3ba28090d1350ca4e3c708139969489' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/MainuiQuickLinks.tpl',
      1 => 1467846192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71499439157e27f863eee11-54619681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e27f8640f83',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e27f8640f83')) {function content_57e27f8640f83($_smarty_tpl) {?>

<br><div class="quickWidget"><div class="accordion-heading accordion-toggle quickWidgetHeader"><table width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td class="span5"><div class="dashboardTitle textOverflowEllipsis" title="<?php echo vtranslate('LBL_Mailbox','MailManager');?>
"><h5 class="title widgetTextOverflowEllipsis"><?php echo vtranslate('LBL_Mailbox','MailManager');?>
</h5></div></td><td class="widgeticons span5" align="right"><div class="box pull-right"><a href='#Reload' id="_mailfolder_mm_reload" onclick="MailManager.reload_now();"><i alt="Refresh" title="<?php echo vtranslate('LBL_Refresh','MailManager');?>
" align="absmiddle" border="0" hspace="2" class="icon-refresh"></i></a><a href='#Settings' id="_mailfolder_mm_settings" onclick="MailManager.open_settings_detail();"><i alt="Settings" title="<?php echo vtranslate('LBL_SETTINGS','MailManager');?>
" align="absmiddle" border="0" hspace="2" class="icon-cog"></i></a></div></td></tr></tbody></table><div class="clearfix"></div></div><div class="defaultContainer <?php if ($_smarty_tpl->tpl_vars['MAILBOX']->value->exists()==false){?>hide<?php }?>"><div class="widgetContainer accordion-body collapse in"><input type=hidden name="mm_selected_folder" id="mm_selected_folder"><input type="hidden" name="_folder" id="mailbox_folder"><div class="row-fluid"><div class="span12"><ul class="nav nav-list"><li><a href="javascript:void(0);" onclick="MailManager.mail_compose();"><?php echo vtranslate('LBL_Compose','MailManager');?>
</a></li><li><a href="#Drafts" id="_mailfolder_mm_drafts" onclick="MailManager.folder_drafts(0);"><?php echo vtranslate('LBL_Drafts','MailManager');?>
</a></li></ul></div></div></div></div></div>
<?php }} ?>