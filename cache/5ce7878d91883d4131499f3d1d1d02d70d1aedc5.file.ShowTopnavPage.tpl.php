<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:20:48
         compiled from "/var/www/html/xNova/styles/templates/adm/ShowTopnavPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611531743551326b01d9b23-75849079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce7878d91883d4131499f3d1d1d02d70d1aedc5' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/ShowTopnavPage.tpl',
      1 => 1310441458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611531743551326b01d9b23-75849079',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/var/www/html/xNova/includes/libs/Smarty/plugins/function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("adm/overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div style="font-size:22px;font-weight:bolder;font-variant:small-caps;text-align:center;width:100%;"><?php echo $_smarty_tpl->getVariable('adm_cp_title')->value;?>
</div><br><br>
<div align="right">
<?php if ($_smarty_tpl->getVariable('authlevel')->value==@AUTH_ADM){?>
<select name="Uni" id="Uni" onchange="top.location = 'admin.php?uni='+$(this).val();">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('AvailableUnis')->value,'selected'=>$_smarty_tpl->getVariable('UNI')->value),$_smarty_tpl);?>

</select>
<?php }?>
<a href="admin.php?page=overview" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->getVariable('adm_cp_index')->value;?>
&nbsp;</a>
<?php if ($_smarty_tpl->getVariable('authlevel')->value==@AUTH_ADM){?>
<a href="?page=universe&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->getVariable('mu_universe')->value;?>
&nbsp;</a>
<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->getVariable('mu_moderation_page')->value;?>
&nbsp;</a>
<a href="?page=rights&amp;mode=users&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->getVariable('ad_authlevel_title')->value;?>
&nbsp;</a>
<?php }?>
<?php if ($_smarty_tpl->getVariable('id')->value==1){?>
<a href="?page=reset&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" target="Hauptframe" class="topn">&nbsp;<?php echo $_smarty_tpl->getVariable('re_reset_universe')->value;?>
&nbsp;</a>
<?php }?>
<a href="game.php" target="_top" class="out">&nbsp;<?php echo $_smarty_tpl->getVariable('adm_cp_logout')->value;?>
&nbsp;</a>
</div>
<?php $_template = new Smarty_Internal_Template("adm/overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>