<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:09:23
         compiled from "/var/www/html/xNova/styles/home/index_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140355114655132403ec0f91-32997231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84f8b38eeb75150a5da91c58d8c375f7cde650ff' => 
    array (
      0 => '/var/www/html/xNova/styles/home/index_footer.tpl',
      1 => 1305989982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140355114655132403ec0f91-32997231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="fb-root"></div>
<script type="text/javascript" src="scripts/base.js"></script>
<script type="text/javascript" src="scripts/login.js"></script>
<script type="text/javascript">
IsCaptchaActive 	= <?php echo $_smarty_tpl->getVariable('game_captcha')->value;?>
;
IsRegActive 		= <?php echo $_smarty_tpl->getVariable('reg_close')->value;?>
;
lang_reg_closed		= "<?php echo $_smarty_tpl->getVariable('register_closed')->value;?>
";
cappublic			= "<?php echo $_smarty_tpl->getVariable('cappublic')->value;?>
";
fb_permissions		= "<?php echo $_smarty_tpl->getVariable('fb_perm')->value;?>
";
lang				= "<?php echo $_smarty_tpl->getVariable('lang')->value;?>
";

<?php if ($_smarty_tpl->getVariable('code')->value){?>
alert("<?php echo $_smarty_tpl->getVariable('code')->value;?>
");
<?php }?>
</script>
<?php if ($_smarty_tpl->getVariable('game_captcha')->value){?>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<script type="text/javascript">
if(typeof recaptchaload != "undefined" && recaptchaload == true) {
	showRecaptcha();
}
</script>
<?php }?>
<?php if ($_smarty_tpl->getVariable('ga_active')->value){?>
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("<?php echo $_smarty_tpl->getVariable('ga_key')->value;?>
");
pageTracker._trackPageview();
} catch(err) {}</script>
<?php }?>
<?php if ($_smarty_tpl->getVariable('fb_active')->value){?>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">	
initFB("<?php echo $_smarty_tpl->getVariable('fb_key')->value;?>
");
</script>
<?php }?>
<?php if ($_smarty_tpl->getVariable('bgm_active')->value){?>
<script type="text/javascript" src="scripts/soundmanager2.js"></script>	
<script type="text/javascript">	
 
soundManager.url = 'scripts';
soundManager.flashVersion = 8;
soundManager.onready(function() {
	if (soundManager.supported()) {
		var loginbgm = soundManager.createSound({
			id: 'aSound',
			url: '<?php echo $_smarty_tpl->getVariable('bgm_file')->value;?>
',
			volume: 50
		});
		if($.cookie('music') == null || $.cookie('music') == "on"){
			loginbgm.play();
			$('#music').text("<?php echo $_smarty_tpl->getVariable('music_on')->value;?>
");
		}
	} else {
		alert('SoundManager failed to load');
	}
});

function music() {
	var loginbgm = soundManager.getSoundById('aSound');
	var idmusic = $('#music');
	if(idmusic.text() != "<?php echo $_smarty_tpl->getVariable('music_on')->value;?>
")
	{
		loginbgm.play();
		idmusic.text("<?php echo $_smarty_tpl->getVariable('music_on')->value;?>
");
		$.cookie('music', 'on');
	}
	else
	{
		loginbgm.stop();
		idmusic.text("<?php echo $_smarty_tpl->getVariable('music_off')->value;?>
");
		$.cookie('music', 'off');
	}
}
</script>
<?php }?>
</body>
</html>