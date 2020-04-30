<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_MODELS.'connexion.php');
require_once(PATH_ENTITY.'utilisateur.php');

class UtilisateurDAO extends DAO {
    public function getAllUsers() {
        $res = $this->queryAll('SELECT * FROM Utilisateur');
        $user = array();
        if($res) {
            foreach ($res as $value) {
                array_push($user, new Utilisateur($value['utilID'], $value['pseudo'], $value['mdp'], $value['permission']));
            }
            return $user;
        }
        else {
             return null;
        }
    }

    public function checkAvailability($pseudo) {
        $res = $this->queryAll('SELECT * From Utilisateur Where pseudo LIKE ?', array($pseudo));
        if (empty($res)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function register($pseudo, $hashPwd) {
        $res = $this->queryBdd('INSERT INTO Utilisateur(pseudo, mdp, permission) VALUES(?, ?, ?)', array($pseudo, $hashPwd, 1));
        if($res)
            return TRUE;
        else return FALSE;
    }

    public function getUser($pseudo, $hashPwd) {
        $res = $this->queryRow('SELECT pseudo, mdp FROM Utilisateur WHERE pseudo = ? AND mdp = ?', array($pseudo, $hashPwd));
        if (empty($res))
            return FALSE;
        else return TRUE;
    }

    public function getID($pseudo) {
        $res = $this->queryRow('SELECT utilID FROM Utilisateur WHERE pseudo = ?', array($pseudo));
        if (empty($res)) {
            return -1;
        }
        return $res['utilID'];
    }

    public function getPseudo($id) {
        $res = $this->queryRow('SELECT pseudo FROM Utilisateur WHERE UtilID = ?', array($id));
        if($res)
            return $res['pseudo'];
        else return null;
    }

    public function getPerm($pseudo) {
        $res = $this->queryRow('SELECT permission FROM Utilisateur WHERE pseudo = ?', array($pseudo));
        if (empty($res)) {
            return 1;
        }
        return $res['permission'];
    }

    public function countUsers() {
        $res = $this->queryRow('SELECT COUNT(*) AS nb FROM Utilisateur');
        return $res['nb'];
    }

    public function updatePseudo($newPseudo, $userID) {
        $res = $this->queryBdd('UPDATE Utilisateur SET pseudo = ? WHERE utilID = ?', array($newPseudo, $userID));
        return $res;
    }

    public function updateMdp($newMdp, $userID) {
        $res = $this->queryBdd('UPDATE Utilisateur SET mdp = ? WHERE utilID = ?', array($newMdp, $userID));
        return $res;
    }
}
