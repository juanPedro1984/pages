<?php
require_once('libs/Smarty.class.php');

class indexView{

function home($datos){
  $smarty = new Smarty();
  $smarty->assign("datos", $datos);
  $smarty->display('templates/index.tpl');
}

}


 ?>
