<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_MODELS.'connexion.php');
require_once(PATH_ENTITY.'categorie.php');
require_once(PATH_ENTITY.'photo.php');

class PhotoDAO extends DAO {

    public function getAll()
    {
        $res=$this->queryAll('SELECT * FROM Photo');
        $photo = array();
        if($res)
        {
            foreach($res as $value)
            {
                array_push($photo,new Photo($value['photoId'], $value['nomFich'], $value['description'], $value['catId']));
            }
            return $photo;
        }
        else return null;
    }

    public function getImage($photoId)
    {
        $res = $this->queryAll('SELECT * FROM Photo WHERE photoId = ?', array($photoId));
        $photo = array();
        if($res)
        {
            foreach($res as $value)
            {
                array_push($photo,new Photo($value['photoId'], $value['nomFich'], $value['description'], $value['catId']));
            }
            return $photo;
        }
        else return null;
    }

    public function insertPhoto($photoCatId,$photoDesc)
    {
        $res = $this->queryBdd('INSERT INTO Photo(description,catId) values (?,?)',array($photoDesc,$photoCatId));
        if($res) {
            $nomFich = 'DSC'. $this->insertId() . strtolower(strrchr($_FILES['CHOIX_FICH']['name'], '.'));
            move_uploaded_file($_FILES['CHOIX_FICH']['tmp_name'], PATH_IMAGES.$nomFich);
            $res = $this->queryBdd('UPDATE Photo SET nomFich = ? WHERE description = ? AND catId = ?', array($nomFich, $photoDesc, $photoCatId));

            if($res) {
                $res = $this->getPhotoByNomFich($nomFich);
            }
        }
        return $res;
    }

    public function getPhotoByNomFich($nomFich)
    {
        $res = $this->queryRow('SELECT * FROM Photo WHERE nomFich = ?',array($nomFich));
        if($res)
        {
            $photo = new Photo($res['photoId'], $res['nomFich'], $res['description'], $res['catId']);
            return $photo;
        }
        else return $res;
    }
}
