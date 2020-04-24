<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_MODIF_PHOTO?></h1>
    <br>
    <form method="POST" enctype="multipart/form-data">
        <div>
                <?=DESCRIPTION?>
            </label>
            <br>
            <textarea style="color:#181818;" type="text" name="DESCRIPTION" placeholder="Description" rows="4" cols="40"><?=$desc?></textarea>
        </div>
        <br>
        <div>
            <label>
                <?=CHOIX_CAT?>
            </label>
            <select style="color:#181818" name="CHOIX_CAT">
                <option value="NONE"><?=NONE?></option>
                <?php
                foreach ($cat as $value)
                { ?>
                    <option name="Categorie" value="<?php
                    echo $value->getNomCat();?>"
                        <?php if($value->getCatId() == $selec)
                        echo'selected';?>>
                        <?=$value->getNomCat()?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <br>
        <div >
            <input class="validerbutton" type="submit" value="<?=SUBMIT?>">
        </div>
    </form>
    <!--  Fin de la page -->

    <!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');