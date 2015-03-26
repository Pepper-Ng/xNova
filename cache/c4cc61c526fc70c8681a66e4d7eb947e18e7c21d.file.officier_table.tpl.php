<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 23:06:09
         compiled from "/var/www/html/xNova/styles/templates/oficiales/officier_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3892035085513315130ea54-56589534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4cc61c526fc70c8681a66e4d7eb947e18e7c21d' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/oficiales/officier_table.tpl',
      1 => 1335869782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3892035085513315130ea54-56589534',
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
				<div id="titular_texto" style="display: block;">OFICIALES</div>
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
/adds/oficiales.jpg);"></div>
<!-- CAJA MATERIA OSCURA -->
<div id="titulo_alternativo">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('Darkmatter')->value;?>
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
/gebaeude/materia.png" align="top" width="130" height="130">
</td>
<td>
<font color=yellowgreen size="2"><b><?php echo $_smarty_tpl->getVariable('materia_oscura_descr')->value;?>
</b></font>
</td>
<td align="right"><a href="?page=materiaoscura"><div class="cancelar_c"><span class="comprar_c"><?php echo $_smarty_tpl->getVariable('comprar')->value;?>
&nbsp;</span></div></a></td>
</tr>
</table>
 </div>
 </div>
<div class="new_footer"></div>	
<!-- FIN CAJA MATERIA OSCURA -->	

<!-- CAJA OFICIALES -->
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('oficiales')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
   <table width="95%">		
	<ul class="estructuras_c">
		 <?php $_template = new Smarty_Internal_Template("oficiales/officier_row.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		 
	<ul>
    </table>
</div>
</div>	
<div class="new_footer"></div>
<!-- FIN CAJA OFICIALES -->		  
<br /><br /><br />	
</div>
<div id="buildlist" style="display:none;"></div>  
<br/ ><br /><br />
</div>
</div>
</div>
</div>
<?php if ($_smarty_tpl->getVariable('data')->value){?>
<script type="text/javascript">
data	= <?php echo $_smarty_tpl->getVariable('data')->value;?>
;
</script>
<?php }?>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>