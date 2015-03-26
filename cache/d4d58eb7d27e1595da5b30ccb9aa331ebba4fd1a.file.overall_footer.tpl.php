<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 21:10:49
         compiled from "/var/www/html/xNova/styles/templates/overall_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15909530805513164a006a90-14781730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4d58eb7d27e1595da5b30ccb9aa331ebba4fd1a' => 
    array (
      0 => '/var/www/html/xNova/styles/templates/overall_footer.tpl',
      1 => 1322218422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15909530805513164a006a90-14781730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('cron')->value;?>

<script type="text/javascript">
var serverTime = new Date(<?php echo $_smarty_tpl->getVariable('date')->value[0];?>
, <?php echo $_smarty_tpl->getVariable('date')->value[1]-1;?>
, <?php echo $_smarty_tpl->getVariable('date')->value[2];?>
, <?php echo $_smarty_tpl->getVariable('date')->value[3];?>
, <?php echo $_smarty_tpl->getVariable('date')->value[4];?>
, <?php echo $_smarty_tpl->getVariable('date')->value[5];?>
);
var localTime = new Date();
localTS = localTime.getTime();
var ServerTimezoneOffset = <?php echo $_smarty_tpl->getVariable('date')->value[6];?>
 + localTime.getTimezoneOffset()*60;
var Gamename	= document.title;
var Ready		= "<?php echo $_smarty_tpl->getVariable('ready')->value;?>
";
var Skin		= "<?php echo $_smarty_tpl->getVariable('dpath')->value;?>
";
var Lang		= "<?php echo $_smarty_tpl->getVariable('lang')->value;?>
";
var head_info	= "<?php echo $_smarty_tpl->getVariable('fcm_info')->value;?>
";
var auth		= <?php echo $_smarty_tpl->getVariable('authlevel')->value;?>
;
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('cd')->value;?>
scripts/jQuery.js?v=<?php echo $_smarty_tpl->getVariable('REV')->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('cd')->value;?>
scripts/base.js?v=<?php echo $_smarty_tpl->getVariable('REV')->value;?>
"></script>
<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('scripts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('cd')->value;?>
scripts/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->getVariable('REV')->value;?>
"></script>
<?php }} ?>
<script type="text/javascript">
var timerHandler = new TimerHandler();
function UhrzeitAnzeigen()
{
    var Sekunden = serverTime.getSeconds();
    serverTime.setSeconds(Sekunden+1);
    if(document.getElementById("servertime"))
		document.getElementById("servertime").innerHTML = getFormatedDate(serverTime.getTime(), '[M] [D] [d] [H]:[i]:[s]');
}
UhrzeitAnzeigen();
setInterval("UhrzeitAnzeigen()", 1000);

<?php echo $_smarty_tpl->getVariable('execscript')->value;?>


<?php if ($_smarty_tpl->getVariable('ga_active')->value){?>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->getVariable('ga_key')->value;?>
']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
<?php }?>
<?php if ($_smarty_tpl->getVariable('debug')->value==1){?>
onerror = handleErr;
<?php }?>
</script>
<script type="text/javascript" src="./scripts/gate.js"></script>
</div>
</body>
</html>