<?php
/**
 * Fichier de définition des routes de l'applications
 * 
 * - Chaque ligne du tableau $routes défini une route
 * - Chaque route est défini par
 *      - Le nom de la route
 *      - Le "path"
 *      - Le "controller", la focntion déclenché par la route
 *      - La|Les méthode(s)
 */

$routes = [

    // Route Index (page d'accueil du site)
    ["homepage", "/", "homepage:index", ["HEAD","GET"]],

    // Liste des produits
    ["pizzas", "/pizzas", "products:pizzas", ["HEAD","GET"]],
    ["salads", "/salades", "products:salads", ["HEAD","GET"]],
    ["desserts", "/desserts", "products:desserts", ["HEAD","GET"]],
    ["drinks", "/boissons", "products:drinks", ["HEAD","GET"]],
    ["menus", "/menus", "products:menus", ["HEAD","GET"]],

    // Page de traitement du formulaire de contact
    ["contact", "/contact", "contact:index", ["HEAD","POST"]],

    // Pages de sécurité
    ["login", "/connexion", "security:login", ["HEAD","GET","POST"]],
    ["register", "/inscription", "security:register", ["HEAD","GET","POST"]],
    ["forgotten_password", "/mot-de-passe-oublie", "security:forgotten_password", ["HEAD","GET","POST"]],

    // Page de commande
    ["order", "/panier", "order:index", ["HEAD","GET"]],

    // Profil utilisateur
    ["account", "/mon-compte", "account", ["HEAD","GET"]],

    // ---

    // Erreur 404 
    // /!\ TOUJOURS EN DERNIER DU TABLEAU ROUTE
    ["error-404", "/404", "errors:404", ["HEAD","GET"]]

];