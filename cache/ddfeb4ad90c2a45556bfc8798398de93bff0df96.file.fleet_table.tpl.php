<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:11:03
         compiled from "/var/www/html/xNova/styles/templates/flotas/fleet_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43837989255131657100893-33101320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddfeb4ad90c2a45556bfc8798398de93bff0df96' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/flotas/fleet_table.tpl',
      1 => 1329576378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43837989255131657100893-33101320',
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
<div id="topnav" class="header_g"> 	
		<?php $_template = new Smarty_Internal_Template("overall_topnav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>	
			<div id="titular">
			<div id="estructura_titular" style="position:relative;">
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('fl_new_mission_title')->value;?>
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
/adds/flotas1.jpg);"></div>
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('fl_fleets')->value;?>
:</b> <?php echo $_smarty_tpl->getVariable('flyingfleets')->value;?>
 / <?php echo $_smarty_tpl->getVariable('maxfleets')->value;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $_smarty_tpl->getVariable('fl_expeditions')->value;?>
:</b> <?php echo $_smarty_tpl->getVariable('currentexpeditions')->value;?>
 / <?php echo $_smarty_tpl->getVariable('maxexpeditions')->value;?>
 			<a class="right" href="javascript:maxShips();"><b><font color="red">>></font> <?php echo $_smarty_tpl->getVariable('fl_select_all_ships')->value;?>
</b></a> </span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>	
	<br />
		
        <?php if (!$_smarty_tpl->getVariable('slots_available')->value){?>
		<table width="95%"><tr><th colspan="9" ><font color="red"><b><?php echo $_smarty_tpl->getVariable('fl_no_more_slots')->value;?>
</b></font></th></tr></table>
		<?php }?>
        <table width="95%" height="100%">
		<form action="?page=fleet1" method="POST">
		<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
" />
        <input type="hidden" name="system" value="<?php echo $_smarty_tpl->getVariable('system')->value;?>
" />
        <input type="hidden" name="planet" value="<?php echo $_smarty_tpl->getVariable('planet')->value;?>
" />
        <input type="hidden" name="planet_type" value="<?php echo $_smarty_tpl->getVariable('planettype')->value;?>
" />
        <input type="hidden" name="mission" value="<?php echo $_smarty_tpl->getVariable('target_mission')->value;?>
" />
        <input type="hidden" name="maxepedition" value="<?php echo $_smarty_tpl->getVariable('envoimaxexpedition')->value;?>
" />
        <input type="hidden" name="curepedition" value="<?php echo $_smarty_tpl->getVariable('expeditionencours')->value;?>
" />
        <input type="hidden" name="target_mission" value="<?php echo $_smarty_tpl->getVariable('target_mission')->value;?>
" />
		<div>
			<ul class="naves">
		<?php  $_smarty_tpl->tpl_vars['FleetRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('FleetsOnPlanet')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['FleetRow']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['Fleets']['total'] = $_smarty_tpl->tpl_vars['FleetRow']->total;
if ($_smarty_tpl->tpl_vars['FleetRow']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['FleetRow']->key => $_smarty_tpl->tpl_vars['FleetRow']->value){
?>   
			<?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed']!=0){?>
			<li>
			<img class="tooltip" name="<font color='orange'><b><?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['name'];?>
:</b></font> <td id='ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_value'><?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['count'];?>
</td><br /><b><?php echo $_smarty_tpl->getVariable('fl_speed_title')->value;?>
</b> <?php echo pretty_number($_smarty_tpl->tpl_vars['FleetRow']->value['speed']);?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
.png" width="70" height="70" /><br /><?php }else{ ?>&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['id']==212){?> <?php }else{ ?><font color="orange"><b><ul id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_value"><?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['count'];?>
</ul></b></font><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed']!=0){?>
			<input name="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
" id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_input" class="campo_comun" size="10" value="" /><a href="javascript:maxShip('ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
');"><img class="max_img" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/none.png" /></a>
			</li>
			<?php }else{ ?>
			&nbsp;
			<?php }?>
		<?php }} ?>
			</ul>
			</div>
	
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['Fleets']['total']==0){?>
			<table>
			<th>&nbsp;<?php echo $_smarty_tpl->getVariable('fl_no_ships')->value;?>
&nbsp;</th>
			</table>
			<?php }?>
			<table><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['Fleets']['total']>0){?><input type="submit" class="submit" value="<?php echo $_smarty_tpl->getVariable('fl_continue')->value;?>
" /><?php }?></table>
        </form>
		</table>
        </div>
</div>	
<div class="new_footer"></div>	
<?php if (isset($_smarty_tpl->getVariable('aks_invited_mr',null,true,false)->value)){?>  	
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('fl_sac_of_fleet')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
<div>
<?php $_template = new Smarty_Internal_Template("flotas/fleetACS_table.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</div>
</div>	
<div class="new_footer"></div>		
<?php }?>
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('fl_bonus')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
<div>
<div id="info_centro">	
	<span id="info_izquierda">
		<img class="tooltip" name="<font color='orange'><b><?php echo $_smarty_tpl->getVariable('fl_bonus_attack')->value;?>
:</b></font> +<?php echo $_smarty_tpl->getVariable('bonus_attack')->value;?>
%" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/Atacar.png" />
		<img class="tooltip" name="<font color='orange'><b><?php echo $_smarty_tpl->getVariable('fl_bonus_defensive')->value;?>
:</b></font> +<?php echo $_smarty_tpl->getVariable('bonus_defensive')->value;?>
%" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/defensa.png" />
		<img class="tooltip" name="<font color='orange'><b><?php echo $_smarty_tpl->getVariable('fl_bonus_shield')->value;?>
:</b></font> +<?php echo $_smarty_tpl->getVariable('bonus_shield')->value;?>
%" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/shield.png" />	
	</span>	
	<span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</span>
	<span id="info_derecha">
		<img class="tooltip" name="<font color='orange'><b><?php echo $_smarty_tpl->getVariable('bonus_comp')->value;?>
:</b></font> +<?php echo $_smarty_tpl->getVariable('bonus_combustion')->value;?>
%" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/combustion.png" />
		<img class="tooltip" name="<font color='orange'><b><?php echo $_smarty_tpl->getVariable('bonus_impul')->value;?>
:</b></font> +<?php echo $_smarty_tpl->getVariable('bonus_impulse')->value;?>
%" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/impulso.png" />
		<img class="tooltip" name="<font color='orange'><b><?php echo $_smarty_tpl->getVariable('bonus_hyper')->value;?>
:</b></font> +<?php echo $_smarty_tpl->getVariable('bonus_hyperspace')->value;?>
%" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/hiperespacio.png" />	
	</span>
</div>	
</div>
</div>	
<div class="new_footer"></div>		
<br /><br /><br />			
</div>
<div id="menu_flotas">
			<div id="lista_misiones">    
                <p><b><?php echo $_smarty_tpl->getVariable('fl_titulo_misiones')->value;?>
</b></p>  
			 <?php  $_smarty_tpl->tpl_vars['FlyingFleetRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('FlyingFleetList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['FlyingFleetRow']->key => $_smarty_tpl->tpl_vars['FlyingFleetRow']->value){
?>
			<div class="misiones_top"></div>
			<div class="misiones"> 
			<table id="contenido_informativo">
			<span class="tooltip planeta_misiones" name="<table>
			<tr><td>
			<b><font color='orange'><?php echo $_smarty_tpl->getVariable('fl_beginning')->value;?>
:</font></b> [<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['start_galaxy'];?>
:</font><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['start_system'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['start_planet'];?>
]
			</td></tr>
			<tr><td>
			<b><font color='orange'><?php echo $_smarty_tpl->getVariable('fl_destiny')->value;?>
:</font></b> [<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['end_galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['end_system'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['end_planet'];?>
]
			</td></tr>
			</table>"></span>
			
			<span class="tooltip naves_misiones" name="<table>
			<tr><th>
			<?php echo $_smarty_tpl->getVariable('fl_info_detail')->value;?>

			</th></tr>
			<tr><td>
			<?php  $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['FleetList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['count']->key => $_smarty_tpl->tpl_vars['count']->value){
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['count']->key;
?>
			<b><font color='orange'><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
:</font></b> <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 <br />
			<?php }} ?>
			</td></tr>
			</table>"></span>
			
			<span class="tooltip info_misiones" name="<table>
			<tr><td>
			<b><font color='orange'><?php echo $_smarty_tpl->getVariable('fl_mission')->value;?>
:</font></b> <?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['missionname'];?>
</td></tr>
			<tr><td>
			<b><font color='orange'><?php echo $_smarty_tpl->getVariable('fl_departure')->value;?>
:</font></b><br /> <?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['start_time'];?>

			</td></tr>
			<tr><td>
			<b><font color='orange'><?php echo $_smarty_tpl->getVariable('fl_arrival')->value;?>
:</font></b><br /> <?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['end_time'];?>

			</td></tr>
			</table>"></span>
			</table><center>
			<b><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['backin'];?>
</b><br /> 
			<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['way']!=1){?> 
			<form action="?page=fleet&amp;action=sendfleetback" method="post">
			<input name="fleetid" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden" />
			<input value="&nbsp;<?php echo $_smarty_tpl->getVariable('fl_send_back')->value;?>
&nbsp;" class="campo_comun" type="submit" />
			</form> 
			<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission']==1){?>
			<form action="?page=fleet&amp;action=getakspage" method="post">
			<input name="fleetid" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden" />
			<input value="&nbsp;<?php echo $_smarty_tpl->getVariable('fl_acs')->value;?>
&nbsp;" class="campo_comun" type="submit" />
			</form>
			<?php }?>
			<?php }else{ ?>
			<font color="lime"><b>--<?php echo $_smarty_tpl->getVariable('fl_returning')->value;?>
--</b></font>
			<?php }?>
			</center></div> 
			<div class="misiones_footer"></div>			
		<?php }} else { ?>
	<div class="misiones_top"></div>
	<div class="misiones"><center>
	<b><?php echo $_smarty_tpl->getVariable('fl_no_misiones')->value;?>
</b>
	</center></div>	
	<div class="misiones_footer"></div>	
	<?php } ?> 
		</div>		
</div>	
</div>
</div>	
</div>	
</div>
<?php if (isset($_GET['alert'])){?>
<script type="text/javascript">
alert(unescape("<?php echo $_GET['alert'];?>
"));
</script>
<?php }?>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>