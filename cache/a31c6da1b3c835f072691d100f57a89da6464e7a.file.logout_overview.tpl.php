<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 23:05:00
         compiled from "/var/www/html/xNova/styles/templates/logout_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1326721065513310c642182-03177952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31c6da1b3c835f072691d100f57a89da6464e7a' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/logout_overview.tpl',
      1 => 1314081400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1326721065513310c642182-03177952',
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
<link rel="icon" href="favicon.ico" />
</head>
<body style="background:#000000;">
<div id="tooltip" class="tip"></div>
<table align="center">
<tr>
<td><font color="#FFFFFF" size="1" face="Arial"><center><?php echo $_smarty_tpl->getVariable('lo_logout')->value;?>
</center></font></td>
</tr>
<tr>
<td><center><font color="#FFFFFF" size="1" face="Arial"><?php echo $_smarty_tpl->getVariable('lo_notify')->value;?>
</font></center></td>
</tr>
</table>
<script type="text/javascript">
    var second = 5;
	function Countdown(){
		if(second == 0)
			return;
			
		second--;
		$('#seconds').text(second);
	}
	window.setTimeout("window.location.href='./index.php'", 5000);
	window.setInterval("Countdown()", 1000);
</script>
<?php $_template = new Smarty_Internal_Template("overall_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>