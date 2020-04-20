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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">

        <li class="test" <?php echo ($page=='index' ? 'class="active"':'')?>>
            <a href="index.php">
                <?= MENU_ACCUEIL ?>
            </a>
        </li>

        <li class="test" <?php echo ($page== 'index' ? 'class="active"':'')?>>
            <a href="index.php?page=ajout_photo">
                <?=AJOUT_PHOTO?>
            </a>
        </li>


    </ul>
  </div>
</nav>
