<?php

//incluir archivo credenciales para conexion a base de datos
include_once 'credenciales.php';
include_once 'Productos.php';

class DAOProductos {

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


public function getTabla(){

$sql="select * from productos";

$this->conectar();
$resultado= $this->con->query($sql);
$this->desconectar();

//ar mando tabla html

$tabla="<table class='table'> <thead> <tr><th>codigo</th> <th>nombre</th> <th>precio</th> <th>existencia</th> <th>CodCat</th> </tr> </thead> <tbody> </tbody>";

while ($fila= mysqli_fetch_assoc ($resultado)){
   
    $tabla .= "<tr>";
    $tabla .= "<td>".$fila["codigo"]."</td>";
    $tabla .= "<td>".$fila["nombre"]."</td>";
    $tabla .= "<td>".$fila["precio"]."</td>";
    $tabla .= "<td>".$fila["existencia"]."</td>";
    $tabla .= "<td>".$fila["codCat"]."</td>";
    $tabla .= "</tr>";

}

$tabla .= "</tbody></table>";
$resultado->close();
return $tabla;
}

public function insertar($obj){

    $prod = new Productos ('', '','','','');

    $prod=$obj;
        $sql="insert into productos values(".$prod->getCodigo().",'".$prod->getNombre()."',".$prod->getPrecio().",".$prod->getExistencia().",".$prod->getCodCat().")";

        $this->conectar();
      if($this->con->query($sql)){
        echo "<script> alert('Conectado con exito!') </script>";
      }else{

        echo "<script> alert('Algo esta Mal!') </script>";
      }

      $this->desconectar();
}


public function eliminar($obj){

    $prod = new Productos ('', '','','','');

    $prod=$obj;

        $sql="delete from productos where codigo=". $prod->getCodigo();
        $this->conectar();
      if($this->con->query($sql)){
        echo "<script> alert('Eliminado con exito!') </script>";
      }else{

        echo "<script> alert('Algo esta Mal!') </script>";
      }

      $this->desconectar();
    }




  
    public function modificar($obj){

        $prod = new Productos ('', '','','','');
    
        $prod=$obj;
    
            $sql="update productos set nombre='".$prod->getNombre()."', precio=".$prod->getPrecio().", existencia=".$prod->getExistencia().", codCat= ".$prod->getCodcat();
    
            $this->conectar();
          if($this->con->query($sql)){
            echo "<script> alert('Modificado con exito!') </script>";
          }else{
    
            echo "<script> alert('Algo esta Mal!') </script>";
          }
    
          $this->desconectar();
        }
 

}


?>


