<?php
/**
 * File for class TicimaxStructUpdateEkSecenekDegerDilResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateEkSecenekDegerDilResponse originally named UpdateEkSecenekDegerDilResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateEkSecenekDegerDilResponse extends TicimaxWsdlClass
{
    /**
     * The UpdateEkSecenekDegerDilResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $UpdateEkSecenekDegerDilResult;
    /**
     * Constructor method for UpdateEkSecenekDegerDilResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_updateEkSecenekDegerDilResult
     * @return TicimaxStructUpdateEkSecenekDegerDilResponse
     */
    public function __construct($_updateEkSecenekDegerDilResult = NULL)
    {
        parent::__construct(array('UpdateEkSecenekDegerDilResult'=>$_updateEkSecenekDegerDilResult),false);
    }
    /**
     * Get UpdateEkSecenekDegerDilResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getUpdateEkSecenekDegerDilResult()
    {
        return $this->UpdateEkSecenekDegerDilResult;
    }
    /**
     * Set UpdateEkSecenekDegerDilResult value
     * @param TicimaxStructWebServisResponse $_updateEkSecenekDegerDilResult the UpdateEkSecenekDegerDilResult
     * @return TicimaxStructWebServisResponse
     */
    public function setUpdateEkSecenekDegerDilResult($_updateEkSecenekDegerDilResult)
    {
        return ($this->UpdateEkSecenekDegerDilResult = $_updateEkSecenekDegerDilResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUpdateEkSecenekDegerDilResponse
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
