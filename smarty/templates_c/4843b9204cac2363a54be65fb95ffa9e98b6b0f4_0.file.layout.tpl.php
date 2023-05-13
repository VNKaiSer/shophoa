<?php
/* Smarty version 3.1.30, created on 2023-05-11 15:16:17
  from "C:\Users\Admin\Desktop\xampp\htdocs\shophoa\smarty\templates\gioi_thieu\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645ceaa1328745_91423969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4843b9204cac2363a54be65fb95ffa9e98b6b0f4' => 
    array (
      0 => 'C:\\Users\\Admin\\Desktop\\xampp\\htdocs\\shophoa\\smarty\\templates\\gioi_thieu\\layout.tpl',
      1 => 1683726267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_645ceaa1328745_91423969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27187645ceaa1325601_31650566', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29168645ceaa1327b52_66043860', "san_pham");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_27187645ceaa1325601_31650566 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "san_pham"} */
class Block_29168645ceaa1327b52_66043860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "san_pham"} */
}
