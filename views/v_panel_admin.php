<!-- Entête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_ADMIN?></h1><br>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class = "col-md-4">
                <h3><?=TITRE_INFO_CAT?></h3>
                <?php
                foreach ($cat as $value) {
                    ?>
                    <p> <?php echo $value->getNomCat(); ?> : <?php echo $photoDAO->countCat($value->getCatId()); ?> photo(s) </p>
                    <?php
                }?>
            </div>

            <div class = "col-md-4">
                <h3><?=TITRE_INFO_USER?></h3>
                <?php
                foreach ($users as $value) {
                ?>
                    <p><?php echo $value->getPseudo(); ?> : <?php echo $photoDAO->countUser($value->getUtilID()); ?> photo(s)</p>
                <?php
                }?>
            </div>

            <div class="col-md-4">
                <h3><?=TITRE_INFO_GENERALES?></h3>
                <p><?=TITRE_INFO_IMAGE?><?=$nbPublic?><?=FPUBLIC?><?=$nbPrivate?><?=FPRIVATE?></p><br>
                <p><?=TXT_INFO_CAT?><?= $nbCat?></p><br>
                <p><?=TXT_INFO_USER?><?= $nbUser?></p><br>
            </div>
        </div>
    </div>
    <!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
