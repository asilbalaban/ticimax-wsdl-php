<?php
/**
 * File for class TicimaxStructUpdateTeknikDetayOzellikDilResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateTeknikDetayOzellikDilResponse originally named UpdateTeknikDetayOzellikDilResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateTeknikDetayOzellikDilResponse extends TicimaxWsdlClass
{
    /**
     * The UpdateTeknikDetayOzellikDilResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $UpdateTeknikDetayOzellikDilResult;
    /**
     * Constructor method for UpdateTeknikDetayOzellikDilResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_updateTeknikDetayOzellikDilResult
     * @return TicimaxStructUpdateTeknikDetayOzellikDilResponse
     */
    public function __construct($_updateTeknikDetayOzellikDilResult = NULL)
    {
        parent::__construct(array('UpdateTeknikDetayOzellikDilResult'=>$_updateTeknikDetayOzellikDilResult),false);
    }
    /**
     * Get UpdateTeknikDetayOzellikDilResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getUpdateTeknikDetayOzellikDilResult()
    {
        return $this->UpdateTeknikDetayOzellikDilResult;
    }
    /**
     * Set UpdateTeknikDetayOzellikDilResult value
     * @param TicimaxStructWebServisResponse $_updateTeknikDetayOzellikDilResult the UpdateTeknikDetayOzellikDilResult
     * @return TicimaxStructWebServisResponse
     */
    public function setUpdateTeknikDetayOzellikDilResult($_updateTeknikDetayOzellikDilResult)
    {
        return ($this->UpdateTeknikDetayOzellikDilResult = $_updateTeknikDetayOzellikDilResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUpdateTeknikDetayOzellikDilResponse
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
