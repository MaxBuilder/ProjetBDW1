<?php
require_once(PATH_MODELS.'photoDAO.php');
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'utilisateurDAO.php');


// Début contrôleur espace_compte
$catDAO = new CategorieDAO(DEBUG);
$photoDAO = new PhotoDAO(DEBUG);
$userDAO = new UtilisateurDAO(DEBUG);

$photoPerso = $photoDAO->getByUser($_SESSION['utilID']);

if($_SESSION['perm'] == 0) {
    $nbUser = $userDAO->countUsers();
    $cat = $catDAO->getAll();

    if(is_null($cat)) {
        if(!is_null($cat->getErreur())) {
            $erreur = 'query';
        }
    }
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
// Fin contrôleur espace_compte


require_once(PATH_VIEWS.$page.'.php');