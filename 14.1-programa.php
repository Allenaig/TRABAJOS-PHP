<?php
    include ("14-herencia.php");

    echo "EJEMPLO DE HERENCIA CON ANIMALES \n";

    $perro = new Perro("Cometa","Verde",false,"sound-dog.mp3");
    echo $perro->obtenerInformacion(). "\n";
    echo $perro->hacerSonido("Guauuu")."\n";

    $gato = new Gato("Hirch","Rojo",false,"Mil Horas.mp3");
    echo $gato->obtenerInformacion1(). "\n";
    echo $gato->hacerSonido("Miauuu")."\n";

    $pollo = new Pollo("Pollito","Amarillo",false,"pollo.mp3");
    echo $pollo->obtenerInformacion2(). "\n";
    echo $pollo->hacerSonido("Pio Pio Pio Pio");
?>