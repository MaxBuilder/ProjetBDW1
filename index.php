<?php
/*
 * MODULE DE bdw1 -- overwrite @juba.agoun
 * Index du site
 *
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

// Initialisation des paramètres du site
require_once('./config/configuration.php');
require_once('./lib/foncBase.php');
require_once(PATH_TEXTES.LANG.'.php');

if(session_status() != PHP_SESSION_ACTIVE){session_start();}

if(isset($_GET['page'])) {
  $page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
  if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
    $page = '404'; //page demandée inexistante
}
else {
	$page='accueil';
    $_GET['page'] = 'accueil';
}

// Appel du controller
require_once(PATH_CONTROLLERS.$page.'.php');
