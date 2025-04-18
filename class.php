<?php

/**
 * clase: plano o plantilla para crear objetos
 * objeto: instancia de la clase, en el contexto de clases de php
 * 
 * Las clases describa algo que tenga sentido
 * ejemplo peliculas que tienes propiedades, como extraer informacion, hacer algo sobre esa peliculas
 * 
 * Programacion procedimental o programacion imperativa
 * 
 * POO
 * 
 * 
 */

//  palabra reservada
class SuperHero
{
    // propiedades y los metodos
    // propiedades describir los datos, describir la visibilidad hacia los clientes

    // variables publicas
    // public $name;
    // public $power;
    // public $planet;

    // usar constructores para  instanciar la clase con variables iniciadas
    // public function __construct($name, $power, $planet)
    // {
    //     // en ocasiones se llega a ser repetitivo el codigo
    //     $this->name = $name;
    //     $this->power = $power;
    //     $this->planet = $planet;
    // }

    // hay formas de mejorar el codigo repetido
    // promoted properties
    // usar un constructor con parametros indicando la propiedad
    public function __construct(
        public $name,
        public $power,
        public $planet
    ) {}

    // ataque
    public function attack()
    {
        return "$this->name atacata con sus poderes";
    }

    // descripcion
    public function description()
    {
        return "El $this->name, es del planeta $this->planet, y su superpoder es $this->power";
    }
}

// instancia
// $hero = new SuperHero();

// asignando a las variables publicas
// $hero->name = 'Capitan America';
// $hero->power = 'super suero';
// $hero->planet = 'tierra';

// echo $hero->description();

// esto que hicimos no es lo ideal

// Con el constructor podemos inicializarlo asi
$hero = new SuperHero('Hulk', 'Super Fuerza', 'tierra');

echo $hero->description();
