<?php
/* Smarty version 3.1.30, created on 2023-05-11 18:24:34
  from "D:\Desktop\xampp\htdocs\shophoa\views\khach_hang\v_thong_tin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645d16c2c729d5_85015574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cda7368dc8eade2dda6fe37f41bcd728fdf6db0' => 
    array (
      0 => 'D:\\Desktop\\xampp\\htdocs\\shophoa\\views\\khach_hang\\v_thong_tin.tpl',
      1 => 1683779762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645d16c2c729d5_85015574 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div  class="col-md-6 product-left-block">
  <h3 class="canh_giua khach_hang thong_tin">Thông tin</h3>
  <form name="them_khach_hang" method="post">
    <ul class="form-style-1">
  <li><label>Tên khách hàng </label><input type="text" name="ten_kh" value="" class="field-divided" required/></li>
  <li>
      <label>Phái</label>
      <select name="phai" class="field-select phai" required>
        <option value="1" >Nam</option>
        <option value="0" >Nữ</option>
      </select>
  </li>
  <li>
      <label>Địa chỉ </label>
      <input type="text" name="dia_chi" class="field-long dia_chi"   required/>
  </li>
  <li>
      <label>Điện thoại </label>
      <input type="number" name="dien_thoai" class="field-long dien_thoai"  value="" required/>
  </li>
   <li>
      <label>Email</label>
      <input type="email" name="email" class="field-long email"  value="" required/>
  </li>
  <li>
        <label>Phương thức thanh toán</label>
        <input type="text" name="pttt" class="field-long pttt"  value="Thanh toán khi nhận hàng" required/>
    </li>
  <li>
    <input type="submit"  class="one khach_hang" value="Đặt hàng" name="luu"/>
  </li>
</ul>
  </div>
<?php }
}
