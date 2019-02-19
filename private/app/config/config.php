<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'exé
 * 3.
 */

 /**
 * 1.Définition des constantes 
 */

// WEBSITE_TITLE : D efinition du titre du site
define('WEBSITE_TITLE', "WebPizza !");


 /**
 * 2.Définition des variables d'environnement d'exécution 
 */

 //Env de dév ou prod ?
 // les valeurs peuvent être : "prod" ou "dev"
// par défaut, on considère que l'app s'exécute en env de PROD
 $env = "prod";

 // Liste des domaines que l'on considère comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];
