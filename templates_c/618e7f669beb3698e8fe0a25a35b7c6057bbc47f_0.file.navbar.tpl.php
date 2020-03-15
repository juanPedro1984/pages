<?php
/* Smarty version 3.1.33, created on 2020-03-15 00:46:11
  from 'C:\xampp\htdocs\jp-etchegoyen\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6d6cc3c13f73_75290617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '618e7f669beb3698e8fe0a25a35b7c6057bbc47f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jp-etchegoyen\\templates\\navbar.tpl',
      1 => 1584229561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:buttonMenu.tpl' => 1,
  ),
),false)) {
function content_5e6d6cc3c13f73_75290617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btnCont" id="btnC">
  <button type="button" name="button" class="btnM" id="menuBtn">  <?php $_smarty_tpl->_subTemplateRender("file:buttonMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</button>
</div>

<header class="header" id=headerId>
  <a href="" id="closebtn" class="clbtn">X</a>
  <nav class="navButton">
    <h1 class="navText"><a href="#inicio">Inicio</a></h1>
  </nav>
  <nav class="navButton">
    <h1 class="navText"><a href="#presentacion">Presentacion</a></h1>
  </nav>
  <nav class="navButton">
    <h1 class="navText"><a href="#datos">Datos</a></h1>
  </nav>
  <nav class="navButton">
    <h1 class="navText"><a href="#estudio">Estudios</a></h1>
  </nav>
  <nav class="navButton">
    <h1 class="navText"><a href="#contacto">Contacto</a></h1>
  </nav>
</header>
<?php }
}
