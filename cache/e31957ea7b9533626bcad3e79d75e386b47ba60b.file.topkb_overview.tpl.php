<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-26 00:40:22
         compiled from "/var/www/html/xNova/styles/templates/topkb/topkb_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96919397955134766db7908-49028059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31957ea7b9533626bcad3e79d75e386b47ba60b' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/topkb/topkb_overview.tpl',
      1 => 1329576634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96919397955134766db7908-49028059',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('tkb_top')->value;?>
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
<table width="95%">
<tbody>
<tr>
    <th colspan="4">
        <?php echo $_smarty_tpl->getVariable('tkb_gratz')->value;?>

    </th>
</tr><tr>
    <th><?php echo $_smarty_tpl->getVariable('tkb_platz')->value;?>
</th>
	<th><?php echo $_smarty_tpl->getVariable('tkb_owners')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('tkb_datum')->value;?>
</th>
	<th><?php echo $_smarty_tpl->getVariable('tkb_units')->value;?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['RowInfo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['RowNR'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('TopKBList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['RowInfo']->key => $_smarty_tpl->tpl_vars['RowInfo']->value){
 $_smarty_tpl->tpl_vars['RowNR']->value = $_smarty_tpl->tpl_vars['RowInfo']->key;
?>
<tr>
    <td class="semi_remarcado"><?php echo $_smarty_tpl->tpl_vars['RowNR']->value+1;?>
</td>
    <td class="semi_remarcado"><a href="game.php?page=topkb&amp;action=showkb&amp;rid=<?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['rid'];?>
" onclick="OpenPopup('game.php?page=topkb&mode=showkb&rid=<?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['rid'];?>
', 'raport', screen.width, screen.height);return false;">
	<?php if ($_smarty_tpl->tpl_vars['RowInfo']->value['result']=="a"){?>
	<span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['attacker'];?>
</span> VS <span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['defender'];?>
</span>
	<?php }elseif($_smarty_tpl->tpl_vars['RowInfo']->value['result']=="r"){?>
	<span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['attacker'];?>
</span> VS <span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['defender'];?>
</span>
	<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['attacker'];?>
 VS <?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['defender'];?>

	<?php }?>
	</a></td>
    <td class="semi_remarcado"><?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['time'];?>
</td>
	<td class="semi_remarcado"><?php echo $_smarty_tpl->tpl_vars['RowInfo']->value['units'];?>
</td>
</tr>
<?php }} ?>
<tr><td>&nbsp;</td></tr>
<tr>
<td colspan="4"><?php echo $_smarty_tpl->getVariable('tkb_legende')->value;?>
 <span style="color:#00FF00"><?php echo $_smarty_tpl->getVariable('tkb_gewinner')->value;?>
</span> <span style="color:#FF0000"><?php echo $_smarty_tpl->getVariable('tkb_verlierer')->value;?>
</span> <span style="color:#FAC531"><?php echo $_smarty_tpl->getVariable('tkb_unentschieden')->value;?>
</span></td></tr>
</tbody>
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