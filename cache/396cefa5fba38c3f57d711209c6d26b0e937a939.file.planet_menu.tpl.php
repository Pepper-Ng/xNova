<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:10:49
         compiled from "/var/www/html/xNova/styles/templates/planet_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135553227755131649ed5338-97297696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '396cefa5fba38c3f57d711209c6d26b0e937a939' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/planet_menu.tpl',
      1 => 1426722805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135553227755131649ed5338-97297696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="planet_menu">
	<div id="planet_menu_header"><a href="javascript:ShowPlanetMenu()" id="planet_menu_link"><font color="red">>></font> <?php echo $_smarty_tpl->getVariable('show_planetmenu')->value;?>
</a></div>
	<div id="planet_menu_content"<?php if ($_smarty_tpl->getVariable('is_pmenu')->value==0){?> style="display:none;"<?php }?>>
		<table style="text-align:center;margin:0">
			<tr>
			<?php  $_smarty_tpl->tpl_vars['PlanetInfo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['PlanetID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetMenu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetInfo']->key => $_smarty_tpl->tpl_vars['PlanetInfo']->value){
 $_smarty_tpl->tpl_vars['PlanetID']->value = $_smarty_tpl->tpl_vars['PlanetInfo']->key;
?>
				<td class="transparent" style="width:80px;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
">
					<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['image'];?>
.png" height="40" width="40" alt="<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
" />
					<br />
					<?php if ($_smarty_tpl->tpl_vars['PlanetID']->value==$_smarty_tpl->getVariable('current_pid')->value){?>
					<span style="color:#FFFF00;" class="planetname"><b><?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
</b></span>
					<br /><span style="color:#FE9A2E;"><b>[<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['planet'];?>
]</b></span>
					<?php }else{ ?>
					<?php if ($_smarty_tpl->tpl_vars['PlanetInfo']->value['ptype']==3){?><span style="color:#CCCCCC"><?php }else{ ?><span style="color:#2E9AFE"><?php }?><?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
</span>
					<br /><span style="color:#58FA58;">[<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['planet'];?>
]</span>
					<?php }?>
					<br /><span id="planet_<?php echo $_smarty_tpl->tpl_vars['PlanetID']->value;?>
"></span>
				</a>
				</td>
			<?php }} ?>
			</tr>
		</table>
	</div>
</div>
<script type="text/javascript">
planetmenu	= <?php echo $_smarty_tpl->getVariable('Scripttime')->value;?>
;
</script>
