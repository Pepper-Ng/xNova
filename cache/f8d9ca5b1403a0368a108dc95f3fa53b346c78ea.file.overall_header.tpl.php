<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:20:48
         compiled from "/var/www/html/xNova/styles/templates/adm/overall_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243050658551326b0034d77-50013610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d9ca5b1403a0368a108dc95f3fa53b346c78ea' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/overall_header.tpl',
      1 => 1329581920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243050658551326b0034d77-50013610',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="./styles/theme/gultra/cpanel.css" />
<link rel="icon" href="./favicon.ico">
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="X-UA-Compatible" content="IE=100">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<?php if ($_smarty_tpl->getVariable('goto')->value){?>
<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->getVariable('gotoinsec')->value;?>
;URL=<?php echo $_smarty_tpl->getVariable('goto')->value;?>
">
<?php }?>
<script type="text/javascript" src="./scripts/jQuery.js"></script>
<script type="text/javascript" src="./scripts/base.js"></script>
<script type="text/javascript" src="./scripts/filterlist.js"></script>
<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('scripts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
?>
<script type="text/javascript" src="./scripts/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js"></script>
<?php }} ?>
<script type="text/javascript">
var xsize    = screen.width;
var ysize    = screen.height;
var breite   = 720;
var hoehe   = 300;
var xpos   = (xsize-breite) / 2;
var ypos   = (ysize-hoehe) / 2;
var head_info   = "<?php echo $_smarty_tpl->getVariable('fcm_info')->value;?>
";

function useropen(target_url) {
   var userlist = window.open("UserListPage.php?action=edit&id="+ target_url, "info", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
   userlist.focus();
}

function openEdit(id, type) {
   var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
   editlist.focus();
}
</script>
</head>
<body>
<center>
<div id="tooltip" class="tip"></div>