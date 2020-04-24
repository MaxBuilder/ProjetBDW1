<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

    <!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_AJOUT_CAT?></h1>
    <br>
    <form method="POST">
        <div>
            <label><?=CHOIX_DE_CAT?></label>
            <br>
            <input style="color:#181818;" name= "CHOIX_DE_CAT" type="text" placeholder="Nom Catégorie" </input>
        </div>
        <br>
        <div>
            <input class="validerbutton" type="submit" value="<?=ADD?>">
        </div>
    </form>
    <!--  Fin de la page -->

    <!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
