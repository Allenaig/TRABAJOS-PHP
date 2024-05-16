
<?php
    //Realizar un programa ue me permita imprimir
    //Los 3 colores de semaforo
    //Siguiendo el siguien enunciado
    //Si el semaforo esta en rojo debe decir ¡Para!
    //Si el semaforo esta en amarillo debe decir ¡espera!
    //Si el semaforo esta en verde debe decir ¡avanza!
    //Para ello el programa debe pedir al usuario que ingrese
    //un numero o una letra para evaluar que color
    //esta eligiendo.

    echo "----------SEMAFORO----------";
    echo "\n    Rojo = 1";
    echo "\nAmarillo = 2";
    echo "\n   Verde = 3";

    echo "\nIngrese el numero segun el color del semaforo: ";
    $numero=fgets(STDIN);

    if($numero == 1) {
        echo "\nPARA";
    }
    if($numero == 2) {
        echo "\nESPERA";
    }
    if($numero == 3) {
        echo "\nAVANZA";
    }
?>