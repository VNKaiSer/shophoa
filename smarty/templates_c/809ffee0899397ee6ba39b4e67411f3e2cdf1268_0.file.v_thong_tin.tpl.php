<?php
/* Smarty version 3.1.30, created on 2023-05-12 04:31:29
  from "C:\Users\Admin\Desktop\xampp\htdocs\shophoa\views\khach_hang\v_thong_tin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645da501a90ca5_19044058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '809ffee0899397ee6ba39b4e67411f3e2cdf1268' => 
    array (
      0 => 'C:\\Users\\Admin\\Desktop\\xampp\\htdocs\\shophoa\\views\\khach_hang\\v_thong_tin.tpl',
      1 => 1683858685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645da501a90ca5_19044058 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    #error-message {
  		color: red;
		margin-top: 10px;
	}
</style>
<div  class="col-md-6 product-left-block">
  <h3 class="canh_giua khach_hang thong_tin">Thông tin</h3>
  <form name="them_khach_hang" method="post"  onsubmit="return validateForm()">
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
      <input type="text" name="dien_thoai" class="field-long dien_thoai"  value="" required/>
  </li>
   <li>
      <label>Email</label>
      <input type="email" name="email" class="field-long email"  value="" required/>
  </li>
  <li>
        <label>Phương thức thanh toán</label>
        <input type="text" name="pttt" class="field-long pttt"  value="Thanh toán khi nhận hàng" required/>
        <br>
        <span id="error-message"></span>
    </li>
  <li>
    <input type="submit"  class="one khach_hang" value="Đặt hàng" name="luu"/>
  </li>
</ul>
</div>

<?php echo '<script'; ?>
>
  function validateForm() {
      var hoTen = document.getElementsByName("ten_kh")[0].value;
      var diaChi = document.getElementsByName("dia_chi")[0].value;
      var dienThoai = document.getElementsByName("dien_thoai")[0].value;
      var email = document.getElementsByName("email")[0].value;
      var errorSpan = document.getElementById("error-message");

      if (!/^(0|84)/.test(dienThoai)) {
          errorSpan.innerHTML = "Số điện thoại phải đúng định dạng.";
          return false;
      } else {
          errorSpan.innerHTML = "";
      }

    if (dienThoai.length != 10 && dienThoai.length != 11) {
          errorSpan.innerHTML = "Số điện thoại phải đúng định dạng.";
          return false;
      } else {
          errorSpan.innerHTML = "";
      }

      if (!/^[a-zA-Z0-9._%+-]+@gmail.com$/.test(email)) {
          errorSpan.innerHTML = "Vui lòng nhập đúng định dạng gmail";
          return false;
      } else {
          errorSpan.innerHTML = "";
      }
      return true;
  }

<?php echo '</script'; ?>
>
    
<?php }
}
