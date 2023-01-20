<?php
/**
 * File for class TicimaxStructUrunKategori
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunKategori originally named UrunKategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunKategori extends TicimaxWsdlClass
{
    /**
     * The KategoriID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $KategoriID;
    /**
     * The Sira
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Sira;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * Constructor method for UrunKategori
     * @see parent::__construct()
     * @param int $_kategoriID
     * @param int $_sira
     * @param int $_urunKartiID
     * @return TicimaxStructUrunKategori
     */
    public function __construct($_kategoriID = NULL,$_sira = NULL,$_urunKartiID = NULL)
    {
        parent::__construct(array('KategoriID'=>$_kategoriID,'Sira'=>$_sira,'UrunKartiID'=>$_urunKartiID),false);
    }
    /**
     * Get KategoriID value
     * @return int|null
     */
    public function getKategoriID()
    {
        return $this->KategoriID;
    }
    /**
     * Set KategoriID value
     * @param int $_kategoriID the KategoriID
     * @return int
     */
    public function setKategoriID($_kategoriID)
    {
        return ($this->KategoriID = $_kategoriID);
    }
    /**
     * Get Sira value
     * @return int|null
     */
    public function getSira()
    {
        return $this->Sira;
    }
    /**
     * Set Sira value
     * @param int $_sira the Sira
     * @return int
     */
    public function setSira($_sira)
    {
        return ($this->Sira = $_sira);
    }
    /**
     * Get UrunKartiID value
     * @return int|null
     */
    public function getUrunKartiID()
    {
        return $this->UrunKartiID;
    }
    /**
     * Set UrunKartiID value
     * @param int $_urunKartiID the UrunKartiID
     * @return int
     */
    public function setUrunKartiID($_urunKartiID)
    {
        return ($this->UrunKartiID = $_urunKartiID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunKategori
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
