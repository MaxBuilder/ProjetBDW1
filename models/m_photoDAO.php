<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_MODELS.'connexion.php');
require_once(PATH_ENTITY.'categorie.php');
require_once(PATH_ENTITY.'photo.php');

class PhotoDAO extends DAO {
    public function getById($nomCat) {
        if($nomCat == 'Toutes les photos')
            $res=$this->queryAll('SELECT * FROM Photo');
        else
            $res=$this->queryAll('SELECT * FROM Photo WHERE catId in (SELECT catId FROM Categorie WHERE nomCat = ?)', array($nomCat));
        $catArr = array();
        if($res) {
            foreach($res as $value) {
                array_push($catArr,new Photo($value['photoId'], $value['nomFich'], $value['description'], $value['catId'], $value['utilID']));
            }
            return $catArr;
        }
        else return null;
    }

    public function getByUser($userId) {
        $res=$this->queryAll('SELECT * FROM Photo WHERE UtilID = ?', array($userId));
        $photos = array();
        if($res) {
            foreach($res as $value) {
                array_push($photos,new Photo($value['photoId'], $value['nomFich'], $value['description'], $value['catId'], $value['utilID']));
            }
            return $photos;
        }
        else return null;
    }

    public function getImage($photoId) {
        $res = $this->queryRow('SELECT * FROM Photo WHERE photoId = ?', array($photoId));
        if($res) {
            $photo = new Photo($res['photoId'], $res['nomFich'], $res['description'], $res['catId'], $res['utilID']);
            return $photo;
        }
        else return null;
    }

    public function insertPhoto($photoCatId,$photoDesc,$utilID) {
        $res = $this->queryBdd('INSERT INTO Photo(description,catId,utilID) values (?,?,?)', array($photoDesc,$photoCatId,$utilID));
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

    public function getPhotoByNomFich($nomFich) {
        $res = $this->queryRow('SELECT * FROM Photo WHERE nomFich = ?', array($nomFich));
        if($res) {
            $photo = new Photo($res['photoId'], $res['nomFich'], $res['description'], $res['catId'], $res['utilID']);
            return $photo;
        }
        else return $res;
    }

    public function deletePhoto($id) {
        $res = $this->queryBdd('DELETE FROM Photo WHERE photoId = ?', array($id));
        return $res;
    }

    public function updatePhoto($id, $newDescri, $newCat) {
        $res = $this->queryBdd('UPDATE Photo SET description = ?, catId = ? WHERE photoId = ?', array($newDescri, $newCat, $id));
        return $res;
    }

    public function countCat($catId) {
        $res = $this->queryRow('SELECT COUNT(*) AS nb FROM Photo WHERE catId = ?', array($catId));
        return $res['nb'];
    }
}
