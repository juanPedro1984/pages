<?php
require_once('smarty/smarty-3.1.33/libs/Smarty.class.php');

class indexView{

function home(){
  $smarty = new Smarty();
  $smarty->display('templates/index.tpl');
}

}


 ?>
