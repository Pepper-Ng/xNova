<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:21:28
         compiled from "/var/www/html/xNova/styles/templates/mercader/trader_norio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1587972827551326d8366c36-71059643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0eb5ff97c3891bc2e54daa99080ed48d118611' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/mercader/trader_norio.tpl',
      1 => 1425854028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587972827551326d8366c36-71059643',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('tr_sell_norio')->value;?>
</div>
			</div>
        </div>
	</div> 
<?php $_template = new Smarty_Internal_Template("left_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<script type="text/javascript">
res_a = <?php echo $_smarty_tpl->getVariable('mod_ma_res_a')->value;?>
;
res_b = <?php echo $_smarty_tpl->getVariable('mod_ma_res_b')->value;?>
;
res_c = <?php echo $_smarty_tpl->getVariable('mod_ma_res_c')->value;?>
;
</script>
<div id="contenidoMostrado">                               
<div id="elCosoxD">
<div class="coso_izquierda"></div>
<div class="coso_derecha"></div>
<div id="planeta" style="background-image: url(styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/mercader.jpg);"></div>
<div id="titulo_alternativo">
    <ul class="tabsbelow">
        <li>
              <span></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>
    <form id="trader" action="" method="post">
    <input type="hidden" name="ress" value="norio">
   <input type="hidden" name="action" value="trade">
		<table cellspacing="0" id="mercado_tabla" >
			<tbody><tr>
                    <td></td>
					<td><?php echo $_smarty_tpl->getVariable('tr_resource')->value;?>
</td>
		            <td><?php echo $_smarty_tpl->getVariable('tr_amount')->value;?>
</td>
					<td><?php echo $_smarty_tpl->getVariable('tr_quota_exchange')->value;?>
</td>
				</tr>
				<!-- Metal -->
				<tr class="alt_2">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg"></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Metal')->value;?>
</td>
    				<td>
					<div class="bg_input"><input name="metal" class="text" id="metal" type="text" value="0" onkeyup="calcul('<?php echo $_smarty_tpl->getVariable('ress')->value;?>
')" style="text-align: right;" /></div>
					</td>
						<td class="rate tipsTitle">
                            <span class="marca_color tooltip" name="<h2><?php echo $_smarty_tpl->getVariable('tr_quota_exchange')->value;?>
:</h4><span class='marca_color'><b>1 <?php echo $_smarty_tpl->getVariable('Metal')->value;?>
</b></span> = <?php echo $_smarty_tpl->getVariable('mod_ma_res_a')->value;?>
 <?php echo $_smarty_tpl->getVariable('Norio')->value;?>
"><?php echo $_smarty_tpl->getVariable('mod_ma_res_a')->value;?>
</span>
						</td>
    			</tr>	
				<!-- Cristal -->
				<tr class="alt_2">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg"></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
</td>
    				<td>
					<div class="bg_input"><input name="crystal" class="text" id="crystal" type="text" value="0" onkeyup="calcul('<?php echo $_smarty_tpl->getVariable('ress')->value;?>
')" style="text-align: right;" /></div>
					</td>
						<td class="rate tipsTitle">
                            <span class="marca_color tooltip" name="<h2><?php echo $_smarty_tpl->getVariable('tr_quota_exchange')->value;?>
:</h4><span class='marca_color'><b>1 <?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
</b></span> = <?php echo $_smarty_tpl->getVariable('mod_ma_res_b')->value;?>
 <?php echo $_smarty_tpl->getVariable('Norio')->value;?>
"><?php echo $_smarty_tpl->getVariable('mod_ma_res_b')->value;?>
</span>
						</td>
    			</tr>
				<!-- Deuterio -->
				<tr class="alt_2">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg"></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
</td>
						<td>
							<div class="bg_input"><input name="deuterium" class="text" id="deuterium" type="text" value="0" onkeyup="calcul('<?php echo $_smarty_tpl->getVariable('ress')->value;?>
')" style="text-align: right;" size="10" class="textinput" /></div>
						</td>
						<td class="rate tipsTitle">
                            <span class="marca_color tooltip"  name="<h2><?php echo $_smarty_tpl->getVariable('tr_quota_exchange')->value;?>
:</h4><span class='marca_color'><b>1 <?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
</b></span> = <?php echo $_smarty_tpl->getVariable('mod_ma_res_c')->value;?>
 <?php echo $_smarty_tpl->getVariable('Norio')->value;?>
"><?php echo $_smarty_tpl->getVariable('mod_ma_res_c')->value;?>
</span>
						</td>
				</tr>
				<!-- Norio -->
				<tr class="alt">
                    <td class="resIcon noCenter"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg"></td>
					<td class="noCenter"><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
</td>
    				<td class="marca_color" id="norio">&nbsp;</td>
						<td class="rate">1</td>
				
    			</tr>
				<!-- Otras cosas -->
				<tr>
					<td style="padding:10px" colspan="4"><?php echo $_smarty_tpl->getVariable('tr_descr')->value;?>
	
					<input type="submit" value="<?php echo $_smarty_tpl->getVariable('tr_exchange')->value;?>
" class="submit" />
					</td>
				</tr>
				<tr class="alt_2">
				<span class="tr_economia">
				<img class="tooltip" style="cursor: help" name="<?php echo $_smarty_tpl->getVariable('tr_cost_dm_trader')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/economia.png" height="30" width="30"/>
				<img class="tooltip" style="cursor: help" name="<?php echo $_smarty_tpl->getVariable('tr_almacenes')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/infos/info.png" height="30" width="30"/>
				</span>
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