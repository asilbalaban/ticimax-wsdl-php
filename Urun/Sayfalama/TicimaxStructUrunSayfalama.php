<?php
/**
 * File for class TicimaxStructUrunSayfalama
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunSayfalama originally named UrunSayfalama
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunSayfalama extends TicimaxWsdlClass
{
    /**
     * The BaslangicIndex
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $BaslangicIndex;
    /**
     * The KayitSayisi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $KayitSayisi;
    /**
     * The SiralamaDegeri
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SiralamaDegeri;
    /**
     * The SiralamaYonu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SiralamaYonu;
    /**
     * Constructor method for UrunSayfalama
     * @see parent::__construct()
     * @param int $_baslangicIndex
     * @param int $_kayitSayisi
     * @param string $_siralamaDegeri
     * @param string $_siralamaYonu
     * @return TicimaxStructUrunSayfalama
     */
    public function __construct($_baslangicIndex = NULL,$_kayitSayisi = NULL,$_siralamaDegeri = NULL,$_siralamaYonu = NULL)
    {
        parent::__construct(array('BaslangicIndex'=>$_baslangicIndex,'KayitSayisi'=>$_kayitSayisi,'SiralamaDegeri'=>$_siralamaDegeri,'SiralamaYonu'=>$_siralamaYonu),false);
    }
    /**
     * Get BaslangicIndex value
     * @return int|null
     */
    public function getBaslangicIndex()
    {
        return $this->BaslangicIndex;
    }
    /**
     * Set BaslangicIndex value
     * @param int $_baslangicIndex the BaslangicIndex
     * @return int
     */
    public function setBaslangicIndex($_baslangicIndex)
    {
        return ($this->BaslangicIndex = $_baslangicIndex);
    }
    /**
     * Get KayitSayisi value
     * @return int|null
     */
    public function getKayitSayisi()
    {
        return $this->KayitSayisi;
    }
    /**
     * Set KayitSayisi value
     * @param int $_kayitSayisi the KayitSayisi
     * @return int
     */
    public function setKayitSayisi($_kayitSayisi)
    {
        return ($this->KayitSayisi = $_kayitSayisi);
    }
    /**
     * Get SiralamaDegeri value
     * @return string|null
     */
    public function getSiralamaDegeri()
    {
        return $this->SiralamaDegeri;
    }
    /**
     * Set SiralamaDegeri value
     * @param string $_siralamaDegeri the SiralamaDegeri
     * @return string
     */
    public function setSiralamaDegeri($_siralamaDegeri)
    {
        return ($this->SiralamaDegeri = $_siralamaDegeri);
    }
    /**
     * Get SiralamaYonu value
     * @return string|null
     */
    public function getSiralamaYonu()
    {
        return $this->SiralamaYonu;
    }
    /**
     * Set SiralamaYonu value
     * @param string $_siralamaYonu the SiralamaYonu
     * @return string
     */
    public function setSiralamaYonu($_siralamaYonu)
    {
        return ($this->SiralamaYonu = $_siralamaYonu);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunSayfalama
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
