<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:24:44
         compiled from "/var/www/html/xNova/styles/templates/mensajes/message_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8561398615513198cea5c19-60094276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2dd55b904e942a0740940a8df81d201700b8f40' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/mensajes/message_overview.tpl',
      1 => 1329576506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8561398615513198cea5c19-60094276',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_messages')->value;?>
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
/adds/redes.jpg);"></div>
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('mg_overview')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
<div id="content">
<table width="94%">
<?php  $_smarty_tpl->tpl_vars['MessInfo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['MessID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('MessageList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['MessInfo']->key => $_smarty_tpl->tpl_vars['MessInfo']->value){
 $_smarty_tpl->tpl_vars['MessID']->value = $_smarty_tpl->tpl_vars['MessInfo']->key;
?>
<tr class="semi_remarcado">
<td><b><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
);return false;" style="color:<?php echo $_smarty_tpl->tpl_vars['MessInfo']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['MessInfo']->value['lang'];?>
</a></b></td>
<td id="messcount" style="color:<?php echo $_smarty_tpl->tpl_vars['MessInfo']->value['color'];?>
;"><span id="unread_<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MessInfo']->value['unread'];?>
</span>/<span id="total_<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MessInfo']->value['total'];?>
</span></td>
</tr>
<?php }} ?>
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