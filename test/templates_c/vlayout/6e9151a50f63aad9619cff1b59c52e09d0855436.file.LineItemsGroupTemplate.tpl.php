<?php /* Smarty version Smarty-3.1.7, created on 2016-09-21 16:01:30
         compiled from "/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/LineItemsGroupTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161208245557e2aedab16a28-10188963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e9151a50f63aad9619cff1b59c52e09d0855436' => 
    array (
      0 => '/home/seoptix/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/LineItemsGroupTemplate.tpl',
      1 => 1467763422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161208245557e2aedab16a28-10188963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e2aedabaa43',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2aedabaa43')) {function content_57e2aedabaa43($_smarty_tpl) {?>

<div class="template-contents"><table border=1 style="font-size:11px; width:100%; table-layout: fixed; border-collapse: collapse;"><thead><tr bgcolor=#c0c0c0><td style="text-align: center"><strong>Item Code</strong></td><td style="text-align: center"><strong>Item Name</strong></td><td style="text-align: center"><strong>Quantity</strong></td><td style="text-align: center"><strong>List Price</strong></td><td style="text-align: center"><strong>Item Total</strong></td><td style="text-align: center"><strong>Discount</strong></td><td style="text-align: center"><strong>Total After Discount</strong></td><td style="text-align: center"><strong>Total</strong></td></tr></thead><tbody><!-- foreach item=LINEITEM from=$RECORD.LINEITEMS --><tr><td align=right style="text-align: center; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.hdnProductcode} </td><td align=right style="text-align: center; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.productName} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.quantity} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.listprice} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.productTotal} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;">{$LINEITEM.discount_amount}&nbsp;&nbsp;({$LINEITEM.discount_percent} %)</td><td align=left style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.totalAfterDiscount} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.netPrice} </td></tr><!-- /foreach --><tr><td colspan=7 style="word-wrap: break-word; text-align: right;">Items Total</td><td style="text-align: right; word-wrap: break-word;"> {$RECORD.hdnSubTotal} </td></tr><tr><td colspan=7 style="word-wrap: break-word; text-align: right;">Discount({$RECORD.discount_percentage_final}%)</td><td style="text-align: right; word-wrap: break-word;">{$RECORD.discountTotal_final}</td></tr><tr><td colspan=7 style="word-wrap: break-word; text-align: right;">Shipping & Handling Charges</td><td style="text-align: right; word-wrap: break-word;">{$RECORD.hdnS_H_Amount}</td></tr><tr><td colspan=7 style="word-wrap: break-word; text-align: right;">Pre Tax Total</td><td style="text-align: right; word-wrap:  break-word;">{$RECORD.pre_tax_total}</td></tr><tr><td colspan=7 style="word-wrap: break-word; text-align: right;">Tax({$RECORD.tax_totalpercent})%</td><td style="text-align: right; word-wrap: break-word;">{$RECORD.tax_totalamount}</td></tr><tr><td colspan=7 style="word-wrap: break-word; text-align: right;">Shipping &amp Handling Tax total amount({$RECORD.shtax_totalpercent} %)</td><td style="text-align: right; word-wrap: break-word;">{$RECORD.shtax_totalamount}</td></tr><tr><td colspan=7 style="word-wrap: break-word; text-align: right;">Adjustment</td><td style="text-align:right; word-wrap: break-word;">{$RECORD.txtAdjustment}</td></tr><tr><td colspan=7 style="word-wrap: break-word; text-align: right;"><span style="font-weight: bold">GRAND TOTAL</span><strong style=" word-wrap: break-word;">({$RECORD.currency_symbol})</strong></td><td style="text-align: right; word-wrap: break-word;"><strong style=" word-wrap: break-word;">{$RECORD.hdnGrandTotal}</strong></td></tr></tbody></table></div>               <?php }} ?>