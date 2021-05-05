
<?php

class Productos{

    private $codigo;
    private $nombre;
    private $precio;
    private $descripcion;
    private $codCat;


    public function __construct($codigo, $nombre, $precio, $descripcion, $codCat)
    {
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->descripcion=$descripcion;
        $this->codcat=$codCat;
    }


    //generando get y set

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
}

public function getPrecio(){
    return $this->precio;
}
public function setPrecio($precio){
    $this->precio=$precio;
}

public function getDescripcion(){
    return $this->descripcion;
}

public function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
}

public function getCodCat(){
    return $this->codCat;
}
 
public function setCodCat($codCat){

    $this->codCat=$codCat;
}



}





?>