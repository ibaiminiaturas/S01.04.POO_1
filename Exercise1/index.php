<!--Sprint 1. Chapter 4. Exercise 1. Ibai Ramirez

Crea una clase de Empleado, define tu nombre como atributos y el sueldo. 
Definir un método initialize que reciba como parametros el nombre y sueldo. 
Plantear un segundo método de impresión que imprima el nombre y un mensaje si tienes que pagar impuestos o no (si el salario supera los 6000, paga impuestos).

-->

<?php

class empleado {
    
    private $nombre;
    private $sueldo;

    public function initialize($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function imprimir() {
        echo "Nombre: " . $this->nombre . "<br>";
        if ($this->sueldo > 6000) {
            echo "Tienes que pagar impuestos.<br>";
        } else {
            echo "No tienes que pagar impuestos.<br>";
        }
    }
}

?>