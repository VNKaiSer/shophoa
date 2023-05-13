<?php
/* Smarty version 3.1.30, created on 2023-04-21 13:57:34
  from "D:\Desktop\xampp\htdocs\shophoa\views\v_lien_he.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64427a2e0c8cf9_65656130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff04fedf46306c784ca09c4495d1dd8556ef59e' => 
    array (
      0 => 'D:\\Desktop\\xampp\\htdocs\\shophoa\\views\\v_lien_he.tpl',
      1 => 1682078252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64427a2e0c8cf9_65656130 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="bsm_contact">
  <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section" style="margin-top: 30px">
    <h1><?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>
</h1>
      <img src="public/img/divider.png" alt="">
  </div>
</div>
<div class="container">
   <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="rowlh">
           <div class="bsm_contact_content">
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="bsm_contact_image">
                       <img src="public/images/adress_icon.png" alt="">
                   </div>
                   <div class="bsm_contact_text">
                       <p class="cte"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
                   </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="bsm_contact_image bsm_contact_image1">
                       <img src="public/images/phone_icon.png" alt="">
                   </div>
                   <div class="bsm_contact_text bsm_contact_text1 ">
                       <p class="cte"><?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</p>
                   </div>
               </div>
            </div>
      </div>
</div>
<?php }
}
