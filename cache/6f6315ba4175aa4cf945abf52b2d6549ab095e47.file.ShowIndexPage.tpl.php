<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:20:47
         compiled from "/var/www/html/xNova/styles/templates/adm/ShowIndexPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111152265551326afb3cfc5-09703921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6315ba4175aa4cf945abf52b2d6549ab095e47' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/ShowIndexPage.tpl',
      1 => 1299315644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111152265551326afb3cfc5-09703921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->getVariable('adm_cp_title')->value;?>
 &bull; <?php echo $_smarty_tpl->getVariable('game_name')->value;?>
</title>
<link rel="icon" href="./favicon.ico">
</head>
<frameset cols="217,*" frameborder="0">
<frame src="admin.php?page=menu" name="rightFrame" id="rightFrame" noresize="noresize">
	<frameset rows="84,*" frameborder="0">
		<frame src="admin.php?page=topnav" name="topFrame" scrolling="no" noresize="noresize" id="topFrame">
		<frame src="admin.php?page=overview" name="Hauptframe" scrolling="auto" noresize="noresize" id="mainFrame">
	</frameset>
</frameset>
</html>