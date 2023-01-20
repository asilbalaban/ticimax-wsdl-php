<?php
/**
 * File for class TicimaxStructSaveTedarikci
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveTedarikci originally named SaveTedarikci
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveTedarikci extends TicimaxWsdlClass
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
     * The tedarikci
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTedarikci
     */
    public $tedarikci;
    /**
     * Constructor method for SaveTedarikci
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructTedarikci $_tedarikci
     * @return TicimaxStructSaveTedarikci
     */
    public function __construct($_uyeKodu = NULL,$_tedarikci = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'tedarikci'=>$_tedarikci),false);
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
     * Get tedarikci value
     * @return TicimaxStructTedarikci|null
     */
    public function getTedarikci()
    {
        return $this->tedarikci;
    }
    /**
     * Set tedarikci value
     * @param TicimaxStructTedarikci $_tedarikci the tedarikci
     * @return TicimaxStructTedarikci
     */
    public function setTedarikci($_tedarikci)
    {
        return ($this->tedarikci = $_tedarikci);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveTedarikci
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
