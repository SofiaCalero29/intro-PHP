<?php
/**
 * comentario multilínea
 */
$name = "Sofia"; //asinar valores siempre con un valor si no lo sabemos poner null
$lastName = 'Muñiz';
$age = 20;
$size = 1.51;
$booleanTrue=true;
$booleanFalse = false;
/**
 * Arrays
 */
$array =[];
$array2 = array();
$arrayValues=[10, 'string', true, ['otro valor']];
/**
 * Constantes
 */
const CONSTANTE_1 = 'valor constante1';
const constante_2 = 23;// es mejor es mayusculas

/**
 * Objetos
 */
$object = new stdClass(); //objetos genericos 

/**
 * Clases
 */
class Auto{
    var $color;
    var $marca;
    array $arrays;
    bool $propiedadBoolean = false;
    $prpiedadSinTipoDeDato = [];
    
   // int $numberOfDoors = 0;
    // //public function__constructor(int $doors){ //para crear instancias 
    //     $this->numberOfDoors= $doors;
    // }
    //public, private, protected (son accesibles solo dentro de la clase, sobreescritas)
    
    public function__constructor(
        public int $numberOfDoors)
        {

        }

    public function getDetails(string $time){
        echo "hello world";
        echo 'hello world';//para imprimir es como el system
        echo "Time: " . $time;
        echo 'Time $time';
        echo "Time $time";
    }
}
/**
 * Crear instancia de clases
 */
$autoInstance = new Auto(4);
$autoInstance2= Auto(4);

/**
 * ciclos
 */

 for ($i=0; $i < 10; i++){
    echo $i."\n";
 }
?>