<?php
/**
 * Page d'inscription
 */

// Ajout de la config
include_once "config.php";

$firstname = null;
$lastname = null;
$email = null;

// - Récupération des données du formulaire

// On test la méthode
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $isValid = true;

    // Récupération des données 
    $firstname      = isset($_POST['firstname']) ? trim($_POST['firstname']) : null;
    $lastname       = isset($_POST['lastname']) ? trim($_POST['lastname']) : null;
    $email          = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password_text  = isset($_POST['password']) ? $_POST['password'] : null;
    $password_hash  = password_hash($password_text, PASSWORD_DEFAULT);
    // http://php.net/manual/fr/function.password-hash.php
    

    // Controle du formulaire
    // if (xxxx) {
    //     $isValid = false;
    // }


    // Verification de l'unicité de l'utilisateur
    $q = $db->prepare("SELECT id FROM users WHERE email=:email");
    $q->bindValue(':email', $email, PDO::PARAM_STR);
    $q->execute();
    
    $r = $q->fetchAll();

    // Si $r contient au moins un résultat, on stop le processus d'inscription
    if (!empty($r)) {
        $isValid = false;
    }


    // Enregistrement des données dans la BDD
    if ($isValid) {
        // Préparation de la requete
        $q = $db->prepare("INSERT INTO users (`firstname`, `lastname`, `email`, `password`) 
                                 VALUES (:firstname , :lastname , :email , :password)");
        $q->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $q->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $q->bindValue(':email', $email, PDO::PARAM_STR);
        $q->bindValue(':password', $password_hash, PDO::PARAM_STR);

        // Execution de la requete
        $r = $q->execute();

        // Si la requete est un succès
        if ($r) { // $r === true
            header("location: /connexion");
            exit;
        }
        else {
            echo "oops, les données n'ont pas été enregistrées dans la BDD !";
            exit;
        }
    }
    else {
        echo "oops, erreur sur le form !";
        // exit;
    }


}

/**
 * index
 */
function account_index() 
{
    // Verifie si l'utilisateur n'est pas identifié
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) 
    {
        redirect("/connexion");
    }
    
    // Intégration de la vue
    include_once "../private/src/views/insription/register_form.php";
}