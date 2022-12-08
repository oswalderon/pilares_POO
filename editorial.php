<?php
class Publicacion{
    public $titulo;
    public $precio;

    function __construct($titulo, $precio){
        $this->titulo = $titulo;
        $this->precio = $precio;        
    }

    function mostrar(){
        echo "Título del libro: " . $this->titulo;
        echo "\n";
        echo "Precio: $" . $this->precio;
        echo "\n";
    }
}

class Libro extends Publicacion{
    public $num_pag;

    function __construct($titulo, $precio, $num_pag){
        parent::__construct($titulo, $precio);
        $this->num_pag = $num_pag;
    }

    function mostrar(){
        parent::mostrar();
        echo "Número de páginas: " . $this->num_pag;
    }
}

class Compact extends Publicacion{
    public $tiempo;

    function __construct($titulo, $precio, $tiempo){
        parent::__construct($titulo, $precio);
        $this->tiempo = $tiempo;
    }

    function mostrar(){
        parent::mostrar();
        echo "Duración: " . $this->tiempo . " minutos";
    }
}

$libro_impreso = new Libro("El Señor de los Anillos", 65.95, 600);
echo "\n";
$libro_impreso->mostrar();
echo "\n";

$audio_libro = new Compact("El Señor de los Anillos", 10.99, 659);
echo "\n";
$audio_libro->mostrar();
echo "\n";

?>