<?php /* Smarty version Smarty-3.1.7, created on 2016-09-26 05:48:31
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/PipelinedAmountPerSalesPerson.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51215664057e8462fbef611-50743829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49aed2623f51c3ab2ab7aa4b65e59d1aae99e391' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/PipelinedAmountPerSalesPerson.tpl',
      1 => 1467763422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51215664057e8462fbef611-50743829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e8462fdf450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8462fdf450')) {function content_57e8462fdf450($_smarty_tpl) {?>

<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>



	<script type="text/javascript">
		Vtiger_MultiBarchat_Widget_Js('Vtiger_Pipelinedamountpersalesperson_Widget_Js',{},{
			getCharRelatedData : function() {
				var container = this.getContainer();
				var data = container.find('.widgetData').val();
				data = JSON.parse(data);
				var users = new Array();
				var stages = new Array();
				var count = new Array();
				for(var i=0; i<data.length ;i++) {
					if($.inArray(data[i].last_name, users) == -1) {
						users.push(data[i].last_name);
					}
					if($.inArray(data[i].sales_stage, stages) == -1) {
						stages.push(data[i].sales_stage);
					}
				}
				var allLinks = new Array();
				for(j in stages) {
					var salesStageCount = new Array();
                    var links = new Array();
					for(i in users) {
						var salesCount = 0;
						for(var k in data) {
							var userData = data[k];
							if(userData.sales_stage == stages[j] && userData.last_name == users[i]) {
								salesCount = parseInt(userData.amount);
                                link = userData.links
								break;
							}
						}
                        links.push(link);
						salesStageCount.push(salesCount);
					}
                    allLinks.push(links);
					count.push(salesStageCount);
				}
				return {
					'data' : count,
					'ticks' : users,
					'labels' : stages,
                    'links' : allLinks
				}
			}
		});
	</script>
<?php }} ?>