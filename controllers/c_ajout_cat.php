<?php
require_once(PATH_MODELS.'categorieDAO.php');
if(isset($_GET['nom']))
{
    $nom =  htmlspecialchars($_GET['nom']);
}

$catDAO = new CategorieDAO(DEBUG);

if(isset($_POST['CHOIX_DE_CAT'])) {
    if($catDAO->checkCat($_POST['CHOIX_DE_CAT'])) {
        $alert = choixAlert('categorieExist');
    }
    else {
        $catInsert = $catDAO->insertCat(htmlspecialchars($_POST['CHOIX_DE_CAT']));
        if(!$catInsert)
            $alert = choixAlert($catDAO->getErreur());
        else header('location:index.php?page=accueil');
    }
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
require_once(PATH_VIEWS.$page.'.php');
