<?php

class figuraGeometrica{
    
    protected $nombre;
    protected $color;
    
    function __construct($nombre, $color){
        $this->nombre = $nombre;
        $this->color = $color;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getColor()
    {
        return $this->color;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function escribir(){
        echo '<p>'.$this->nombre.'</p>';
        echo '<p>'.$this->color.'</p>';
    }
}


?>