<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:11:34
         compiled from "/var/www/html/xNova/styles/templates/construibles/buildings_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91575317655131676148d34-92952269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4a532e9e60ee559620d39142de15fda85ecb1c' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/construibles/buildings_overview.tpl',
      1 => 1329575932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91575317655131676148d34-92952269',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_buildings')->value;?>
 - <span><?php echo $_smarty_tpl->getVariable('planetname')->value;?>
</span></div>
			</div>
        </div>
	</div> 
<?php $_template = new Smarty_Internal_Template("left_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="contenidoMostrado">                               
<div id="elCosoxD">
<div id="cabezza" style="background-image: url(styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/head2.png);"></div>
<div id="eins_small">
 <div>	
 <br />
   <table width="95%">	
		<ul class="estructuras_c">
		<?php  $_smarty_tpl->tpl_vars['BuildInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('BuildInfoList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['BuildInfoRow']->key => $_smarty_tpl->tpl_vars['BuildInfoRow']->value){
?>
			<li>
				<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['id'];?>
)">
					<img class="tooltip" name="<table>
					<tr>
					<th colspan=2><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['name'];?>
</th>
					</tr>
					<tr>
					<td><img src=<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['id'];?>
.png width=140 height=140 /></td>
					<td><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['descriptions'];?>
</td>
					</tr>
					</table>" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['id'];?>
.png" width="100" height="100" />
				</a>
				<?php if ($_smarty_tpl->tpl_vars['BuildInfoRow']->value['level']>0){?><div class="nivel_c"> <b style="cursor:help;" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('bd_lvl')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['level'];?>
"><?php echo $_smarty_tpl->getVariable('bd_lvl')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['level'];?>
</b></div><?php }?>				
				<?php if ($_smarty_tpl->tpl_vars['BuildInfoRow']->value['EnergyNeed']){?>
				<div class="energia_c tooltip" name="<?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['RealEnergy'];?>
"><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['EnergyNeed'];?>
</div>
				<?php }?>	
				<br />
				<div class="construir_c"><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['BuildLink'];?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['BuildInfoRow']->value['level']>0){?> <div class="tooltip destruir_c" name="<table style=\'width:100%;margin:0;padding:0\'><tr><th colspan=\'2\'>&nbsp;<?php echo $_smarty_tpl->getVariable('bd_price_for_destroy')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['level'];?>
&nbsp;</th></tr><tr><td class=\'transparent\'><img src=styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg width=30 height=20 /></td><td class=\'transparent\'><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['destroyress']['metal'];?>
</td></tr><tr><td class=\'transparent\'><img src=styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg width=30 height=20 /></td><td class=\'transparent\'><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['destroyress']['crystal'];?>
</td></tr><tr><td class=\'transparent\'><img src=styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg width=30 height=20 /></td><td class=\'transparent\'><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['destroyress']['deuterium'];?>
</td></tr><tr><td class=\'transparent\'><img src=styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg width=30 height=20 /></td><td class=\'transparent\'><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['destroyress']['norio'];?>
</td></tr><tr><td class=\'transparent\'><?php echo $_smarty_tpl->getVariable('bd_destroy_time')->value;?>
</td><td class=\'transparent\'><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['destroytime'];?>
</td></tr></table>"><a href="game.php?page=buildings&amp;cmd=destroy&amp;building=<?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['id'];?>
"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/destruir.gif" /></a></div><?php }?>
				<div class="demas_c">
				<div class="recursos_c"><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['price'];?>
</div>
				<div class="espacio_c"><br /></div>
				<div class="tiempo_c">
				<b><?php echo $_smarty_tpl->getVariable('fgf_time')->value;?>
</b></font><br /><?php echo $_smarty_tpl->tpl_vars['BuildInfoRow']->value['time'];?>

				</div>		
				<?php if ($_smarty_tpl->tpl_vars['BuildInfoRow']->value['level']>0&&$_smarty_tpl->tpl_vars['BuildInfoRow']->value['id']!=33){?>
				<?php }?>
				</div>
			</li>
		<?php }} ?>
		<ul>
    </table>
</div>
</div>	
<div class="new_footer_small"></div>		  
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