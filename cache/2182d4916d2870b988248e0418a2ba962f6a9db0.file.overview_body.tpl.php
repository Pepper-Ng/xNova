<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:11:01
         compiled from "/var/www/html/xNova/styles/templates/vision_general/overview_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127948967255131655d253d9-69447965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2182d4916d2870b988248e0418a2ba962f6a9db0' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/vision_general/overview_body.tpl',
      1 => 1426726712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127948967255131655d253d9-69447965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<body id="vision_general">
<div id="tooltip" class="tip"></div>
<div class="contenido_big">
  <div id="cajaBG">
  	<div id="caja">
        <div id="topnav" class="header_g"> 
        	<?php $_template = new Smarty_Internal_Template("overall_topnav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>	
          	<div id="titular">
            	<div id="estructura_titular" style="position:relative;">
         			<div id="titular_texto" style="display: block;">
                		<a href="#" onClick="$('#dialog').dialog('open');return false;" title="<?php echo $_smarty_tpl->getVariable('ov_planetmenu')->value;?>
"><?php echo $_smarty_tpl->getVariable('ov_planet')->value;?>
 "<span><?php echo $_smarty_tpl->getVariable('planetname')->value;?>
</span>"</a> (<?php echo $_smarty_tpl->getVariable('username')->value;?>
)
              		</div>
            	</div>
          	</div>
        </div> 
        
        <?php $_template = new Smarty_Internal_Template("left_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <div id="contenidoMostrado">                               
            <div id="elCosoxD">
                <div id="top_planeta_datos"></div>
                <div id="planeta_datos">	
                    <div>
                    <table width="95%">
                        <?php if ($_smarty_tpl->getVariable('messages')->value){?>
                        <tr>
                            <td>
                              <span><b><a href="?page=messages"><?php echo $_smarty_tpl->getVariable('messages')->value;?>
</a></b></span>
                            </td>
                        </tr>
                        <?php }?>
                        <tr>
                            <td>
                              <span><b><font color="#ffffff"><?php echo $_smarty_tpl->getVariable('ov_diameter')->value;?>
:</font> <?php echo $_smarty_tpl->getVariable('planet_diameter')->value;?>
 <?php echo $_smarty_tpl->getVariable('ov_distance_unit')->value;?>
 (<a title="<?php echo $_smarty_tpl->getVariable('ov_developed_fields')->value;?>
"><?php echo $_smarty_tpl->getVariable('planet_field_current')->value;?>
</a> / <a title="<?php echo $_smarty_tpl->getVariable('ov_max_developed_fields')->value;?>
"><?php echo $_smarty_tpl->getVariable('planet_field_max')->value;?>
</a> <?php echo $_smarty_tpl->getVariable('ov_fields')->value;?>
)</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span><b><font color="#ffffff"><?php echo $_smarty_tpl->getVariable('ov_temperature')->value;?>
:</font> <?php echo $_smarty_tpl->getVariable('ov_aprox')->value;?>
 <?php echo $_smarty_tpl->getVariable('planet_temp_min')->value;?>
<?php echo $_smarty_tpl->getVariable('ov_temp_unit')->value;?>
 <?php echo $_smarty_tpl->getVariable('ov_to')->value;?>
 <?php echo $_smarty_tpl->getVariable('planet_temp_max')->value;?>
<?php echo $_smarty_tpl->getVariable('ov_temp_unit')->value;?>
</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span><b><font color="#ffffff"><?php echo $_smarty_tpl->getVariable('ov_position')->value;?>
:</font> <a href="game.php?page=galaxy&amp;mode=0&amp;galaxy=<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
&amp;system=<?php echo $_smarty_tpl->getVariable('system')->value;?>
">[<?php echo $_smarty_tpl->getVariable('galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('system')->value;?>
:<?php echo $_smarty_tpl->getVariable('planet')->value;?>
]</a></b></span>
                            </td>
                        </tr>	
                        <tr>
                            <td>
                                <span><b><font color="#ffffff"><?php echo $_smarty_tpl->getVariable('ov_points')->value;?>
:</font> <?php echo $_smarty_tpl->getVariable('user_rank')->value;?>
</b></span>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td>
                                <span><b><?php echo $_smarty_tpl->getVariable('civil')->value;?>
</b></span>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <span><b><?php echo $_smarty_tpl->getVariable('fragata')->value;?>
</b></span>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <span><b><?php echo $_smarty_tpl->getVariable('cazador')->value;?>
</b></span>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <span><b><?php echo $_smarty_tpl->getVariable('crucero')->value;?>
</b></span>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <span><b><?php echo $_smarty_tpl->getVariable('insignia')->value;?>
</b></span>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <span><b><?php echo $_smarty_tpl->getVariable('capital')->value;?>
</b></span>
                            </td>
                        </tr>
                    </table>
                    </div>			
                </div>
                <div id="footer_planeta_datos"></div>
                <div id="rangos_ov">
                    <img class="tooltip" name="<img src=styles/images/rangos/<?php echo $_smarty_tpl->getVariable('rango')->value;?>
.png /><br /><h3><?php echo $_smarty_tpl->getVariable('lvl_rg')->value;?>
 <?php echo $_smarty_tpl->getVariable('rango')->value;?>
<br /><?php echo $_smarty_tpl->getVariable('nivel')->value;?>
</h3> " src="styles/images/rangos/<?php echo $_smarty_tpl->getVariable('rango')->value;?>
.png" width="70" height="70" />
                </div>
                <div id="luna_ov">
                    <?php if ($_smarty_tpl->getVariable('Moon')->value){?>
                        <a href="game.php?page=overview&amp;cp=<?php echo $_smarty_tpl->getVariable('Moon')->value['id'];?>
&amp;re=0" class="tooltip" name="('<?php echo $_smarty_tpl->getVariable('Moon')->value['name'];?>
 (<?php echo $_smarty_tpl->getVariable('fcm_moon')->value;?>
)')">
                        <img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/luna.png" /></a><?php }else{ ?><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/luna_o.png" />
                    <?php }?>
                </div>	
                <div id="escombros_ov"><?php echo $_smarty_tpl->getVariable('escombros')->value;?>
</div>
                <div id="razas_ov"><img class="tooltip" name="<img src=<?php echo $_smarty_tpl->getVariable('ov_raza_img')->value;?>
 width=120 height=120/><h2><font color=#83919c><?php echo $_smarty_tpl->getVariable('Raza')->value;?>
: <?php echo $_smarty_tpl->getVariable('Raza_tipo')->value;?>
</font></b></h2>" src="<?php echo $_smarty_tpl->getVariable('ov_raza_img')->value;?>
" width="70" height="70" /></div>
                <div id="planeta_overview"> <img  src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/planeten/<?php echo $_smarty_tpl->getVariable('planetimage')->value;?>
.jpg" /></div>
                <?php if ($_smarty_tpl->getVariable('is_news')->value){?>
                    <div id="titulo_alternativo">
                        <ul class="tabsbelow">
                            <li>
                                <span><b><?php echo $_smarty_tpl->getVariable('ov_news')->value;?>
 </b></span>
                            </li>                                    
                        </ul>
                    </div>
                    <div id="eins">
                        <div><br />
                        <table width="95%">
                             <tbody>
                                <tr class="alt">
                               <th> <marquee scrolldelay="150"><?php echo $_smarty_tpl->getVariable('news')->value;?>
</marquee></th>
                            </tr>
                        <?php if ($_smarty_tpl->getVariable('Teamspeak')->value){?>
                        <tr>
                            <td>
                                <span><b><font color="#ffffff"><?php echo $_smarty_tpl->getVariable('ov_teamspeak')->value;?>
: </font> <?php echo $_smarty_tpl->getVariable('Teamspeak')->value;?>
</b></span>
                            </td>
                        </tr>
                        <?php }?>					     
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="new_footer"></div>
                <?php }?>	
    
                <div id="titulo_alternativo_secundario">
                    <ul class="tabsbelow">
                        <li>
                            <span><b><?php echo $_smarty_tpl->getVariable('ov_events')->value;?>
 </b></span>
                        </li>                                    
                    </ul>
                </div>
                <div id="eins">
                    <div><br />
                    <table width="95%">
                        <tbody>		
                            <tr id="fleets" style="display:none;">
                                <td colspan="4">
                            </tr>
                        </tbody>
                    </table>	
                    </div>
                </div>
                <div class="new_footer"></div>
                <br /><br /><br />
            </div>
            <tr id="fleets" style="display:none;">
                <td colspan="4">
            </tr>
        </div>
    
        <div id="menu_construcciones">
            <div id="estructuras_construccion">    
                <p><b><?php echo $_smarty_tpl->getVariable('estructuras_construccion')->value;?>
</b></p>
                <div class="misiones_top"></div>
                <div class="misiones">
                    <center><?php echo $_smarty_tpl->getVariable('build')->value;?>
</center>
                </div> 
                <div class="misiones_footer"></div>	
                <div class="misiones_top"></div>
                <div class="misiones">
                    <center><?php echo $_smarty_tpl->getVariable('build_h')->value;?>
</center>
                </div> 
                <div class="misiones_footer"></div>	
            
                <div class="misiones_top"></div>
                <div class="misiones">
                    <center>
                   	<BR><?php  $_smarty_tpl->tpl_vars['PlanetInfo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['PlanetID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetMenu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetInfo']->key => $_smarty_tpl->tpl_vars['PlanetInfo']->value){
 $_smarty_tpl->tpl_vars['PlanetID']->value = $_smarty_tpl->tpl_vars['PlanetInfo']->key;
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
">
					<img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['image'];?>
.png" height="40" width="40" alt="<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
" /><br />
					<?php if ($_smarty_tpl->tpl_vars['PlanetID']->value==$_smarty_tpl->getVariable('current_pid')->value){?>
					<span style="color:#FFFF00;" class="planetname"><b><?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
</b></span>
					<span style="color:#FE9A2E;"><b>[<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['planet'];?>
]</b></span>
					<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['PlanetInfo']->value['ptype']==3){?><span style="color:#CCCCCC"><?php }else{ ?><span style="color:#2E9AFE"><?php }?><?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['name'];?>
</span>
					<span style="color:#58FA58;">[<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetInfo']->value['planet'];?>
]</span>
					<?php }?>
					<br /><span id="planet_<?php echo $_smarty_tpl->tpl_vars['PlanetID']->value;?>
"></span>
					</a>
					<?php }} ?>
                    </center>
                </div>
                <div class="misiones_footer"></div>
                <!--<div class="misiones_footer"></div><BR><div class="misiones_top"></div>
                <div class="misiones">
                    <center><?php echo $_smarty_tpl->getVariable('build_h')->value;?>
</center>
                </div> 
                <div class="misiones_footer"></div>-->		
			
            </div>		
        </div>
    
	</div>
  </div>
</div>
  
<form action="" method="POST">
<div id="dialog" title="<?php echo $_smarty_tpl->getVariable('ov_planetmenu')->value;?>
" style="display:none;">
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1"><?php echo $_smarty_tpl->getVariable('ov_planet_rename')->value;?>
</a></li>
			<li><a href="#tabs-2"><?php echo $_smarty_tpl->getVariable('ov_delete_planet')->value;?>
</a></li>
		</ul>
		<div id="tabs-1">
			<label for="newname"> </label><input class="left campo_comun" type="text" name="newname" id="newname" size="25" maxlength="20" autocomplete="off">
		</div>
		<div id="tabs-2"><h3 style="margin:0"><?php echo $_smarty_tpl->getVariable('ov_security_request')->value;?>
</h3><?php echo $_smarty_tpl->getVariable('ov_security_confirm')->value;?>
<br>
			<label for="password"><?php echo $_smarty_tpl->getVariable('ov_password')->value;?>
: </label><input class="left campo_comun" type="password" name="password" id="password" size="25" maxlength="20" autocomplete="off">
		</div>
	</div>
</div>

</form>
<script type="text/javascript">
buildtime	= <?php echo $_smarty_tpl->getVariable('buildtime')->value;?>
;
</script>
<?php $_template = new Smarty_Internal_Template("planet_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
