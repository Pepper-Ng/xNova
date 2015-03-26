<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:21:51
         compiled from "/var/www/html/xNova/styles/templates/imperio/empire_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993861145551326ef929dd8-50515928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a92607c8d0a7bcd3c1b81fb895b963236a8e901' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/imperio/empire_overview.tpl',
      1 => 1345118516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '993861145551326ef929dd8-50515928',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<body id="imperio_body">
<div id="tooltip" class="tip"></div>
<center>
<div id="imperio">
<br />
 	<table id="imperio_tabla" style="text-align: center;">        
			<tr>
                <td></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
				<td><a href="javascript:opener.location.replace('game.php?page=overview&amp;cp=<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['id'];?>
&amp;re=0'); self.close();"><img class="redondeada" width="80" height="80" border="0" src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['name'];?>
" /></a></td>
				
				<?php }} ?>
            </tr>
            <tr>
				<td></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre"><font color="#e0d164"><h2><b><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['name'];?>
</b></h2></font></td>
				<?php }} ?>
            </tr>
            <tr>
				<td></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre"><a class="tooltip" name="<?php echo $_smarty_tpl->getVariable('iv_coords')->value;?>
" href="javascript:opener.location.replace('game.php?page=galaxy&amp;mode=3&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['galaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['system'];?>
'); self.close();">[<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['planet'];?>
]</a></td>
				<?php }} ?>
            </tr>
            <tr>
				<td></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre tooltip" name="<?php echo $_smarty_tpl->getVariable('iv_fields')->value;?>
"><font color="#41914c"><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['field_current'];?>
/<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['field_max'];?>
</font></td>
				<?php }} ?>
			</tr>
		
			<tr>
				<th class="repetido" colspan="<?php echo $_smarty_tpl->getVariable('colspan')->value;?>
"><?php echo $_smarty_tpl->getVariable('iv_resources')->value;?>
</th>
            </tr>
			<tr>
				<td><img class="tooltip" name="<font color='#a0b3cd'><b><h3><?php echo $_smarty_tpl->getVariable('Metal')->value;?>
</h3></b></font>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg" /></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre"><font color="#a0b3cd"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['metal'];?>
</h3></b></font></td>
				<?php }} ?>
			</tr>
            <tr>
				<td><img class="tooltip" name="<font color='#6eb6ff'><b><h3><?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
</h3></b></font>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg" /></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre"><font color="#6eb6ff"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['crystal'];?>
</h3></b></font></td>
				<?php }} ?>
			</tr>
			<tr>
				<td><img class="tooltip" name="<font color='#dbfff8'><b><h3><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
</h3></b></font>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg" /></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre"><font color="#dbfff8"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['norio'];?>
</h3></b></font></td>
				<?php }} ?>
			</tr>
            <tr>
				<td><img class="tooltip" name="<font color='#1a8494'><b><h3><?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
</h3></b></font>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg" /></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre"><font color="#1a8494"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['deuterium'];?>
</h3></b></font></td>
				<?php }} ?>
			</tr>
            <tr>
				<td><img class="tooltip" name="<font color='#e36b6a'><b><h3><?php echo $_smarty_tpl->getVariable('Energy')->value;?>
</h3></b></font>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/energia.jpg" /></td>
				<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
					<td class="tech_nombre"><font color="#e36b6a"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['energy_used'];?>
/<?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['InfoList']['energy_max'];?>
</h3></b></font></td>
				<?php }} ?>
            </tr>
			
			<tr>
              <th class="repetido" colspan="<?php echo $_smarty_tpl->getVariable('colspan')->value;?>
"><?php echo $_smarty_tpl->getVariable('iv_buildings')->value;?>
</th>
            </tr>
				<?php  $_smarty_tpl->tpl_vars['Builds'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('build')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Builds']->key => $_smarty_tpl->tpl_vars['Builds']->value){
?>
					<tr>
					<td><img class="tooltip" name="<b><h3><?php echo $_smarty_tpl->getVariable('tech')->value[$_smarty_tpl->getVariable('Builds')->value];?>
</h3></b>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['Builds']->value;?>
.png" width="50" height="50" /></td>
					<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
						<td class="tech_nombre"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['BuildsList'][$_smarty_tpl->getVariable('Builds')->value];?>
</h3></b></td>
					<?php }} ?>
					</tr>
				<?php }} ?>
			<tr>
                <th class="repetido" colspan="<?php echo $_smarty_tpl->getVariable('colspan')->value;?>
"><?php echo $_smarty_tpl->getVariable('iv_technology')->value;?>
</th>
			</tr>
				<?php  $_smarty_tpl->tpl_vars['Researchs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('research')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Researchs']->key => $_smarty_tpl->tpl_vars['Researchs']->value){
?>
					<tr>
					<td><img class="tooltip" name="<b><h3><?php echo $_smarty_tpl->getVariable('tech')->value[$_smarty_tpl->getVariable('Researchs')->value];?>
</h3></b>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['Researchs']->value;?>
.png" width="50" height="50" /></td>
					<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
						<td class="tech_nombre"><b><h3><?php echo $_smarty_tpl->getVariable('ResearchList')->value[$_smarty_tpl->getVariable('Researchs')->value];?>
</h3></b></td>
					<?php }} ?>
					</tr>
				<?php }} ?>
            <tr>
               <th class="repetido" colspan="<?php echo $_smarty_tpl->getVariable('colspan')->value;?>
"><?php echo $_smarty_tpl->getVariable('iv_ships')->value;?>
</th>
            </tr>
				<?php  $_smarty_tpl->tpl_vars['Fleets'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fleet')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Fleets']->key => $_smarty_tpl->tpl_vars['Fleets']->value){
?>
					<tr>
					<td><img class="tooltip" name="<b><h3><?php echo $_smarty_tpl->getVariable('tech')->value[$_smarty_tpl->getVariable('Fleets')->value];?>
</h3></b>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['Fleets']->value;?>
.png" width="50" height="50" /></td>
					<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
						<td class="tech_nombre"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['FleetsList'][$_smarty_tpl->getVariable('Fleets')->value];?>
</h3></b></td>
					<?php }} ?>
					</tr>
				<?php }} ?>
            <tr>
                <th class="repetido" colspan="<?php echo $_smarty_tpl->getVariable('colspan')->value;?>
"><?php echo $_smarty_tpl->getVariable('iv_defenses')->value;?>
</th>
            </tr>
				<?php  $_smarty_tpl->tpl_vars['Defenses'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('defense')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Defenses']->key => $_smarty_tpl->tpl_vars['Defenses']->value){
?>
					<tr>
					<td><img class="tooltip" name="<b><h3><?php echo $_smarty_tpl->getVariable('tech')->value[$_smarty_tpl->getVariable('Defenses')->value];?>
</h3></b>" src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/gebaeude/<?php echo $_smarty_tpl->tpl_vars['Defenses']->value;?>
.png" width="50" height="50" /></td>
					<?php  $_smarty_tpl->tpl_vars['PlanetsInfoRow'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('PlanetsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PlanetsInfoRow']->key => $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value){
?>
						<td class="tech_nombre"><b><h3><?php echo $_smarty_tpl->tpl_vars['PlanetsInfoRow']->value['DefensesList'][$_smarty_tpl->getVariable('Defenses')->value];?>
</h3></b></td>
					<?php }} ?>
					</tr>
				<?php }} ?>  
    </table>
</div>
</center>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>