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

<script>
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

</script>
    
