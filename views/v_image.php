<!-- Entête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

    <!--  Début de la page -->
    <h1><?=TITRE_PAGE_DETAIL?></h1><br>
        <div class = "col-md-6 col-sm-6 col-xs-12"><img class="elementCenter" src="<?=PATH_IMAGES.$img->getnomFich()?>"></div>

        <div class = "col-md-6 col-sm-6 col-xs-12">
            <table class ="table table-bordered">
                <tr>
                    <th>Nom du fichier</th>
                    <th><?=$img->getNomFich()?></th>
                </tr>
                <tr>
                    <th>Description</th>
                    <th><?=$img->getDescription()?></th>
                </tr>
                <tr>
                    <th>Categorie</th>
                    <th><a href="index.php?choix_categorie=<?=$cat?>"><?=$cat?></a></th>
                </tr>
                <tr>
                    <th>Auteur</th>
                    <th><?=$author?></th>
                </tr>
                <tr>
                    <th>Visibilité</th>
                    <th><?=$visibilite?></th>
                </tr>
            </table>
        </div>
    </table>
    <!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');

