<?php

include_once 'credenciales.php';
include_once 'Categorias.php';


 class DAOCategoria{

   private $con;

public function  __construct(){

}


private function conectar(){
try{
  $this-> con = new mysqli(SERVER, USUARIO, PASS, BD);

}catch(Exception $ex) {
 echo $ex->getTraceAsString();
}
}

private function desconectar(){

$this->con->Close();
}
 public function getComboCategorias(){

    $sql= "select codCat, nombreCat from categorias";
    $this->conectar();
    $resultado= $this-> con-> query($sql);

    $data=array();

    while($fila= mysqli_fetch_assoc($resultado)){

        $data [$fila["codCat"]]= $fila["nombreCat"]; 
    }
    $resultado->close();
    $this->desconectar();
    return $data;

 }


 }


?>