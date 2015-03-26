<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:18:19
         compiled from "/var/www/html/xNova/styles/templates/techtree_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61127435513180bac90d8-61212625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516c343b347c0c7e5cba1fdb2a62d22f05c515ff' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/techtree_overview.tpl',
      1 => 1329577286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61127435513180bac90d8-61212625',
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
				<div id="titular_texto" style="display: block;"><?php echo $_smarty_tpl->getVariable('lm_technology')->value;?>
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
 <table cellspacing="0" cellpadding="0" style="width:95%;">
<?php  $_smarty_tpl->tpl_vars['TechInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('TechTreeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['TechInfo']->key => $_smarty_tpl->tpl_vars['TechInfo']->value){
?>
<?php if (!is_array($_smarty_tpl->tpl_vars['TechInfo']->value)){?>

<?php }else{ ?>
<tr class="alt">
   <td><a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['TechInfo']->value['id'];?>
)"><img border="0" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['TechInfo']->value['id'];?>
.png" align="top" width="25" height="25" /></a></td>
   <td align="left"><a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['TechInfo']->value['id'];?>
)"><h4><?php echo $_smarty_tpl->tpl_vars['TechInfo']->value['name'];?>
</h4></a></td>
    <td align="right">
   <?php if ($_smarty_tpl->tpl_vars['TechInfo']->value['need']){?>
      <?php  $_smarty_tpl->tpl_vars['NeedLevel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TechInfo']->value['need'][$_smarty_tpl->tpl_vars['TechInfo']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['NeedLevel']->key => $_smarty_tpl->tpl_vars['NeedLevel']->value){
?>
         <?php if ($_smarty_tpl->tpl_vars['NeedLevel']->value['own']>=$_smarty_tpl->tpl_vars['NeedLevel']->value['count']){?>
            <span class="semi_remarcado"><a href="#" onclick="return Dialog.info(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['NeedLevel']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
)"><font color="#00ff00"><?php echo $_smarty_tpl->getVariable('LNG')->value[$_smarty_tpl->tpl_vars['NeedLevel']->value['id']];?>
</font></a> <font color="#00ff00"><b>(<?php echo $_smarty_tpl->getVariable('tt_lvl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['NeedLevel']->value['own'];?>
/<?php echo $_smarty_tpl->tpl_vars['NeedLevel']->value['count'];?>
)</b></font></span><br>
         <?php }else{ ?>
            <span><a href="#" onclick="return Dialog.info(<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['NeedLevel']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
)"><font color="#ff0000"><?php echo $_smarty_tpl->getVariable('LNG')->value[$_smarty_tpl->tpl_vars['NeedLevel']->value['id']];?>
</font></a> <font color="#ff0000"><b>(<?php echo $_smarty_tpl->getVariable('tt_lvl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['NeedLevel']->value['own'];?>
/<?php echo $_smarty_tpl->tpl_vars['NeedLevel']->value['count'];?>
)</b></font></span><br>             
         <?php }?>
      <?php }} ?>
   <?php }?>
   </td>
</tr>
<?php }?>
<?php }} ?>
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