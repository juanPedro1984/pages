<?php

class indexModel{

  private $db;

  function __construct()  {
  $this->db = new PDO('mysql:host=localhost;'
  .'dbname=id11358223_datos;charset=utf8'
  , 'id11358223_juan', 'tasatasa');
}

  function getDatos(){
      $sentencia = $this->db->prepare("select * from datos");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}
 ?>
