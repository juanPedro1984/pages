<?php
/* Smarty version 3.1.33, created on 2019-10-28 00:34:03
  from 'C:\xampp\htdocs\jp-etchegoyen\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6296b6d6586_20618500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506831ef43aebb444139989563f7901637c4595d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jp-etchegoyen\\templates\\index.tpl',
      1 => 1572219241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db6296b6d6586_20618500 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <body>
    <div class="backG">
      <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </body>
  <?php echo '<script'; ?>
 src="./js/main.js" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
