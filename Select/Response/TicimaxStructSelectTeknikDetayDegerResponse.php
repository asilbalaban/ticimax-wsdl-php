<?php
/**
 * File for class TicimaxStructSelectTeknikDetayDegerResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectTeknikDetayDegerResponse originally named SelectTeknikDetayDegerResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectTeknikDetayDegerResponse extends TicimaxWsdlClass
{
    /**
     * The SelectTeknikDetayDegerResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfTeknikDetayDeger
     */
    public $SelectTeknikDetayDegerResult;
    /**
     * Constructor method for SelectTeknikDetayDegerResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfTeknikDetayDeger $_selectTeknikDetayDegerResult
     * @return TicimaxStructSelectTeknikDetayDegerResponse
     */
    public function __construct($_selectTeknikDetayDegerResult = NULL)
    {
        parent::__construct(array('SelectTeknikDetayDegerResult'=>($_selectTeknikDetayDegerResult instanceof TicimaxStructArrayOfTeknikDetayDeger)?$_selectTeknikDetayDegerResult:new TicimaxStructArrayOfTeknikDetayDeger($_selectTeknikDetayDegerResult)),false);
    }
    /**
     * Get SelectTeknikDetayDegerResult value
     * @return TicimaxStructArrayOfTeknikDetayDeger|null
     */
    public function getSelectTeknikDetayDegerResult()
    {
        return $this->SelectTeknikDetayDegerResult;
    }
    /**
     * Set SelectTeknikDetayDegerResult value
     * @param TicimaxStructArrayOfTeknikDetayDeger $_selectTeknikDetayDegerResult the SelectTeknikDetayDegerResult
     * @return TicimaxStructArrayOfTeknikDetayDeger
     */
    public function setSelectTeknikDetayDegerResult($_selectTeknikDetayDegerResult)
    {
        return ($this->SelectTeknikDetayDegerResult = $_selectTeknikDetayDegerResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectTeknikDetayDegerResponse
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
