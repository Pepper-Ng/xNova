<?php /* Smarty version Smarty3-SVN$Rev: 3286 $, created on 2015-03-25 22:09:23
         compiled from "/var/www/html/xNova/styles/home/index_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96980369055132403cde569-19873346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188e2df4e4ce10ceadc9e0289e72e439026a4912' => 
    array (
      0 => '/var/www/html/xNova/styles/home/index_body.tpl',
      1 => 1314256914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96980369055132403cde569-19873346',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/var/www/html/xNova/includes/libs/Smarty/plugins/function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("index_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div class="wrapper">
			<div id="page">
				<div id="header">
					<ul class="buttons">
						<li><a href="index.php"><?php echo $_smarty_tpl->getVariable('menu_index')->value;?>
</a></li>
						<li class="skull"><a href="#"></a></li>

						<li class="tour"><a href="<?php echo $_smarty_tpl->getVariable('forum_url')->value;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('forum')->value;?>
</a></li>
					</ul>
				</div>
				<div id="main">
					<div class="content">
						<div class="central-btn">
	<a href="index.php?page=reg&lang=<?php echo $_smarty_tpl->getVariable('lang')->value;?>
">&iexcl;<?php echo $_smarty_tpl->getVariable('register_now')->value;?>
!</a>
</div>

<div class="text-flag">
    <p><?php echo $_smarty_tpl->getVariable('server_description')->value;?>
</p>
			<p><?php if ($_smarty_tpl->getVariable('fb_active')->value){?><br><br><a href="javascript:void(0);" onclick="loginFB(); return false;"><img src="http://b.static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif" alt=""></a><?php }?></p>
</div>
<strong class="logo">
	<a href="#"><?php echo $_smarty_tpl->getVariable('servername')->value;?>
</a>
</strong>					</div>

					<div class="form">
						<form action="" method="post" name="xnovarevolution">
							<fieldset>
								<ul class="login">
									<li>
										<label><?php echo $_smarty_tpl->getVariable('universe')->value;?>
</label>
										<select name="universe" id="universe">
                                         <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('AvailableUnis')->value,'selected'=>$_smarty_tpl->getVariable('UNI')->value),$_smarty_tpl);?>

									    </select>
									</li>

									<li>
										<label for="username"><?php echo $_smarty_tpl->getVariable('user')->value;?>
</label>
										<div class="bg"><input  type="text" name="username" id="username" class="text" alt="<?php echo $_smarty_tpl->getVariable('user')->value;?>
" value="" maxlength="30" onfocus="checkSearchText(this,1,1)" onblur="checkSearchText(this,0,1)" /></div>
									</li>
									<li>
										<label for="userpass"><?php echo $_smarty_tpl->getVariable('pass')->value;?>
</label>
										<div class="bg"><input type="password" name="password" id="password" class="text" alt="<?php echo $_smarty_tpl->getVariable('pass')->value;?>
" value="" maxlength="30" onfocus="checkSearchText(this,1,2)" onblur="checkSearchText(this,0,2)" /></div>
									</li>

									<li><div class="bg submit"><input type="submit" value="<?php echo $_smarty_tpl->getVariable('login')->value;?>
" name="submit" class="submit" /></div></li>
								</ul>
								<ul class="help">
									<li><a href="index.php?page=lostpassword&lang=<?php echo $_smarty_tpl->getVariable('lang')->value;?>
"><?php echo $_smarty_tpl->getVariable('lostpassword')->value;?>
</a></li>
									<li><a href="index.php?page=reg&lang=<?php echo $_smarty_tpl->getVariable('lang')->value;?>
"><?php echo $_smarty_tpl->getVariable('register_now')->value;?>
</a></li>
								</ul>

							</fieldset>
						</form>
					</div>
					<div id="footer">
						<p><?php echo $_smarty_tpl->getVariable('servername')->value;?>
 &copy; <?php echo $_smarty_tpl->getVariable('year')->value;?>
 powered by <?php echo $_smarty_tpl->getVariable('asd')->value;?>
.</p>
						<ul>
							<li><a href="index.php?page=agb&amp;lang=<?php echo $_smarty_tpl->getVariable('lang')->value;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('menu_agb')->value;?>
</a></li>
							<li><a href="index.php?page=rules&amp;lang=<?php echo $_smarty_tpl->getVariable('lang')->value;?>
"  target="_blank"><?php echo $_smarty_tpl->getVariable('menu_rules')->value;?>
</a></li>
							<?php  $_smarty_tpl->tpl_vars['lng'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('langs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lng']->key => $_smarty_tpl->tpl_vars['lng']->value){
?> <li><a href="?lang=<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
"><img src="./styles/images/login/<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
.png" alt="" width="16" height="11"></a><?php }} ?>
							</ul>
					</div>
				</div>
			</div>
		</div>
<?php $_template = new Smarty_Internal_Template("index_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>