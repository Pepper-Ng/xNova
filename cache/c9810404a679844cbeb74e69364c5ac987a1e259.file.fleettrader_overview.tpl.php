<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 23:07:37
         compiled from "/var/www/html/xNova/styles/templates/fleettrader_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1367565561551331a96f3264-70286272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9810404a679844cbeb74e69364c5ac987a1e259' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/fleettrader_overview.tpl',
      1 => 1329576946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1367565561551331a96f3264-70286272',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('ft_head')->value;?>
</div>
			</div>
        </div>
	</div> 
<?php $_template = new Smarty_Internal_Template("left_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="contenidoMostrado">                               
<div id="elCosoxD">
<div id="planeta" style="background-image: url(styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/fleettrader.jpg);"></div>
<div class="coso_izquierda"></div>
<div class="coso_derecha"></div>
<div id="titulo_alternativo">
    <ul class="tabsbelow">
        <li>
              <span></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>	    
 <form action="" method="POST">
<table width="96%">
		<tbody>
			<tr>
				<th><?php echo $_smarty_tpl->getVariable('ft_selecciona')->value;?>
</th>
				<th><?php echo $_smarty_tpl->getVariable('ft_uniselec')->value;?>
</th>
				<th><?php echo $_smarty_tpl->getVariable('ft_cantidad')->value;?>
</th>
				<th><?php echo $_smarty_tpl->getVariable('ft_unidad')->value;?>
</th>
				<th><?php echo $_smarty_tpl->getVariable('ft_total')->value;?>
</th>
			</tr>
			<tr>
			<td class="remarcado">
			<select name="id" id="id" onChange="updateVars()">
			<?php  $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trade_allowed_ships')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ID']->key => $_smarty_tpl->tpl_vars['ID']->value){
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" label="<?php echo $_smarty_tpl->getVariable('tech')->value[$_smarty_tpl->getVariable('ID')->value];?>
"><?php echo $_smarty_tpl->getVariable('tech')->value[$_smarty_tpl->getVariable('ID')->value];?>
</option>
			<?php }} ?>
			</select>
			</td>
		
			<td class="semi_remarcado">
			<div class="imagenes_fleettrader">
			<?php  $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trade_allowed_ships')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ID']->key => $_smarty_tpl->tpl_vars['ID']->value){
?>
			<img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('tech')->value[$_smarty_tpl->getVariable('ID')->value];?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
.png" height="70" width="70" />
			<?php }} ?>
			</div>
			</td>
			
			<td class="remarcado">
			<div class="bg_input_special">
			<input type="text" class="text" id="count" name="count" onkeyup="Total();" />
			<br><br><input type="button" class="campo_comun" value="Max" onclick="MaxShips();">
			</div>
			</td>
					
			<td class="semi_remarcado" width="100px">
			<img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Metal')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg" /><br /><b><span id="metal">0</span></b><br />
			<img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg" /><br /><b><span id="crystal">0</span></b><br />
			<img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg" /><br /><b><span id="deuterium">0</span></b><br />
			<img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Norio')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg" /><br /><b><span id="norio">0</span></b>
			</td>
			
			<td class="remarcado" width="100px">
			<img name="<?php echo $_smarty_tpl->getVariable('Metal')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg" /><br /><b><span id="total_metal">0</span></b><br />
			<img name="<?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg" /><br /><b><span id="total_crystal">0</span></b><br />
			<img name="<?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg" /><br /><b><span id="total_deuterium">0</span></b><br />
			<img name="<?php echo $_smarty_tpl->getVariable('Norio')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg" /><br /><b><span id="total_norio">0</span></b>
			</td>
			</tr>

					
			<tr><td colspan="5">
			<br /><span class="remarcado" style="padding: 2px 2px 2px 2px; font-weight: bold;"><?php echo $_smarty_tpl->getVariable('ft_charge')->value;?>
: <span id="charge" style="color: #83b301;"></span></span><br />
			<input type="submit" class="submit" value="<?php echo $_smarty_tpl->getVariable('ft_absenden')->value;?>
">
			</td></tr>
			
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
<script type="text/javascript">
var CostInfo = <?php echo $_smarty_tpl->getVariable('CostInfos')->value;?>
;
var Charge = <?php echo $_smarty_tpl->getVariable('Charge')->value;?>
;
</script>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>