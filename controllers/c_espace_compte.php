<?php
require_once(PATH_MODELS.'photoDAO.php');
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'utilisateurDAO.php');

if (isset($_GET['nom']))
{
    $nom =  htmlspecialchars($_GET['nom']);
}


$catDAO = new CategorieDAO(DEBUG);
$photoDAO = new PhotoDAO(DEBUG);
$userDAO = new UtilisateurDAO(DEBUG);

$photoPerso = $photoDAO->getByUser($_SESSION['utilID']);
$nbUser = $userDAO->countUsers();

$cat = $catDAO->getAll();

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

require_once(PATH_VIEWS.$page.'.php');