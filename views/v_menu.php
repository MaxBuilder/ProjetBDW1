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
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 120%">
                    <?php echo $_SESSION['pseudo'];?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href ='index.php?page=accueil' >mon compte</a>
                    <a class="dropdown-item" href ='index.php?page=accueil' >mes photos</a>
                    <?php if($_SESSION['perm']==0){
                        echo "<a class='dropdown-item' href ='index.php?page=accueil' >Panel Admin</a>";
                    }?>
                  </div>
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
