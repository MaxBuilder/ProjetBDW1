<?php
require_once(PATH_MODELS.'DAO.php');

class Utilisateur extends DAO {
    private $_utilID;
    private $_pseudo;
    private $_mdp;
    private $_permission;

    public function __construct($utilID, $pseudo, $mdp, $permission) {
        $this->_utilID = $utilID;
        $this->_pseudo = $pseudo;
        $this->_mdp = $mdp;
        $this->_permission = $permission;
    }

    public function getUtilID() {
        return $this->_utilID;
    }

    public function setUtilID($utilID) {
        $this->_utilID = $utilID;
    }

    public function getPseudo() {
        return $this->_pseudo;
    }

    public function set($pseudo) {
        $this->_pseudo = $pseudo;
    }

    public function getMdp() {
        return $this->_mdp;
    }

    public function setMdp($mdp) {
        $this->_mdp = $mdp;
    }

    public function getPermission() {
        return $this->_permission;
    }

    public function setPermission($permission) {
        $this->_permission = $permission;
    }

}
