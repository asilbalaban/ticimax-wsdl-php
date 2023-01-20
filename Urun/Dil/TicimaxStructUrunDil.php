<?php
/**
 * File for class TicimaxStructUrunDil
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunDil originally named UrunDil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunDil extends TicimaxWsdlClass
{
    /**
     * The Aciklama
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Aciklama;
    /**
     * The AramaAnahtarKelime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AramaAnahtarKelime;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The OnYazi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OnYazi;
    /**
     * The SatisBirimi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SatisBirimi;
    /**
     * The SeoAnahtarKelime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoAnahtarKelime;
    /**
     * The SeoNoFollow
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoNoFollow;
    /**
     * The SeoNoIndex
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoNoIndex;
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
     * The UrunAdi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UrunAdi;
    /**
     * Constructor method for UrunDil
     * @see parent::__construct()
     * @param string $_aciklama
     * @param string $_aramaAnahtarKelime
     * @param int $_iD
     * @param string $_onYazi
     * @param string $_satisBirimi
     * @param string $_seoAnahtarKelime
     * @param boolean $_seoNoFollow
     * @param boolean $_seoNoIndex
     * @param string $_seoSayfaAciklama
     * @param string $_seoSayfaBaslik
     * @param string $_urunAdi
     * @return TicimaxStructUrunDil
     */
    public function __construct($_aciklama = NULL,$_aramaAnahtarKelime = NULL,$_iD = NULL,$_onYazi = NULL,$_satisBirimi = NULL,$_seoAnahtarKelime = NULL,$_seoNoFollow = NULL,$_seoNoIndex = NULL,$_seoSayfaAciklama = NULL,$_seoSayfaBaslik = NULL,$_urunAdi = NULL)
    {
        parent::__construct(array('Aciklama'=>$_aciklama,'AramaAnahtarKelime'=>$_aramaAnahtarKelime,'ID'=>$_iD,'OnYazi'=>$_onYazi,'SatisBirimi'=>$_satisBirimi,'SeoAnahtarKelime'=>$_seoAnahtarKelime,'SeoNoFollow'=>$_seoNoFollow,'SeoNoIndex'=>$_seoNoIndex,'SeoSayfaAciklama'=>$_seoSayfaAciklama,'SeoSayfaBaslik'=>$_seoSayfaBaslik,'UrunAdi'=>$_urunAdi),false);
    }
    /**
     * Get Aciklama value
     * @return string|null
     */
    public function getAciklama()
    {
        return $this->Aciklama;
    }
    /**
     * Set Aciklama value
     * @param string $_aciklama the Aciklama
     * @return string
     */
    public function setAciklama($_aciklama)
    {
        return ($this->Aciklama = $_aciklama);
    }
    /**
     * Get AramaAnahtarKelime value
     * @return string|null
     */
    public function getAramaAnahtarKelime()
    {
        return $this->AramaAnahtarKelime;
    }
    /**
     * Set AramaAnahtarKelime value
     * @param string $_aramaAnahtarKelime the AramaAnahtarKelime
     * @return string
     */
    public function setAramaAnahtarKelime($_aramaAnahtarKelime)
    {
        return ($this->AramaAnahtarKelime = $_aramaAnahtarKelime);
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
     * Get OnYazi value
     * @return string|null
     */
    public function getOnYazi()
    {
        return $this->OnYazi;
    }
    /**
     * Set OnYazi value
     * @param string $_onYazi the OnYazi
     * @return string
     */
    public function setOnYazi($_onYazi)
    {
        return ($this->OnYazi = $_onYazi);
    }
    /**
     * Get SatisBirimi value
     * @return string|null
     */
    public function getSatisBirimi()
    {
        return $this->SatisBirimi;
    }
    /**
     * Set SatisBirimi value
     * @param string $_satisBirimi the SatisBirimi
     * @return string
     */
    public function setSatisBirimi($_satisBirimi)
    {
        return ($this->SatisBirimi = $_satisBirimi);
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
     * Get SeoNoFollow value
     * @return boolean|null
     */
    public function getSeoNoFollow()
    {
        return $this->SeoNoFollow;
    }
    /**
     * Set SeoNoFollow value
     * @param boolean $_seoNoFollow the SeoNoFollow
     * @return boolean
     */
    public function setSeoNoFollow($_seoNoFollow)
    {
        return ($this->SeoNoFollow = $_seoNoFollow);
    }
    /**
     * Get SeoNoIndex value
     * @return boolean|null
     */
    public function getSeoNoIndex()
    {
        return $this->SeoNoIndex;
    }
    /**
     * Set SeoNoIndex value
     * @param boolean $_seoNoIndex the SeoNoIndex
     * @return boolean
     */
    public function setSeoNoIndex($_seoNoIndex)
    {
        return ($this->SeoNoIndex = $_seoNoIndex);
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
     * Get UrunAdi value
     * @return string|null
     */
    public function getUrunAdi()
    {
        return $this->UrunAdi;
    }
    /**
     * Set UrunAdi value
     * @param string $_urunAdi the UrunAdi
     * @return string
     */
    public function setUrunAdi($_urunAdi)
    {
        return ($this->UrunAdi = $_urunAdi);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunDil
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
