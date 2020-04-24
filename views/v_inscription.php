<?php require_once(PATH_VIEWS.'header.php');?>

    <!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_INSCRIPTION?></h1>
    <br>
    <form action='index.php?page=inscription' method="post">
        <div>
            <label>
                <?=CHOIX_PSEUDO_INSCRI?>
            </label>
            <br>
            <input style="color:#181818;" name="CHOIX_PSEUDO" type="text" placeholder="Pseudo">
        </div>
        <br>
        <div>
            <label>
                <?=CHOIX_MDP_INSCRI?>
            </label>
            <br>
            <input style="color:#181818;" name="CHOIX_MDP" type="password" placeholder="Mot de passe">
        </div>
        <br>
        <div>
            <label>
                <?=CHOIX_MDPC_INSCRI?>
            </label>
            <br>
            <input style="color:#181818;" name="CHOIX_MDPC" type="password" placeholder="Confirmation">
        </div>
        <br>
        <div >
            <input class="validerbutton" type="submit" value="<?=REGISTER?>">
        </div>
        <a href="index.php?page=connexion"> Déjà inscrit ? </a>
    <!--
    <p>Votre pseudo : <input type="text" name="pseudo" style="color:#181818" /></p>
    <p>Votre mot de passe : <input placeholder="Mot de passe" type="password" name="mdp" style="color:#181818" /></p>
    <p>Valider votre mot de passe : <input placeholder="Mot de passe" type="password" name="mdp2" style="color:#181818" /></p>
    <p><input type="submit" value="S'inscrire" style="color:#181818" ></p>
    <a href="index.php?page=connexion"> déjà inscrit ? </a>-->
</form>
    <!--  Fin de la page -->

    <!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
