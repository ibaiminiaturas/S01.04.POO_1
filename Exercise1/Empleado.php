<?php
    class Empleado {
        
        private $nombre;
        private $sueldo;

        public function initialize(string $nombre, int |float  $sueldo) {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function imprimir() {
            echo "Nombre: " . $this->nombre .PHP_EOL;
            if ($this->sueldo > 6000) {
                echo "Tienes que pagar impuestos." .PHP_EOL;
            } else {
                echo "No tienes que pagar impuestos." .PHP_EOL;
            }
        }
    }

?>