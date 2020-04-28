<!-- Entête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_MODIF_PHOTO?></h1><br>

    <!-- Début formulaire -->
    <form method="POST" enctype="multipart/form-data">
        <div>
            <label>
            <?=DESCRIPTION?>
            </label>
            <br>
            <textarea style="color:#181818;" type="text" name="DESCRIPTION" placeholder="Description" rows="4" cols="40"><?=$photo->getDescription()?></textarea>
        </div>
        <br>
        <div>
            <?=CHOIX_CAT?>
            <label>
                <select style="color:#181818" name="CHOIX_CAT">
                    <option value="NONE"><?=NONE?></option>
                    <?php
                    foreach ($cat as $value)
                    { ?>
                        <option name="Categorie" value="<?php
                        echo $value->getNomCat();?>"
                            <?php if($value->getCatId() == $photo->getCatId())
                            echo'selected';?>>
                            <?=$value->getNomCat()?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </label>
        </div>
        <br>
        <div>
            <?=CHOIX_VISI?>
            <input type="checkbox" name="visibility" <?php if($photo->getVisibility() == 0) echo 'checked'; ?> > Privé
        </div>
        <br>
        <div >
            <input class="validerbutton" type="submit" value="<?=SUBMIT?>">
        </div>
    </form>
    <!-- Fin formulaire -->

    <!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');