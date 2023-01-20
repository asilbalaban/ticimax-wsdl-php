<?php
/**
 * File for class TicimaxStructSelectParaBirimi
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectParaBirimi originally named SelectParaBirimi
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectParaBirimi extends TicimaxWsdlClass
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
     * The ParaBirimiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ParaBirimiID;
    /**
     * Constructor method for SelectParaBirimi
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_paraBirimiID
     * @return TicimaxStructSelectParaBirimi
     */
    public function __construct($_uyeKodu = NULL,$_paraBirimiID = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'ParaBirimiID'=>$_paraBirimiID),false);
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
     * Get ParaBirimiID value
     * @return int|null
     */
    public function getParaBirimiID()
    {
        return $this->ParaBirimiID;
    }
    /**
     * Set ParaBirimiID value
     * @param int $_paraBirimiID the ParaBirimiID
     * @return int
     */
    public function setParaBirimiID($_paraBirimiID)
    {
        return ($this->ParaBirimiID = $_paraBirimiID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectParaBirimi
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
