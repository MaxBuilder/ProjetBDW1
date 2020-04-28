<!-- Entête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_PHOTO_PERSO?></h1>
    <br>
    <?php
    foreach ($photoPerso as $value)
    {?>
    <a href="index.php?page=image&id=<?=$value->getPhotoId()?>&user=<?=$value->getUserId()?>"><img src="<?=PATH_IMAGES.$value->getNomFich()?>"></a>
    <?php
    }?>
    <br><br>
    <h1><?=TITRE_INFO_PERSO?></h1><br>
    <!-- Début formulaire -->
    <h4><?=TITRE_CHANGEMENT_MDP?></h4>
    <form method="post">
        <div>
            <label>
                <?=CHOIX_OLD_MDP?>
            </label>
            <br>
            <input style="color:#181818;" name="CHOIX_MDP_OLD" type="password" placeholder="Ancien mot de passe">
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
            <input class="validerbutton" style="width: 95px" type="submit" value="<?=CHANGE?>">
        </div>
    </form><br>
    <!-- Fin formulaire -->
    <h4><?=TITRE_CHANGEMENT_PSEUDO?></h4>
    <!-- Début formulaire -->
    <form method="post">
            <div>
                <label>
                    <?=CHOIX_PSEUDO_INSCRI?>
                </label>
                <br>
            <input style="color:#181818;" name="CHOIX_CHANG_PSEUDO" type="text" placeholder="Nouveau pseudo">
            </div>
            <br>
            <div >
                <input class="validerbutton" style="width: 95px" type="submit" value="<?=CHANGE?>">
            </div>
    </form><br>
    <!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
