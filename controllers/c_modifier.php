<?php
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'photoDAO.php');

$catDAO = new CategorieDAO(DEBUG);
$photoDAO = new PhotoDAO(DEBUG);
$cat = $catDAO->getAll();

if(is_null($cat))
{
    if(!is_null($cat->getErreur()))
    {
        $erreur = 'query';
    }
}

$photo = $photoDAO->getImage($_GET['id']);

if(isset($_POST['CHOIX_CAT']) && isset($_POST['DESCRIPTION'])) {
    if($_POST['CHOIX_CAT'] == "NONE") $alert = choixAlert('choix_de_cat');

    else {
        $catId = $catDAO->getCatId(htmlspecialchars($_POST['CHOIX_CAT']));

        $modif = $photoDAO->updatePhoto($_GET['id'], $_POST['DESCRIPTION'], $catId);

        if (!$modif)
            $alert = choixAlert($photoDAO->getErreur());
        else  header('Location: index.php?page=image&id=' . $_GET['id']);
    }
}


if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
require_once(PATH_VIEWS.$page.'.php');
