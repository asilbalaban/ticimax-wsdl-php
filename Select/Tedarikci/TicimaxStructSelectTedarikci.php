<?php
/**
 * File for class TicimaxStructSelectTedarikci
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectTedarikci originally named SelectTedarikci
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectTedarikci extends TicimaxWsdlClass
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
     * The tedarikciID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $tedarikciID;
    /**
     * Constructor method for SelectTedarikci
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_tedarikciID
     * @return TicimaxStructSelectTedarikci
     */
    public function __construct($_uyeKodu = NULL,$_tedarikciID = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'tedarikciID'=>$_tedarikciID),false);
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
     * Get tedarikciID value
     * @return int|null
     */
    public function getTedarikciID()
    {
        return $this->tedarikciID;
    }
    /**
     * Set tedarikciID value
     * @param int $_tedarikciID the tedarikciID
     * @return int
     */
    public function setTedarikciID($_tedarikciID)
    {
        return ($this->tedarikciID = $_tedarikciID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectTedarikci
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
