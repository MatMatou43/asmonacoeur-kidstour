<?php
    $hote='localhost';
    $port='3306';
    $nom_bd='asmonacoeur';
    $identifiant='root';
    $mot_de_passe='';
    $encodage='utf8';
    $options=array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.$encodage);
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
?>