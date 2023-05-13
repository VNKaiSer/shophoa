<?php
/* Smarty version 3.1.30, created on 2023-05-11 05:05:16
  from "C:\Users\Admin\Desktop\xampp\htdocs\ok-main\smarty\templates\layouts\body\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645c5b6c689bd6_39210147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07e6aac7f6d0e04a08fca33d86333e324674a227' => 
    array (
      0 => 'C:\\Users\\Admin\\Desktop\\xampp\\htdocs\\ok-main\\smarty\\templates\\layouts\\body\\contact.tpl',
      1 => 1683726267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645c5b6c689bd6_39210147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="send-email">
    <div class="container">
        <div class="col-sm-9">
            <div class="col-sm-4 text-left">
                <span>Nhận tin khuyến mãi</span>
            </div>
            <div class="input-group col-sm-4">
                <input type="text" class="form-control" placeholder="Nhập email...">
                <span class="input-group-btn nopadd">
                    <button class="btn btn-default" type="button"><span class="fa fa-send-o"></span></button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>
</section>
    <div id="bsm_contact_and_map"><?php echo $_smarty_tpl->tpl_vars['google_map']->value;?>
</div>
<?php }
}
