<?php
    class Triangulo extends figuraGeometrica{
    public $altura;
    public $base;
    
    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    function __construct($nombre,$altura,$color,$base){
        $this ->nombre=$nombre;
        $this ->altura=$altura;
        $this ->color=$color;
        $this ->base=$base;     
    }
    public function escribir(){
        echo '<p>'.$this->nombre.'</p>';
        echo '<p>'.$this->altura.'</p>';
        echo '<p>'.$this->color.'</p>';
        echo '<p>'.$this->base  .'</p>';
    }
    public function azalera(){
        echo "Azalera:".($this->altura*$this->base)/2;
    }
    
    
}
?>