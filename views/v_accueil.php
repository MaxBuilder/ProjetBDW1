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
          <!--  ici vous aller creer un formulaire avec un post qui rederige vers "./index.html?page=hello" -->
    <!--  Fin formulaire -->



<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
