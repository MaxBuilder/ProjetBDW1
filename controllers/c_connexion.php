<?php
require_once PATH_MODELS.'utilisateurDAO.php';

session_start();
if (isset($_SESSION["logged"])){
    session_destroy();
    $_SESSION = array();
    header('location:index.php?page=accueil');

}else if(isset($_POST['CHOIX_MDP']) && isset($_POST['CHOIX_PSEUDO'])) {
    $connexion = new UtilisateurDAO(DEBUG);
    $mdpHash = md5($_POST['CHOIX_MDP']);

    if($connexion->getUser($_POST['CHOIX_PSEUDO'],$mdpHash)) {
        $_SESSION['utilID'] = $connexion->getID($_POST['CHOIX_PSEUDO']);
        $_SESSION['pseudo'] = $_POST['CHOIX_PSEUDO'];
        $_SESSION['logged'] = TRUE;
        $_SESSION['perm'] = $connexion->getPerm($_POST['CHOIX_PSEUDO']);
        $connect = TRUE;
        header('location:index.php?page=accueil');
    }
    else $alert = choixAlert('Identif');
}
require_once(PATH_VIEWS.$page.'.php');
?>
