<?php
/**
 * File for class TicimaxStructSaveTeknikDetayDeger
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveTeknikDetayDeger originally named SaveTeknikDetayDeger
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveTeknikDetayDeger extends TicimaxWsdlClass
{
    /**
     * The UyeKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UyeKodu;
    /**
     * The m
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTeknikDetayDeger
     */
    public $m;
    /**
     * Constructor method for SaveTeknikDetayDeger
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructTeknikDetayDeger $_m
     * @return TicimaxStructSaveTeknikDetayDeger
     */
    public function __construct($_uyeKodu = NULL,$_m = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'m'=>$_m),false);
    }
    /**
     * Get UyeKodu value
     * @return string|null
     */
    public function getUyeKodu()
    {
        return $this->UyeKodu;
    }
    /**
     * Set UyeKodu value
     * @param string $_uyeKodu the UyeKodu
     * @return string
     */
    public function setUyeKodu($_uyeKodu)
    {
        return ($this->UyeKodu = $_uyeKodu);
    }
    /**
     * Get m value
     * @return TicimaxStructTeknikDetayDeger|null
     */
    public function getM()
    {
        return $this->m;
    }
    /**
     * Set m value
     * @param TicimaxStructTeknikDetayDeger $_m the m
     * @return TicimaxStructTeknikDetayDeger
     */
    public function setM($_m)
    {
        return ($this->m = $_m);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveTeknikDetayDeger
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
