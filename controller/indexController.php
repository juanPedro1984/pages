<?php

require_once 'view/indexView.php';
require_once 'model/indexModel.php';

class IndexController{

private $index;
private $indexModel;

function __construct(){

  $this->index = new indexView();
  $this->indexModel = new indexModel();

}

function indexController()
{
  $this->index->home($this->getDatos());
}

function getDatos(){
  return $this->indexModel->getDatos();
}

}

 ?>
