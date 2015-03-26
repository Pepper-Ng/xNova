<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:21:11
         compiled from "/var/www/html/xNova/styles/templates/adm/error_message_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526352311551326c7a29c55-51472192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77ff57a4643f8d3e2179e11c4e1e3d1e0f27b72' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/error_message_body.tpl',
      1 => 1303826676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526352311551326c7a29c55-51472192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("adm/overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<br>
<div id="content">
    <table style="width:519px;">
		<tr>
            <th><?php echo $_smarty_tpl->getVariable('fcm_info')->value;?>
</th>
        </tr>
		<tr>
            <td><?php echo $_smarty_tpl->getVariable('mes')->value;?>
</td>
        </tr>
    </table>
</div>
<?php $_template = new Smarty_Internal_Template("adm/overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>