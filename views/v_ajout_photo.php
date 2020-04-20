<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

    <!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1 class="styletitre"><?=TITRE_AJOUT_PHOTO?></h1>
    <br>
    <form method="POST" enctype="multipart/form-data">
        <div>
            <label>
                <?=CHOIX_FICH?>
            </label>
            <input name="fileinput" type="file">
        </div>
        <br>
        <div>
            <label>
                <?=DESCRIPTION?>
            </label>
            <br>
            <textarea type="text" name="DESCRIPTION" rows="4" cols="40"></textarea>
        </div>
        <br>
        <div>
            <label>
                <?=CHOIX_CAT?>
            </label>
            <select name="select">
                <option value="NONE"><?=NONE?></option>
                <?php
                foreach ($cat as $value)
                { ?>
                    <option name="Categorie" value="<?php if(isset($_POST['categorie'])) echo $_POST['categorie']; else echo $value->getnomCat();?>"  <?php if(isset($_POST['choix_categorie']) && ($_POST['choix_categorie'] == $value->getnomCat())) echo'selected';?>><?=$value->getnomCat()?></option>
                    <?php
                }
                echo $_POST['choix_categorie']; ?>
            </select>
        </div>
        <br>
        <div >
            <input class="validerbutton" type="submit" value="<?=ADD?>">
        </div>
    </form>
    <!--  Fin de la page -->

    <!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');

