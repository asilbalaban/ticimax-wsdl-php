<?php
/**
 * File for class TicimaxStructUpdateEkSecenekGrupDilResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateEkSecenekGrupDilResponse originally named UpdateEkSecenekGrupDilResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateEkSecenekGrupDilResponse extends TicimaxWsdlClass
{
    /**
     * The UpdateEkSecenekGrupDilResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $UpdateEkSecenekGrupDilResult;
    /**
     * Constructor method for UpdateEkSecenekGrupDilResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_updateEkSecenekGrupDilResult
     * @return TicimaxStructUpdateEkSecenekGrupDilResponse
     */
    public function __construct($_updateEkSecenekGrupDilResult = NULL)
    {
        parent::__construct(array('UpdateEkSecenekGrupDilResult'=>$_updateEkSecenekGrupDilResult),false);
    }
    /**
     * Get UpdateEkSecenekGrupDilResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getUpdateEkSecenekGrupDilResult()
    {
        return $this->UpdateEkSecenekGrupDilResult;
    }
    /**
     * Set UpdateEkSecenekGrupDilResult value
     * @param TicimaxStructWebServisResponse $_updateEkSecenekGrupDilResult the UpdateEkSecenekGrupDilResult
     * @return TicimaxStructWebServisResponse
     */
    public function setUpdateEkSecenekGrupDilResult($_updateEkSecenekGrupDilResult)
    {
        return ($this->UpdateEkSecenekGrupDilResult = $_updateEkSecenekGrupDilResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUpdateEkSecenekGrupDilResponse
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
