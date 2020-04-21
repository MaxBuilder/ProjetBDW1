<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_MODELS.'connexion.php');

class ConnexionDAO extends DAO {

    public function checkAvailability($pseudo)
    {
        $res = $this->queryAll("SELECT * From utilisateur Where pseudo LIKE '" . $pseudo . "' ");
        if (empty($res)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*Cette fonction prend en entrée un pseudo et un mot de passe, associe une couleur aléatoire dans le tableau de taille fixe
    array('red', 'green', 'blue', 'black', 'yellow', 'orange') et enregistre le nouvel utilisateur dans la relation utilisateur via la connexion*/
    public function register($pseudo, $hashPwd)
    {
        $query = "INSERT INTO `utilisateur` (`pseudo`,`mdp`,`permission`) VALUES('$pseudo', '$hashPwd','1');";
        $this->queryBdd($query);
    }

    /*Cette fonction prend en entrée un pseudo et mot de passe et renvoie vrai si l'utilisateur existe (au moins un tuple dans le résultat), faux sinon*/
    public function getUser($pseudo, $hashPwd)
    {
        $query = "SELECT pseudo,mdp FROM utilisateur WHERE pseudo ='$pseudo' AND mdp ='$hashPwd'; ";
        $res = $this->queryAll($query);
        if (empty($res)){
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function getID($pseudo)
    {
        $query = "SELECT utilID FROM utilisateur WHERE pseudo ='$pseudo'; ";
        $res = $this->queryAll($query);
        return $res[0];
    }

}

?>
