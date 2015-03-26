<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:05:58
         compiled from "/var/www/html/xNova/styles/templates/amigos/buddy_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17475219625513233683b6b7-47927805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c320097d18fb1e5819887ee4478dd7af0d98e517' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/amigos/buddy_overview.tpl',
      1 => 1329576216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17475219625513233683b6b7-47927805',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('bu_buddy_list')->value;?>
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
 <br /> 
<table style="min-width:569px;width:569px;">
<tr><th colspan="6" style="text-align:center"><?php echo $_smarty_tpl->getVariable('bu_requests')->value;?>
</th></tr>
<tr><th><?php echo $_smarty_tpl->getVariable('bu_player')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_alliance')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_coords')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_text')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_action')->value;?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['OutRequestInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('OutRequestList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['OutRequestInfo']->key => $_smarty_tpl->tpl_vars['OutRequestInfo']->value){
?>
<tr>
<td><a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['playerid'];?>
);"><?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['name'];?>
</a></td>
<td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['allyname'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?><a href="game.php?page=alliance&amp;mode=ainfo&amp;a=<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['allyid'];?>
"><?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['allyname'];?>
</a><?php }else{ ?>-<?php }?></td>
<td><a href="game.php?page=galaxy&amp;mode=3&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['galaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['system'];?>
"><?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['planet'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['text'];?>
</td>
<td><a href="game.php?page=buddy&amp;mode=1&amp;sm=2&amp;bid=<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['buddyid'];?>
"><?php echo $_smarty_tpl->getVariable('bu_accept')->value;?>
</a>
<br><a href="game.php?page=buddy&amp;mode=1&amp;sm=1&amp;bid=<?php echo $_smarty_tpl->tpl_vars['OutRequestInfo']->value['buddyid'];?>
"><?php echo $_smarty_tpl->getVariable('bu_decline')->value;?>
</a></td>
</tr>
<?php }} else { ?>
<tr><td colspan="6"><?php echo $_smarty_tpl->getVariable('bu_no_request')->value;?>
</td></tr>
<?php } ?>
<tr><th colspan="6" style="text-align:center"><?php echo $_smarty_tpl->getVariable('bu_my_requests')->value;?>
</th></tr>
<tr><th><?php echo $_smarty_tpl->getVariable('bu_player')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_alliance')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_coords')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_text')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_action')->value;?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['MyRequestInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('MyRequestList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['MyRequestInfo']->key => $_smarty_tpl->tpl_vars['MyRequestInfo']->value){
?>
<tr>
<td><a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['playerid'];?>
);"><?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['name'];?>
</a></td>
<td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['allyname'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?><a href="game.php?page=alliance&amp;mode=ainfo&amp;a=<?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['allyid'];?>
"><?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['allyname'];?>
</a><?php }else{ ?>-<?php }?></td>
<td><a href="game.php?page=galaxy&amp;mode=3&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['galaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['system'];?>
"><?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['planet'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['text'];?>
</td>
<td><a href="game.php?page=buddy&amp;mode=1&amp;sm=1&amp;bid=<?php echo $_smarty_tpl->tpl_vars['MyRequestInfo']->value['buddyid'];?>
"><?php echo $_smarty_tpl->getVariable('bu_cancel_request')->value;?>
</a></td></tr>
<?php }} else { ?>
<tr><td colspan="6"><?php echo $_smarty_tpl->getVariable('bu_no_request')->value;?>
</td></tr>
<?php } ?>
<tr><th colspan="6" style="text-align:center"><?php echo $_smarty_tpl->getVariable('bu_partners')->value;?>
</th></tr>
<tr>
<th><?php echo $_smarty_tpl->getVariable('bu_player')->value;?>
</td>
<th><?php echo $_smarty_tpl->getVariable('bu_alliance')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_coords')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_online')->value;?>
</th>
<th><?php echo $_smarty_tpl->getVariable('bu_action')->value;?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['MyBuddyInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('MyBuddyList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['MyBuddyInfo']->key => $_smarty_tpl->tpl_vars['MyBuddyInfo']->value){
?>
<tr>
<td><a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['playerid'];?>
);"><?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['name'];?>
</a></td>
<td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['allyname'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?><a href="game.php?page=alliance&amp;mode=ainfo&amp;a=<?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['allyid'];?>
"><?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['allyname'];?>
</a><?php }else{ ?>-<?php }?></td>
<td><a href="game.php?page=galaxy&amp;mode=3&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['galaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['system'];?>
"><?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['planet'];?>
</a></td>
<td>
<?php if ($_smarty_tpl->tpl_vars['MyBuddyInfo']->value['onlinetime']<4){?>
<span style="color:lime"><?php echo $_smarty_tpl->getVariable('bu_connected')->value;?>
</span>
<?php }elseif($_smarty_tpl->tpl_vars['MyBuddyInfo']->value['onlinetime']>=4&&$_smarty_tpl->tpl_vars['MyBuddyInfo']->value['onlinetime']<=15){?>
<span style="color:yellow"><?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['onlinetime'];?>
 <?php echo $_smarty_tpl->getVariable('bu_minutes')->value;?>
</span>
<?php }else{ ?>
<span style="color:red"><?php echo $_smarty_tpl->getVariable('bu_disconnected')->value;?>
</span>
<?php }?>
</td>
<td><a href="game.php?page=buddy&amp;mode=1&amp;sm=1&amp;bid=<?php echo $_smarty_tpl->tpl_vars['MyBuddyInfo']->value['buddyid'];?>
"><?php echo $_smarty_tpl->getVariable('bu_delete')->value;?>
</a></td></tr>
<?php }} else { ?>
<tr><td colspan="6"><?php echo $_smarty_tpl->getVariable('bu_no_buddys')->value;?>
</td></tr>
<?php } ?>
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