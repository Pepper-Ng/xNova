<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-26 13:21:11
         compiled from "/var/www/html/xNova/styles/templates/phalax_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2591158715513f9b7560f84-52377655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf72ff66b14e49c2a3beb80d44f46cc783bbc7a3' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/phalax_body.tpl',
      1 => 1315973486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2591158715513f9b7560f84-52377655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="tooltip" class="tip"></div>
<br /><br /><br />
<div id="titulo_alternativo_corto">
    <ul class="tabsbelow">
        <li>
              <span><b><?php echo $_smarty_tpl->getVariable('px_scan_position')->value;?>
 [<?php echo $_smarty_tpl->getVariable('phl_pl_galaxy')->value;?>
:<?php echo $_smarty_tpl->getVariable('phl_pl_system')->value;?>
:<?php echo $_smarty_tpl->getVariable('phl_pl_place')->value;?>
] (<?php echo $_smarty_tpl->getVariable('phl_pl_name')->value;?>
) - <?php echo $_smarty_tpl->getVariable('px_fleet_movement')->value;?>
</b></a> </span>
        </li>                                    
    </ul>
</div>
<div id="eins">
<div>
<br />
<table width="95%">
    <?php  $_smarty_tpl->tpl_vars['FleetInfoRow'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fleets')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['FleetInfoRow']->key => $_smarty_tpl->tpl_vars['FleetInfoRow']->value){
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['FleetInfoRow']->key;
?>
		<tr class="<?php echo $_smarty_tpl->tpl_vars['FleetInfoRow']->value['fleet_status'];?>
">
			<td id="fleettime_<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" style="width:92px;">-</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['FleetInfoRow']->value['fleet_descr'];?>

			</td>
		</tr>
	<?php }} else { ?>
		<tr><td colspan="2"><?php echo $_smarty_tpl->getVariable('px_no_fleet')->value;?>
</td></tr>
	<?php } ?>
</table>
 </div>
</div>	
<div class="new_footer"></div>
<script type="text/javascript">
Fleets		= <?php echo $_smarty_tpl->getVariable('FleetData')->value;?>
;
</script>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>