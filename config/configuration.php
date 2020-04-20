<?php
/* Module de PHP
 * Paramètres de configuration du site
 *
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

const DEBUG = true; // production : false; dev : true

// Accès base de données
const BD_HOST = "localhost";
const BD_DBNAME = "bdd";
const BD_USER = "root";
const BD_PWD = "root";

// Langue du site
const LANG ='FR-fr';

// Paramètres du site : nom des auteurs
const AUTEUR = 'Thibaut PEYRIC - Raphaël RICHARD';

// Sous dossiers
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/m_');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');
define('PATH_ENTITY','./entities/e_');

// Assets
define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMAGES', PATH_ASSETS.'images/');
define('PATH_SCRIPTS', PATH_ASSETS.'scripts/');

// Fichiers
define('PATH_LOGO', PATH_IMAGES.'logo.png');
define('PATH_MENU', PATH_VIEWS.'menu.php');
