<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:11:09
         compiled from "/var/www/html/xNova/styles/templates/construibles/shipyard_fleet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11689949985513165d1b9364-39077470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f01d33891da5439630a217dc1b74cee732f968' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/construibles/shipyard_fleet.tpl',
      1 => 1343825734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11689949985513165d1b9364-39077470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<body id="mercado">
<div id="tooltip" class="tip"></div>
<div class="contenido_big">
<div id="cajaBG">
    <div id="caja">
<div id="topnav" class="header_normal"> 	
		<?php $_template = new Smarty_Internal_Template("overall_topnav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>	
			<div id="titular">
			<div id="estructura_titular" style="position:relative;">
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_shipshard')->value;?>
</div>
			</div>
        </div>
	</div> 
<?php $_template = new Smarty_Internal_Template("left_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="contenidoMostrado">                               
<div id="elCosoxD">
<div class="coso_izquierda_corto"></div>
<div class="coso_derecha_corto"></div>
<div id="planeta_small" style="background-image: url(styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/hangar.jpg);"></div>
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('lm_fleet')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
   <table width="95%">	
   	<form action="" method="POST"> 
		<ul class="estructuras_c">
		<?php  $_smarty_tpl->tpl_vars['FleetListRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('FleetList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['FleetList']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['FleetListRow']->key => $_smarty_tpl->tpl_vars['FleetListRow']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['FleetList']['iteration']++;
?>
			<li>
				<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['id'];?>
)">
					<img class="tooltip" name="<table>
					<tr>
					<th colspan=2><?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['name'];?>
</th>
					</tr>
					<tr>
					<td><img src=<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['id'];?>
.png width=140 height=140 /></td>
					<td><?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['descriptions'];?>
</td>
					</tr>
					</table>" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['id'];?>
.png" width="100" height="100" />
				</a>
				<?php if ($_smarty_tpl->tpl_vars['FleetListRow']->value['Available']!=0){?> <div class="nivel_c"> <b style="cursor:help;" id="val_<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['id'];?>
" class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['Available'];?>
"><?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['Available'];?>
</b></div><?php }?>		
				<br />
				<?php if ($_smarty_tpl->getVariable('NotBuilding')->value&&$_smarty_tpl->tpl_vars['FleetListRow']->value['IsAvailable']){?><div class="cantidad_flota_h"><input type="text" class="campo_comun" name="fmenge[<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['id'];?>
]" id="input_<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['id'];?>
" size="12" maxlength="<?php echo $_smarty_tpl->getVariable('maxlength')->value;?>
" value="0" tabindex="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['FleetList']['iteration'];?>
" /></div>
				<?php if ($_smarty_tpl->getVariable('USERcommander')->value>=1){?><div class="max_h"><input type="button" class="campo_comun" value="Max" onclick="$('#input_<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['id'];?>
').val('<?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['GetMaxAmount'];?>
')" /></div><?php }?><?php }?>
				<div class="demas_c">
				<div class="recursos_c"><?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['price'];?>
</div>
				<div class="espacio_c"><br /></div>
				<div class="tiempo_c">
				<b><?php echo $_smarty_tpl->getVariable('fgf_time')->value;?>
</b></font><br /><?php echo $_smarty_tpl->tpl_vars['FleetListRow']->value['time'];?>

				</div>		
				</div>
			</li>
		<?php }} ?>
		<ul>
	</table>
		<?php if ($_smarty_tpl->getVariable('NotBuilding')->value){?><table width="95%"><center><input class="submit" type="submit" value="<?php echo $_smarty_tpl->getVariable('bd_build_ships')->value;?>
"><center></table><?php }?>
	</form>

</div>
</div>	
<div class="new_footer"></div>
<?php if (!$_smarty_tpl->getVariable('NotBuilding')->value){?><table width="70%" id="infobox" style="border: 2px solid red; text-align:center;background:transparent"><tr><td><?php echo $_smarty_tpl->getVariable('bd_building_shipyard')->value;?>
</td></tr></table><?php }?>		  
<br /><br /><br />	
</div>
<?php if ($_smarty_tpl->getVariable('BuildList')->value!='[]'){?>
    <div id="menu_flotas">
			<div id="lista_misiones">  
			<div class="misiones_top"></div>
			<div class="misiones">
	<table width="50%">
		<tr>
			<td class="transparent">
				<div id="bx"></div> <!-- Nombre e imagen de construccion actual -->
				<form method="POST" action="">
				<input type="hidden" name="mode" value="fleet" />
				<input type="hidden" name="action" value="delete" />
				<table>
				 <tr>
					<td><select style="width:120px" name="auftr[]" id="auftr" size="4"  multiple="multiple"><option>&nbsp;</option></select></td>
				</tr> 
				<tr align="center">
				<td><input type="Submit" class="campo_comun" value="<?php echo $_smarty_tpl->getVariable('bd_cancel_send')->value;?>
" /></td>
				</tr>
				</table>
				</form>
				<center><b><span id="timeleft"></span></b></center> <!-- Tiempo -->
			</td>
		</tr>
    </table>
	</div> 
	<div class="misiones_footer"></div>
<br/ ><br /><br />	
	<?php }?> 
</div>
</div>
</div>
</div>
<script type="text/javascript">
data			= <?php echo $_smarty_tpl->getVariable('BuildList')->value;?>
;
bd_operating	= '<?php echo $_smarty_tpl->getVariable('bd_operating')->value;?>
';
bd_available	= '<?php echo $_smarty_tpl->getVariable('bd_available')->value;?>
';
</script>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>