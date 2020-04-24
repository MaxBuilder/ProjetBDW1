<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_MODELS.'connexion.php');
require_once(PATH_ENTITY.'categorie.php');
require_once(PATH_ENTITY.'photo.php');

class CategorieDAO extends DAO
{
    public function getAll() {
        $res=$this->queryAll('SELECT * FROM Categorie');
        $cat = array();
        if($res) {
            foreach($res as $value) {
                array_push($cat,new Categorie($value['catId'], $value['nomCat']));
            }
            return $cat;
        }
        else return null;
    }

    public function getById($nomCat)
    {
        if($nomCat == 'Toutes les photos'){
            $res=$this->queryAll('SELECT * FROM Photo');
        }else{
            $res=$this->queryAll('SELECT * FROM Photo WHERE catId in (select catId FROM Categorie WHERE nomCat = ?)', array($nomCat));
        }
        $catArr = array();
        if($res)
        {
            foreach($res as $value)
            {
                array_push($catArr,new Photo($value['photoId'], $value['nomFich'], $value['description'], $value['catId']));
            }
            return $catArr;
        }
        else return null;
    }

    public function getNomCat($catId)
    {
        $res = $this->queryRow('SELECT nomCat FROM Categorie WHERE catId = ?', array($catId));
        if($res)
            return $res['nomCat'];
        else return null;
    }

    public function insertCat($nomCat) {
        $res = $this->queryBdd('INSERT INTO Categorie(nomCat) VALUES(?)',array($nomCat));
        return $res;
    }

    public function getCatId($nomCat) {
        $res = $this->queryRow('SELECT catId FROM Categorie WHERE nomCat = ?', array($nomCat));
        if($res)
            return $res['catId'];
        else return null;
    }

    public function checkCat($NomCat) {
        $res=$this->queryRow('SELECT * FROM Categorie WHERE NomCat = ?', array($NomCat));
        if($res)
            return true;
        else return false;
    }
}
