<?php
/**
 * Fichier de chargement automatique des script du répertoire "utils"
 */

 //Test si la constante UTILS_PATH n'est pas définie.
 if (!defined('UTILS_PATH')){
     define('UTILS_PATH', null);
 }

 //Si UTILS_PATH n'est pas null
 //On scan le répertoire "utils" (fonction "scandir") si celui-ci existe (fonction "exists" ou "is_dir")
 //On liste/parcours les fichiers du répertoire
 //On filtre les fichiers pour conserver uniquement les fichiers en ".php"

 //et on test la fonction dump()

 if ('UTILS_PATH' != null) {

    if(is_dir(UTILS_PATH)){// est ce que UTILS_PATH est un répertoire
        $listes=scandir(UTILS_PATH);//c'est un répertoire alors je le scan avec scandir

        foreach ($listes as $liste){//foreach c'est une boucle 
            if (preg_match ("/\.php$/",$liste)==1){//je filtre les fichier qui se terminent par .php
                include_once UTILS_PATH.$liste;
            }
        }
    }
    

 }