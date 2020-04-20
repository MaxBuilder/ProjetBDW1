<?php

class Photo {
    private $_photoId;
    private $_nomFich;
    private $_description;
    private $_catId;

    public function __construct($photoId,$nomFich,$description,$catId)
    {
        $this->_photoId = $photoId;
        $this->_nomFich = $nomFich;
        $this->_description = $description;
        $this->_catId = $catId;
    }

    public function getphotoId(){
        return $this->_photoId;
    }
    public function setphotoId($photoId){
        $this->_photoId = $photoId;
    }

    public function getnomFich(){
        return $this->_nomFich;
    }
    public function setnomFich($nomFich){
        $this->_nomFich = $nomFich;
    }

    public function getdescription(){
        return $this->_description;
    }
    public function setdescription($description){
        $this->_description = $description;
    }

    public function getCatId(){
        return $this->_catId;
    }
    public function setCatId($catId){
        $this->_catId = $catId;
    }
}
?>
