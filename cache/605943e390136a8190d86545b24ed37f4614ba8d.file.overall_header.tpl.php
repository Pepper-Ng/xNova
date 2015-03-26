<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:10:49
         compiled from "/var/www/html/xNova/styles/templates/overall_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108503146255131649b5e337-26909893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '605943e390136a8190d86545b24ed37f4614ba8d' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/overall_header.tpl',
      1 => 1329575640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108503146255131649b5e337-26909893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo $_smarty_tpl->getVariable('lang')->value;?>
">
<head>
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 - <?php echo $_smarty_tpl->getVariable('uni_name')->value;?>
</title>
<?php if ($_smarty_tpl->getVariable('goto')->value){?>
<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->getVariable('gotoinsec')->value;?>
;URL=<?php echo $_smarty_tpl->getVariable('goto')->value;?>
" />
<?php }?>
<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->getVariable('lang')->value;?>
" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css" />
<link rel="stylesheet" type="text/css" href="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/<?php echo $_smarty_tpl->getVariable('css_style')->value;?>
.css" />
<link rel="icon" href="favicon.ico" />
<script type="text/javascript">
//<![CDATA[
// This checks its a number.
function es_numero(input){
return !isNaN(input)&&parseInt(input)==input;
}
// This checks its lower or equal to max.
function comprobar(campo,val_num){
     
var elvalor = document.getElementById(campo).value;  
if(es_numero(elvalor)){
     
if(elvalor > val_num){
document.getElementById(campo).value= val_num;
}
     
} else{
alert("Por favor, ingresa un numero en el campo.");
}
     
}
//]]>
</script>
</head>