<?php
/**
 * File for class TicimaxStructMarka
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructMarka originally named Marka
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructMarka extends TicimaxWsdlClass
{
    /**
     * The Aktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Aktif;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The SeoAnahtarKelime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoAnahtarKelime;
    /**
     * The SeoSayfaAciklama
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoSayfaAciklama;
    /**
     * The SeoSayfaBaslik
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoSayfaBaslik;
    /**
     * The Tanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Tanim;
    /**
     * Constructor method for Marka
     * @see parent::__construct()
     * @param boolean $_aktif
     * @param int $_iD
     * @param string $_seoAnahtarKelime
     * @param string $_seoSayfaAciklama
     * @param string $_seoSayfaBaslik
     * @param string $_tanim
     * @return TicimaxStructMarka
     */
    public function __construct($_aktif = NULL,$_iD = NULL,$_seoAnahtarKelime = NULL,$_seoSayfaAciklama = NULL,$_seoSayfaBaslik = NULL,$_tanim = NULL)
    {
        parent::__construct(array('Aktif'=>$_aktif,'ID'=>$_iD,'SeoAnahtarKelime'=>$_seoAnahtarKelime,'SeoSayfaAciklama'=>$_seoSayfaAciklama,'SeoSayfaBaslik'=>$_seoSayfaBaslik,'Tanim'=>$_tanim),false);
    }
    /**
     * Get Aktif value
     * @return boolean|null
     */
    public function getAktif()
    {
        return $this->Aktif;
    }
    /**
     * Set Aktif value
     * @param boolean $_aktif the Aktif
     * @return boolean
     */
    public function setAktif($_aktif)
    {
        return ($this->Aktif = $_aktif);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $_iD the ID
     * @return int
     */
    public function setID($_iD)
    {
        return ($this->ID = $_iD);
    }
    /**
     * Get SeoAnahtarKelime value
     * @return string|null
     */
    public function getSeoAnahtarKelime()
    {
        return $this->SeoAnahtarKelime;
    }
    /**
     * Set SeoAnahtarKelime value
     * @param string $_seoAnahtarKelime the SeoAnahtarKelime
     * @return string
     */
    public function setSeoAnahtarKelime($_seoAnahtarKelime)
    {
        return ($this->SeoAnahtarKelime = $_seoAnahtarKelime);
    }
    /**
     * Get SeoSayfaAciklama value
     * @return string|null
     */
    public function getSeoSayfaAciklama()
    {
        return $this->SeoSayfaAciklama;
    }
    /**
     * Set SeoSayfaAciklama value
     * @param string $_seoSayfaAciklama the SeoSayfaAciklama
     * @return string
     */
    public function setSeoSayfaAciklama($_seoSayfaAciklama)
    {
        return ($this->SeoSayfaAciklama = $_seoSayfaAciklama);
    }
    /**
     * Get SeoSayfaBaslik value
     * @return string|null
     */
    public function getSeoSayfaBaslik()
    {
        return $this->SeoSayfaBaslik;
    }
    /**
     * Set SeoSayfaBaslik value
     * @param string $_seoSayfaBaslik the SeoSayfaBaslik
     * @return string
     */
    public function setSeoSayfaBaslik($_seoSayfaBaslik)
    {
        return ($this->SeoSayfaBaslik = $_seoSayfaBaslik);
    }
    /**
     * Get Tanim value
     * @return string|null
     */
    public function getTanim()
    {
        return $this->Tanim;
    }
    /**
     * Set Tanim value
     * @param string $_tanim the Tanim
     * @return string
     */
    public function setTanim($_tanim)
    {
        return ($this->Tanim = $_tanim);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructMarka
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
