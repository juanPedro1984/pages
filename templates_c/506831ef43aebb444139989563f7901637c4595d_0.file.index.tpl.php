<?php
/* Smarty version 3.1.33, created on 2020-03-14 01:47:38
  from 'C:\xampp\htdocs\jp-etchegoyen\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c29aac66b37_39934621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506831ef43aebb444139989563f7901637c4595d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jp-etchegoyen\\templates\\index.tpl',
      1 => 1584146857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:inicio.tpl' => 1,
    'file:presentacion.tpl' => 1,
    'file:estudio.tpl' => 1,
    'file:datos.tpl' => 1,
  ),
),false)) {
function content_5e6c29aac66b37_39934621 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:presentacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:estudio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:datos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </body>
  <?php echo '<script'; ?>
 src="./js/main.js" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
