<?php
/**
 * Fichier de définition de l'environnement d'exécution de l'application
 */

 //Dans le cas ou la variable $dev_domains n'est pas défini (dans le fichier config.php)
 //On initialise la variable $dev_domains avec un tableau vide
 if (!isset($dev_domains)) { //si la variable dev domains n'existe pas alors je la créee (c'est cde qui est écrit en code! ;))
     $dev_domains = [];
 }

 //Si la super global $_SERVER ['SERVER_NAME'] n'est pas vide
 //ET que la valeur de la super global $_SERVER est dans le tableau
 //$dev_domains, alors on redéfini la variable $_env
 if (
     !empty($_SERVER['SERVER_NAME']) &&
     in_array($_SERVER['SERVER_NAME'], $dev_domains)
 ){
     $env="dev";
 }