<?php
/**
 * File for class TicimaxStructSelectParaBirimiResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectParaBirimiResponse originally named SelectParaBirimiResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectParaBirimiResponse extends TicimaxWsdlClass
{
    /**
     * The SelectParaBirimiResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfParaBirimi
     */
    public $SelectParaBirimiResult;
    /**
     * Constructor method for SelectParaBirimiResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfParaBirimi $_selectParaBirimiResult
     * @return TicimaxStructSelectParaBirimiResponse
     */
    public function __construct($_selectParaBirimiResult = NULL)
    {
        parent::__construct(array('SelectParaBirimiResult'=>($_selectParaBirimiResult instanceof TicimaxStructArrayOfParaBirimi)?$_selectParaBirimiResult:new TicimaxStructArrayOfParaBirimi($_selectParaBirimiResult)),false);
    }
    /**
     * Get SelectParaBirimiResult value
     * @return TicimaxStructArrayOfParaBirimi|null
     */
    public function getSelectParaBirimiResult()
    {
        return $this->SelectParaBirimiResult;
    }
    /**
     * Set SelectParaBirimiResult value
     * @param TicimaxStructArrayOfParaBirimi $_selectParaBirimiResult the SelectParaBirimiResult
     * @return TicimaxStructArrayOfParaBirimi
     */
    public function setSelectParaBirimiResult($_selectParaBirimiResult)
    {
        return ($this->SelectParaBirimiResult = $_selectParaBirimiResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectParaBirimiResponse
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
