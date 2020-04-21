<?php
require_once PATH_MODELS.'connexionDAO.php';

session_start();
if (isset($_SESSION["logged"])){
    header('location:index.php?page=accueil');

}else if (isset($_POST['mdp'])) {
    $connexion = new ConnexionDAO(DEBUG);
        if ($_POST['mdp'] == $_POST['mdp2']) {
            $rep = $connexion->checkAvailability($_POST['pseudo']);
            if ($rep) {
                $mdpHash = md5($_POST['mdp']);
                $connexion->register($_POST['pseudo'], $mdpHash);
                $_GET['page'] = 'accueil';
                header('location:index.php?page=accueil');
            }
    }
}

require_once(PATH_VIEWS.$page.'.php');

?>
