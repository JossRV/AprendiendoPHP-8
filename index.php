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
$fullName = $name.' '.$lastName.' '.$secondLastName;

var_dump($name);
?>
<h1>
    <!-- forma de impresion simplificada -->
    <!-- <?= "Hola Mundo" ?> -->
    <!-- tambien se puede imprimir variables -->
    <?= $fullName ?>
</h1>
<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display: grid;
        place-content: center;
    }
</style>