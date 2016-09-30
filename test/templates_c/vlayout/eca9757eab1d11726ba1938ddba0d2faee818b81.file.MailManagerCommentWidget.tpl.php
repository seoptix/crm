<?php /* Smarty version Smarty-3.1.7, created on 2016-09-22 00:08:07
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/MailManagerCommentWidget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162394201957e320e73321f6-61402092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca9757eab1d11726ba1938ddba0d2faee818b81' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/MailManagerCommentWidget.tpl',
      1 => 1467846192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162394201957e320e73321f6-61402092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PARENT' => 0,
    'LINKMODULE' => 0,
    'MSGNO' => 0,
    'FOLDER' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e320e73866e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e320e73866e')) {function content_57e320e73866e($_smarty_tpl) {?>

<div class="modelContainer" id="commentWidget"><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3><?php echo vtranslate('LBL_MAILMANAGER_ADD_ModComments','MailManager');?>
</h3></div><div class="modal-body tabbable"><textarea class="input-block-level span6" name="commentcontent" data-validation-engine="validate[required]" id="commentcontent" placeholder="<?php echo vtranslate('LBL_WRITE_YOUR_COMMENT_HERE','MailManager');?>
"></textarea></div><input type=hidden name="_mlinkto" value="<?php echo $_smarty_tpl->tpl_vars['PARENT']->value;?>
"><input type=hidden name="_mlinktotype" value="<?php echo $_smarty_tpl->tpl_vars['LINKMODULE']->value;?>
"><input type=hidden name="_msgno" value="<?php echo $_smarty_tpl->tpl_vars['MSGNO']->value;?>
"><input type=hidden name="_folder" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>