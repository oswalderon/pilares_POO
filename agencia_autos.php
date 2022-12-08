<?php

class Agencia{
    protected $num_serie;
    protected $marca;
    protected $anio;
    protected $precio;

    function __construct($num_serie, $marca, $anio, $precio){
        $this->num_serie = $num_serie;
        $this->marca = $marca;
        $this->anio = $anio;
        $this->precio = $precio;
    }

    function specs(){
        echo "Número de serie: " . $this->num_serie;
        echo "\n";
        echo "Marca: " . $this->marca;
        echo "\n";
        echo "Año: " . $this->anio;
        echo "\n";
        echo "Precio: $" . $this->precio;
    }
}

class Compactos extends Agencia{
    protected $num_pasajeros;

    function __construct($num_serie, $marca, $anio, $precio, $num_pasajeros){
        parent::__construct($num_serie, $marca, $anio, $precio);
        $this->num_pasajeros = $num_pasajeros;
    }

    function mostrar(){
        echo "\n";
        parent::specs();
        echo "\n";
        echo "Número de pasajeros: " . $this->num_pasajeros;
        echo "\n";
    }

}

class Lujosos extends Compactos{
    function __construct($num_serie, $marca, $anio, $precio, $num_pasajeros){
        parent::__construct($num_serie, $marca, $anio, $precio, $num_pasajeros);
    }

    function mostrar(){
        parent::mostrar();
        echo "\n";
    }
}

class Camionetas extends Agencia{
    protected $carga;
    protected $traccion;

    function __construct($num_serie, $marca, $anio, $precio, $carga, $traccion){
        parent::__construct($num_serie, $marca, $anio, $precio);
        $this->carga = $carga;
        $this->traccion = $traccion;
    }

    function mostrar(){
        parent::specs();
        echo "\n";
        echo "Capacidad de carga: " . $this->carga . " kg.";
        echo "\n";
        echo "Tracción: " . $this->traccion;
        echo "\n";
    }
    
}

$compacto = new Compactos(8923216461263, "Toyota", 2023, 25000, 5);
$compacto->mostrar();

$lujoso = new Lujosos(13356592546487, "Mercedes Benz", 2023, 39000, 5);
$lujoso->mostrar();

$camioneta = new Camionetas(6326595912024, "BMW", 2023, 70000, 2135, "4x4");
$camioneta->mostrar();

?>