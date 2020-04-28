<?php

class Photo {
    private $_photoId;
    private $_nomFich;
    private $_description;
    private $_catId;
    private $_userId;
    private $_visibility;

    public function __construct($photoId,$nomFich,$description,$catId, $userId, $visibility) {
        $this->_photoId = $photoId;
        $this->_nomFich = $nomFich;
        $this->_description = $description;
        $this->_catId = $catId;
        $this->_userId = $userId;
        $this->_visibility = $visibility;
    }

    public function getPhotoId() {
        return $this->_photoId;
    }

    public function setPhotoId($photoId) {
        $this->_photoId = $photoId;
    }

    public function getNomFich() {
        return $this->_nomFich;
    }

    public function setNomFich($nomFich) {
        $this->_nomFich = $nomFich;
    }

    public function getDescription() {
        return $this->_description;
    }

    public function setDescription($description) {
        $this->_description = $description;
    }

    public function getCatId() {
        return $this->_catId;
    }

    public function setCatId($catId) {
        $this->_catId = $catId;
    }

    public function getUserId() {
        return $this->_userId;
    }

    public function  setUserId($userId) {
        $this->_userId = $userId;
    }

    public function getVisibility() {
        return $this->_visibility;
    }

    public function setVisibility($visibility) {
        $this->_visibility = $visibility;
    }
}
