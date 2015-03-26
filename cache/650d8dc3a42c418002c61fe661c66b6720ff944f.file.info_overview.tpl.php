<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:21:18
         compiled from "/var/www/html/xNova/styles/templates/info_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790909226551326ceaf8483-03693605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '650d8dc3a42c418002c61fe661c66b6720ff944f' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/info_overview.tpl',
      1 => 1329577054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790909226551326ceaf8483-03693605',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('GateFleetList')->value){?><form action="" method="post"><?php }?>
    <div id="info_name" style="display:none;"><?php echo $_smarty_tpl->getVariable('name')->value;?>
</div>
<table>
<tbody>
<tr>
	<td colspan="3">
	<table>
		<tr>
			<td><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->getVariable('id')->value;?>
.png" /></td>
			<td class="contenido_info"><?php echo $_smarty_tpl->getVariable('description')->value;?>

			<?php if ($_smarty_tpl->getVariable('RapidFire')->value){?>
			<br /><br />		
			<?php echo $_smarty_tpl->getVariable('tipo_nave')->value;?>

			<div style="padding: 2px 2px 2px 2px;">
			<?php  $_smarty_tpl->tpl_vars['RapidFireTo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['RapidFireToName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('RapidFire')->value['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['RapidFireTo']->key => $_smarty_tpl->tpl_vars['RapidFireTo']->value){
 $_smarty_tpl->tpl_vars['RapidFireToName']->value = $_smarty_tpl->tpl_vars['RapidFireTo']->key;
?>
			<?php echo $_smarty_tpl->getVariable('in_rf_again')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['RapidFireToName']->value;?>
 <span style="color:#00ff00"><?php echo $_smarty_tpl->tpl_vars['RapidFireTo']->value;?>
</span><br />
			<?php }} ?>
			<?php  $_smarty_tpl->tpl_vars['RapidFireFrom'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['RapidFireFromName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('RapidFire')->value['from']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['RapidFireFrom']->key => $_smarty_tpl->tpl_vars['RapidFireFrom']->value){
 $_smarty_tpl->tpl_vars['RapidFireFromName']->value = $_smarty_tpl->tpl_vars['RapidFireFrom']->key;
?>
			<?php echo $_smarty_tpl->getVariable('in_rf_from')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['RapidFireFromName']->value;?>
 <span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['RapidFireFrom']->value;?>
</span><br />
			<?php }} ?>
			<?php echo $_smarty_tpl->getVariable('GateFleetList')->value;?>

			<br />
			</div>
			<?php }?>
			</td>
		</tr>
	</table>
	</td>
</tr>

<?php if ($_smarty_tpl->getVariable('ProductionTable')->value){?>

<tr>
<td class="transparent" colspan="3"><hr></td>
</tr>
<tr>
	<td colspan="3">
		<table width="100%">
		<tr  align="center"><th class="repetido" style="padding-top: 5px;paddig-bottom: 7px;"><?php echo $_smarty_tpl->getVariable('in_level')->value;?>
</th><?php if ($_smarty_tpl->getVariable('id')->value!=4){?><th class="repetido"><?php if ($_smarty_tpl->getVariable('id')->value==12){?><?php echo $_smarty_tpl->getVariable('in_prod_energy')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('in_prod_p_hour')->value;?>
<?php }?></th><th class="repetido"><?php echo $_smarty_tpl->getVariable('in_difference')->value;?>
</th><?php }?><th class="repetido"><?php if ($_smarty_tpl->getVariable('id')->value==12){?><?php echo $_smarty_tpl->getVariable('in_used_deuter')->value;?>
<?php }elseif($_smarty_tpl->getVariable('id')->value==4){?><?php echo $_smarty_tpl->getVariable('in_prod_energy')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('in_used_energy')->value;?>
<?php }?></th><th class="repetido"><?php echo $_smarty_tpl->getVariable('in_difference')->value;?>
</th></tr>
		<?php  $_smarty_tpl->tpl_vars['LevelRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ProductionTable')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['LevelRow']->key => $_smarty_tpl->tpl_vars['LevelRow']->value){
?>
		<tr align="center"><td><?php if ($_smarty_tpl->getVariable('Level')->value==$_smarty_tpl->tpl_vars['LevelRow']->value['BuildLevel']){?><span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['LevelRow']->value['BuildLevel'];?>
</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LevelRow']->value['BuildLevel'];?>
<?php }?></td><?php if ($_smarty_tpl->getVariable('id')->value!=4){?><td><?php echo $_smarty_tpl->tpl_vars['LevelRow']->value['prod'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LevelRow']->value['prod_diff'];?>
</td><?php }?><td><?php echo $_smarty_tpl->tpl_vars['LevelRow']->value['need'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LevelRow']->value['need_diff'];?>
</td></tr>
		<?php }} ?>
		</table>
	</td>
</tr>

<?php }elseif($_smarty_tpl->getVariable('FleetInfo')->value){?>

<tr>
<td class="transparent" colspan="3"><hr /></td>
</tr>
<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['Name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('FleetInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
 $_smarty_tpl->tpl_vars['Name']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</td>
<td>
<?php if (is_array($_smarty_tpl->tpl_vars['content']->value)){?><?php echo $_smarty_tpl->tpl_vars['content']->value[0];?>
<?php if ($_smarty_tpl->tpl_vars['content']->value[0]!=$_smarty_tpl->tpl_vars['content']->value[1]){?> <span style="color:yellow">(<?php echo $_smarty_tpl->tpl_vars['content']->value[1];?>
)</span><?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php }?>
<?php }} ?>
</td>
</tr>
<?php }elseif($_smarty_tpl->getVariable('gate_fleets')->value){?>
<?php $_template = new Smarty_Internal_Template("info_gatelist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }elseif($_smarty_tpl->getVariable('missiles')->value){?>
<?php }?>
</tbody>
</table>