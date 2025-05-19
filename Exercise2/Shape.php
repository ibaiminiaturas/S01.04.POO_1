<?php
    class Shape {
        protected $height;
        protected $width;

        public function __construct(int | float $height, int | float $width) {
            $this->height = $height;
            $this->width = $width;
        }

        public function area() {
            return 0;
        }
    }
?>