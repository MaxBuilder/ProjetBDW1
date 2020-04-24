<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'photoDAO.php');

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





require_once(PATH_VIEWS.$page.'.php');
