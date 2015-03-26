<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:18:21
         compiled from "/var/www/html/xNova/styles/templates/recursos/resources_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9825887265513180db0dd36-75831491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0940e263bfe81831ce338b8bc3f03a451ff9bb4b' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/recursos/resources_overview.tpl',
      1 => 1343909732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9825887265513180db0dd36-75831491',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_resources')->value;?>
</div>
			</div>
        </div>
	</div> 
<?php $_template = new Smarty_Internal_Template("left_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="contenidoMostrado">                               
<div id="elCosoxD">
<div class="coso_izquierda"></div>
<div class="coso_derecha"></div>
<div id="planeta">
<?php echo $_smarty_tpl->getVariable('header')->value;?>

</div>
<div id="titulo_alternativo">
    <ul class="tabsbelow">
        <li>
              <span><?php echo $_smarty_tpl->getVariable('Production_of_resources_in_the_planet')->value;?>
</span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>	
    <form action="" method="post">
    <table class="recursos_tabla" width="100%">
    <tbody>
	<tr>
        <td>&nbsp;</td>
		<td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Metal')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg" /></td>
        <td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg" /></td>
        <td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg" /></td>
        <td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Norio')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg" /></td>		
        <td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Energy')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/energia.jpg" /></td>
    </tr><tr style="height: 22px">
        <td><b><?php echo $_smarty_tpl->getVariable('rs_basic_income')->value;?>
</b></td>
        <td class="semi_remarcado"><b><?php echo $_smarty_tpl->getVariable('metal_basic_income')->value;?>
</b></td>
        <td class="semi_remarcado"><b><?php echo $_smarty_tpl->getVariable('crystal_basic_income')->value;?>
</b></td>
        <td class="semi_remarcado"><b><?php echo $_smarty_tpl->getVariable('deuterium_basic_income')->value;?>
</b></td>
        <td class="semi_remarcado"><b><?php echo $_smarty_tpl->getVariable('norio_basic_income')->value;?>
</b></td>		
        <td class="semi_remarcado"><b><?php echo $_smarty_tpl->getVariable('energy_basic_income')->value;?>
</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['CurrPlanetInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('CurrPlanetList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['CurrPlanetInfo']->key => $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value){
?>
	<tr>
		<td><img class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['type'];?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['id'];?>
.png" width="50" height="50" /><br /><font color="lime">(<?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['level'];?>
 <?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['level_type'];?>
)</font></td>
		<td class="semi_remarcado"><h3 class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['irs'];?>
"><?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['metal_type'];?>
</h3></td>
		<td class="remarcado"><h3 class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['irs'];?>
"><?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['crystal_type'];?>
</h3></td>
		<td class="semi_remarcado"><h3 class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['irs'];?>
"><?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['deuterium_type'];?>
</h3></td>
		<td class="remarcado"><h3 class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['irs'];?>
"><?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['norio_type'];?>
</h3></td>		
		<td class="semi_remarcado"><h3><?php echo $_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['energy_type'];?>
</h3></td>
		<td>
			<?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['name'],'options'=>$_smarty_tpl->getVariable('option')->value,'selected'=>$_smarty_tpl->tpl_vars['CurrPlanetInfo']->value['optionsel']),$_smarty_tpl);?>

		</td>
	</tr>
    <?php }} ?>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
        <td><b><?php echo $_smarty_tpl->getVariable('rs_storage_capacity')->value;?>
</b></td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('metalmax')->value;?>
</td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('crystalmax')->value;?>
</td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('deuteriummax')->value;?>
</td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('noriomax')->value;?>
</td>
        <td class="remarcado">-</td>
    </tr><tr>
        <td><b><?php echo $_smarty_tpl->getVariable('rs_sum')->value;?>
</b></td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('metal_total')->value;?>
</td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('crystal_total')->value;?>
</td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('deuterium_total')->value;?>
</td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('norio_total')->value;?>
</td>		
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('energy_total')->value;?>
</td>
		<td><input class="campo_comun" name="action" value="<?php echo $_smarty_tpl->getVariable('rs_calculate')->value;?>
" type="submit"></td>	
    </tr>
    <tr>
        <td><b><?php echo $_smarty_tpl->getVariable('rs_daily')->value;?>
</b></td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('daily_metal')->value;?>
</td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('daily_crystal')->value;?>
</td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('daily_deuterium')->value;?>
</td>
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('daily_norio')->value;?>
</td>		
        <td class="remarcado"><?php echo $_smarty_tpl->getVariable('energy_total')->value;?>
</td>
    </tr>
    <tr>
        <td><b><?php echo $_smarty_tpl->getVariable('rs_weekly')->value;?>
</b></td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('weekly_metal')->value;?>
</td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('weekly_crystal')->value;?>
</td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('weekly_deuterium')->value;?>
</td>
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('weekly_norio')->value;?>
</td>		
        <td class="semi_remarcado"><?php echo $_smarty_tpl->getVariable('energy_total')->value;?>
</td>
    </tr>
    </tbody>
    </table>
    </form>
        </div>
</div>	
<div class="new_footer"></div>
<br /><br /><br />		
</div>
</div>
</div>	
</div>	
</div>	
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>