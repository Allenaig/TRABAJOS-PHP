<?php
    interface Figura {
       public function calcularArea();
    }

    Class Triangulo implements Figura {
        public $base;
        public $altura;

        public function __construct($b,$h) {
            $this->base = $b;
            $this->altura = $h;
        }

        public function calcularArea() {
            $area = ($this->base * $this->altura) / 2;
            return $area;
        }
    }

    Class Rectangulo implements Figura {
        public $base;
        public $altura;

        public function __construct($b,$a) {
            $this->base = $b;
            $this->altura = $a;
        }

        public function calcularArea() {
            $area = ($this->base * $this->altura);
            return $area;
        }
    }

    Class Cuadrado implements Figura {
        public $lado;

        public function __construct($l) {
            $this->lado = $l;
        }

        public function calcularArea() {
            $area = ($this->lado * $this->lado);
            return $area;
        }
    }

    Class Circulo implements Figura {
        public $radio;

        public function __construct($r) {
            $this->radio = $r;
        }

        public function calcularArea() {
            $area = M_PI * pow ($this->radio,2);
            return $area;
        }
    }
?>