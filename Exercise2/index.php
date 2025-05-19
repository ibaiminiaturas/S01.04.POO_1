<!--Sprint 1. Chapter 4. Exercise 2. Ibai Ramirez

Escriba un programa que defina una clase de Forma con un constructor que reciba un parámetros altos y anchos.
 Define dos subclases, el Triángulo y el Rectángulo, que heredan de Shape y que se basan en el área de la zona.

-->

<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangle1 = new Triangle(5, 10);

$rectangle1 = new Rectangle (10, 5);

echo "El área del triángulo es: " . $triangle1->area() . PHP_EOL;
echo "El área del rectángulo es: " . $rectangle1->area() . PHP_EOL;
?>
