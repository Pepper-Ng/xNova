<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 23:07:10
         compiled from "/var/www/html/xNova/styles/templates/bonus_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18384085445513318eae08f1-91372933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f07b323f6f355cfe7a16d3c23f4b3f07706be1a7' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/bonus_page.tpl',
      1 => 1329576924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18384085445513318eae08f1-91372933',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_bonus')->value;?>
 - <?php echo $_smarty_tpl->getVariable('en_venta')->value;?>
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
<div id="planeta" style="background-image: url(styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/bonus.jpg);"></div>
<div id="titulo_alternativo">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('recursos_pack')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
<table width="95%">
<tr>
<td width="130">
<img border="0" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/recursos.png" align="top" width="130" height="130">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('recursos_pack_descr')->value;?>
</b></font>
<br /><br />
<center><b><?php echo $_smarty_tpl->getVariable('coste')->value;?>
<font color=lime><?php echo pretty_number($_smarty_tpl->getVariable('cost_res')->value);?>
</font> <?php echo $_smarty_tpl->getVariable('mo_lang')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=bonus&pack=recursos"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
</div>
</div>	
<div class="new_footer"></div>	

<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('minas_pack')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
<table width="95%">
<tr>
<td width="130">
<img border="0" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/minas.png" align="top" width="130" height="130">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('minas_pack_descr')->value;?>
</b></font>
<br /><br />
<center><b><?php echo $_smarty_tpl->getVariable('coste')->value;?>
<font color=lime><?php echo pretty_number($_smarty_tpl->getVariable('cost_mine')->value);?>
</font> <?php echo $_smarty_tpl->getVariable('mo_lang')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=bonus&pack=mineros"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
</div>
</div>	
<div class="new_footer"></div>

<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('almacenes_pack')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
<table width="95%">
<tr>
<td width="130">
<img border="0" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/almacenes.png" align="top" width="130" height="130">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('almacenes_pack_descr')->value;?>
</b></font>
<br /><br />
<center><b><?php echo $_smarty_tpl->getVariable('coste')->value;?>
<font color=lime><?php echo pretty_number($_smarty_tpl->getVariable('cost_stor')->value);?>
</font> <?php echo $_smarty_tpl->getVariable('mo_lang')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=bonus&pack=almacenes"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
</div>
</div>	
<div class="new_footer"></div>

<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('flotas_pack')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
<table width="95%">
<tr>
<td width="130">
<img border="0" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/floteros.png" align="top" width="130" height="130">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('flotas_pack_descr')->value;?>
</b></font>
<br /><br />
<center><b><?php echo $_smarty_tpl->getVariable('coste')->value;?>
<font color=lime><?php echo pretty_number($_smarty_tpl->getVariable('cost_flot')->value);?>
</font> <?php echo $_smarty_tpl->getVariable('mo_lang')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=bonus&pack=floteros"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
</div>
</div>	
<div class="new_footer"></div>

<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('bunkers_pack')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
<table width="95%">
<tr>
<td width="130">
<img border="0" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/defensas.png" align="top" width="130" height="130">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('bunkers_pack_descr')->value;?>
</b></font>
<br /><br />
<center><b><?php echo $_smarty_tpl->getVariable('coste')->value;?>
<font color=lime><?php echo pretty_number($_smarty_tpl->getVariable('cost_bunk')->value);?>
</font> <?php echo $_smarty_tpl->getVariable('mo_lang')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=bonus&pack=bunkeros"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
</div>
</div>	
<div class="new_footer"></div>

<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('tecnos_pack')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
<table width="95%">
<tr>
<td width="130">
<img border="0" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/tecnologia.png" align="top" width="130" height="130">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('tecnos_pack_descr')->value;?>
</b></font>
<br /><br />
<center><b><?php echo $_smarty_tpl->getVariable('coste')->value;?>
<font color=lime><?php echo pretty_number($_smarty_tpl->getVariable('cost_tecno')->value);?>
</font> <?php echo $_smarty_tpl->getVariable('mo_lang')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=bonus&pack=tecnologias"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
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