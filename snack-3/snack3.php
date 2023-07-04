<!-- Scrivi una funzione che fonde due array (aventi lo stesso numero di elementi) prendendo alternativamente gli elementi da uno e dall'altro
es. [a,b,c,d,e], [1,2,3,4,5] → [a,1,b,2,c,3,d,4,e,5]. -->


<?php
$array1 = [1,2,3,4,5];
$array2 = ['a','b','c','d','e'];


function connectArray ($array1 , $array2){

    for ($i=0; $i < $array3 ; $i++) { 
        
         $array3 = [];

       $array3 [] = $array1[$i];
       $array3 [] = $array2[$i];

       echo $array3;
    }
}

?>