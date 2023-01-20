<?php
/**
 * File for class TicimaxStructSelectMarka
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectMarka originally named SelectMarka
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectMarka extends TicimaxWsdlClass
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
     * The markaID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $markaID;
    /**
     * Constructor method for SelectMarka
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_markaID
     * @return TicimaxStructSelectMarka
     */
    public function __construct($_uyeKodu = NULL,$_markaID = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'markaID'=>$_markaID),false);
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
     * Get markaID value
     * @return int|null
     */
    public function getMarkaID()
    {
        return $this->markaID;
    }
    /**
     * Set markaID value
     * @param int $_markaID the markaID
     * @return int
     */
    public function setMarkaID($_markaID)
    {
        return ($this->markaID = $_markaID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectMarka
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
