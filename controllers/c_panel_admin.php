<?php
require_once(PATH_MODELS.'photoDAO.php');
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'utilisateurDAO.php');


// Début contrôleur espace admin
$catDAO = new CategorieDAO(DEBUG);
$photoDAO = new PhotoDAO(DEBUG);
$userDAO = new UtilisateurDAO(DEBUG);

$nbUser = $userDAO->countUsers();
$users = $userDAO->getAllUsers();
$cat = $catDAO->getAll();
$nbCat = $catDAO->countCat();
$nbPublic = $photoDAO->countPhoto(1);
$nbPrivate = $photoDAO->countPhoto(0);

if(is_null($cat)) {
    if(!is_null($cat->getErreur())) {
        $erreur = 'query';
    }
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
// Fin contrôleur espace admin


require_once(PATH_VIEWS.$page.'.php');
