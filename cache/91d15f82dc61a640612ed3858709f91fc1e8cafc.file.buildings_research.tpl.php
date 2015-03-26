<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:28:18
         compiled from "/var/www/html/xNova/styles/templates/construibles/buildings_research.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176284089055131a62730537-07258638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91d15f82dc61a640612ed3858709f91fc1e8cafc' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/construibles/buildings_research.tpl',
      1 => 1426726644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176284089055131a62730537-07258638',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_research')->value;?>
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
/adds/investigaciones.jpg);"></div>
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('lm_fleet')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
 <div>	
 <br />
    <table width="95%">	
	<ul class="estructuras_c">
		<?php  $_smarty_tpl->tpl_vars['ResearchInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ResearchList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ResearchInfoRow']->key => $_smarty_tpl->tpl_vars['ResearchInfoRow']->value){
?>
			<li>
				<a href="#" onClick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['id'];?>
)">
					<img class="tooltip" name="<table>
					<tr>
					<th colspan=2><?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['name'];?>
</th>
					</tr>
					<tr>
					<td><img src=<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['id'];?>
.png width=140 height=140 /></td>
					<td><?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['descr'];?>
<br /><font color=red><?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['maxinfo'];?>
</font></td>
					</tr>
					</table>" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['id'];?>
.png" width="100" height="100" />
				</a>
				<?php if ($_smarty_tpl->tpl_vars['ResearchInfoRow']->value['lvl']>0){?><div class="nivel_c"> <b style="cursor:help;" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('bd_lvl')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['lvl'];?>
"><?php echo $_smarty_tpl->getVariable('bd_lvl')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['lvl'];?>
 <?php if ($_smarty_tpl->tpl_vars['ResearchInfoRow']->value['elvl']>0){?> <?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['irv'];?>
<?php }?></b></div><?php }?>		
				<br />
				<div class="construir_c"><?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['link'];?>
</div>
				<div class="demas_c">
				<div class="recursos_c"><?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['price'];?>
</div>
				<div class="espacio_c"><br /></div>
				<div class="tiempo_c">
				<b><?php echo $_smarty_tpl->getVariable('fgf_time')->value;?>
</b></font><br /><?php echo $_smarty_tpl->tpl_vars['ResearchInfoRow']->value['time'];?>

				</div>		
				</div>
			</li>
		<?php }} ?>
		<ul>
    </table>
</div>
</div>	
<div class="new_footer"></div>	
<?php if ($_smarty_tpl->getVariable('IsLabinBuild')->value){?>
	<table width="70%" id="infobox" style="border: 2px solid red; text-align:center;background:transparent">
    	<tr>
        	<td><?php echo $_smarty_tpl->getVariable('bd_building_lab')->value;?>
</td>
        </tr>
    </table>
    <br><br>
<?php }?>	  
<br /><br /><br />	
</div>
<div id="buildlist" style="display:none;"></div>
<br/ ><br /><br />
</div>

</div>
</div>
</div>
<?php if ($_smarty_tpl->getVariable('ScriptInfo')->value){?>
<script type="text/javascript">
data	= <?php echo $_smarty_tpl->getVariable('ScriptInfo')->value;?>
;
</script>
<?php }?>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>