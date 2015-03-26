<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 23:00:22
         compiled from "/var/www/html/xNova/styles/templates/estadisticas/stat_playertable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89935370955132ff63894c0-65455962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18c47c27cba8f8f301575054c8295c88f91c01b' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/estadisticas/stat_playertable.tpl',
      1 => 1343643168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89935370955132ff63894c0-65455962',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<tr>
	<th style="width:60px;"><?php echo $_smarty_tpl->getVariable('st_position')->value;?>
</th>
	<th><?php echo $_smarty_tpl->getVariable('st_player')->value;?>
</th>
	<th></th>
	<th><?php echo $_smarty_tpl->getVariable('st_alliance')->value;?>
</th>
	<th><?php echo $_smarty_tpl->getVariable('Raza')->value;?>
</th>
	<th><?php echo $_smarty_tpl->getVariable('st_points')->value;?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['RangeInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('RangeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['RangeInfo']->key => $_smarty_tpl->tpl_vars['RangeInfo']->value){
?>
<tr class="semi_remarcado">
	<td>
	<a class="tooltip" name="<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']==0){?>
	<span style='color:#87CEEB'>*</span>
	<?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']<0){?>
	<span style='color:#E40303'><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['ranking'];?>
</span>
	<?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']>0){?>
	<span style='color:#AAC305'>+<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['ranking'];?>
</span>
	<?php }?>"><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['rank'];?>
</a>
	</td>
	
	<td><a href="#" onclick="return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
');">
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->getVariable('CUser_id')->value&&$_smarty_tpl->tpl_vars['RangeInfo']->value['raza']!=$_smarty_tpl->getVariable('raza_dif')->value){?>
	<font color="#E40303"><b><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
</b></font>
	<?php }?>   
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->getVariable('CUser_id')->value&&$_smarty_tpl->tpl_vars['RangeInfo']->value['raza']==$_smarty_tpl->getVariable('raza_dif')->value){?>
	<font color="#AAC305"><b><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
</b></font>
	<?php }?>  
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']==$_smarty_tpl->getVariable('CUser_id')->value){?>
	<b><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
</b>
	<?php }?>
	</a></td>
	
	<td>
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->getVariable('CUser_id')->value){?>
	<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['id'];?>
);">
	<img src="<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
imagenes/otros/m.gif" title="<?php echo $_smarty_tpl->getVariable('st_write_message')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('st_write_message')->value;?>
" />
	</a>
	<?php }?>
	</td>
	
	<td>
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['allyid']!=0){?>
	<a href="game.php?page=alliance&amp;mode=ainfo&amp;a=<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyid'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['allyid']==$_smarty_tpl->getVariable('CUser_ally')->value){?>
	<span style="color:#33CCFF"><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyname'];?>
</span>
	<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyname'];?>

	<?php }?>
	</a>
	<?php }?>
	</td>
	
	<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['raza'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0){?><td>
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->getVariable('CUser_id')->value&&$_smarty_tpl->tpl_vars['RangeInfo']->value['raza']!=$_smarty_tpl->getVariable('raza_dif')->value){?>
	<font color="#E40303"><b class="tooltip" name="<img src='styles/theme/gultra/imagenes/gultra.png' height='120' width='120'>"><?php echo $_smarty_tpl->getVariable('gultra')->value;?>
</b></font>
	<?php }?>   
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->getVariable('CUser_id')->value&&$_smarty_tpl->tpl_vars['RangeInfo']->value['raza']==$_smarty_tpl->getVariable('raza_dif')->value){?>
	<font color="#AAC305"><b class="tooltip" name="<img src='styles/theme/gultra/imagenes/gultra.png' height='120' width='120'>"><?php echo $_smarty_tpl->getVariable('gultra')->value;?>
</b></font>
	<?php }?>  
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']==$_smarty_tpl->getVariable('CUser_id')->value){?>
	<b class="tooltip" name="<img src='styles/theme/gultra/imagenes/gultra.png' height='120' width='120'>"><?php echo $_smarty_tpl->getVariable('gultra')->value;?>
</b>
	<?php }?>  
	</td><?php }?>
	
	<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['raza'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?><td>
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->getVariable('CUser_id')->value&&$_smarty_tpl->tpl_vars['RangeInfo']->value['raza']!=$_smarty_tpl->getVariable('raza_dif')->value){?>
	<font color="#E40303"><b class="tooltip" name="<img src='styles/theme/voltra/imagenes/voltra.png' height='120' width='120'>">	<?php echo $_smarty_tpl->getVariable('voltra')->value;?>
</b></font>
	<?php }?>   
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->getVariable('CUser_id')->value&&$_smarty_tpl->tpl_vars['RangeInfo']->value['raza']==$_smarty_tpl->getVariable('raza_dif')->value){?>
	<font color="#AAC305"><b class="tooltip" name="<img src='styles/theme/voltra/imagenes/voltra.png' height='120' width='120'>">	<?php echo $_smarty_tpl->getVariable('voltra')->value;?>
</b></font>
	<?php }?>  
	<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']==$_smarty_tpl->getVariable('CUser_id')->value){?>
	<b class="tooltip" name="<img src='styles/theme/voltra/imagenes/voltra.png' height='120' width='120'>"><?php echo $_smarty_tpl->getVariable('voltra')->value;?>
</b>
	<?php }?>  
	</td><?php }?>
	<td><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['points'];?>
</td>
</tr>
<?php }} ?>