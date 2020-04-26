<?php
require_once PATH_MODELS.'utilisateurDAO.php';


// Début contrôleur connexion
$connexion = new UtilisateurDAO(DEBUG);
if (isset($_SESSION["logged"])) {
    session_destroy();
    $_SESSION = array();
    $_SESSION = array();
    //header('location:index.php?page=accueil');
    $alert = choixAlert('Deconnecter');
}
else if(isset($_POST['CHOIX_MDP']) && isset($_POST['CHOIX_PSEUDO'])) {
    $mdpHash = md5($_POST['CHOIX_MDP']);

    if($connexion->getUser($_POST['CHOIX_PSEUDO'],$mdpHash)) {
        $_SESSION['utilID'] = $connexion->getID($_POST['CHOIX_PSEUDO']);
        $_SESSION['pseudo'] = $_POST['CHOIX_PSEUDO'];
        $_SESSION['logged'] = TRUE;
        $_SESSION['perm'] = $connexion->getPerm($_POST['CHOIX_PSEUDO']);
        $alert = choixAlert('Connecter');
    }
    else $alert = choixAlert('Identif');
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
// Fin contrôleur connexion


require_once(PATH_VIEWS.$page.'.php');
