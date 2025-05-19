<!--Sprint 1. Chapter 4. Exercise 1. Ibai Ramirez

Crea una clase de Empleado, define tu nombre como atributos y el sueldo. 
Definir un método initialize que reciba como parametros el nombre y sueldo. 
Plantear un segundo método de impresión que imprima el nombre y un mensaje si tienes que pagar impuestos o no (si el salario supera los 6000, paga impuestos).

-->

<?php
    require_once 'Empleado.php';

    $empleado1 = new Empleado();
    $empleado1->initialize("Ibai", 7000);
    $empleado1->imprimir();
    $empleado2 = new Empleado();
    $empleado2->initialize("Iker", 5000);
    $empleado2->imprimir();
?>