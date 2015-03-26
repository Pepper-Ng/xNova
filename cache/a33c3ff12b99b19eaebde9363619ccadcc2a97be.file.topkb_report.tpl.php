<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-26 00:40:34
         compiled from "/var/www/html/xNova/styles/templates/topkb/topkb_report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92179039255134772b77ee3-42442213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33c3ff12b99b19eaebde9363619ccadcc2a97be' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/topkb/topkb_report.tpl',
      1 => 1315885612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92179039255134772b77ee3-42442213',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<style>body{ @import url(<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
reportes.css); background-attachment:fixed; }</style><table style="width:100%; text-align:center">
<tr>
	<td class="tansparent" style="width:40%;font-size:22px;font-weight:bold;"><?php echo $_smarty_tpl->getVariable('attacker')->value;?>
</td>
	<td class="tansparent" style="font-size:22px;font-weight:bold;">VS</td>
	<td class="tansparent" style="width:40%;font-size:22px;font-weight:bold;"><?php echo $_smarty_tpl->getVariable('defender')->value;?>
</td>
</tr></table>
<?php echo $_smarty_tpl->getVariable('report')->value;?>

<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>