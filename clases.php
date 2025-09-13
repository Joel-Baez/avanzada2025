<?php

interface FiguraGeometrica {
    public function area();
}

abstract class Model {
    private $id;
    abstract public function get($nameProperty);
    abstract public function set($nameProperty, $value);
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
}
class Cuadrado implements FiguraGeometrica{
    public $arista = null; //No cumple con el principio de encapsulamiento ya que está público
    public function area(){
        return $this->arista * $this->arista;
    }
}

class Triangulo implements FiguraGeometrica{
    private $base = null;
    private $altura = null;
    public function setBase($value) {
        $this->base = $value;
    }
    public function setAltura($value) {
        $this->altura = $value;
    }
    public function area() {
        return ($this->base * $this->altura)/2;
    }
}

class Rectangulo extends Model implements FiguraGeometrica {
    private $base = null;
    private $altura = null;
    public function __construct($id) {
        parent::setId($id);
    }
    public function area() {
        return ($this->base * $this->altura);
    }
    public function set($nameProperty, $value) {
        $this->{$nameProperty} = $value;
    }
    public function get($nameProperty) {
        return $this->{$nameProperty};
    }
}

$cuadrado = new Cuadrado();
$cuadrado ->arista = 5;
echo "Área del cuadrado: ". $cuadrado->area() . "<br>";

$triangulo = new Triangulo();
$triangulo->setBase(5);
$triangulo->setAltura(5);
echo "Área del triángulo: ". $triangulo->area() . "<br>";

$rectangulo = new Rectangulo("prueba1");
$rectangulo->set("base", 10);
$rectangulo->set("altura", 5);
echo "Área del rectángulo: ". $rectangulo->area() . "<br>";
?>


