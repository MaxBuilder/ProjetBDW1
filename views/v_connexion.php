<!-- Entête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->

    <!-- Début formulaire -->
    <?php
    if(!isset($_SESSION['logged'])) {
    ?>
    <h1><?=TITRE_CONNECTION?></h1>
    <br>
    <form method="post">
        <div>
            <label>
                <?=CHOIX_PSEUDO?>
            </label>
            <br>
            <input style="color:#181818;" name="CHOIX_PSEUDO" type="text" placeholder="Pseudo">
        </div>
        <br>
        <div>
            <label>
                <?=CHOIX_MDP?>
            </label>
            <br>
            <input style="color:#181818;" name="CHOIX_MDP" type="password" placeholder="Mot de passe">
        </div>
        <br>
        <div >
            <input class="validerbutton" style="width: 120px" type="submit" value="<?=LOGIN?>">
        </div>
        <a href="index.php?page=inscription"> Pas encore inscrit ? </a>
    </form>
    <?php }
    ?>
    <!-- Fin formulaire -->

    <!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
