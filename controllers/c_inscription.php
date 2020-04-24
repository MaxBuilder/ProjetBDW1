<?php
require_once PATH_MODELS.'utilisateurDAO.php';

if (isset($_POST['CHOIX_MDP'])) {
    $connexion = new UtilisateurDAO(DEBUG);

    if ($_POST['CHOIX_MDP'] == $_POST['CHOIX_MDPC']) {
        $rep = $connexion->checkAvailability($_POST['CHOIX_PSEUDO']);

        if ($rep) {
            $mdpHash = md5($_POST['CHOIX_MDP']);
            $connexion->register($_POST['CHOIX_PSEUDO'], $mdpHash);

            $_GET['page'] = 'accueil';
            header('location:index.php?page=accueil');
        }
        else $alert = choixAlert('pseudo_dispo');
    }
    else $alert = choixAlert('MDP');
}

require_once(PATH_VIEWS.$page.'.php');

?>
