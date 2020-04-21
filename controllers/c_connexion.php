<?php
require_once PATH_MODELS.'connexionDAO.php';

session_start();
if (isset($_SESSION["logged"])){
    session_destroy();
    $_SESSION = array();
    header('location:index.php?page=accueil');
}else if(isset($_POST['mdp'])){
    $connexion = new ConnexionDAO(DEBUG);
    $mdpHash = md5($_POST['mdp']);
    if($connexion->getUser($_POST['pseudo'],$mdpHash)){
        $query = "SELECT `utilID` FROM `utilisateur` WHERE pseudo = '".$_POST['pseudo']."' AND mdp = '$mdpHash';";
        $_SESSION['utilID'] = $connexion->getID($_POST['pseudo']);
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['logged'] = TRUE;
        $connect = TRUE;
        header('location:index.php?page=accueil');
    }
}
require_once(PATH_VIEWS.$page.'.php');
?>
