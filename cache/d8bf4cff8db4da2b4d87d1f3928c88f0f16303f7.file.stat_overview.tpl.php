<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 23:00:22
         compiled from "/var/www/html/xNova/styles/templates/estadisticas/stat_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85127392855132ff61dca35-73227567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8bf4cff8db4da2b4d87d1f3928c88f0f16303f7' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/estadisticas/stat_overview.tpl',
      1 => 1329576336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85127392855132ff61dca35-73227567',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('st_statistics')->value;?>
</div>
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
    <form name="stats" id="stats" method="post" action="">
        <table width="95%">
            <tr>
				<td><?php echo $_smarty_tpl->getVariable('st_updated')->value;?>
: <?php echo $_smarty_tpl->getVariable('stat_date')->value;?>
</td>
            </tr>
				<td>&nbsp;</td>
			<tr>
			</tr>
            <tr>
			<td>
				<?php echo $_smarty_tpl->getVariable('st_show')->value;?>
 <select name="who" onChange="$('#stats').submit();"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('Selectors')->value['who'],'selected'=>$_smarty_tpl->getVariable('who')->value),$_smarty_tpl);?>
</select> 
				<?php echo $_smarty_tpl->getVariable('st_per')->value;?>
 <select name="type" onChange="$('#stats').submit();"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('Selectors')->value['type'],'selected'=>$_smarty_tpl->getVariable('type')->value),$_smarty_tpl);?>
</select> 
				<?php echo $_smarty_tpl->getVariable('st_in_the_positions')->value;?>
 <select name="range" onChange="$('#stats').submit();"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('Selectors')->value['range'],'selected'=>$_smarty_tpl->getVariable('range')->value),$_smarty_tpl);?>
</select>
			</td>
            </tr>
        </table>
    </form>
    <table width="95%">
	<?php if ($_smarty_tpl->getVariable('who')->value==1){?>
		<?php $_template = new Smarty_Internal_Template("estadisticas/stat_playertable.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
 	<?php }elseif($_smarty_tpl->getVariable('who')->value==2){?>
		<?php $_template = new Smarty_Internal_Template("estadisticas/stat_alliancetable.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }?>
	</table>
</div>
</div>	
<div class="new_footer_small"></div>	
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