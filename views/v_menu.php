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
        if(isset($_SESSION['logged'])) {
            echo "<li";
            echo($page == 'index' ? 'class="active"' : '');
            echo ">";
            echo "<a href='index.php?page=ajout_photo' style='font-size: 120%'>";
            echo AJOUT_PHOTO;
            echo "</a></li>";
        }?>
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
              <a href="index.php?page=compte" style="font-size: 120%">
                  <?=MENU_COMPTE?>
              </a>
          </li>
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
