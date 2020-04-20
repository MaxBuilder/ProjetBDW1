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

    public function getcatId()
    {
        return $this->_catId;
    }

    public function setcatId($catId)
    {
        $this->_catId = $catId;
    }

    public function getnomCat()
    {
        return $this->_nomCat;
    }

    public function setnomCat($nomCat)
    {
        $this->_nomCat = $nomCat;
    }
}
