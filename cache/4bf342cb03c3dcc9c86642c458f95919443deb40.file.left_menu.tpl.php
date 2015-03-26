<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:10:49
         compiled from "/var/www/html/xNova/styles/templates/left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158573457955131649da7991-05890365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf342cb03c3dcc9c86642c458f95919443deb40' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/left_menu.tpl',
      1 => 1426722484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158573457955131649da7991-05890365',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="menu_izquierdo">
        <ul id="menu_botones">
  		<li class="arriba_menu">
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton_2 " href="?page=overview"><span><?php echo $_smarty_tpl->getVariable('lm_overview')->value;?>
</span></a>
		</li>
		<?php if (!CheckModule(15)){?><?php echo $_smarty_tpl->getVariable('imperio')->value;?>
<?php }?>
		<?php if (!CheckModule(3)){?><li>
	    <span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings&amp;mode=research"><span><?php echo $_smarty_tpl->getVariable('lm_research')->value;?>
</span></a>
		</li><?php }?>
		<?php if (!CheckModule(2)){?><li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings"><span><?php echo $_smarty_tpl->getVariable('lm_buildings')->value;?>
</span></a>
		</li><?php }?>
		<?php if (!CheckModule(4)){?><li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings&amp;mode=fleet"><span><?php echo $_smarty_tpl->getVariable('lm_shipshard')->value;?>
</span></a>
		</li><?php }?>
		<?php if (!CheckModule(5)){?><li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=buildings&amp;mode=defense"><span><?php echo $_smarty_tpl->getVariable('lm_defenses')->value;?>
</span></a>
		</li><?php }?>
		<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span><a class="menu_boton " href="?page=mercado"><span class="mercader_menu"><?php echo $_smarty_tpl->getVariable('lm_trader')->value;?>
</span></a>
		</li>
		<?php if (!CheckModule(9)){?><li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=fleet"><span><?php echo $_smarty_tpl->getVariable('lm_fleet')->value;?>
</span></a>
		</li><?php }?>
		<?php if (!CheckModule(28)){?><li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span><a class="menu_boton " href="?page=techtree"><span><?php echo $_smarty_tpl->getVariable('lm_technology')->value;?>
</span></a>
		</li><?php }?>
		<?php if (!CheckModule(23)){?><li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span><a class="menu_boton " href="?page=resources"><span><?php echo $_smarty_tpl->getVariable('lm_resources')->value;?>
</span></a>
		</li><?php }?>
		<?php if (!CheckModule(11)){?><li><span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=galaxy"><span><?php echo $_smarty_tpl->getVariable('lm_galaxy')->value;?>
</span></a>
		</li><?php }?>
		<?php if (!CheckModule(0)){?><li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=alliance"><span><?php echo $_smarty_tpl->getVariable('lm_alliance')->value;?>
</span></a>
		</li><?php }?>
		<li>
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton " href="?page=oficiales"><span class="mercader_menu"><?php echo $_smarty_tpl->getVariable('lm_officiers')->value;?>
</span></a>
		</li>
		<?php if (!CheckModule(25)){?><li class="abajo_menu">
		<span class="menu_icon">
		<img width="38" height="29" src="./styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/menu_icon.png">
        </span>
		<a class="menu_boton_3 " href="?page=statistics"><span><?php echo $_smarty_tpl->getVariable('lm_statistics')->value;?>
</span></a>
		</li><?php }?>		
    </ul>
	
	<div id="oficiales_menu">
	<a href="game.php?page=oficiales"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/oficiales/<?php echo $_smarty_tpl->getVariable('Comandante')->value;?>
" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('comandante')->value;?>
"></a>
	<a href="game.php?page=oficiales"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/oficiales/<?php echo $_smarty_tpl->getVariable('Geologo')->value;?>
" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('geologo')->value;?>
"></a>
	<a href="game.php?page=oficiales"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/oficiales/<?php echo $_smarty_tpl->getVariable('Almirante')->value;?>
" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('almirante')->value;?>
"></a>
	<a href="game.php?page=oficiales"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/oficiales/<?php echo $_smarty_tpl->getVariable('Ingeniero')->value;?>
" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('ingeniero')->value;?>
"></a>
	<a href="game.php?page=oficiales"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/imagenes/navegacion/oficiales/<?php echo $_smarty_tpl->getVariable('Tecnocrata')->value;?>
" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('tecnocrata')->value;?>
"></a>
	</div>
	<?php if ($_smarty_tpl->getVariable('closed')->value){?>
	<table width="70%" id="infobox" style="border: 3px solid red; text-align:center; margin-left: 6px; margin-top: 3px;"><tr><td><?php echo $_smarty_tpl->getVariable('closed')->value;?>
</td></tr></table>
	<?php }elseif($_smarty_tpl->getVariable('delete')->value){?>
	<table width="70%" id="infobox" style="border: 3px solid red; text-align:center; margin-left: 6px; margin-top: 3px;"><tr><td><?php echo $_smarty_tpl->getVariable('tn_delete_mode')->value;?>
 <?php echo $_smarty_tpl->getVariable('delete')->value;?>
</td></tr></table>
	<?php }elseif($_smarty_tpl->getVariable('vacation')->value){?>
	<table width="70%" id="infobox" style="border: 3px solid red; text-align:center; margin-left: 6px; margin-top: 3px;"><tr><td><?php echo $_smarty_tpl->getVariable('tn_vacation_mode')->value;?>
 <?php echo $_smarty_tpl->getVariable('vacation')->value;?>
</td></tr></table>
	<?php }?>
</div>