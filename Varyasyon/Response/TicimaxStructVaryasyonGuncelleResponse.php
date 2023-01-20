<?php
/**
 * File for class TicimaxStructVaryasyonGuncelleResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructVaryasyonGuncelleResponse originally named VaryasyonGuncelleResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructVaryasyonGuncelleResponse extends TicimaxWsdlClass
{
    /**
     * The VaryasyonGuncelleResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $VaryasyonGuncelleResult;
    /**
     * Constructor method for VaryasyonGuncelleResponse
     * @see parent::__construct()
     * @param int $_varyasyonGuncelleResult
     * @return TicimaxStructVaryasyonGuncelleResponse
     */
    public function __construct($_varyasyonGuncelleResult = NULL)
    {
        parent::__construct(array('VaryasyonGuncelleResult'=>$_varyasyonGuncelleResult),false);
    }
    /**
     * Get VaryasyonGuncelleResult value
     * @return int|null
     */
    public function getVaryasyonGuncelleResult()
    {
        return $this->VaryasyonGuncelleResult;
    }
    /**
     * Set VaryasyonGuncelleResult value
     * @param int $_varyasyonGuncelleResult the VaryasyonGuncelleResult
     * @return int
     */
    public function setVaryasyonGuncelleResult($_varyasyonGuncelleResult)
    {
        return ($this->VaryasyonGuncelleResult = $_varyasyonGuncelleResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructVaryasyonGuncelleResponse
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
