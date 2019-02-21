<?php
/**
 * Fichier de chargement auto des scripts du répertoire /private/app/utils
 */

//tester si la constante UTILS_PATH n'est pas définie
if (!defined('UTILS_PATH')) {
    define('UTILS_PATH', null);
}

if (UTILS_PATH != null)
{
 // scanner le rép. UTILS_PATH
$utils_scan = scandir(UTILS_PATH);


// Une boucle sur la liste des entrées $utils_scan
foreach( $utils_scan as $key => $value) 
{
    // filtre les fichiers se terminant par ".php"
if (preg_match("/\.php$/", $value))
{
    //on inclue uniquement les fichiers ".php"
    include_once UTILS_PATH.$value;
}
}
}
