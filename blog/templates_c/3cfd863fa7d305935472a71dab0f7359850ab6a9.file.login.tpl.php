<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-17 03:25:20
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31789525557b3bd005ba0c4-44773982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cfd863fa7d305935472a71dab0f7359850ab6a9' => 
    array (
      0 => './templates/login.tpl',
      1 => 1428064084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31789525557b3bd005ba0c4-44773982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_login' => 0,
    'params' => 0,
    'error_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57b3bd006254b9_62044239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b3bd006254b9_62044239')) {function content_57b3bd006254b9_62044239($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/blog.js"><?php echo '</script'; ?>
>
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:50px 0px 50px 90px">
				<h2>登 录</h2>
				<font color="red" <?php if ($_smarty_tpl->tpl_vars['error_login']->value!=1) {?>style="display:none"<?php }?> id="name_error"> 用户不存在</font>
				<form action="http://localhost/blog/?action=SubmitLogin" method="post" class="form" onSubmit="return checkSubmitLogin();">
					<ul>
						<li>
							<label for="input-01">用户名</label>
							<input type="text" size="45" class="input-text" id="name" name="user_name"  value="<?php echo $_smarty_tpl->tpl_vars['params']->value['safe']['user_name'];?>
"  />
							<font color="red" <?php if ($_smarty_tpl->tpl_vars['error_name']->value!=1) {?>style="display:none"<?php }?> id="name_error"> *请正确输入用户名</font>
						</li>
						
						<li>
							<label for="input-03">密码</label>
							<input type="password" size="45" class="input-text" id="password" name="password" />
							<font color="red" style="display:none" id="password_error"> *请输入密码</font>
						</li>
						
						<li><input type="submit" value=" 提交 " class="input-submit"  /></li>

						<a href="http://localhost/blog/?action=registered">没有账号去注册</a>
					</ul>
				</form>
			</div>
		</div> 

		<?php echo $_smarty_tpl->getSubTemplate ('right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div> <!-- /section -->

</div> <!-- /main -->	
	
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
