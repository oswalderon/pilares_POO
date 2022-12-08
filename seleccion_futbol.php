<?php

class Seleccion{
    protected $nombres;
    protected $apellidos;
    protected $edad;

    function __construct($nombres, $apellidos, $edad){
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    function imprimir(){
        echo "Nombres: " . $this->nombres;
        echo "\n";
        echo "Apellidos: " . $this->apellidos;
        echo "\n";
        echo "Edad: " . $this->edad . " años";
        echo "\n";
    }

    function viajar(){
        echo "Viajo a España la próxima semana";
        echo "\n";
    }

    function partidoFutbol(){
        echo "Asistiré al partido de diciembre";
        echo "\n";
    }

    function entrevistas(){
        echo "Puedo dar entrevistas";
        echo "\n";
    }

    function atender(){
        echo "Yo atiendo a los jugadores";
        echo "\n";
    }  
}

class Jugadores extends Seleccion{
    protected $posicion;

    function __construct($nombres, $apellidos, $edad, $posicion){
        parent::__construct($nombres, $apellidos, $edad);
        $this->posicion = $posicion;
    }

    function mostrar(){
        parent::imprimir();
        echo "Posición: " . $this->posicion;
        echo "\n";
        parent::viajar();
        parent::partidoFutbol();
        parent::entrevistas();
    }
}

class Tecnicos extends Seleccion{
    protected $esquema;

    function __construct($nombres, $apellidos, $edad, $esquema){
        parent::__construct($nombres, $apellidos, $edad);
        $this->esquema = $esquema;
    }

    function mostrar(){
        parent::imprimir();
        echo "Esquema: " . $this->esquema;
        echo "\n";
        parent::viajar();
        parent::partidoFutbol();
        parent::entrevistas();
    }
}

class Medicos extends Seleccion{
    protected $titulo;

    function __construct($nombres, $apellidos, $edad, $titulo){
        parent::__construct($nombres, $apellidos, $edad);
        $this->titulo = $titulo;
    }

    function mostrar(){
        parent::imprimir();
        echo "Título: " . $this->titulo;
        echo "\n";
        parent::viajar();
        parent::partidoFutbol();
        parent::atender();
    }
}

echo "\n";
$jugador = new Jugadores("Mauricio Alejandro", "Díaz Gutierrez", 23, "Delantero");
$jugador->mostrar();

echo "\n";
$tecnico = new Tecnicos("Josué Ismael", "Martínez Alemán", 45, "Director Técnico");
$tecnico->mostrar();

echo "\n";
$medico = new Medicos("Julio Armando", "Quintanilla", 25, "Fisioterapeuta");
$medico->mostrar();

?>