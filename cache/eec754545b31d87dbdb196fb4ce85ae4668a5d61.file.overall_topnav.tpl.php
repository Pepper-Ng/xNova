<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:10:49
         compiled from "/var/www/html/xNova/styles/templates/overall_topnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182832719955131649bd4575-50011064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec754545b31d87dbdb196fb4ce85ae4668a5d61' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/overall_topnav.tpl',
      1 => 1426721763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182832719955131649bd4575-50011064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
        <div id="bar">
			<b><ul>
				<!--<li><?php if (!empty($_smarty_tpl->getVariable('forum_url',null,true,false)->value)){?><a href="<?php echo $_smarty_tpl->getVariable('forum_url')->value;?>
" target="forum"><?php echo $_smarty_tpl->getVariable('lm_forums')->value;?>
</a><?php }?></li>-->
				<li><?php if (!CheckModule(22)){?><a href="javascript:OpenPopup('?page=records','<?php echo $_smarty_tpl->getVariable('lm_records')->value;?>
', 1024, 768);"><?php echo $_smarty_tpl->getVariable('lm_records')->value;?>
</a><?php }?></li>
				<?php if (!CheckModule(16)){?><li><a href="?page=messages"><?php echo $_smarty_tpl->getVariable('lm_messages')->value;?>
<?php if ($_smarty_tpl->getVariable('new_message')->value>0){?><span id="newmes"> (<span id="newmesnum"><blink><font color="lime"><?php echo $_smarty_tpl->getVariable('new_message')->value;?>
</font></blink></span>)</span><?php }?></a></li><?php }?>
				<li><?php if (!CheckModule(12)){?><a href="?page=topkb"><?php echo $_smarty_tpl->getVariable('lm_topkb')->value;?>
</a><?php }?></li>
				<li><?php if (!CheckModule(26)){?><a href="?page=search"><?php echo $_smarty_tpl->getVariable('lm_search')->value;?>
</a><?php }?></li>
				<li><a href="?page=options"><?php echo $_smarty_tpl->getVariable('lm_options')->value;?>
</a></li>
				<?php if (!CheckModule(6)){?><li><a href="?page=buddy"><?php echo $_smarty_tpl->getVariable('lm_buddylist')->value;?>
</a></li><?php }?>
				<?php if (!CheckModule(39)){?><li><a href="?page=battlesim"><?php echo $_smarty_tpl->getVariable('lm_battlesim')->value;?>
</a></li><?php }?>
				<li><?php if (!CheckModule(7)){?><a href="?page=chat"><?php echo $_smarty_tpl->getVariable('lm_chat')->value;?>
</a><?php }?> </li>
				<?php if (!CheckModule(27)){?><li><a href="?page=support"><?php echo $_smarty_tpl->getVariable('lm_support')->value;?>
</a></li><?php }?>
				<li><a href="?page=logout"><font color="red"><?php echo $_smarty_tpl->getVariable('lm_logout')->value;?>
</font></a></li>
				<?php if ($_smarty_tpl->getVariable('authlevel')->value>0){?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->getVariable('lm_administration')->value;?>
</a></li><?php }?>
            </ul></b>
        </div> 
		
    	<ul id="recursos">
        	<li class="metal">
               <a style="cursor:help" class="tooltip" name="<h3><?php echo $_smarty_tpl->getVariable('Metal')->value;?>
</h3><hr /><?php echo $_smarty_tpl->getVariable('Metal')->value;?>
: <?php echo pretty_number($_smarty_tpl->getVariable('metal')->value);?>
&nbsp;&nbsp;&nbsp; <br /> <?php if ($_smarty_tpl->getVariable('settings_tnstor')->value){?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('metal_max')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('alt_metal_max')->value;?>
<?php }?>"> <img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/metal.jpg" /></a>
                <span class="valor">
						<span id="current_metal"><b><?php echo $_smarty_tpl->getVariable('metales')->value;?>
</b></span>
				</span>
            </li>
        	<li class="cristal">
               <a style="cursor:help" class="tooltip" name="<h3><?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
</h3><hr /><?php echo $_smarty_tpl->getVariable('Crystal')->value;?>
: <?php echo pretty_number($_smarty_tpl->getVariable('crystal')->value);?>
&nbsp;&nbsp;&nbsp; <br /> <?php if ($_smarty_tpl->getVariable('settings_tnstor')->value){?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('crystal_max')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('alt_crystal_max')->value;?>
<?php }?>"> <img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/cristal.jpg" /></a>
					<span class="valor">
						<span id="current_crystal"><b><?php echo $_smarty_tpl->getVariable('cristales')->value;?>
</b></span>
                </span>
            </li>
        	<li class="deuterio">
                <a style="cursor:help" class="tooltip" name="<h3><?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
</h3><hr /><?php echo $_smarty_tpl->getVariable('Deuterium')->value;?>
: <?php echo pretty_number($_smarty_tpl->getVariable('deuterium')->value);?>
&nbsp;&nbsp;&nbsp; <br /> <?php if ($_smarty_tpl->getVariable('settings_tnstor')->value){?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('deuterium_max')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('alt_deuterium_max')->value;?>
<?php }?>"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/deuterio.jpg" /></a>
                <span class="valor">
						<span id="current_deuterium"><b onclick="test();"><?php echo $_smarty_tpl->getVariable('deuterios')->value;?>
</b></span>
               	</span>
            </li>
			<li class="norio">
				<a style="cursor:help" class="tooltip" name="<h3><?php echo $_smarty_tpl->getVariable('Energy')->value;?>
</h3><hr /><?php echo $_smarty_tpl->getVariable('energy')->value;?>
 / <?php echo $_smarty_tpl->getVariable('energy_maxx')->value;?>
"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/energia.jpg" /></a>
					<span class="valor">
						<span><b><?php echo $_smarty_tpl->getVariable('energia')->value;?>
</b></span>
                </span>
            </li>
        	<li class="energia">
				<a style="cursor:help" class="tooltip" name="<h3><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
</h3><hr /><?php echo $_smarty_tpl->getVariable('Norio')->value;?>
: <?php echo pretty_number($_smarty_tpl->getVariable('norio')->value);?>
&nbsp;&nbsp;&nbsp; <br /> <?php if ($_smarty_tpl->getVariable('settings_tnstor')->value){?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('norio_max')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('almacenes')->value;?>
: <?php echo $_smarty_tpl->getVariable('alt_norio_max')->value;?>
<?php }?>"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/norio.jpg" /></a>
                <span class="valor">
                    	<span id="current_norio"><b><?php echo $_smarty_tpl->getVariable('norios')->value;?>
</b></span>
                </span>
            </li>
        	<li class="materia_oscura">
			<a href="game.php?page=materiaoscura" class="tooltip" name="<?php echo $_smarty_tpl->getVariable('Darkmatter')->value;?>
: <?php echo $_smarty_tpl->getVariable('darkmatter')->value;?>
"><img src="styles/theme/<?php echo $_smarty_tpl->getVariable('Raza_skin')->value;?>
/images/materia.png" /></a>	
                <span class="valor">
                    	<span><b><?php echo $_smarty_tpl->getVariable('darkmatter')->value;?>
</b></span>
                </span>
            </li>
		</ul>	
<script type="text/javascript">
window.setTimeout(function(){
	var curTime = serverTime.getTime()-1000;
	resourceTicker({ cur: <?php echo round($_smarty_tpl->getVariable('metal')->value);?>
, limit: <?php echo $_smarty_tpl->getVariable('js_metal_max')->value;?>
, hr: <?php echo $_smarty_tpl->getVariable('js_metal_hr')->value;?>
, elem: "current_metal", startTime: curTime }, true);
	resourceTicker({ cur: <?php echo round($_smarty_tpl->getVariable('crystal')->value);?>
, limit: <?php echo $_smarty_tpl->getVariable('js_crystal_max')->value;?>
, hr: <?php echo $_smarty_tpl->getVariable('js_crystal_hr')->value;?>
, elem: "current_crystal", startTime: curTime }, true);
	resourceTicker({ cur: <?php echo round($_smarty_tpl->getVariable('deuterium')->value);?>
, limit: <?php echo $_smarty_tpl->getVariable('js_deuterium_max')->value;?>
, hr: <?php echo $_smarty_tpl->getVariable('js_deuterium_hr')->value;?>
, elem: "current_deuterium", startTime: curTime }, true);
	resourceTicker({ cur: <?php echo round($_smarty_tpl->getVariable('norio')->value);?>
, limit: <?php echo $_smarty_tpl->getVariable('js_norio_max')->value;?>
, hr: <?php echo $_smarty_tpl->getVariable('js_norio_hr')->value;?>
, elem: "current_norio", startTime: curTime }, true)
}, 1000);
</script>