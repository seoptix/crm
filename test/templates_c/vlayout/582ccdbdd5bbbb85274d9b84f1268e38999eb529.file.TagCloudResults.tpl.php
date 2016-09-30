<?php /* Smarty version Smarty-3.1.7, created on 2016-09-21 20:17:04
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/TagCloudResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76854397357e2eac0b998e9-79097976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582ccdbdd5bbbb85274d9b84f1268e38999eb529' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/TagCloudResults.tpl',
      1 => 1467763422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76854397357e2eac0b998e9-79097976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'TAG_NAME' => 0,
    'TAGGED_RECORDS' => 0,
    'MODULE_NAME' => 0,
    'TAGGED_RECORD_MODELS' => 0,
    'TAGGED_RECORD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e2eac0cbc58',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2eac0cbc58')) {function content_57e2eac0cbc58($_smarty_tpl) {?>
<div id="TagCloudResults"><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><div class="row-fluid"><h3 class="span8"><?php echo vtranslate('LBL_RESULT_FOR_THE_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['TAG_NAME']->value;?>
</h3><?php if ($_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value){?><select id="tagSearchModulesList" class="chzn-select span3"><option value="all"><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key => $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value){
$_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key;
?><option value="tagSearch_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select><?php }?></div></div><div class="modal-body tabbable"><?php if ($_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value){?><?php  $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGGED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key => $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value){
$_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->key;
?><div name="tagSearchModuleResults" id="tagSearch_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><h5><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value);?>
)</h5><?php  $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->key => $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->value){
$_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->_loop = true;
?><div><a href="<?php echo $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['TAGGED_RECORD_MODEL']->value->getName();?>
</a></div><?php } ?><br></div><?php } ?><?php }else{ ?><div class="alert alert-block"><strong><?php echo vtranslate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
.</strong></div><?php }?></div></div>	
<?php }} ?>