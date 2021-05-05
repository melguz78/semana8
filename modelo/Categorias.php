<?php

class Categorias{

    private $codCat;
    private $nombreCat;
    private $descripcion;

    public function __construct($codCat, $nombreCat, $descripcion)
    {
        $this->codCat=$codCat;
        $this->nombreCat=$nombreCat;
        $this->descripcion=$descripcion;

    }

    // generando get y set

    public function getCodCat(){

        return $this->codCat;
    }

    public function setCodcat($codCat){
        $this->codCat=$codCat;
    }

    public function getNombrecat(){
        return $this->nombreCat;
    }
    
    public function setNombreCat($nombreCat){
        $this->nombreCat=$nombreCat;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion;
    }


}



?>