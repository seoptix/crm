<?php /* Smarty version Smarty-3.1.7, created on 2016-09-21 13:06:16
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124554802857e285c82c3747-37891264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc680b3a459a1db1376f8d6f1cb48ce7d1ff64a4' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/History.tpl',
      1 => 1467763422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124554802857e285c82c3747-37891264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'COMMENTS_MODULE_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e285c832df2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e285c832df2')) {function content_57e285c832df2($_smarty_tpl) {?>
<div class="dashboardWidgetHeader">
	<table width="100%" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th class="span4">
				<div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle());?>
</b></div>
			</th>
			<th class="span2">
				<div>
					<select class="widgetFilter" id="historyType" name="type" style='width:100px;margin-bottom:0px'>
						<option value="all" ><?php echo vtranslate('LBL_ALL');?>
</option>
						<?php if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('DetailView')){?><option value="comments" ><?php echo vtranslate('LBL_COMMENTS');?>
</option><?php }?>
						<option value="updates" ><?php echo vtranslate('LBL_UPDATES');?>
</option>
					</select>
				</div>
			</th>
			<th class="refresh span1" align="right">
				<span style="position:relative;"></span>
			</th>
			<th class="widgeticons span5" align="right">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardHeaderIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</th>
		</tr>
	</thead>
	</table>
</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/HistoryContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>