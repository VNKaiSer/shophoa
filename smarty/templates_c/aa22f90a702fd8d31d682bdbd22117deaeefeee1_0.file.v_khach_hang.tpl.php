<?php
/* Smarty version 3.1.30, created on 2023-05-11 05:37:47
  from "C:\Users\Admin\Desktop\xampp\htdocs\shophoa\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645c630b67f5e3_53457921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa22f90a702fd8d31d682bdbd22117deaeefeee1' => 
    array (
      0 => 'C:\\Users\\Admin\\Desktop\\xampp\\htdocs\\shophoa\\views\\v_khach_hang.tpl',
      1 => 1683726267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_thanh_danh_muc.tpl' => 1,
    'file:views/khach_hang/v_thong_tin.tpl' => 1,
    'file:views/khach_hang/v_thong_tin_don_hang.tpl' => 1,
  ),
),false)) {
function content_645c630b67f5e3_53457921 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin_don_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
