<?php
require_once(PATH_MODELS.'photoDAO.php');
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'utilisateurDAO.php');


// Début contrôleur espace_compte
$utilisateurDAO = new UtilisateurDAO(DEBUG);
$photoDAO = new PhotoDAO(DEBUG);
$photoPerso = $photoDAO->getByUser($_SESSION['utilID']);

if(isset($_POST['CHOIX_CHANG_PSEUDO'])) {
    $avail = $utilisateurDAO->checkAvailability($_POST['CHOIX_CHANG_PSEUDO']);

    if($avail) {
        $res = $utilisateurDAO->updatePseudo($_POST['CHOIX_CHANG_PSEUDO'], $_SESSION['utilID']);

        if($res)
            $alert = choixAlert('ChangementPseudo');
        $_SESSION['pseudo'] = $_POST['CHOIX_CHANG_PSEUDO'];
    }
    else $alert = choixAlert('pseudo_dispo');
}

if(isset($_POST['CHOIX_MDP_OLD']) && isset($_POST['CHOIX_MDP']) && isset($_POST['CHOIX_MDPC'])) {
    if($_POST['CHOIX_MDP'] == $_POST['CHOIX_MDPC']) {
        $mdpHashOld = md5($_POST['CHOIX_MDP_OLD']);
        if($utilisateurDAO->getUser($_SESSION['pseudo'], $mdpHashOld)) {
            $mdpHash = md5($_POST['CHOIX_MDP']);
            $utilisateurDAO->updateMdp($mdpHash, $_SESSION['utilID']);
            $alert = choixAlert('mdp_chang_succ');
        }
        else $alert = choixAlert('mdp_chang');
    }
    else $alert = choixAlert('MDP');    // Erreur mots de passe non identiques
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
// Fin contrôleur espace_compte


require_once(PATH_VIEWS.$page.'.php');