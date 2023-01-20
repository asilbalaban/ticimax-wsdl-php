<?php
/**
 * File for class TicimaxStructDeleteTedarikciResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructDeleteTedarikciResponse originally named DeleteTedarikciResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructDeleteTedarikciResponse extends TicimaxWsdlClass
{
    /**
     * The DeleteTedarikciResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $DeleteTedarikciResult;
    /**
     * Constructor method for DeleteTedarikciResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_deleteTedarikciResult
     * @return TicimaxStructDeleteTedarikciResponse
     */
    public function __construct($_deleteTedarikciResult = NULL)
    {
        parent::__construct(array('DeleteTedarikciResult'=>$_deleteTedarikciResult),false);
    }
    /**
     * Get DeleteTedarikciResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getDeleteTedarikciResult()
    {
        return $this->DeleteTedarikciResult;
    }
    /**
     * Set DeleteTedarikciResult value
     * @param TicimaxStructWebServisResponse $_deleteTedarikciResult the DeleteTedarikciResult
     * @return TicimaxStructWebServisResponse
     */
    public function setDeleteTedarikciResult($_deleteTedarikciResult)
    {
        return ($this->DeleteTedarikciResult = $_deleteTedarikciResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructDeleteTedarikciResponse
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
