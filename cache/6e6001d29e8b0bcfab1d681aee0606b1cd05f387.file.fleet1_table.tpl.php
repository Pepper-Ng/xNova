<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:12:35
         compiled from "/var/www/html/xNova/styles/templates/flotas/fleet1_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:448686877551316b33cbbb6-73294029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6001d29e8b0bcfab1d681aee0606b1cd05f387' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/flotas/fleet1_table.tpl',
      1 => 1329576364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448686877551316b33cbbb6-73294029',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('fl_send_fleet')->value;?>
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
/adds/flotas2.jpg);"></div>
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span>&nbsp;</span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>	<br />
<form action="game.php?page=fleet2" method="post" onsubmit="return CheckTarget()" id="form">
	<input type="hidden" name="fleet_group" value="0" />
	<input type="hidden" name="mission" value="<?php echo $_smarty_tpl->getVariable('mission')->value;?>
" />
	<input type="hidden" name="usedfleet" value="<?php echo $_smarty_tpl->getVariable('fleetarray')->value;?>
" />
		<table class="datos_vuelo" >
		   <tr>
            	<td>
				
                    <input class="campo_comun" name="galaxy" size="3" maxlength="2" onChange="updateVars()" onKeyUp="updateVars()" value="<?php echo $_smarty_tpl->getVariable('galaxy_post')->value;?>
">
                    <input class="campo_comun" name="system" size="3" maxlength="3" onChange="updateVars()" onKeyUp="updateVars()" value="<?php echo $_smarty_tpl->getVariable('system_post')->value;?>
">
                    <input class="campo_comun" name="planet" size="3" maxlength="2" onChange="updateVars()" onKeyUp="updateVars()" value="<?php echo $_smarty_tpl->getVariable('planet_post')->value;?>
">
                    <select name="planettype" onChange="updateVars()" onKeyUp="updateVars()">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('options_selector')->value,'selected'=>$_smarty_tpl->getVariable('options')->value),$_smarty_tpl);?>

                    </select>
					<select name="speed" onChange="updateVars()" onKeyUp="updateVars()">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('AvailableSpeeds')->value),$_smarty_tpl);?>

					</select><font color="#f2d999"><b>%</b></font>
                    </select>
            	</td>
            </tr>

            <tr class="distancia">
            	<td style="height:50px;"><font color="#2b0000"><h4 class="tooltip" style="cursor:help;" name="<?php echo $_smarty_tpl->getVariable('fl_distance')->value;?>
" id="distance">0</h4></font></td>
            </tr>
			<tr>
            	<td><input class="submit" type="submit" value="<?php echo $_smarty_tpl->getVariable('fl_continue')->value;?>
"></td>
            </tr>	

			</table>

			<table class="info_vuelo" align="right" width="300px">
            <tr class="semi_remarcado">
            	<td><b><?php echo $_smarty_tpl->getVariable('fl_flying_time')->value;?>
:</b></td>
            	<td id="duration">0</td>
            </tr>
            <tr class="remarcado">
                <td><b><?php echo $_smarty_tpl->getVariable('fl_fuel_consumption')->value;?>
:</b></td>
                <td id="consumption">0</td>
            </tr>
            <tr class="semi_remarcado">
                <td><b><?php echo $_smarty_tpl->getVariable('fl_max_speed')->value;?>
:</b></td>
                <td id="maxspeed">0</td>
            </tr>
            <tr class="remarcado">
                <td><b><?php echo $_smarty_tpl->getVariable('fl_cargo_capacity')->value;?>
:</b></td>
                <td id="storage">0</td>
            </tr>
			</table>

</form>
 </div>
</div>
<div class="new_footer"></div>	
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('fl_my_planets')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
<div>
<br />
<table width="270px"><tr>
			<?php  $_smarty_tpl->tpl_vars['ColonyRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('Colonylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ColonyList']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ColonyRow']->key => $_smarty_tpl->tpl_vars['ColonyRow']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ColonyList']['iteration']++;
?>
			<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['ColonyList']['iteration'])){?><?php }?>
			<td><a href="javascript:setTarget(<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['galaxy'];?>
,<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['system'];?>
,<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['planet'];?>
,<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['planet_type'];?>
);updateVars();"><img width="50" height="50" border="0" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['name'];?>
" /><br /><b><?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['name'];?>
</b> <br /><?php if ($_smarty_tpl->tpl_vars['ColonyRow']->value['planet_type']==3){?><?php echo $_smarty_tpl->getVariable('fl_moon_shortcut')->value;?>
<?php }?>[<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['planet'];?>
]</a></td>
			<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['ColonyList']['iteration'])){?><?php }?>
			<?php }} else { ?>
			<?php echo $_smarty_tpl->getVariable('fl_no_colony')->value;?>
<br />
			<?php } ?>
			<?php if ($_smarty_tpl->getVariable('AKSList')->value){?>
			<?php echo $_smarty_tpl->getVariable('fl_acs_title')->value;?>
<br />
            <?php  $_smarty_tpl->tpl_vars['AKSRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('AKSList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['AKSRow']->key => $_smarty_tpl->tpl_vars['AKSRow']->value){
?>
			<a href="javascript:setACSTarget(<?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['galaxy'];?>
,<?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['system'];?>
,<?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['planet'];?>
,<?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['planet_type'];?>
, <?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['id'];?>
);updateVars();"><?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['name'];?>
 - [<?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['AKSRow']->value['planet'];?>
]</a><br />
			<?php }} ?>
			<?php }?>			
</tr></table>
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