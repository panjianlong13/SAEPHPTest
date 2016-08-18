<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-17 03:25:20
         compiled from "./templates/right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203769205257b3bd006646a8-86769477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e7b84576ecb03b879762a660d31c747e73886f8' => 
    array (
      0 => './templates/right.tpl',
      1 => 1429957784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203769205257b3bd006646a8-86769477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hot_user' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57b3bd0067dff5_68035316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b3bd0067dff5_68035316')) {function content_57b3bd0067dff5_68035316($_smarty_tpl) {?>		<!-- SIDEBAR -->
<div id="aside">

			<!-- SIDEBAR MENU -->
			<h3 class="nomb">名人推荐</h3>
			
			<ul class="sponsors">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot_user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<a href="http://localhost/blog/?action=blogList&user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nick_name'];?>
</a><br />
					<?php echo $_smarty_tpl->tpl_vars['item']->value['tips'];?>

				</li>
			<?php } ?>
			</ul>			
		
</div> <!-- /aside --><?php }} ?>
