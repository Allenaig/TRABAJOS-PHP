<?php
    include("16-encapsulamiento.php");

    $guitarra = new Instrumento("gibson","acustica");
    $guitarra->setearModelos("nylon , alambre");
    echo "DATOS DE GUITARRA\n";
    echo "Nombre: ".$guitarra->nombre."\n";
    echo "Categoria: ".$guitarra->categoria."\n";
    echo "Modelos: ".$guitarra->mostrarModelos()."\n";

    $guitarra->nombre = "yamaha";
    $guitarra->categoria = "electrica";
    $guitarra->setearModelos("nylon , alambre , otros");
    echo "\nDATOS DE GUITARRA\n";
    echo "Nombre: ".$guitarra->nombre."\n";
    echo "Categoria: ".$guitarra->categoria."\n";
    echo "Modelos: ".$guitarra->mostrarModelos()."\n";
    echo "Tiene cuerdas?: ".$guitarra->validarCuerdas()."\n";
?>