<?php require_once(PATH_VIEWS.'header.php');?>

    <!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
<form action='index.php?page=connexion' method="post">
    <p>Votre pseudo : <input type="text" name="pseudo" style="color:#181818" /></p>
    <p>Votre mot de passe : <input placeholder="Mot de passe" type="password" name="mdp" style="color:#181818" /></p>
    <p><input type="submit" value="Connexion" style="color:#181818" ></p>
    <a href="index.php?page=inscription"> Pas encore inscrit ? </a>
</form>
    <!--  Fin de la page -->

    <!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
