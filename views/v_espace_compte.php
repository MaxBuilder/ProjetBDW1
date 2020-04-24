<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->


    <h1><?=TITRE_PHOTO_PERSO?></h1><br>
    <br>
    <?php
    foreach ($photoPerso as $value)
    {?>
    <a href="index.php?page=image&id=<?=$value->getPhotoId()?>&user=<?=$value->getUserId()?>"><img src="<?=PATH_IMAGES.$value->getNomFich()?>"></a>
    <?php
    }?>

    <?php
    if($_SESSION['perm'] == 0) {
        ?>
    <br><br>
    <h1><?=TITRE_ADMIN?></h1><br>
        <div>
            <h3><?=TITRE_INFO_USER?></h3>
            <p><?=TXT_INFO_USER?><?php echo $nbUser?> </p>
            <br>
            <h3><?=TITRE_INFO_CAT?></h3>
            <?php
            foreach ($cat as $value) {
                ?>
                <p> <?php echo $value->getNomCat(); ?> : <?php echo $photoDAO->countCat($value->getCatId()); ?> photo(s) </p>
            <?php
            }?>
        </div>
    <?php
    }
    ?>
    <!--  Fin de la page -->

    <!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
