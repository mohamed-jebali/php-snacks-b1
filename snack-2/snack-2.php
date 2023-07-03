<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['number'];

if($_GET["name"] < strlen(3)){
    echo "Accesso negato";
}


?>
