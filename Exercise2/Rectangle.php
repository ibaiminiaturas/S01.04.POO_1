<?php

require_once 'Shape.php';

class Rectangle extends Shape{
    public function area() {
        return $this->height * $this->width;
    }
}

?>