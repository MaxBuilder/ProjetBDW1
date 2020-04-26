<!-- Entête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_AJOUT_PHOTO?></h1><br>

    <!-- Début formulaire -->
    <form method="POST" enctype="multipart/form-data">
        <div>
            <label>
                <?=CHOIX_FICH?>
            </label>
            <input style="color:#1178bc;" name="CHOIX_FICH" type="file">
        </div>
        <br>
        <div>
            <label>
                <?=DESCRIPTION?>
            </label>
            <br>
            <textarea style="color:#181818;" type="text" name="DESCRIPTION" placeholder="Description" rows="4" cols="40"></textarea>
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
                    if(isset($_POST['categorie']))
                        echo $_POST['categorie'];
                    else echo $value->getnomCat();?>"
                        <?php
                        if(isset($_POST['choix_categorie']) && ($_POST['choix_categorie'] == $value->getNomCat()))
                            echo'selected';?>>
                        <?=$value->getNomCat()?>
                    </option>
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
    <!-- Fin formulaire -->

    <!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');

