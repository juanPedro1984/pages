<?php

require_once 'view/indexView.php';

class IndexController{

private $index;

function __construct(){

  $this->index = new indexView();
}

function indexController()
{
  $this->index->home();
}

}

 ?>
