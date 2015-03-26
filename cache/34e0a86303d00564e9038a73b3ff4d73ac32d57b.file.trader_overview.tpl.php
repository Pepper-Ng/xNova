<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:21:27
         compiled from "/var/www/html/xNova/styles/templates/mercader/trader_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1350115908551326d745aa08-90949090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34e0a86303d00564e9038a73b3ff4d73ac32d57b' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/mercader/trader_overview.tpl',
      1 => 1329576520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350115908551326d745aa08-90949090',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('tr_call_trader')->value;?>
</div>
			</div>
        </div>
	</div> 
<?php $_template = new Smarty_Internal_Template("left_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="contenidoMostrado">                               
<div id="elCosoxD">
<div id="planeta" style="background-image: url(styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/adds/mercader.jpg);"></div>
<div class="coso_izquierda"></div>
<div class="coso_derecha"></div>
<div id="cajon">
        <h3><?php echo $_smarty_tpl->getVariable('tr_call_trader_who_buys')->value;?>
</h3>
        <div style="position:relative; height:80px">        	
	<div id="mercader_en_caja">			
				<div class="mercader_icon">
					<form action="game.php?page=trader" method="post">
					<input type="hidden" name="ress" value="metal" />
					<input type="image" class="tooltip" name="<h4><?php echo $_smarty_tpl->getVariable('tr_elemento')->value;?>
<?php echo $_smarty_tpl->getVariable('Metal')->value;?>
</h4>" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
images/metal.jpg" />
					</form>
				</div>
				<div class="mercader_icon">
					<form action="game.php?page=trader" method="post">
					<input type="hidden" name="ress" value="crystal" />
					<input type="image" class="tooltip" name="<h4><?php echo $_smarty_tpl->getVariable('tr_elemento')->value;?>
<?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
</h4>" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
images/cristal.jpg" />
					</form>
				</div>
				<div class="mercader_icon">
					<form action="game.php?page=trader" method="post">
					<input type="hidden" name="ress" value="deuterium" />
					<input type="image" class="tooltip" name="<h4><?php echo $_smarty_tpl->getVariable('tr_elemento')->value;?>
<?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
</h4>" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
images/deuterio.jpg" />
					</form>
				</div>
				<div class="mercader_icon">
					<form action="game.php?page=trader" method="post">
					<input type="hidden" name="ress" value="norio" />
					<input type="image" class="tooltip" name="<h4><?php echo $_smarty_tpl->getVariable('tr_elemento')->value;?>
<?php echo $_smarty_tpl->getVariable('Norio')->value;?>
</h4>" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
images/norio.jpg" />
					</form>
				</div>
	
    </div>
		<div id="mercader_infos">
				<div class="mercader_info">
				<label><?php echo $_smarty_tpl->getVariable('tr_cost_dm_trader')->value;?>
</label>
				</div>
				<div class="mercader_info">
				<label><?php echo $_smarty_tpl->getVariable('tr_exchange_quota')->value;?>
</label>
				</div>
         </div>					
		</div>

    </div>
	
	<br /><br />
	</div>
</div>
</div>	
</div>	
</div>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>