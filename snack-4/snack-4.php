<!-- Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b" -->

<?php

function newArray ($array,$numberA,$numberB){

    if( $numberA < $numberB && $numberB <= count($array)){
        $newArray = array_splice($numberA,"",$numberB);
        return $newArray;
    }
}


?>