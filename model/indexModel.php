<?php

class indexModel{

  private $db;

  function __construct()  {
  $this->db = new PDO('mysql:host=localhost;'
  .'dbname=db-jp-etchegoyen;charset=utf8'
  , 'root', '');
}

}

 ?>
