<?php
    class Animal {
        public $nombre;
        public $color;
        public $estaExtincion;
        public $archiboSonido;
    
        public function __construct($nombre1,$color1,$estaExtincion1,$archiboSonido1) {
            $this->nombre = $nombre1;
            $this->color = $color1;
            $this->estaExtincion = $estaExtincion1;
            $this->archiboSonido = $archiboSonido1;
        }
        
        public function obtenerInformacion() {
            $colortext=$this->color =="Verde" ? "\033[32m" : "";
            $colortext=$this->color =="Rojo" ? "\033[31m" : "";
            $colortext=$this->color =="Amarillo" ? "\033[33m" : "";
            $mensaje=" \n"."Nombre: ".$this->nombre
            ." \n"."Color: ".$colortext.$this->color."\033[0m"
            ." \n"."En extinción?: ".($this->estaExtincion ? "Si" : "No");
            return $mensaje;
        }

        public function hacerSonido() {
            $audioFile="C:\\xamp\\htdocs\\GIANELLA\\".$this->archiboSonido;
            shell_exec("star wmplayer" .escaspeshellarg($audiofile));
        }
    }

    Class Perro extends Animal {
        public function hacerSonido($sonido="sound-dog.mp3") {
            return $sonido;
        }
    }

    Class Gato extends Animal {
        public function hacerSonido($sonido="Mil Horas.mp3") {
            return $sonido;
        }
    }

    Class Pollo extends Animal {
        public function hacerSonido($sonido="pollo.mp3") {
            return $sonido;
        }
    }
?>