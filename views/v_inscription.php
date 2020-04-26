<!-- Entête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_INSCRIPTION?></h1><br>

    <!-- Début formulaire -->
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
            <input class="validerbutton" style="width: 95px" type="submit" value="<?=REGISTER?>">
        </div>
        <a href="index.php?page=connexion"> Déjà inscrit ? </a>
    </form>
    <!-- Fin formulaire -->

    <!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
