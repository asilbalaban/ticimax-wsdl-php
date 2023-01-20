<?php
/**
 * File for class TicimaxStructUpdateUrlResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateUrlResponse originally named UpdateUrlResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateUrlResponse extends TicimaxStructWebServisResponse
{
    /**
     * The UpdateUrlResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
     * @var WebServisResponse
     */
    public $UpdateUrlResult;
    /**
     * Constructor method for UpdateUrlResponse
     * @see parent::__construct()
     * @param WebServisResponse $_updateUrlResult
     * @return TicimaxStructUpdateUrlResponse
     */
    public function __construct($_updateUrlResult = NULL)
    {
        TicimaxWsdlClass::__construct(array('UpdateUrlResult'=>$_updateUrlResult),false);
    }
    /**
     * Get UpdateUrlResult value
     * @return WebServisResponse|null
     */
    public function getUpdateUrlResult()
    {
        return $this->UpdateUrlResult;
    }
    /**
     * Set UpdateUrlResult value
     * @param WebServisResponse $_updateUrlResult the UpdateUrlResult
     * @return WebServisResponse
     */
    public function setUpdateUrlResult($_updateUrlResult)
    {
        return ($this->UpdateUrlResult = $_updateUrlResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUpdateUrlResponse
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
