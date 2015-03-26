<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:12:39
         compiled from "/var/www/html/xNova/styles/templates/flotas/fleet2_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:868437260551316b763ca15-23628237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8040a3a7f17b3b0ae403d0a60dd0ae227d1f1fe5' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/flotas/fleet2_table.tpl',
      1 => 1329576370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '868437260551316b763ca15-23628237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/var/www/html/xNova/includes/libs/Smarty/plugins/function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('thisgalaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('thissystem')->value;?>
:<?php echo $_smarty_tpl->getVariable('thisplanet')->value;?>
 - <?php if ($_smarty_tpl->getVariable('thisplanet_type')->value==3){?><?php echo $_smarty_tpl->getVariable('fl_moon')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('fl_planet')->value;?>
<?php }?></div>
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
/adds/flotas3.jpg);"></div>
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span><b><font color="red">>></font><?php echo $_smarty_tpl->getVariable('fl_fuel_consumption')->value;?>
:</b> <?php echo pretty_number($_smarty_tpl->getVariable('consumption')->value);?>
</span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>	
<form action="game.php?page=fleet3" method="post">
<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
">
<input type="hidden" name="system" value="<?php echo $_smarty_tpl->getVariable('system')->value;?>
">
<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->getVariable('planet')->value;?>
">
<input type="hidden" name="planettype" value="<?php echo $_smarty_tpl->getVariable('planettype')->value;?>
">
<input type="hidden" name="speed" value="<?php echo $_smarty_tpl->getVariable('speed')->value;?>
">
<input type="hidden" name="fleet_group" value="<?php echo $_smarty_tpl->getVariable('fleet_group')->value;?>
">
<input type="hidden" name="usedfleet" value="<?php echo $_smarty_tpl->getVariable('fleetarray')->value;?>
">
<table cellspacing="0" cellpadding="0" id="mercado_tabla" >
			<tbody><tr>
                    <td></td>
					<td><?php echo $_smarty_tpl->getVariable('fl_resources')->value;?>
</td>
		            <td><?php echo $_smarty_tpl->getVariable('fl_cantidad')->value;?>
</td>
					<td><?php echo $_smarty_tpl->getVariable('fl_accion')->value;?>
</td>
				</tr>
				<!-- Metal -->
				<tr class="alt">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg" /></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Metal')->value;?>
</td>
    				<td>
					<div class="bg_input"><input class="text" name="metal" size="10" onchange="calculateTransportCapacity();" type="text" style="text-align: right;" /></div>
					</td>
						<td>
                            <span class="marca_color"><a href="javascript:maxResource('metal');"><span class="max"></span></a></span>
						</td>
    			</tr>	
				<!-- Cristal -->
				<tr class="alt_2">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg" /></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
</td>
    				<td>
					<div class="bg_input"><input class="text" name="crystal" size="10" onchange="calculateTransportCapacity();" type="text" style="text-align: right;" /></div>
					</td>
						<td>
                             <span class="marca_color"><a href="javascript:maxResource('crystal');"><span class="max"></span></a></span>
						</td>
    			</tr>
				<!-- Deuterio -->
				<tr class="alt">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg" /></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
</td>
						<td>
							<div class="bg_input"><input class="text" name="deuterium" onchange="calculateTransportCapacity();" type="text" style="text-align: right;" size="10" /></div>
						</td>
						<td>
                            <span class="marca_color"><a href="javascript:maxResource('deuterium');"><span class="max"></span></a></span>
						</td>
				</tr>
				<!-- Norio -->
				<tr class="alt_2">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg" /></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
</td>
						<td>
							<div class="bg_input"><input class="text" name="norio" onchange="calculateTransportCapacity();" type="text" style="text-align: right;" size="10" /></div>
						</td>
						<td>
                             <span class="marca_color"><a href="javascript:maxResource('norio');"><span class="max"></span></a></span>
						</td>
				</tr>
				<!-- Otras cosas -->
				<tr class="alt" style="height:20px;">
        			<td><?php echo $_smarty_tpl->getVariable('fl_resources_left')->value;?>
</td>
					<td colspan="2" id="remainingresources">0</td>
					<td><b><a href="javascript:maxResources()"><font color="orange"><?php echo $_smarty_tpl->getVariable('fl_all_resources')->value;?>
</font></a></b></td>
				</tr>
				<tr>
					<td style="padding:10px" colspan="4"><?php echo $_smarty_tpl->getVariable('tr_descr')->value;?>
	
					<input type="submit" value="<?php echo $_smarty_tpl->getVariable('fl_continue')->value;?>
" class="submit" />
					</td>
				</tr>
			</tbody>
		</table>
</div>
</div>
<div class="new_footer"></div>	
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('fl_mission')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
<div>
<br />
<table>
<tr>
<td style="width:50%;margin:0;padding:0;">
        		<table width="270px"><tr>
        			<?php  $_smarty_tpl->tpl_vars['MissionName'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['MissionID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('MissionSelector')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['MissionName']->key => $_smarty_tpl->tpl_vars['MissionName']->value){
 $_smarty_tpl->tpl_vars['MissionID']->value = $_smarty_tpl->tpl_vars['MissionName']->key;
?>
					
						<td>
						 <label for="radio_<?php echo $_smarty_tpl->tpl_vars['MissionID']->value;?>
">
                     <img class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['MissionName']->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/<?php echo $_smarty_tpl->tpl_vars['MissionID']->value;?>
.png" /><br /><input id="radio_<?php echo $_smarty_tpl->tpl_vars['MissionID']->value;?>
" type="radio" name="mission" value="<?php echo $_smarty_tpl->tpl_vars['MissionID']->value;?>
" <?php if ($_smarty_tpl->getVariable('mission')->value==$_smarty_tpl->tpl_vars['MissionID']->value){?>checked="checked"<?php }?> style="width:60px;">
                  </label>
						</td>
					<?php }} ?>	
						<tr>
							<?php if ($_smarty_tpl->getVariable('MissionID')->value==15){?><div style="color:red"><?php echo $_smarty_tpl->getVariable('fl_expedition_alert_message')->value;?>
</div><br /><?php }?>
							<?php if ($_smarty_tpl->getVariable('MissionID')->value==11){?><div style="color:red"><?php echo $_smarty_tpl->getVariable('fl_dm_alert_message')->value;?>
</div><br /><?php }?>
						</tr>					
					</tr>					
        		</table>
        	</td>			
</tr>
<?php if ($_smarty_tpl->getVariable('StaySelector')->value){?>
	<tr style="height:20px;">
		<th class="transparent" colspan="3"><?php echo $_smarty_tpl->getVariable('fl_hold_time')->value;?>
</th>
	</tr>
	<tr style="height:20px;">
		<td class="transparent" colspan="3">
			<?php echo smarty_function_html_options(array('name'=>'holdingtime','options'=>$_smarty_tpl->getVariable('StaySelector')->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getVariable('fl_hours')->value;?>

		</td>
	</tr>
<?php }?> 
</table></form>
</div>
</div>	
<div class="new_footer"></div>
<br /><br /><br />			
</div>
</div>
</div>	
</div>	
</div>
<script type="text/javascript">
data	= <?php echo $_smarty_tpl->getVariable('fleetdata')->value;?>
;
</script>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>