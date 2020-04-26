<?php
require_once(PATH_MODELS.'categorieDAO.php');
require_once (PATH_MODELS.'photoDAO.php');


// Début contrôleur de l'acceuil
$catDAO = new CategorieDAO(DEBUG);
$photoDAO = new PhotoDAO(DEBUG);
$cat = $catDAO->getAll();

if(!isset($_GET['choix_categorie']))
    $photoById = $photoDAO->getById(htmlspecialchars('Toutes les photos'));
else
    $photoById = $photoDAO->getById(htmlspecialchars($_GET['choix_categorie']));

if(is_null($cat)) {
    if(!is_null($catDAO->getErreur()))
        $erreur = 'query';
}

if(is_null($photoById)) {
    if(!is_null($catDAO->getErreur()))
        $erreur = 'query';
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
else
{
    $nbP = count($photoById);
    $alert = choixAlert('photos_selection',$nbP);
}
// Fin contrôleur de l'acceuil


require_once(PATH_VIEWS.$page.'.php');
