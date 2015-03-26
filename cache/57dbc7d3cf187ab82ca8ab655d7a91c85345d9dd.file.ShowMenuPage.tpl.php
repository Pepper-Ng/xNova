<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:20:47
         compiled from "/var/www/html/xNova/styles/templates/adm/ShowMenuPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177844656551326afd33b12-99354158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57dbc7d3cf187ab82ca8ab655d7a91c85345d9dd' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/adm/ShowMenuPage.tpl',
      1 => 1310989530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177844656551326afd33b12-99354158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<br>
<?php $_template = new Smarty_Internal_Template("adm/overall_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="leftmenu">
	<ul id="menu">
		<li style="background-image: url('./styles/theme/gow/img/menu-top.png');height:100px;"></li>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->getVariable('mu_general')->value;?>
</span></a></li>
		<?php if (allowedTo('ShowInformationPage')){?><li><a href="?page=infos" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_game_info')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowConfigPage')){?><li><a href="?page=config" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_settings')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowTeamspeakPage')){?><li><a href="?page=teamspeak" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_ts_options')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowFacebookPage')){?><li><a href="?page=facebook" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_fb_options')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowModulePage')){?><li><a href="?page=module" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_module')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowStatsPage')){?><li><a href="?page=statsconf" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_stats_options')->value;?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->getVariable('mu_users_settings')->value;?>
</span></a></li>
		<?php if (allowedTo('ShowCreatorPage')){?><li><a href="?page=create" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('new_creator_title')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowAccountEditorPage')){?><li><a href="?page=accounteditor" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_add_delete_resources')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowBanPage')){?><li><a href="?page=bans" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_ban_options')->value;?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->getVariable('mu_observation')->value;?>
</span></a></li>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=online&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_connected')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSupportPage')){?><li><a href="?page=support" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_support')->value;?>
<?php if ($_smarty_tpl->getVariable('supportticks')->value!=0){?> (<?php echo $_smarty_tpl->getVariable('supportticks')->value;?>
)<?php }?></a></li><?php }?>
		<?php if (allowedTo('ShowActivePage')){?><li><a href="?page=active" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_vaild_users')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=p_connect&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_active_planets')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowFlyingFleetPage')){?><li><a href="?page=fleets" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_flying_fleets')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowNewsPage')){?><li><a href="?page=news" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_news')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=users&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_user_list')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=planet&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_planet_list')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=moon&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_moon_list')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowMessageListPage')){?><li><a href="?page=messagelist" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_mess_list')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowAccountDataPage')){?><li><a href="?page=accountdata" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_info_account_page')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_search_page')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowMultiIPPage')){?><li><a href="?page=multiips" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_multiip_page')->value;?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->getVariable('mu_tools')->value;?>
</span></a></li>
		<?php if (allowedTo('ShowSendMessagesPage')){?><li><a href="?page=globalmessage" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_global_message')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowPassEncripterPage')){?><li><a href="?page=password" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_md5_encripter')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowStatUpdatePage')){?><li><a href="?page=statsupdate" target="Hauptframe" onClick=" return confirm('<?php echo $_smarty_tpl->getVariable('mu_mpu_confirmation')->value;?>
');"><?php echo $_smarty_tpl->getVariable('mu_manual_points_update')->value;?>
</a></li><?php }?>
		<?php if (allowedTo('ShowClearCachePage')){?><li><a href="?page=clearcache" target="Hauptframe"><?php echo $_smarty_tpl->getVariable('mu_clear_cache')->value;?>
</a></li><?php }?>
		<li style="background-image: url('./styles/theme/gow/img/menu-foot.png');height:30px;"></li>
	</ul>
</div>