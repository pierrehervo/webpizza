<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1.Définition des constantes
 * 2.Définition des variables d'environnement d'exécution
 * 3.Définition des variables de base de données
 * 4.Définition des varaiables de routage
 * 5.Définition des expressions régulières
 */

 /**
  * 1.Définition des constantes
  */ 

//Definition du titre du site
    define('WEBSITE_TITLE', "WebPizza, les meilleurs pizzas du WEB!");

//Définir le chemin du répertoire "utils"
    define('UTILS_PATH', "../utils/");


/**
 * 2.Définition des variables d'environnement d'exécution
 */

 // Environnement de développement ou production?
 //les valeurs peuvent être:"prod" ou "dev"
 //Par défaut on considère que l'application s'exécute en environnement de PROD
 $env = "prod";

 //liste des domaines que l'on considère comme étant des environnements de développement
 $dev_domains = [
     "127.0.0.1",
     "localhost",
     "webpizza.local"
 ];


/**
 * 3.Définition des variables de base de données
 */

 //listes des configurations de connections aux bases de données par défaut
 $db_config = [];

 //Liste des connections aux bases de données. Cette liste sera nourrit par le fichier db_connect.php
 $db = [];

 //Inclusion de la config de la base de données
 require_once "database.php";


 /**
  * 4.Définition des varaiables de routage
  */
 