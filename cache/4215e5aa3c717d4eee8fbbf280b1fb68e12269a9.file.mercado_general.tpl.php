<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:21:26
         compiled from "/var/www/html/xNova/styles/templates/mercado_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:733222284551326d61efd56-09022950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4215e5aa3c717d4eee8fbbf280b1fb68e12269a9' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/mercado_general.tpl',
      1 => 1336908042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '733222284551326d61efd56-09022950',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_trader')->value;?>
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
/adds/mercado.jpg);"></div>

<div id="titulo_alternativo">
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
		 <?php if (!CheckModule(13)){?><li>
					<a href="game.php?page=trader"><img class="tooltip" name="<table>
					<tr>
					<th colspan=2><?php echo $_smarty_tpl->getVariable('mercado_negro')->value;?>
</th>
					</tr>
					<tr>
					<td><?php echo $_smarty_tpl->getVariable('mercado_negro_desc')->value;?>
</td>
					</tr>
					</table>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/mercaderr.jpg" /></a>
				<div class="nivel_c"><b><?php echo $_smarty_tpl->getVariable('mercado_negro')->value;?>
</b></div>
		</li><?php }?>
		
		<li>
					<a href="game.php?page=bonus"><img class="tooltip" name="<table>
					<tr>
					<th colspan=2><?php echo $_smarty_tpl->getVariable('bonus')->value;?>
</th>
					</tr>
					<tr>
					<td><?php echo $_smarty_tpl->getVariable('bonus_desc')->value;?>
</td>
					</tr>
					</table>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/bonuss.jpg" /></a>
				<div class="nivel_c"><b><?php echo $_smarty_tpl->getVariable('bonus')->value;?>
</b></div>
		</li>

		 <?php if (!CheckModule(38)){?><li>
					<a href="game.php?page=fleettrader"><img class="tooltip" name="<table>
					<tr>
					<th colspan=2><?php echo $_smarty_tpl->getVariable('comerciante')->value;?>
</th>
					</tr>
					<tr>
					<td><?php echo $_smarty_tpl->getVariable('comerciante_desc')->value;?>
</td>
					</tr>
					</table>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/comerciante.jpg" /></a>
				<div class="nivel_c"><b><?php echo $_smarty_tpl->getVariable('comerciante')->value;?>
</b></div>
		</li><?php }?>
	<ul>
    </table>
</div>
</div>	
<div class="new_footer"></div>
	  
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