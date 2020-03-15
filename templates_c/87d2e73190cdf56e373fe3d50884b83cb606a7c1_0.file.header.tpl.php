<?php
/* Smarty version 3.1.33, created on 2019-10-31 02:53:40
  from 'C:\xampp\htdocs\jp-etchegoyen\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dba3ea41cbb17_89257351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87d2e73190cdf56e373fe3d50884b83cb606a7c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jp-etchegoyen\\templates\\header.tpl',
      1 => 1572486779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:buttonMenu.tpl' => 2,
  ),
),false)) {
function content_5dba3ea41cbb17_89257351 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header">
  <div class="buttons">
    <div class="dropdown">

        <div class="sidemenu">
          <div class="btnCont">
            <button type="button" name="button" class="btnM">  <?php $_smarty_tpl->_subTemplateRender("file:buttonMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </button>
          </div>
          <ul>
            <li><a class="drop-item" href="#">Presentacion</a></li>
            <li><a class="drop-item" href="#">Informacion personal</a></li>
            <li><a class="drop-item" href="#">Estudios cursados</a></li>
            <li><a class="drop-item" href="#">Proyectos</a></li>
          </ul>
        </div>
        <button type="button" name="button" class="btnM">  <?php $_smarty_tpl->_subTemplateRender("file:buttonMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </button>
    </div>
  </div>

</header>
<?php }
}
