<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_MODELS.'connexion.php');

class UtilisateurDAO extends DAO {
    public function checkAvailability($pseudo) {
        $res = $this->queryAll("SELECT * From utilisateur Where pseudo LIKE '" . $pseudo . "' ");
        if (empty($res)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function register($pseudo, $hashPwd) {
        $query = "INSERT INTO `Utilisateur` (`pseudo`,`mdp`,`permission`) VALUES('$pseudo', '$hashPwd','1');";
        $this->queryBdd($query);
    }

    public function getUser($pseudo, $hashPwd) {
        $query = "SELECT pseudo,mdp FROM Utilisateur WHERE pseudo ='$pseudo' AND mdp ='$hashPwd'; ";
        $res = $this->queryRow($query);
        if (empty($res)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function getID($pseudo) {
        $query = "SELECT utilID FROM Utilisateur WHERE pseudo ='$pseudo'; ";
        $res = $this->queryRow($query);
        if (empty($res)) {
            return 666;
        }
        return $res[0]['utilID'];
    }

    public function getPerm($pseudo) {
        $query = "SELECT permission FROM Utilisateur WHERE pseudo ='$pseudo'; ";
        $res = $this->queryRow($query);
        if (empty($res)) {
            return 1;
        }
        return $res[0]['permission'];
    }

    public function countUsers() {
        $res = $this->queryRow('SELECT COUNT(*) AS nb FROM Utilisateur');
        return $res['nb'];
    }
}
