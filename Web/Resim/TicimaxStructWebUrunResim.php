<?php
/**
 * File for class TicimaxStructWebUrunResim
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructWebUrunResim originally named WebUrunResim
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructWebUrunResim extends TicimaxWsdlClass
{
    /**
     * The ResimAdi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ResimAdi;
    /**
     * The ResimBuyuk
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var base64Binary
     */
    public $ResimBuyuk;
    /**
     * The ResimFormat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ResimFormat;
    /**
     * The ResimSira
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ResimSira;
    /**
     * The ResimUrunDetay
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var base64Binary
     */
    public $ResimUrunDetay;
    /**
     * The ResimUrunListe
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var base64Binary
     */
    public $ResimUrunListe;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * The VaryasyonID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $VaryasyonID;
    /**
     * Constructor method for WebUrunResim
     * @see parent::__construct()
     * @param string $_resimAdi
     * @param base64Binary $_resimBuyuk
     * @param string $_resimFormat
     * @param int $_resimSira
     * @param base64Binary $_resimUrunDetay
     * @param base64Binary $_resimUrunListe
     * @param int $_urunKartiID
     * @param int $_varyasyonID
     * @return TicimaxStructWebUrunResim
     */
    public function __construct($_resimAdi = NULL,$_resimBuyuk = NULL,$_resimFormat = NULL,$_resimSira = NULL,$_resimUrunDetay = NULL,$_resimUrunListe = NULL,$_urunKartiID = NULL,$_varyasyonID = NULL)
    {
        parent::__construct(array('ResimAdi'=>$_resimAdi,'ResimBuyuk'=>$_resimBuyuk,'ResimFormat'=>$_resimFormat,'ResimSira'=>$_resimSira,'ResimUrunDetay'=>$_resimUrunDetay,'ResimUrunListe'=>$_resimUrunListe,'UrunKartiID'=>$_urunKartiID,'VaryasyonID'=>$_varyasyonID),false);
    }
    /**
     * Get ResimAdi value
     * @return string|null
     */
    public function getResimAdi()
    {
        return $this->ResimAdi;
    }
    /**
     * Set ResimAdi value
     * @param string $_resimAdi the ResimAdi
     * @return string
     */
    public function setResimAdi($_resimAdi)
    {
        return ($this->ResimAdi = $_resimAdi);
    }
    /**
     * Get ResimBuyuk value
     * @return base64Binary|null
     */
    public function getResimBuyuk()
    {
        return $this->ResimBuyuk;
    }
    /**
     * Set ResimBuyuk value
     * @param base64Binary $_resimBuyuk the ResimBuyuk
     * @return base64Binary
     */
    public function setResimBuyuk($_resimBuyuk)
    {
        return ($this->ResimBuyuk = $_resimBuyuk);
    }
    /**
     * Get ResimFormat value
     * @return string|null
     */
    public function getResimFormat()
    {
        return $this->ResimFormat;
    }
    /**
     * Set ResimFormat value
     * @param string $_resimFormat the ResimFormat
     * @return string
     */
    public function setResimFormat($_resimFormat)
    {
        return ($this->ResimFormat = $_resimFormat);
    }
    /**
     * Get ResimSira value
     * @return int|null
     */
    public function getResimSira()
    {
        return $this->ResimSira;
    }
    /**
     * Set ResimSira value
     * @param int $_resimSira the ResimSira
     * @return int
     */
    public function setResimSira($_resimSira)
    {
        return ($this->ResimSira = $_resimSira);
    }
    /**
     * Get ResimUrunDetay value
     * @return base64Binary|null
     */
    public function getResimUrunDetay()
    {
        return $this->ResimUrunDetay;
    }
    /**
     * Set ResimUrunDetay value
     * @param base64Binary $_resimUrunDetay the ResimUrunDetay
     * @return base64Binary
     */
    public function setResimUrunDetay($_resimUrunDetay)
    {
        return ($this->ResimUrunDetay = $_resimUrunDetay);
    }
    /**
     * Get ResimUrunListe value
     * @return base64Binary|null
     */
    public function getResimUrunListe()
    {
        return $this->ResimUrunListe;
    }
    /**
     * Set ResimUrunListe value
     * @param base64Binary $_resimUrunListe the ResimUrunListe
     * @return base64Binary
     */
    public function setResimUrunListe($_resimUrunListe)
    {
        return ($this->ResimUrunListe = $_resimUrunListe);
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
     * Get VaryasyonID value
     * @return int|null
     */
    public function getVaryasyonID()
    {
        return $this->VaryasyonID;
    }
    /**
     * Set VaryasyonID value
     * @param int $_varyasyonID the VaryasyonID
     * @return int
     */
    public function setVaryasyonID($_varyasyonID)
    {
        return ($this->VaryasyonID = $_varyasyonID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructWebUrunResim
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
