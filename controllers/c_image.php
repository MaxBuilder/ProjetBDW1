<?php
require_once(PATH_MODELS.'photoDAO.php');
require_once(PATH_MODELS.'categorieDAO.php');
if (isset($_GET['nom']))
{
    $nom =  htmlspecialchars($_GET['nom']);
}

$photoDAO = new PhotoDAO(DEBUG);
if(isset($_GET['id'])){
    $img = $photoDAO->getImage($_GET['id']);
}

$CatDAO = new CategorieDAO(DEBUG);
    $cat = $CatDAO->getNomCat($img->getcatId());


if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}

require_once(PATH_VIEWS.$page.'.php');
