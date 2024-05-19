<?php
// echo 'Hola mundo';
$name = 'Jose Alberto';
$lastName = 'Velazquez';
$secondLastName = 'Nava';
$isDev = true;
$age = 23;

// edad sumada
$newAge = $age + '1';
// texto concatenado
$fullName = $name . ' ' . $lastName . ' ' . $secondLastName;

// indicara el tipo de dato, valor de dato
var_dump($name);

// interpolacion de cadenas
$salida = "Hola $name $lastName $secondLastName";

// match adios switch
$eresEdad = match ($age) {
    0, 1, 2 => "eres un bebé",
    3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño",
    11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolescente",
    19, 20, 21, 22, 23, 24, 25, 27, 28, 29, 30 => "Eres un adulto joven",
    default => "Eres un adulto",
};

// tambien funcionan las expresiones
$eres = match (true) {
    $age < 3 => "Eres un bebé",
    $age < 11 => "Eres un niño",
    $age < 19 => "Eres un adolescente",
    $age < 31 => "Eres un adulto joven",
    default => "Hueles mas a madera que a fruta",
};

// Arrays 
$mejoresLenguajes = [
    "PHP",
    "Java",
    1,
    2
];

// escalable
$mejoresLenguajes[] = "JavaScript";

// sustituir arreglo
$mejoresLenguajes[3] = "TypeScript";
// va a sustituir el numero 2 que se encuentra en el array

// array asociativos
$persona = [
    "name" => "Jose",
    "edad" => 23,
    "programador" => true,
    "lenguajesAprendidos" => ["php", "Java", "JavaScript", "Phyton"]
];

// sustituir valor
$persona["name"] = "Alberto";
// agregar uno mas en el arreglo anidado
$persona["lenguajesAprendidos"][] = "TypeScript";

?>
<h1>
    <!-- forma de impresion simplificada -->
    <!-- <?= "Hola Mundo" ?> -->
    <!-- tambien se puede imprimir variables -->
    <!-- <?= $fullName ?> -->
    <!-- <?= $salida ?> -->
    <?= $eres ?>

    <!-- iterar array -->
    <?php foreach($mejoresLenguajes as $lenguaje) : ?>
        <h3><?= $lenguaje ?></h3>
    <?php endforeach;  ?>
</h1>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>