<?php
/**
 * File for class TicimaxStructUrunDilAyar
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunDilAyar originally named UrunDilAyar
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunDilAyar extends TicimaxWsdlClass
{
    /**
     * The AciklamaGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $AciklamaGuncelle;
    /**
     * The AramaAnahtarKelimeGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $AramaAnahtarKelimeGuncelle;
    /**
     * The OnYaziGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $OnYaziGuncelle;
    /**
     * The SatisBirimiGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SatisBirimiGuncelle;
    /**
     * The SeoAnahtarKelimeGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoAnahtarKelimeGuncelle;
    /**
     * The SeoNoFollowGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoNoFollowGuncelle;
    /**
     * The SeoNoIndexGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoNoIndexGuncelle;
    /**
     * The SeoSayfaAciklamaGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoSayfaAciklamaGuncelle;
    /**
     * The SeoSayfaBaslikGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoSayfaBaslikGuncelle;
    /**
     * The UrunAdiGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $UrunAdiGuncelle;
    /**
     * Constructor method for UrunDilAyar
     * @see parent::__construct()
     * @param boolean $_aciklamaGuncelle
     * @param boolean $_aramaAnahtarKelimeGuncelle
     * @param boolean $_onYaziGuncelle
     * @param boolean $_satisBirimiGuncelle
     * @param boolean $_seoAnahtarKelimeGuncelle
     * @param boolean $_seoNoFollowGuncelle
     * @param boolean $_seoNoIndexGuncelle
     * @param boolean $_seoSayfaAciklamaGuncelle
     * @param boolean $_seoSayfaBaslikGuncelle
     * @param boolean $_urunAdiGuncelle
     * @return TicimaxStructUrunDilAyar
     */
    public function __construct($_aciklamaGuncelle = NULL,$_aramaAnahtarKelimeGuncelle = NULL,$_onYaziGuncelle = NULL,$_satisBirimiGuncelle = NULL,$_seoAnahtarKelimeGuncelle = NULL,$_seoNoFollowGuncelle = NULL,$_seoNoIndexGuncelle = NULL,$_seoSayfaAciklamaGuncelle = NULL,$_seoSayfaBaslikGuncelle = NULL,$_urunAdiGuncelle = NULL)
    {
        parent::__construct(array('AciklamaGuncelle'=>$_aciklamaGuncelle,'AramaAnahtarKelimeGuncelle'=>$_aramaAnahtarKelimeGuncelle,'OnYaziGuncelle'=>$_onYaziGuncelle,'SatisBirimiGuncelle'=>$_satisBirimiGuncelle,'SeoAnahtarKelimeGuncelle'=>$_seoAnahtarKelimeGuncelle,'SeoNoFollowGuncelle'=>$_seoNoFollowGuncelle,'SeoNoIndexGuncelle'=>$_seoNoIndexGuncelle,'SeoSayfaAciklamaGuncelle'=>$_seoSayfaAciklamaGuncelle,'SeoSayfaBaslikGuncelle'=>$_seoSayfaBaslikGuncelle,'UrunAdiGuncelle'=>$_urunAdiGuncelle),false);
    }
    /**
     * Get AciklamaGuncelle value
     * @return boolean|null
     */
    public function getAciklamaGuncelle()
    {
        return $this->AciklamaGuncelle;
    }
    /**
     * Set AciklamaGuncelle value
     * @param boolean $_aciklamaGuncelle the AciklamaGuncelle
     * @return boolean
     */
    public function setAciklamaGuncelle($_aciklamaGuncelle)
    {
        return ($this->AciklamaGuncelle = $_aciklamaGuncelle);
    }
    /**
     * Get AramaAnahtarKelimeGuncelle value
     * @return boolean|null
     */
    public function getAramaAnahtarKelimeGuncelle()
    {
        return $this->AramaAnahtarKelimeGuncelle;
    }
    /**
     * Set AramaAnahtarKelimeGuncelle value
     * @param boolean $_aramaAnahtarKelimeGuncelle the AramaAnahtarKelimeGuncelle
     * @return boolean
     */
    public function setAramaAnahtarKelimeGuncelle($_aramaAnahtarKelimeGuncelle)
    {
        return ($this->AramaAnahtarKelimeGuncelle = $_aramaAnahtarKelimeGuncelle);
    }
    /**
     * Get OnYaziGuncelle value
     * @return boolean|null
     */
    public function getOnYaziGuncelle()
    {
        return $this->OnYaziGuncelle;
    }
    /**
     * Set OnYaziGuncelle value
     * @param boolean $_onYaziGuncelle the OnYaziGuncelle
     * @return boolean
     */
    public function setOnYaziGuncelle($_onYaziGuncelle)
    {
        return ($this->OnYaziGuncelle = $_onYaziGuncelle);
    }
    /**
     * Get SatisBirimiGuncelle value
     * @return boolean|null
     */
    public function getSatisBirimiGuncelle()
    {
        return $this->SatisBirimiGuncelle;
    }
    /**
     * Set SatisBirimiGuncelle value
     * @param boolean $_satisBirimiGuncelle the SatisBirimiGuncelle
     * @return boolean
     */
    public function setSatisBirimiGuncelle($_satisBirimiGuncelle)
    {
        return ($this->SatisBirimiGuncelle = $_satisBirimiGuncelle);
    }
    /**
     * Get SeoAnahtarKelimeGuncelle value
     * @return boolean|null
     */
    public function getSeoAnahtarKelimeGuncelle()
    {
        return $this->SeoAnahtarKelimeGuncelle;
    }
    /**
     * Set SeoAnahtarKelimeGuncelle value
     * @param boolean $_seoAnahtarKelimeGuncelle the SeoAnahtarKelimeGuncelle
     * @return boolean
     */
    public function setSeoAnahtarKelimeGuncelle($_seoAnahtarKelimeGuncelle)
    {
        return ($this->SeoAnahtarKelimeGuncelle = $_seoAnahtarKelimeGuncelle);
    }
    /**
     * Get SeoNoFollowGuncelle value
     * @return boolean|null
     */
    public function getSeoNoFollowGuncelle()
    {
        return $this->SeoNoFollowGuncelle;
    }
    /**
     * Set SeoNoFollowGuncelle value
     * @param boolean $_seoNoFollowGuncelle the SeoNoFollowGuncelle
     * @return boolean
     */
    public function setSeoNoFollowGuncelle($_seoNoFollowGuncelle)
    {
        return ($this->SeoNoFollowGuncelle = $_seoNoFollowGuncelle);
    }
    /**
     * Get SeoNoIndexGuncelle value
     * @return boolean|null
     */
    public function getSeoNoIndexGuncelle()
    {
        return $this->SeoNoIndexGuncelle;
    }
    /**
     * Set SeoNoIndexGuncelle value
     * @param boolean $_seoNoIndexGuncelle the SeoNoIndexGuncelle
     * @return boolean
     */
    public function setSeoNoIndexGuncelle($_seoNoIndexGuncelle)
    {
        return ($this->SeoNoIndexGuncelle = $_seoNoIndexGuncelle);
    }
    /**
     * Get SeoSayfaAciklamaGuncelle value
     * @return boolean|null
     */
    public function getSeoSayfaAciklamaGuncelle()
    {
        return $this->SeoSayfaAciklamaGuncelle;
    }
    /**
     * Set SeoSayfaAciklamaGuncelle value
     * @param boolean $_seoSayfaAciklamaGuncelle the SeoSayfaAciklamaGuncelle
     * @return boolean
     */
    public function setSeoSayfaAciklamaGuncelle($_seoSayfaAciklamaGuncelle)
    {
        return ($this->SeoSayfaAciklamaGuncelle = $_seoSayfaAciklamaGuncelle);
    }
    /**
     * Get SeoSayfaBaslikGuncelle value
     * @return boolean|null
     */
    public function getSeoSayfaBaslikGuncelle()
    {
        return $this->SeoSayfaBaslikGuncelle;
    }
    /**
     * Set SeoSayfaBaslikGuncelle value
     * @param boolean $_seoSayfaBaslikGuncelle the SeoSayfaBaslikGuncelle
     * @return boolean
     */
    public function setSeoSayfaBaslikGuncelle($_seoSayfaBaslikGuncelle)
    {
        return ($this->SeoSayfaBaslikGuncelle = $_seoSayfaBaslikGuncelle);
    }
    /**
     * Get UrunAdiGuncelle value
     * @return boolean|null
     */
    public function getUrunAdiGuncelle()
    {
        return $this->UrunAdiGuncelle;
    }
    /**
     * Set UrunAdiGuncelle value
     * @param boolean $_urunAdiGuncelle the UrunAdiGuncelle
     * @return boolean
     */
    public function setUrunAdiGuncelle($_urunAdiGuncelle)
    {
        return ($this->UrunAdiGuncelle = $_urunAdiGuncelle);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunDilAyar
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
