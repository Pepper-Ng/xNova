<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:59:31
         compiled from "/var/www/html/xNova/styles/templates/raport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21102956755132fc3b28ef2-95593271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49d20c498dba94b5d5a7062e65d23d6917c40f06' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/raport.tpl',
      1 => 1329577262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21102956755132fc3b28ef2-95593271',
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
<link rel="stylesheet" type="text/css" href="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/reportes.css" />
<link rel="icon" href="favicon.ico" />
</head>
<body>
<div id="tooltip" class="tip"></div>
<?php echo $_smarty_tpl->getVariable('raport')->value;?>

<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>