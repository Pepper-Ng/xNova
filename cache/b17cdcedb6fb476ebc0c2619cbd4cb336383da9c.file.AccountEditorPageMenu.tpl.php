<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:20:50
         compiled from "/var/www/html/xNova/styles/templates/adm/AccountEditorPageMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:689896638551326b249cae2-47578734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17cdcedb6fb476ebc0c2619cbd4cb336383da9c' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/AccountEditorPageMenu.tpl',
      1 => 1310796994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '689896638551326b249cae2-47578734',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("adm/overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<br>
<table width="40%">
<th colspan="9"><?php echo $_smarty_tpl->getVariable('ad_editor_title')->value;?>
</th>
<tr>
   	<td width="50%"><a href="?page=accounteditor&amp;edit=buildings"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_buildings')->value;?>
</a></td>
   	<td width="50%"><a href="?page=accounteditor&amp;edit=ships"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_ships')->value;?>
</a></td>
</tr><tr>
   	<td width="50%"><a href="?page=accounteditor&amp;edit=defenses"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_defenses')->value;?>
</a></td>
   	<td width="50%"><a href="?page=accounteditor&amp;edit=researchs"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_researchs')->value;?>
</a></td>
</tr><tr>
   	<td width="50%"><a href="?page=accounteditor&amp;edit=personal"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_personal')->value;?>
</a></td>
   	<td width="50%"><a href="?page=accounteditor&amp;edit=resources"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_resources')->value;?>
</a></td> 
</tr><tr>
	<td width="50%"><a href="?page=accounteditor&amp;edit=planets"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_planets')->value;?>
</a></td>
   	<td width="50%"><a href="?page=accounteditor&amp;edit=alliances"><img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_editor_alliances')->value;?>
</a></td> 
</tr>
</table>
<?php $_template = new Smarty_Internal_Template("adm/overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>