<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 23:06:16
         compiled from "/var/www/html/xNova/styles/templates/darkmatter_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161276394755133158592179-71740847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c64723c5f5c977da207689843f70f5c9ad213df' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/darkmatter_page.tpl',
      1 => 1343660146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161276394755133158592179-71740847',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('Darkmatter')->value;?>
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
/adds/materia_oscura.jpg);"></div>
<div id="titulo_alternativo">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('caja')->value;?>
1</b></span>
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
/gebaeude/materia_venta.png" align="top" width="80" height="80">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('cantidad_norio1_materia')->value;?>
 <?php echo $_smarty_tpl->getVariable('de_materia')->value;?>
</b></font>
<br /><br />
<center><b><font color="orange"><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
:</font> <?php echo $_smarty_tpl->getVariable('cantidad_norio1')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=materiaoscura&pack=norio1"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
</div>
</div>	
<div class="new_footer"></div>	

<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('caja')->value;?>
2</b></span>
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
/gebaeude/materia_venta.png" align="top" width="80" height="80">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('cantidad_norio2_materia')->value;?>
 <?php echo $_smarty_tpl->getVariable('de_materia')->value;?>
</b></font>
<br /><br />
<center><b><font color="orange"><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
:</font> <?php echo $_smarty_tpl->getVariable('cantidad_norio2')->value;?>
</b></center>
</td>
<td align="right"><a href="?page=materiaoscura&pack=norio2"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
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