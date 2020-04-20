<?php

class Categorie
{
    private $_catId;
    private $_nomCat;

    public function __construct($catId,$nomCat)
    {
        $this->_catId = $catId;
        $this->_nomCat = $nomCat;
    }

    public function getCatId()
    {
        return $this->_catId;
    }

    public function setCatId($catId)
    {
        $this->_catId = $catId;
    }

    public function getNomCat()
    {
        return $this->_nomCat;
    }

    public function setNomCat($nomCat)
    {
        $this->_nomCat = $nomCat;
    }
}
