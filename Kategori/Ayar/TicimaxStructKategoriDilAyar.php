<?php
/**
 * File for class TicimaxStructKategoriDilAyar
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructKategoriDilAyar originally named KategoriDilAyar
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructKategoriDilAyar extends TicimaxWsdlClass
{
    /**
     * The IcerikGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $IcerikGuncelle;
    /**
     * The SeoAnahtarKelimeGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoAnahtarKelimeGuncelle;
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
     * The TanimGuncelle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $TanimGuncelle;
    /**
     * Constructor method for KategoriDilAyar
     * @see parent::__construct()
     * @param boolean $_icerikGuncelle
     * @param boolean $_seoAnahtarKelimeGuncelle
     * @param boolean $_seoSayfaAciklamaGuncelle
     * @param boolean $_seoSayfaBaslikGuncelle
     * @param boolean $_tanimGuncelle
     * @return TicimaxStructKategoriDilAyar
     */
    public function __construct($_icerikGuncelle = NULL,$_seoAnahtarKelimeGuncelle = NULL,$_seoSayfaAciklamaGuncelle = NULL,$_seoSayfaBaslikGuncelle = NULL,$_tanimGuncelle = NULL)
    {
        parent::__construct(array('IcerikGuncelle'=>$_icerikGuncelle,'SeoAnahtarKelimeGuncelle'=>$_seoAnahtarKelimeGuncelle,'SeoSayfaAciklamaGuncelle'=>$_seoSayfaAciklamaGuncelle,'SeoSayfaBaslikGuncelle'=>$_seoSayfaBaslikGuncelle,'TanimGuncelle'=>$_tanimGuncelle),false);
    }
    /**
     * Get IcerikGuncelle value
     * @return boolean|null
     */
    public function getIcerikGuncelle()
    {
        return $this->IcerikGuncelle;
    }
    /**
     * Set IcerikGuncelle value
     * @param boolean $_icerikGuncelle the IcerikGuncelle
     * @return boolean
     */
    public function setIcerikGuncelle($_icerikGuncelle)
    {
        return ($this->IcerikGuncelle = $_icerikGuncelle);
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
     * Get TanimGuncelle value
     * @return boolean|null
     */
    public function getTanimGuncelle()
    {
        return $this->TanimGuncelle;
    }
    /**
     * Set TanimGuncelle value
     * @param boolean $_tanimGuncelle the TanimGuncelle
     * @return boolean
     */
    public function setTanimGuncelle($_tanimGuncelle)
    {
        return ($this->TanimGuncelle = $_tanimGuncelle);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructKategoriDilAyar
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
