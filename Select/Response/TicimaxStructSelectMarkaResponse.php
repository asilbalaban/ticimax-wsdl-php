<?php
/**
 * File for class TicimaxStructSelectMarkaResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectMarkaResponse originally named SelectMarkaResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectMarkaResponse extends TicimaxWsdlClass
{
    /**
     * The SelectMarkaResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfMarka
     */
    public $SelectMarkaResult;
    /**
     * Constructor method for SelectMarkaResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfMarka $_selectMarkaResult
     * @return TicimaxStructSelectMarkaResponse
     */
    public function __construct($_selectMarkaResult = NULL)
    {
        parent::__construct(array('SelectMarkaResult'=>($_selectMarkaResult instanceof TicimaxStructArrayOfMarka)?$_selectMarkaResult:new TicimaxStructArrayOfMarka($_selectMarkaResult)),false);
    }
    /**
     * Get SelectMarkaResult value
     * @return TicimaxStructArrayOfMarka|null
     */
    public function getSelectMarkaResult()
    {
        return $this->SelectMarkaResult;
    }
    /**
     * Set SelectMarkaResult value
     * @param TicimaxStructArrayOfMarka $_selectMarkaResult the SelectMarkaResult
     * @return TicimaxStructArrayOfMarka
     */
    public function setSelectMarkaResult($_selectMarkaResult)
    {
        return ($this->SelectMarkaResult = $_selectMarkaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectMarkaResponse
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
