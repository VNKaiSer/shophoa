<?php
/* Smarty version 3.1.30, created on 2023-05-11 05:34:18
  from "C:\Users\Admin\Desktop\xampp\htdocs\shophoa\views\v_hien_thi_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645c623a054534_46444241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06edee3f86c6ce0485cc032a36596c2f1d7a7760' => 
    array (
      0 => 'C:\\Users\\Admin\\Desktop\\xampp\\htdocs\\shophoa\\views\\v_hien_thi_gio_hang.tpl',
      1 => 1683726267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645c623a054534_46444241 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['giohang'], 'gh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gh']->key => $_smarty_tpl->tpl_vars['gh']->value) {
$__foreach_gh_0_saved = $_smarty_tpl->tpl_vars['gh'];
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['gh']->key == $_smarty_tpl->tpl_vars['sp']->value->MaHoa) {?>
            <li class='product' id='delete<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
'>
                <div class='product-image'>
                    <img src='public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['sp']->value->Hinh;?>
'>
                </div>
                <div class='product-details'>
                    <h3><?php echo $_smarty_tpl->tpl_vars['sp']->value->TenHoa;?>
</h3>
                </div>
                <div class='actions'>
                    <a id='xoa_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
' onclick="xoagiohang(<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
,<?php echo $_smarty_tpl->tpl_vars['gh']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai*$_smarty_tpl->tpl_vars['gh']->value;?>
)" class='delete-item'>Xóa</a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['gh']->value == 1) {?>
                    <div class='thu_nho tru' id='tru_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
' onclick='xoagiohang(<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
,<?php echo $_smarty_tpl->tpl_vars['gh']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai*$_smarty_tpl->tpl_vars['gh']->value;?>
)'>
                        <i class='fa fa-minus' aria-hidden='true'></i>
                    </div>
                <?php } else { ?>
                    <div class='thu_nho tru' id='tru_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
' onclick='giam(<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
)'>
                        <i class='fa fa-minus' aria-hidden='true'></i>
                    </div>         
                <?php }?>
                <div class='so_luong khung' id='gio_hang<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
'><?php echo $_smarty_tpl->tpl_vars['gh']->value;?>
</div>
                <div class='thu_nho cong' onclick='tang(<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
)'><i class='fa fa-plus' aria-hidden='true'></i></div>
                <div class='price' id='tong_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
'><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai*$_smarty_tpl->tpl_vars['gh']->value);?>
 đ </div>
            </li>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
$_smarty_tpl->tpl_vars['gh'] = $__foreach_gh_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
