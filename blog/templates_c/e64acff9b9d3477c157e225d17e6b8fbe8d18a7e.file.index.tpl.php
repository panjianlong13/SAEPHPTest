<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-17 04:19:36
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207780964757b3c9b8247073-54859601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64acff9b9d3477c157e225d17e6b8fbe8d18a7e' => 
    array (
      0 => './templates/index.tpl',
      1 => 1430031986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207780964757b3c9b8247073-54859601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57b3c9b83425d3_49535268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b3c9b83425d3_49535268')) {function content_57b3c9b83425d3_49535268($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<!-- COLUMNS -->
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">

			<!-- LIST OF ARTICLES -->
			<ul class="articles box">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li>
					<h2><a href="http://localhost/blog/?action=bloginfo&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>

					<div class="article-info box">

						<p class="f-right"><a href="#" class="comment">评论 (<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_total'];?>
)</a></p>

						<p class="f-left"><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
 | 作者 <a href="http://localhost/blog/?action=blogList&user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['nick_name'];?>
</a> </p>

					</div> <!-- /article-info -->	

					<p><?php echo $_smarty_tpl->tpl_vars['item']->value['blog'];?>

					</p>
					<p class="more"><a href="http://localhost/blog/?action=bloginfo&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">查看全文&raquo;</a></p>
				</li>
				<?php } ?>
			</ul>

			<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page_max']>1) {?>
			<div class="pagination box">
				<p class="f-right">
					<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page']>1) {?>
						<a href="http://localhost/blog/?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
">上一页 &raquo;</a>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageInfo']->value['page_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<a href="http://localhost/blog/?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['pageInfo']->value['page']) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page']<$_smarty_tpl->tpl_vars['pageInfo']->value['page_max']) {?>
					<a href="http://localhost/blog/?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
">下一页 &raquo;</a>
					<?php }?>
				</p>
				<p class="f-left"> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
 / <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_max'];?>
 页</p>
			</div> 
			<?php }?>
		</div> 
		<!-- 名人推荐 -->
		<?php echo $_smarty_tpl->getSubTemplate ('right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div> <!-- /section -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
