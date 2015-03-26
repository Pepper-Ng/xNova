<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:12:41
         compiled from "/var/www/html/xNova/styles/templates/flotas/fleet3_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916877081551316b9ab9768-54944789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dee6111fe3e6b3aa1b753d075fdd85c0c8a9ef3' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/flotas/fleet3_table.tpl',
      1 => 1329576360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1916877081551316b9ab9768-54944789',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('thisgalaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('thissystem')->value;?>
:<?php echo $_smarty_tpl->getVariable('thisplanet')->value;?>
 - <?php if ($_smarty_tpl->getVariable('thisplanet_type')->value==3){?><?php echo $_smarty_tpl->getVariable('fl_moon')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('fl_planet')->value;?>
<?php }?></div>
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
/adds/flotas3.jpg);"></div>
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span><b><font color="red">>></font><?php echo $_smarty_tpl->getVariable('fl_fuel_consumption')->value;?>
:</b> <?php echo pretty_number($_smarty_tpl->getVariable('consumption')->value);?>
</span>
        </li>                                    
    </ul>
</div>
<div id="eins">
        <div>
<table width="95%">
	<tr style="height:20px">
		<th colspan="2" class="success"><?php echo $_smarty_tpl->getVariable('fl_fleet_sended')->value;?>
</span></th>
	</tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_mission')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('mission')->value;?>
</td>
	</tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_distance')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('distance')->value;?>
</td>
    </tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_fleet_speed')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('speedallsmin')->value;?>
</td>
    </tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_fuel_consumption')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('consumption')->value;?>
</td>
    </tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_from')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('from')->value;?>
</td>
    </tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_destiny')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('destination')->value;?>
</td>
    </tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_arrival_time')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('start_time')->value;?>
</td>
    </tr>
    <tr style="height:20px">
        <td><?php echo $_smarty_tpl->getVariable('fl_return_time')->value;?>
</td>
        <td><?php echo $_smarty_tpl->getVariable('end_time')->value;?>
</td>
    </tr>
    <tr style="height:20px">
        <th colspan="2"><?php echo $_smarty_tpl->getVariable('fl_fleet')->value;?>
</th>
    </tr>
	<?php  $_smarty_tpl->tpl_vars['Shipcount'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['Shipname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('FleetList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Shipcount']->key => $_smarty_tpl->tpl_vars['Shipcount']->value){
 $_smarty_tpl->tpl_vars['Shipname']->value = $_smarty_tpl->tpl_vars['Shipcount']->key;
?>
	<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['Shipname']->value;?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['Shipcount']->value;?>
</td>
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