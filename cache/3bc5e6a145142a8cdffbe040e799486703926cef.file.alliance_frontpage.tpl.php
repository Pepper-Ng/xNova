<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-26 01:51:43
         compiled from "/var/www/html/xNova/styles/templates/alianza/alliance_frontpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7718572205513581fc7d785-35880049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bc5e6a145142a8cdffbe040e799486703926cef' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/alianza/alliance_frontpage.tpl',
      1 => 1343760122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7718572205513581fc7d785-35880049',
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
<div id="topnav" class="header_g"> 	
		<?php $_template = new Smarty_Internal_Template("overall_topnav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>	
			<div id="titular">
			<div id="estructura_titular" style="position:relative;">
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_alliance')->value;?>
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
              <span><b><?php echo $_smarty_tpl->getVariable('al_your_ally')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>
<div id="eins">
<div>
    <table width="95%">		
        <br />
		<?php if ($_smarty_tpl->getVariable('ally_description')->value){?>
			<?php echo $_smarty_tpl->getVariable('ally_description')->value;?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->getVariable('al_description_message')->value;?>

		<?php }?>
    </table>
</div>
</div>	
<div class="new_footer"></div>	
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('al_inside_section')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>	
<div id="eins">
<div>
<br />
	<table width="95%">	
		<?php echo $_smarty_tpl->getVariable('ally_text')->value;?>

	</table>		
</div>
</div>	
<div class="new_footer"></div>		
<?php if ($_smarty_tpl->getVariable('DiploInfo')->value){?>
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('al_diplo')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>	
<div id="eins">
<div>
 <table width="95%">		
		<tr>
		<th><?php echo $_smarty_tpl->getVariable('pactos')->value;?>
</th>
		<th><?php echo $_smarty_tpl->getVariable('alianzas')->value;?>
</th>
		</tr>		
			<?php if (!empty($_smarty_tpl->getVariable('DiploInfo',null,true,false)->value[1])){?>
			<tr class="alt">
			<td width="30"><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('al_diplo_level')->value[1];?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/pacto_alianza.png" width="60" height="58" /></td>
			<td width="100%"><?php  $_smarty_tpl->tpl_vars['PaktInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DiploInfo')->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PaktInfo']->key => $_smarty_tpl->tpl_vars['PaktInfo']->value){
?><b><a href="?page=alliance&mode=ainfo&a=<?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[0];?>
</a></b><br /><?php }} ?></td>
			</tr>
			<?php }?>
			
			<?php if (!empty($_smarty_tpl->getVariable('DiploInfo',null,true,false)->value[2])){?>
			<tr class="alt_2">
			<td width="30"><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('al_diplo_level')->value[2];?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/pacto_comercio.png" width="60" height="58" /></td>
			<td width="100%"><?php  $_smarty_tpl->tpl_vars['PaktInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DiploInfo')->value[2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PaktInfo']->key => $_smarty_tpl->tpl_vars['PaktInfo']->value){
?><b><a href="?page=alliance&mode=ainfo&a=<?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[0];?>
</a></b><br /><?php }} ?></td>
			</tr>
			<?php }?>
			
			<?php if (!empty($_smarty_tpl->getVariable('DiploInfo',null,true,false)->value[3])){?>
			<tr class="alt">
			<td width="30"><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('al_diplo_level')->value[3];?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/no_agrecion.png" width="60" height="58" /></td>
			<td width="100%"><?php  $_smarty_tpl->tpl_vars['PaktInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DiploInfo')->value[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PaktInfo']->key => $_smarty_tpl->tpl_vars['PaktInfo']->value){
?><b><a href="?page=alliance&mode=ainfo&a=<?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[0];?>
</a></b><br /><?php }} ?></td>
			</tr>
			<?php }?>
			
			<?php if (!empty($_smarty_tpl->getVariable('DiploInfo',null,true,false)->value[4])){?>
			<tr class="alt_2">
			<td width="30"><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('al_diplo_level')->value[4];?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/en_guerra.png" width="60" height="58" /></td>
			<td width="100%"><?php  $_smarty_tpl->tpl_vars['PaktInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DiploInfo')->value[4]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PaktInfo']->key => $_smarty_tpl->tpl_vars['PaktInfo']->value){
?><b><a href="?page=alliance&mode=ainfo&a=<?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['PaktInfo']->value[0];?>
</a></b><br /><?php }} ?></td>
			</tr>
			<?php }?>
</table>
</div>
</div>	
<div class="new_footer"></div>			
<?php }?>
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('al_Allyquote')->value;?>
</b></span>
        </li>                                    
    </ul>
</div>	
<div id="eins">
<div>
 <table width="70%">	
		<tr>
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_totalfight')->value;?>
</td><td><?php echo pretty_number($_smarty_tpl->getVariable('totalfight')->value);?>
</td>
		</tr>
		<tr>
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_fightwon')->value;?>
</td><td><?php echo pretty_number($_smarty_tpl->getVariable('fightwon')->value);?>
 <?php if ($_smarty_tpl->getVariable('totalfight')->value){?>(<?php echo round($_smarty_tpl->getVariable('fightwon')->value/$_smarty_tpl->getVariable('totalfight')->value*100,2);?>
%)<?php }?></td>
		</tr>
		<tr>	
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_fightlose')->value;?>
</td><td><?php echo pretty_number($_smarty_tpl->getVariable('fightlose')->value);?>
 <?php if ($_smarty_tpl->getVariable('totalfight')->value){?>(<?php echo round($_smarty_tpl->getVariable('fightlose')->value/$_smarty_tpl->getVariable('totalfight')->value*100,2);?>
%)<?php }?></td>
		</tr>
		<tr>	
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_fightdraw')->value;?>
</td><td><?php echo pretty_number($_smarty_tpl->getVariable('fightdraw')->value);?>
 <?php if ($_smarty_tpl->getVariable('totalfight')->value){?>(<?php echo round($_smarty_tpl->getVariable('fightdraw')->value/$_smarty_tpl->getVariable('totalfight')->value*100,2);?>
%)<?php }?></td>
		</tr>
		<tr>
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_unitsshot')->value;?>
</td><td><?php echo $_smarty_tpl->getVariable('unitsshot')->value;?>
</td>
		</tr>
		<tr>
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_unitslose')->value;?>
</td><td><?php echo $_smarty_tpl->getVariable('unitslose')->value;?>
</td>
		</tr>
		<tr>
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_dermetal')->value;?>
</td><td><?php echo $_smarty_tpl->getVariable('dermetal')->value;?>
</td>
		</tr>
		<tr>
			<td align="left"><?php echo $_smarty_tpl->getVariable('pl_dercrystal')->value;?>
</td><td><?php echo $_smarty_tpl->getVariable('dercrystal')->value;?>
</td>
		</tr>
    </table>
</div>	
</div>
<div class="new_footer"></div>		
<br /><br /><br />
</div>	
<div id="menu_flotas">
		<div id="lista_misiones">    
             <p><b><?php echo $_smarty_tpl->getVariable('al_your_ally')->value;?>
</b></p>  
			<?php if ($_smarty_tpl->getVariable('ally_image')->value){?>
			<div class="misiones_top"></div>
			<div class="misiones">
			<img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('logo')->value;?>
" src="<?php echo $_smarty_tpl->getVariable('ally_image')->value;?>
" width="147" height="147" />
			</div> 
			<div class="misiones_footer"></div>						
			<?php }?>
			<div class="misiones_top"></div>
			<div class="misiones">
			<center>                     
			<font color="orange"><b><?php echo $_smarty_tpl->getVariable('al_ally_info_tag')->value;?>
:</b></font> <?php echo $_smarty_tpl->getVariable('ally_tag')->value;?>
 <br />
			<font color="orange"><b><?php echo $_smarty_tpl->getVariable('al_ally_info_name')->value;?>
:</b></font> <?php echo $_smarty_tpl->getVariable('ally_name')->value;?>
 <br />
			<font color="orange"><b><?php echo $_smarty_tpl->getVariable('al_ally_info_members')->value;?>
:</font> <?php echo $_smarty_tpl->getVariable('ally_members')->value;?>
</b><br /><?php if ($_smarty_tpl->getVariable('rights')->value['memberlist']){?> (<a href="?page=alliance&amp;mode=memberslist"><?php echo $_smarty_tpl->getVariable('al_user_list')->value;?>
</a>)<?php }?> <br />
			<font color="orange"><b><?php echo $_smarty_tpl->getVariable('al_rank')->value;?>
:</b></font> <?php echo $_smarty_tpl->getVariable('range')->value;?>
<br /><?php if ($_smarty_tpl->getVariable('rights')->value['admin']){?> (<a href="?page=alliance&amp;mode=admin&amp;edit=ally"><?php echo $_smarty_tpl->getVariable('al_manage_alliance')->value;?>
</a>)<?php }?> <br />
			<b><a href="javascript:OpenPopup('?page=chat&amp;chat_type=ally', '', 800, 800);"><?php echo $_smarty_tpl->getVariable('al_goto_chat')->value;?>
</a></b> <br />
			<?php if ($_smarty_tpl->getVariable('rights')->value['seeapply']&&$_smarty_tpl->getVariable('req_count')->value>0){?>
			<a href="?page=alliance&amp;mode=admin&amp;edit=requests"><blink><font color="red"><b><?php echo $_smarty_tpl->getVariable('al_requests')->value;?>
</b></font></blink></a> <br />
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('rights')->value['roundmail']){?>
			<b><a href="javascript:OpenPopup('?page=alliance&amp;mode=circular','', 720, 300);"><?php echo $_smarty_tpl->getVariable('al_send_circular_message')->value;?>
</a></b> <br />
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('ally_web')->value){?>
			<b><a href="<?php echo $_smarty_tpl->getVariable('ally_web')->value;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('al_web_text')->value;?>
</a></b> <br />
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('isowner')->value){?>	
			<br /><h3><?php echo $_smarty_tpl->getVariable('al_leave_alliance')->value;?>
</h3>
			<input type="button" class="submit" onclick="javascript:if(confirm('<?php echo $_smarty_tpl->getVariable('al_leave_ally')->value;?>
')) location.href='game.php?page=alliance&amp;mode=exit';" value="<?php echo $_smarty_tpl->getVariable('al_continue')->value;?>
"><br />
			<?php }?>
			</center>
			</div> 
			<div class="misiones_footer"></div>			
</div>			
</div>		
</div>	
</div>
</div>	
</div>	
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>