<?php
/* Smarty version 3.1.30, created on 2023-04-19 16:03:51
  from "D:\Desktop\xampp\htdocs\shophoa\admin\views\v_loai_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_643ff4c7d2dfd7_02294857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '719e634e111efcd781ca6cc9f82dd97970a78478' => 
    array (
      0 => 'D:\\Desktop\\xampp\\htdocs\\shophoa\\admin\\views\\v_loai_hoa.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/loai_hoa/v_danh_sach_loai_hoa.tpl' => 1,
  ),
),false)) {
function content_643ff4c7d2dfd7_02294857 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách loại hoa</div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/loai_hoa/v_danh_sach_loai_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
        <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_loai_hoa.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/ajax/ajax_kt_trung_loai_hoa.js"><?php echo '</script'; ?>
>
        <?php if (isset($_SESSION['thongBao'])) {?>
          <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
>
        <?php }?>
        <?php if (isset($_SESSION['thongBaoThanhCong'])) {?>
          <?php echo '<script'; ?>
>
              swal({
                title: "Thành công!",
                text: "<?php echo $_SESSION['thongBaoThanhCong'];?>
!",
                icon: "success"
                }).then(function() {
                  $.ajax({
                    success: function() {
                        window.location = "loai_hoa.php";
                    }
                  });
                });
          <?php echo '</script'; ?>
>
        <?php }
}
}
