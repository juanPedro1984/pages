<?php
/* Smarty version 3.1.33, created on 2020-03-23 18:07:03
  from 'C:\xampp\htdocs\jp-etchegoyen\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e78ecb7c966e1_02880450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '618e7f669beb3698e8fe0a25a35b7c6057bbc47f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jp-etchegoyen\\templates\\navbar.tpl',
      1 => 1584983220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:buttonMenu.tpl' => 1,
  ),
),false)) {
function content_5e78ecb7c966e1_02880450 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
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
</header> -->
<header class = "header" id=headerId>
<nav class="navbar navbar-expand-sm navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      Menu
    <!-- <span class="navbar-toggler-icon"></span> -->
  </button>
  <!-- <button type="button" class="btn btn-light">Light</button> -->

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#inicio">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#presentacion">Presentacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#datos">Datos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#estudios">Estudios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<?php }
}
