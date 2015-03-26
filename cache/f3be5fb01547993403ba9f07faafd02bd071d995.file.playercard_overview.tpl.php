<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-26 00:04:04
         compiled from "/var/www/html/xNova/styles/templates/playercard_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102396013455133ee46c3474-31147731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3be5fb01547993403ba9f07faafd02bd071d995' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/playercard_overview.tpl',
      1 => 1337270792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102396013455133ee46c3474-31147731',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table style="width:90%">
<tr>
<th colspan="3"><b><?php echo $_smarty_tpl->getVariable('pl_overview')->value;?>
</b></th>
</tr>
<tr>
<td style="width:40%"><b><?php echo $_smarty_tpl->getVariable('pl_name')->value;?>
</b></td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('name')->value;?>
 <?php if ($_smarty_tpl->getVariable('id')->value!=$_smarty_tpl->getVariable('yourid')->value){?><a href="javascript:OpenPopup('game.php?page=buddy&amp;mode=2&amp;u=<?php echo $_smarty_tpl->getVariable('id')->value;?>
', '', 720, 300);" title="<?php echo $_smarty_tpl->getVariable('pl_buddy')->value;?>
"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/b.gif" /></a> <a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->getVariable('id')->value;?>
);" title="<?php echo $_smarty_tpl->getVariable('pl_message')->value;?>
"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/m.gif" /></a><?php }?></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->getVariable('pl_homeplanet')->value;?>
</b></td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('homeplanet')->value;?>
 <a href='javascript:window.opener.focus();' onclick='window.opener.location.href = "game.php?page=galaxy&amp;mode=3&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
";'>[<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('system')->value;?>
:<?php echo $_smarty_tpl->getVariable('planet')->value;?>
]</a></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->getVariable('pl_ally')->value;?>
</b></td>
<td colspan="2"><?php if ($_smarty_tpl->getVariable('allyname')->value){?><a href='javascript:window.opener.focus();' onclick='window.opener.location.href = "game.php?page=alliance&amp;mode=ainfo&amp;a=<?php echo $_smarty_tpl->getVariable('allyid')->value;?>
";'><?php echo $_smarty_tpl->getVariable('allyname')->value;?>
</a><?php }else{ ?>-<?php }?></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->getVariable('Raza')->value;?>
</b></td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('Raza_tipo')->value;?>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<th><?php echo $_smarty_tpl->getVariable('pl_points')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('pl_range')->value;?>
</th>
</tr>
<tr>
<td><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/3.png" width="20" height="20" /></td>
<td><center><?php echo $_smarty_tpl->getVariable('build_points')->value;?>
</center></td>
<td><center><?php echo $_smarty_tpl->getVariable('build_rank')->value;?>
</center></td>
</tr>
<tr>
<td><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/113.png" width="20" height="20" /></td>
<td><center><?php echo $_smarty_tpl->getVariable('tech_points')->value;?>
</center></td>
<td><center><?php echo $_smarty_tpl->getVariable('tech_rank')->value;?>
</center></td>
</tr>
<tr>
<td><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/208.png" width="20" height="20" /></td>
<td><center><?php echo $_smarty_tpl->getVariable('fleet_points')->value;?>
</center></td>
<td><center><?php echo $_smarty_tpl->getVariable('fleet_rank')->value;?>
</center></td>
</tr>
<tr>
<td><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/404.png" width="20" height="20" /></td>
<td><center><?php echo $_smarty_tpl->getVariable('defs_points')->value;?>
</center></td>
<td><center><?php echo $_smarty_tpl->getVariable('defs_rank')->value;?>
</center></td>
</tr>
<tr>
<td><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/411.png" width="20" height="20" /></td>
<td><center><?php echo $_smarty_tpl->getVariable('total_points')->value;?>
</center></td>
<td><center><?php echo $_smarty_tpl->getVariable('total_rank')->value;?>
</center></td>
</tr>
<tr>
<th colspan="3"><?php echo $_smarty_tpl->getVariable('pl_fightstats')->value;?>
</th>
</tr>
<tr>
<th>&nbsp;</th>
<th><?php echo $_smarty_tpl->getVariable('pl_fights')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('pl_fprocent')->value;?>
</th>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_fightwon')->value;?>
</td>
<td><?php echo $_smarty_tpl->getVariable('wons')->value;?>
</td>
<td><?php echo $_smarty_tpl->getVariable('siegprozent')->value;?>
 %</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_fightdraw')->value;?>
</td>
<td><?php echo $_smarty_tpl->getVariable('draws')->value;?>
</td>
<td><?php echo $_smarty_tpl->getVariable('drawsprozent')->value;?>
 %</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_fightlose')->value;?>
</td>
<td><?php echo $_smarty_tpl->getVariable('loos')->value;?>
</td>
<td><?php echo $_smarty_tpl->getVariable('loosprozent')->value;?>
 %</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_totalfight')->value;?>
</td>
<td><?php echo $_smarty_tpl->getVariable('totalfights')->value;?>
</td>
<td>100%</td>
</tr>
<tr>
<th colspan="3"><?php echo $_smarty_tpl->getVariable('playerdestory')->value;?>
:</th>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_unitsshot')->value;?>
</td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('desunits')->value;?>
</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_unitslose')->value;?>
</td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('lostunits')->value;?>
</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_dermetal')->value;?>
</td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('kbmetal')->value;?>
</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_dercrystal')->value;?>
</td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('kbcrystal')->value;?>
</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->getVariable('pl_dernorio')->value;?>
</td>
<td colspan="2"><?php echo $_smarty_tpl->getVariable('kbnorio')->value;?>
</td>
</tr>
</table>