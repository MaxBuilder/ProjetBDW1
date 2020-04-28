<?php
require_once(PATH_MODELS.'photoDAO.php');
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'utilisateurDAO.php');


// Début contrôleur image
$photoDAO = new PhotoDAO(DEBUG);
if(isset($_GET['id'])){
    $img = $photoDAO->getImage($_GET['id']);
}

$catDAO = new CategorieDAO(DEBUG);
$cat = $catDAO->getNomCat($img->getcatId());

$UtilisateurDAO = new UtilisateurDAO((DEBUG));
$author = $UtilisateurDAO->getPseudo($img->getUserId());

if($img->getVisibility() == 1)
    $visibilite = "Publique";
else $visibilite = "Privée";

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
// Fin contrôleur image


require_once(PATH_VIEWS.$page.'.php');
