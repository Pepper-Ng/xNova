<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:10:49
         compiled from "/var/www/html/xNova/styles/templates/galaxy_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1597872541551316493cc6b8-54739584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d34a9156fba3d89f89225701f4f5711067f379d' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/galaxy_overview.tpl',
      1 => 1426720363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597872541551316493cc6b8-54739584',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_galaxy')->value;?>
 - <?php echo $_smarty_tpl->getVariable('gl_solar_system')->value;?>
 <?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('system')->value;?>
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
	
	<table id="galaxia" width="95%">

	<tr>
		<td style="white-space: nowrap;width:30px"><b><?php echo $_smarty_tpl->getVariable('gl_pos')->value;?>
</b></td>
		<td style="white-space: nowrap;width:30px"><b><?php echo $_smarty_tpl->getVariable('gl_planet')->value;?>
</b></td>
		<td style="white-space: nowrap;width:130px"><b><?php echo $_smarty_tpl->getVariable('gl_name_activity')->value;?>
</b></td>
		<td style="white-space: nowrap;width:30px"><b><?php echo $_smarty_tpl->getVariable('gl_moon')->value;?>
</b></td>
		<td style="white-space: nowrap;width:30px"><b><?php echo $_smarty_tpl->getVariable('gl_debris')->value;?>
</b></td>
		<td style="white-space: nowrap;width:150px"><b><?php echo $_smarty_tpl->getVariable('gl_player_estate')->value;?>
</b></td>
		<td style="white-space: nowrap;width:80px"><b><?php echo $_smarty_tpl->getVariable('gl_alliance')->value;?>
</b></td>
		<td style="white-space: nowrap;width:125px"><b><?php echo $_smarty_tpl->getVariable('gl_actions')->value;?>
</b></td>
	</tr> 
    <?php  $_smarty_tpl->tpl_vars['GalaxyRow'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['planet'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('GalaxyRows')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['GalaxyRow']->key => $_smarty_tpl->tpl_vars['GalaxyRow']->value){
 $_smarty_tpl->tpl_vars['planet']->value = $_smarty_tpl->tpl_vars['GalaxyRow']->key;
?>
	<tr>
	<td><a href="#"><?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
</a></td>
	
	<?php if (is_array($_smarty_tpl->tpl_vars['GalaxyRow']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']){?>
	<td><a class="tooltip_sticky" name="<table style='width:220px'>
	<tr>
	<th colspan='2'><?php echo $_smarty_tpl->getVariable('gl_planet')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['name'];?>
 [<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('system')->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th>
	</tr>
	<tr>
	<td style='width:80'>
	<img src='styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['image'];?>
.png' height='75' width=75 />
	</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['spionage']){?>
	<a href='javascript:doit(6,<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
,<?php echo $_smarty_tpl->getVariable('system')->value;?>
,<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
,1,<?php echo $_smarty_tpl->getVariable('spio_anz')->value;?>
);'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['spionage'];?>
</a>
	<br /><br />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['phalax']){?>
	<a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['phalax'];?>
</a>
	<br />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['attack']){?>
	<a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['attack'];?>
</a>
	<br />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['stayally']){?>
	<a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['stayally'];?>
</a>
	<br />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['stay']){?><a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['stay'];?>
</a>
	<br />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['transport']){?>
	<a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['transport'];?>
</a>
	<br />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['missile']){?><a href='?page=galaxy&amp;mode=2&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;gl_cp=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planet']['missile'];?>
</a>
	<br />
	<?php }?>
	</td>
	</tr></table>"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/planeta.png" height="30" width="40" alt="" /></a></td>
	<?php }?>
	
	<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['planetname']['name'];?>
</td>
	
	<td style="white-space: nowrap;">
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']){?>
	<a class="tooltip_sticky" name="<table style='width:240px'>
	<tr>
	<th colspan='2'><?php echo $_smarty_tpl->getVariable('gl_moon')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['name'];?>
 [<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('system')->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th>
	</tr>
	<tr>
	<td style='width:80'>
	<img src='styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/planeten/small/s_mond.png' height='75' style='width:75' />
	</td>
	<td>
	<table style='width:100%'>
	<tr><th colspan='2'><?php echo $_smarty_tpl->getVariable('gl_features')->value;?>
</th>
	</tr>
	<tr>
	<td><?php echo $_smarty_tpl->getVariable('gl_diameter')->value;?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['diameter'];?>
</td>
	</tr>
	<tr>
	<td><?php echo $_smarty_tpl->getVariable('gl_temperature')->value;?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['temp_min'];?>
</td>
	</tr>
	<tr><th colspan=2><?php echo $_smarty_tpl->getVariable('gl_actions')->value;?>
</th>
	</tr>
	<tr>
	<td colspan='2'>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['attack']){?>
	<a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['attack'];?>
</a>
	<br />
	<?php }?><a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['transport'];?>
</a>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['stay']){?>
	<br />
	<a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['stay'];?>
</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['stayally']){?>
	<br />
	<a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['stayally'];?>
</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['spionage']){?>
	<br />
	<a href='javascript:doit(6,<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
,<?php echo $_smarty_tpl->getVariable('system')->value;?>
,<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
,3,<?php echo $_smarty_tpl->getVariable('spio_anz')->value;?>
);'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['spionage'];?>
</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['destroy']){?>
	<br /><br />
	<a href='?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=9'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['destroy'];?>
</a>
	<br />
	<?php }?>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/luna.png" height="22" width="22" alt="<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['name'];?>
" /></a>
	<?php }else{ ?>
	<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/luna_o.png" height="22" width="22" alt="<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['moon']['name'];?>
" />
	<?php }?>
	</td>
	
	
	
	<td style="white-space: nowrap;">
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['derbis']){?>
	<a class="tooltip_sticky" name="<table style='width:240px'>
	<tr>
	<th colspan='2'><?php echo $_smarty_tpl->getVariable('gl_debris_field')->value;?>
 [<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('system')->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th>
	</tr>
	<tr>
	<td style='width:80'><img src='styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/planeten/debris.jpg' height='75' style='width:75' />
	</td>
	<td><table style='width:100%'>
	<tr>
	<th colspan='2'><?php echo $_smarty_tpl->getVariable('gl_resources')->value;?>
:</th>
	</tr>
	<tr>
	<td><?php echo $_smarty_tpl->getVariable('Metal')->value;?>
: </td>
	<td><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['derbis']['metal'];?>
</td>
	</tr>
	<tr>
	<td><?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
: </td>
	<td><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['derbis']['crystal'];?>
</td>
	</tr>
	<tr>
	<th colspan='2'><?php echo $_smarty_tpl->getVariable('gl_actions')->value;?>
</th>
	</tr>
	<tr>
	<td colspan='2'>
	<a href='javascript:doit(8,<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
,<?php echo $_smarty_tpl->getVariable('system')->value;?>
,<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
, 2, &quot;<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['derbis']['GRecSended'];?>
|<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['derbis']['RecSended'];?>
&quot;);'><?php echo $_smarty_tpl->getVariable('gl_collect')->value;?>
</a>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/escombro.png" height="22" width="22" alt="" /></a>
	<?php }else{ ?>
	<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/escombro_o.png" height="22" width="22" alt="" />
	<?php }?>
	</td>
	
	
	<td>
	<a class="tooltip_sticky" name="<table style='width:240px'>
	<tr>
	<th colspan='2'><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['playerrank'];?>
</th>
	</tr>
	<tr>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['isown']){?>
	<tr>
	<td>
	<a href='javascript:OpenPopup(&quot;?page=buddy&amp;mode=2&amp;u=<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['id'];?>
&quot;, &quot;&quot;, 720, 300);'><?php echo $_smarty_tpl->getVariable('gl_buddy_request')->value;?>
</a>
	</td>
	</tr>
	<td><a href='#' onclick='return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['id'];?>
, &quot;<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['username'];?>
&quot;);'><?php echo $_smarty_tpl->getVariable('gl_playercard')->value;?>
</a>
	</td>
	</tr>
	<?php }?>
	<tr>
	<td><a href='?page=statistics&amp;who=1&amp;start=<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['rank'];?>
'><?php echo $_smarty_tpl->getVariable('gl_see_on_stats')->value;?>
</a>
	</td>
	</tr>
	</table>"><b><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['Systemtatus'];?>
<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['username'];?>
<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['Systemtatus']){?></b>
	<?php }?>
	<b><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['Systemtatus2'];?>
</b>
	</a>
	</td>
	
	<td style="white-space: nowrap;">
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']){?>
	<a class="tooltip_sticky" name="<table style='width:240px'>
	<tr>
	<th>
	<?php echo $_smarty_tpl->getVariable('gl_alliance')->value;?>
 <?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['member'];?>

	</th>
	</tr>
	<td>
	<table>
	<tr>
	<td>
	<a href='?page=alliance&amp;mode=ainfo&amp;a=<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['id'];?>
'><?php echo $_smarty_tpl->getVariable('gl_alliance_page')->value;?>
</a>
	</td>
	</tr>
	<tr>
	<td>
	<a href='?page=statistics&amp;start=<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['rank'];?>
&amp;who=2'><?php echo $_smarty_tpl->getVariable('gl_see_on_stats')->value;?>
</a>
	</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['web']){?>
	<tr>
	<td>
	<a href='<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['web'];?>
' target='allyweb'><?php echo $_smarty_tpl->getVariable('gl_alliance_web_page')->value;?>

	</td>
	</tr>
	<?php }?>
	</table>
	</td>
	</table>">
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['inally']==2){?>
	<span style="color:#44a5ff"><b><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['tag'];?>
</b></span>
	<?php }elseif($_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['inally']==1){?>
	<span class="allymember"><?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['tag'];?>
</span>
	<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['ally']['tag'];?>

	<?php }?>
	</a>
	<?php }else{ ?>
	-
	<?php }?>
	</td>
	
	
	<td style="white-space: nowrap;">
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['action']){?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['action']['esp']){?>
	<a href="javascript:doit(6,<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
,<?php echo $_smarty_tpl->getVariable('system')->value;?>
,<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
,1,<?php echo $_smarty_tpl->getVariable('spio_anz')->value;?>
);">
	<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/e.gif" title="<?php echo $_smarty_tpl->getVariable('gl_spy')->value;?>
" alt="" />
	</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['action']['message']){?>
	&nbsp;
	<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['id'];?>
);">
	<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/m.gif" title="<?php echo $_smarty_tpl->getVariable('write_message')->value;?>
" alt="" />
	</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['action']['buddy']){?>
	&nbsp;
	<a href="javascript:OpenPopup('?page=buddy&amp;mode=2&amp;u=<?php echo $_smarty_tpl->tpl_vars['GalaxyRow']->value['user']['id'];?>
', '', 720, 300);"> 
	<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/b.gif" title="<?php echo $_smarty_tpl->getVariable('gl_buddy_request')->value;?>
" alt="" />
	</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GalaxyRow']->value['action']['missle']){?>
	&nbsp;
	<a href="?page=galaxy&amp;mode=2&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;gl_cp=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
">
	<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/r.gif" title="<?php echo $_smarty_tpl->getVariable('gl_missile_attack')->value;?>
" alt="" />
	</a><?php }?>
	<?php }else{ ?>
	-
	<?php }?>
	</td>
	<?php }elseif(empty($_smarty_tpl->tpl_vars['GalaxyRow']->value)){?>
	<td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('inavitado')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/planeta_o.png" height="30" width="40" /></td><td style="white-space: nowrap;">-</td><td style="white-space: nowrap;"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/luna_o.png" height="22" width="22" /></td><td style="white-space: nowrap;"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/escombro_o.png" height="22" width="22" /></td><td>-</td><td>-</td><td style="white-space: nowrap;">-</td>
	<?php }else{ ?>
	<td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('inavitado')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/planeta_o.png" height="30" width="40" /></td><td style="white-space: nowrap;">-</td><td style="white-space: nowrap;"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/luna_o.png" height="22" width="22" /></td><td style="white-space: nowrap;"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/escombro_o.png" height="22" width="22" /></td><td>-</td><td>-</td><td style="white-space: nowrap;">-</td>
	<?php }?>
	</tr>
	<?php }} ?>
	<tr>
		<td><?php echo @MAX_PLANET_IN_SYSTEM+1;?>
</td>
		<td colspan="6">
		<a href="?page=fleet&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo @MAX_PLANET_IN_SYSTEM+1;?>
&amp;planettype=1&amp;target_mission=15"><?php echo $_smarty_tpl->getVariable('gl_out_space')->value;?>
</a>
		</td>
		<td>
		<a class="tooltip" name="<table style='width:240px'>
		<tr>
		<th colspan='2'><?php echo $_smarty_tpl->getVariable('gl_legend')->value;?>
</td>
		</tr>
		<tr>
		<td style='width:220px'><?php echo $_smarty_tpl->getVariable('gl_strong_player')->value;?>
</td>
		<td><span class='strong'><?php echo $_smarty_tpl->getVariable('gl_s')->value;?>
</span></td>
		</tr>
		<tr>
		<td style='width:220px'><?php echo $_smarty_tpl->getVariable('gl_week_player')->value;?>
</td>
		<td><span class='noob'><?php echo $_smarty_tpl->getVariable('gl_w')->value;?>
</span></td>
		</tr>
		<tr>
		<td style='width:220px'><?php echo $_smarty_tpl->getVariable('gl_vacation')->value;?>
</td>
		<td><span class='vacation'><?php echo $_smarty_tpl->getVariable('gl_v')->value;?>
</span>
		</td>
		</tr>
		<tr><td style='width:220px'><?php echo $_smarty_tpl->getVariable('gl_banned')->value;?>
</td>
		<td><span class='banned'><?php echo $_smarty_tpl->getVariable('gl_b')->value;?>
</span></td>
		</tr>
		<tr>
		<td style='width:220px'><?php echo $_smarty_tpl->getVariable('gl_inactive_seven')->value;?>
</td>
		<td><span class='inactive'><?php echo $_smarty_tpl->getVariable('gl_i')->value;?>
</span></td>
		</tr>
		<tr><td style='width:220px'><?php echo $_smarty_tpl->getVariable('gl_inactive_twentyeight')->value;?>
</td>
		<td><span class='longinactive'><?php echo $_smarty_tpl->getVariable('gl_I')->value;?>
</span></td>
		</tr>
		</table>"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/otros/s.gif" /></a> 
		</td></td>
	</tr>
	
	</table>	
	
	<script type="text/javascript">
		status_ok		= '<?php echo $_smarty_tpl->getVariable('gl_ajax_status_ok')->value;?>
';
		status_fail		= '<?php echo $_smarty_tpl->getVariable('gl_ajax_status_fail')->value;?>
';
		MaxFleetSetting = <?php echo $_smarty_tpl->getVariable('settings_fleetactions')->value;?>
 - 1;
	</script>
        </div>
</div>	
<div class="new_footer"></div>
	<?php if ($_smarty_tpl->getVariable('mode')->value==2){?>
<div id="titulo_alternativo_secundario">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('gl_missil_launch')->value;?>
 [<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('system')->value;?>
:<?php echo $_smarty_tpl->getVariable('gl_cp')->value;?>
]</b></span>
        </li>                                    
    </ul>
</div>	
<div id="eins">
<div>
<br />							
    <form action="?page=missiles&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
&amp;planet=<?php echo $_smarty_tpl->getVariable('gl_cp')->value;?>
&amp;type=<?php echo $_smarty_tpl->getVariable('type')->value;?>
" method="POST">
	<tr>
		<table>
			<tr>

				<td><?php echo $_smarty_tpl->getVariable('missile_count')->value;?>
 <input class="campo_comun" type="text" name="SendMI" size="2" maxlength="7"></td>
				<td><?php echo $_smarty_tpl->getVariable('gl_objective')->value;?>
: 
                	<?php echo smarty_function_html_options(array('name'=>'Target','options'=>$_smarty_tpl->getVariable('MissleSelector')->value),$_smarty_tpl);?>

                </td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center;"><input class="submit" type="submit" name="aktion" value="<?php echo $_smarty_tpl->getVariable('gl_missil_launch_action')->value;?>
"></th>
			</tr>
		</table>
	</form>
</div>
</div>	
	<div class="new_footer"></div>
    <?php }?>	
<br /><br /><br />	
</div>
<div id="menu_flotas">
		<div id="lista_misiones">    
             <p><b>&nbsp;</b></p>  
			<div class="misiones_top"></div>
			<div class="misiones">
			
			<form action="?page=galaxy&amp;mode=1" method="post" id="galaxy_form">
			<input type="hidden" id="auto" value="dr" />
			<table>
	  <tr>
		<td class="transparent">
		  <table>
			<tr>
			 <td colspan="3"><center><h3><?php echo $_smarty_tpl->getVariable('gl_galaxy')->value;?>
</h3></center></td>
			</tr>
			<tr>
			  <td><input class="campo_comun" type="button" name="galaxyLeft" value="&lt;-" onClick="galaxy_submit('galaxyLeft')"></td>
			  <td><input class="campo_comun" type="text" name="galaxy" value="<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
" size="5" maxlength="3" tabindex="1"></td>
			  <td><input class="campo_comun" type="button" name="galaxyRight" value="-&gt;" onClick="galaxy_submit('galaxyRight')"></td>
			</tr>
		   </table>
		  </td>
		 </tr><tr>
		 <td class="transparent">
		   <table>
			<tr>
			 <td colspan="3"><center><h3><?php echo $_smarty_tpl->getVariable('gl_solar_system')->value;?>
</h3></center></td>
			</tr>
			 <tr>
			  <td><input class="campo_comun" type="button" name="systemLeft" value="&lt;-" onClick="galaxy_submit('systemLeft')"></td>
			  <td><input class="campo_comun" type="text" name="system" value="<?php echo $_smarty_tpl->getVariable('system')->value;?>
" size="5" maxlength="3" tabindex="2"></td>
			  <td><input class="campo_comun" type="button" name="systemRight" value="-&gt;" onClick="galaxy_submit('systemRight')"></td>
			 </tr>
			</table>
		   </td>
		  </tr>
		  <tr>
			<td style="background-color:transparent;border:0px;" colspan="2"> 
				<center><input class="submit" type="submit" value="<?php echo $_smarty_tpl->getVariable('gl_show')->value;?>
" /></center>
			</td>
		  </tr>
	</table>
	</form>			
			</div> 
			<div class="misiones_footer"></div>			
	
	<div class="misiones_top"></div>
	<div class="misiones">
	<table class="galaxia_mini">
		<tr>
			<td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('gl_avaible_spyprobes')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/210.png" width="50" height="50" /></td><td> <span id="probes"><?php echo $_smarty_tpl->getVariable('spyprobes')->value;?>
</span> </td>
		</tr><tr>
			<td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('gl_avaible_recyclers')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/209.png" width="50" height="50" /></td><td> <span id="recyclers"><?php echo $_smarty_tpl->getVariable('recyclers')->value;?>
</span></td> 
		</tr><tr>
			<td><img class="tooltip" name="<?php echo $_smarty_tpl->getVariable('gl_avaible_grecyclers')->value;?>
" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/219.png" width="50" height="50" /></td><td> <span id="grecyclers"><?php echo $_smarty_tpl->getVariable('grecyclers')->value;?>
</span></td> 
		</tr>
	</table>
	
	<table>
		<tr>
		<td colspan="6">(<?php echo $_smarty_tpl->getVariable('planetcount')->value;?>
)</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td><span id="missiles"><?php echo $_smarty_tpl->getVariable('currentmip')->value;?>
</span> <b><?php echo $_smarty_tpl->getVariable('gl_avaible_missiles')->value;?>
</b><br />
		<span id="slots"><?php echo $_smarty_tpl->getVariable('maxfleetcount')->value;?>
</span>/<?php echo $_smarty_tpl->getVariable('fleetmax')->value;?>
 <b><?php echo $_smarty_tpl->getVariable('gl_fleets')->value;?>
</b></td>
	</tr>
	</table>
	
	<table class="semi_remarcado">
	<tr style="display: none;" id="fleetstatusrow">
		<td colspan="8">
			<table id="fleetstatustable">

			</table>
		</td>
	</tr>
	</table>
	</div>
	<div class="misiones_footer"></div>	
<br/ ><br /><br />
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
