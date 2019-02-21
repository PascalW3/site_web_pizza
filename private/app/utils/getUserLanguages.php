<?php

/**
 * Determine les langues de l'utilisateur
 * 
 */
if (!function_exists('getUserLanguages')) 
{

function getUserLanguages()
{
    // on récup liste langues de la super global $_SERVER
$languages_str=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
 
// on converti la chaine en tableau
$languages_arr=explode(",", $languages_str);

// on boucle sur la liste des langues
foreach($languages_arr as $key => $lang) {
   $lang=explode (";",$lang);  // conversion de $lang en tableau
   $lang= $lang[0];
   dump ($lang);
}

}
}


getUserLanguages();