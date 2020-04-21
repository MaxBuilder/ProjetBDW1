<?php
/*
 * DS PHP
 * Controller page accueil
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
session_start();
require_once(PATH_MODELS.'categorieDAO.php');

if (isset($_GET['nom']))
{
    $nom =  htmlspecialchars($_GET['nom']);
}

$catDAO = new CategorieDAO(DEBUG);
$cat = $catDAO->getAll();

if(!isset($_GET['choix_categorie']))
{
    $catById = $catDAO->getById(htmlspecialchars('Toutes les photos'));
}
else {
    $catById = $catDAO->getById(htmlspecialchars($_GET['choix_categorie']));
}


if(is_null($cat))
{
    if(!is_null($catDAO->getErreur()))
    {
        $erreur = 'query';
    }
}

if(is_null($catById))
{
    if(!is_null($catDAO->getErreur()))
    {
        $erreur = 'query';
    }
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
else
    {
    $nbP = count($catById);
    $alert = choixAlert('photos_selection',$nbP);
}

require_once(PATH_VIEWS.$page.'.php');
