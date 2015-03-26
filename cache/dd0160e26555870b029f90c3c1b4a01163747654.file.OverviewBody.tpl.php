<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:20:48
         compiled from "/var/www/html/xNova/styles/templates/adm/OverviewBody.tpl" */ ?>
<?php /*%%SmartyHeaderCode:995054303551326b00d1930-93338315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0160e26555870b029f90c3c1b4a01163747654' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/OverviewBody.tpl',
      1 => 1345144920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995054303551326b00d1930-93338315',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("adm/overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<br>
<script type="text/javascript" src="./scripts/buildlist.js"></script>
<center>
<h1><?php echo $_smarty_tpl->getVariable('ow_title')->value;?>
</h1>
<table width="90%" style="border:2px <?php if (empty($_smarty_tpl->getVariable('Messages',null,true,false)->value)){?>lime<?php }else{ ?>red<?php }?> solid;text-align:center;font-weight:bold;">
<tr>
    <td class="transparent"><?php  $_smarty_tpl->tpl_vars['Message'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('Messages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Message']->key => $_smarty_tpl->tpl_vars['Message']->value){
?>
	<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</span><br>
	<?php }} else { ?><?php echo $_smarty_tpl->getVariable('ow_none')->value;?>
<?php } ?>
	</td>
</tr>
</table>
 <table width="80%">
	<tr>
	<th colspan="2"><h3>Xnova Revolution Team</h3></th>
	</tr>
<tr align="center">
	  <td><a href="http://princk.deviantart.com/" target="_blank"><b>Brayan Narv&aacute;ez (Prinick)</b></a></td>
	  <td>Leader<br />Programmer<br />Designer<td>
	</tr>
	<tr align="center">
	  <td><b>Zorrogris</b></td>
	  <td>Xnova Forum Hoster<td>
	</tr>
	<tr align="center">
	  <td><b>D4rk0ur</b></td>
	  <td>Xnova Forum Hoster<td>
	</tr>
	<tr>
	<th colspan="2"><h3><a href="http://2moons.cc/" target="_blank">2Moons</a> Team</h3></th>
	</tr>
	<tr align="center">
	  <td><b>Slaver</b></td>
	  <td>2moons Leader<br />Developer<td>
	</tr>
	<tr align="center">
	  <td><b>Robbyn</b></td>
	  <td>Communityleitung<td>
	</tr>
	<tr align="center">
	  <td><b>Lyon</b></td>
	  <td>Forenadministrator<td>
	</tr>
	<tr align="center">
	  <td><b>Freak1992</b></td>
	  <td>Forenadministrator<td>
	</tr>
	<tr align="center">
	  <td><b>Buggy666</b></td>
	  <td>Forenmoderrator<td>
	</tr>
	<tr align="center">
	  <td><b>Z3roCooL</b></td>
	  <td>2moons English Translator<td>
	</tr>
	<tr align="center">
	  <td><b>Yoda</b></td>
	  <td>2moons Frensh Translator<td>
	</tr>
	<tr align="center">
	  <td><b>QwataKayean</b></td>
	  <td>2moons Portuguese Translator<td>
	</tr>
	<tr align="center">
	  <td><b>InquisitorEA</b></td>
	  <td>2moons Russian Translator<td>
	</tr>
	
	<tr>
	<th colspan="2"><h3>Special Thanks</h3></th>
	</tr>
	<tr align="center">
	  <td><b>lucky<br />Giogio<br />killer99<br />kmti212<br />sharpshooter<br />Naruto<br />Metusalem<br />Meikel<br />Phil<br />Schnippi<br />Inforcer<br />Vobi<br />Onko<br />Sycrog<br />Raito<br />Chlorel<br />e-Zobar<br />Flousedid<br />Allen Spielern im <a href="http://www.titanspace.org" target="blank">Betauni</a></b></td>
	  <td>Others contributors<td>
	</tr>
	<tr align="center">
	<td colspan="2"><br/>And all Community of 2moons and xNova Revolution</td>
	</tr>
	<tr class="remarcado">
	<td colspan="2"><center><img src="styles/theme/gultra/imagenes/otros/creditos.png" /></center></td>
	</tr>
	</table>
<script type="text/javascript">
$(document).ready(function(){
	$('.UIStory_Message').css("color","#CCCCCC");
});
</script>
<?php $_template = new Smarty_Internal_Template("adm/overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>