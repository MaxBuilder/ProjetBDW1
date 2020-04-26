<?php
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'photoDAO.php');


// Début contrôleur supprimer
$photoDAO = new photoDAO(DEBUG);

if(isset($_GET['id']))
{
    $dataImage = $photoDAO->getImage($_GET['id']);
    $photo = $photoDAO->deletePhoto($_GET['id']);
    $bool = unlink(PATH_IMAGES.$dataImage->getNomFich());
}

if($photo && $bool)
    $alert = choixAlert('SuppressionOK');
else $alert = choixAlert('SupprError');

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
// Fin contrôleur supprimer


require_once(PATH_VIEWS.$page.'.php');
