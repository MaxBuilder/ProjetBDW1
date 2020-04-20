<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page -->
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?php  echo TITRE_PAGE_ACCUEIL;?></h1>

    <!--  Début formulaire -->

    <form action="" method="get">
        <label>Quelles photos souhaitez-vous afficher ?
            <select name="choix_categorie" value="choix_categorie">
                <option value="Toutes les photos">Toutes les photos</option>
                <?php
                foreach ($cat as $value)
                {?>
                    <option name="Categorie" value="<?php if(isset($_GET['categorie'])) echo $_GET['categorie']; else echo $value->getnomCat();?>"  <?php if(isset($_GET['choix_categorie']) && ($_GET['choix_categorie'] == $value->getnomCat())) echo'selected';?>><?=$value->getnomCat()?></option>
                    <?php
                }
                echo $_POST['choix_categorie'];?>

            </select>
            <input type="submit" value="<?=SUBMIT?>" onselect="submit()">
        </label>
    </form>
<?php
foreach ($catById as $value)
{?>
    <a href="index.php?page=image&id=<?=$value->getphotoId()?>"><img src="<?=PATH_IMAGES.$value->getnomFich()?>"></a>
    <?php
}?>

    <!--  Fin formulaire -->



<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
