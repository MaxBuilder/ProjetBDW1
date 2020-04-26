<?php
if(!isset($_SESSION['logged'])){header('location:index.php?page=accueil');}
require_once(PATH_MODELS.'categorieDAO.php');
require_once(PATH_MODELS.'photoDAO.php');


// Début contrôleur ajout_photo
$photoDAO = new PhotoDAO(DEBUG);
$catDAO = new CategorieDAO(DEBUG);
$cat = $catDAO->getAll();

if(is_null($cat)) {
    if(!is_null($cat->getErreur()))
        $erreur = 'query';
}

if(isset($_FILES['CHOIX_FICH']) && isset($_POST['CHOIX_CAT']) && isset($_POST['DESCRIPTION'])) {
    $target_dir = "assets/images/";
    $target_file = $target_dir . basename($_FILES['CHOIX_FICH']['name']);
    $uploadOk = 1;
    $fichier_ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fichier"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if(strlen($_POST['DESCRIPTION']) == 0) {
        $alert = choixAlert('desc');
        $uploadOk = 0;
    }

    if ($_FILES["CHOIX_FICH"]["size"] > 100000) {
        $alert = choixAlert('Taille_FICH');
        $uploadOk = 0;
    }

    if($fichier_ext != "png" && $fichier_ext != "jpg" && $fichier_ext != "gif" ) {
        $alert = choixAlert('FICHIER');
        $uploadOk = 0;
    }

    if($_POST['CHOIX_CAT'] == "NONE") {
        $alert = choixAlert('choix_de_cat');
        $uploadOk = 0;
    }

    if($uploadOk == 1) {
        $catId = $catDAO->getCatId(htmlspecialchars($_POST['CHOIX_CAT']));
        $photo = $photoDAO->insertPhoto($catId,htmlspecialchars($_POST['DESCRIPTION']),$_SESSION['utilID']);

        if(!$photo)
            $alert = choixAlert($photoDAO->getErreur());
        else
            header('Location: index.php?page=image&id='.$photo->getPhotoId());
    }
}

if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
// Fin contrôleur ajout_photo


require_once(PATH_VIEWS.$page.'.php');
