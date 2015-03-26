<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:20:51
         compiled from "/var/www/html/xNova/styles/templates/adm/AccountEditorPageResources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1287724311551326b3b61f88-79584389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c2d24e9134e3e1c1b073d96a710eb3f380e4e1' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/AccountEditorPageResources.tpl',
      1 => 1303826584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1287724311551326b3b61f88-79584389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("adm/overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<br>
<form action="" method="post">
<table width="50%">
<tr>
<td colspan="3" align="left"><a href="?page=accounteditor">
<img src="./styles/images/Adm/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->getVariable('ad_back_to_menu')->value;?>
</a></td>
</tr><tr>
	<th colspan="2"><?php echo $_smarty_tpl->getVariable('resources_title')->value;?>
</th>
</tr><tr>
	<td><?php echo $_smarty_tpl->getVariable('input_id_p_m')->value;?>
</td>
	<td><input name="id" type="text" value="0" size="3"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->getVariable('Metal')->value;?>
</td>
	<td><input name="metal" type="text" value="0"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
</td>
	<td><input name="cristal" type="text" value="0"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
</td>
	<td><input name="deut" type="text" value="0"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
</td>
	<td><input name="norio" type="text" value="0"></td>
</tr><tr>
	<th colspan="2"><?php echo $_smarty_tpl->getVariable('Darkmatter')->value;?>
</th>
</tr><tr>
	<td><?php echo $_smarty_tpl->getVariable('input_id_user')->value;?>
</td>
	<td><input name="id_dark" type="text" value="0" size="3"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->getVariable('Darkmatter')->value;?>
</td>
	<td><input name="dark" type="text" value="0"></td>
</tr><tr>
	<td colspan="2">
	<input type="reset" value="<?php echo $_smarty_tpl->getVariable('button_reset')->value;?>
"><br><br>
	<input type="Submit" value="<?php echo $_smarty_tpl->getVariable('button_add')->value;?>
" name="add">&nbsp;
	<input type="Submit" value="<?php echo $_smarty_tpl->getVariable('button_delete')->value;?>
" name="delete"></td>
</tr>
</table>
</form>
</body>
<?php $_template = new Smarty_Internal_Template("adm/overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>