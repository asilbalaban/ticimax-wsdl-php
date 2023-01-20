<?php
/**
 * File for class TicimaxStructUpdateUrunDilResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateUrunDilResponse originally named UpdateUrunDilResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateUrunDilResponse extends TicimaxWsdlClass
{
    /**
     * The UpdateUrunDilResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $UpdateUrunDilResult;
    /**
     * Constructor method for UpdateUrunDilResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_updateUrunDilResult
     * @return TicimaxStructUpdateUrunDilResponse
     */
    public function __construct($_updateUrunDilResult = NULL)
    {
        parent::__construct(array('UpdateUrunDilResult'=>$_updateUrunDilResult),false);
    }
    /**
     * Get UpdateUrunDilResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getUpdateUrunDilResult()
    {
        return $this->UpdateUrunDilResult;
    }
    /**
     * Set UpdateUrunDilResult value
     * @param TicimaxStructWebServisResponse $_updateUrunDilResult the UpdateUrunDilResult
     * @return TicimaxStructWebServisResponse
     */
    public function setUpdateUrunDilResult($_updateUrunDilResult)
    {
        return ($this->UpdateUrunDilResult = $_updateUrunDilResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUpdateUrunDilResponse
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
