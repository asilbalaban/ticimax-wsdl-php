<?php
/**
 * File for class TicimaxStructSelectAsortiGrupResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectAsortiGrupResponse originally named SelectAsortiGrupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectAsortiGrupResponse extends TicimaxWsdlClass
{
    /**
     * The SelectAsortiGrupResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfAsortiGrup
     */
    public $SelectAsortiGrupResult;
    /**
     * Constructor method for SelectAsortiGrupResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfAsortiGrup $_selectAsortiGrupResult
     * @return TicimaxStructSelectAsortiGrupResponse
     */
    public function __construct($_selectAsortiGrupResult = NULL)
    {
        parent::__construct(array('SelectAsortiGrupResult'=>($_selectAsortiGrupResult instanceof TicimaxStructArrayOfAsortiGrup)?$_selectAsortiGrupResult:new TicimaxStructArrayOfAsortiGrup($_selectAsortiGrupResult)),false);
    }
    /**
     * Get SelectAsortiGrupResult value
     * @return TicimaxStructArrayOfAsortiGrup|null
     */
    public function getSelectAsortiGrupResult()
    {
        return $this->SelectAsortiGrupResult;
    }
    /**
     * Set SelectAsortiGrupResult value
     * @param TicimaxStructArrayOfAsortiGrup $_selectAsortiGrupResult the SelectAsortiGrupResult
     * @return TicimaxStructArrayOfAsortiGrup
     */
    public function setSelectAsortiGrupResult($_selectAsortiGrupResult)
    {
        return ($this->SelectAsortiGrupResult = $_selectAsortiGrupResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectAsortiGrupResponse
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
