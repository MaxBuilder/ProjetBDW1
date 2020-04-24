<?php
/*
 * TP PHP
 * Vue menu
 *
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 * menu: http://www.w3schools.com/bootstrap/bootstrap_ref_comp_navs.asp
 */
?>
<!-- Menu du site -->

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">

      <!-- Catégorie ajoutée à gauche -->
    <ul class="nav navbar-nav navbar-left">
        <li <?php echo ($page=='index' ? 'class="active"':'')?>>
            <a href="index.php" style="font-size: 120%">
                <?= MENU_ACCUEIL ?>
            </a>
        </li>

        <?php
        if(isset($_SESSION['logged']) && $_GET['page'] != 'ajout_photo' && $_GET['page'] != 'image') { ?>
            <li <?php echo($page == 'index' ? 'class="active"' : '') ?>>
                <a href="index.php?page=ajout_photo" style="font-size: 120%">
                    <?= AJOUT_PHOTO ?>
                </a>
            </li>
            <?php
        } ?>

        <?php
        if(isset($_SESSION['logged']) && $_SESSION['perm'] == 0 && $_SESSION['logged'] == TRUE && $_GET['page'] != 'ajout_cat' && $_GET['page'] != 'image') { ?>
            <li <?php echo($page == 'index' ? 'class="active"' : '') ?>>
                <a href="index.php?page=ajout_cat" style="font-size: 120%">
                    <?= AJOUT_CAT ?>
                </a>
            </li>
            <?php
        } ?>

        <?php
        if($_GET['page'] == 'image' && (($_GET['user'] == $_SESSION['utilID']) || $_SESSION['perm'] == 0)) { ?>
            <li <?php echo($page == 'index' ? 'class="active"' : '') ?>>
                <a href="index.php?page=modifier&id=<?=$_GET['id']?>" style="font-size: 120%">
                    <?= MODIFIER ?>
                </a>
            </li>

            <li <?php echo($page == 'index' ? 'class="active"' : '') ?>>
                <a href="index.php?page=supprimer&id=<?=$_GET['id']?>" style="font-size: 120%">
                    <?= SUPPRIMER ?>
                </a>
            </li>
            <?php
        } ?>

    </ul>

      <!-- Catégorie ajoutée à droite -->
      <ul class ="nav navbar-nav navbar-right">
          <?php
          if(!isset($_SESSION['logged']))
          { ?>
          <li <?php echo ($page== 'index' ? ' class="active"':'')?>>
              <a href="index.php?page=inscription" style="font-size: 120%">
                  <?=MENU_INSCRIPTION?>
              </a>
          </li>
          <?php
          }
          else {?>
          <li <?php echo ($page== 'index' ? ' class="active"':'')?>>
              <a href="index.php?page=espace_compte" style="font-size: 120%">
                  <?=$_SESSION['pseudo'];?>
              </a>
              <?php
          }?>

          <li <?php echo ($page== 'index' ? ' class="active"':'')?>>
              <a href="index.php?page=connexion" style="font-size: 120%">
                  <?php if(isset($_SESSION['logged'])) echo MENU_DECONNECT; else echo MENU_IDENTIFICATION?>
              </a>
          </li>
      </ul>

  </div>
</nav>
