<?php
/* Smarty version 3.1.30, created on 2023-04-19 12:08:57
  from "D:\Desktop\xampp\htdocs\shophoa\admin\views\v_thong_ke_doanh_thu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_643fbdb9ef26b3_00140716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '927fe75c4996847852da4efc77c99f4a20b5ecaf' => 
    array (
      0 => 'D:\\Desktop\\xampp\\htdocs\\shophoa\\admin\\views\\v_thong_ke_doanh_thu.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/thong_ke_theo_doanh_thu/v_theo_ngay.tpl' => 1,
    'file:views/thong_ke_theo_doanh_thu/v_theo_tuan.tpl' => 1,
    'file:views/thong_ke_theo_doanh_thu/v_theo_thang.tpl' => 1,
    'file:views/thong_ke_theo_doanh_thu/v_theo_quy.tpl' => 1,
  ),
),false)) {
function content_643fbdb9ef26b3_00140716 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
				<div class="tabs tabs-style-fillup">
					<nav>
						<ul>
							<li><a href="#section-fillup-1"><span>Theo ngày</span></a></li>
							<li><a href="#section-fillup-2"><span>Theo tuần</span></a></li>
							<li><a href="#section-fillup-3"><span>Theo tháng</span></a></li>
							<li><a href="#section-fillup-4"><span>Theo Quý</span></a></li>

						</ul>
					</nav>
					<div class="content-wrap">
						<?php $_smarty_tpl->_subTemplateRender("file:views/thong_ke_theo_doanh_thu/v_theo_ngay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						<?php $_smarty_tpl->_subTemplateRender("file:views/thong_ke_theo_doanh_thu/v_theo_tuan.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            			<?php $_smarty_tpl->_subTemplateRender("file:views/thong_ke_theo_doanh_thu/v_theo_thang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						<?php $_smarty_tpl->_subTemplateRender("file:views/thong_ke_theo_doanh_thu/v_theo_quy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
<?php }
}
