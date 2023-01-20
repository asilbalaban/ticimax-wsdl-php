<?php
/**
 * File for class TicimaxStructSelectUrunOdemeSecenekResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrunOdemeSecenekResponse originally named SelectUrunOdemeSecenekResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrunOdemeSecenekResponse extends TicimaxWsdlClass
{
    /**
     * The SelectUrunOdemeSecenekResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunOdemeSecenek
     */
    public $SelectUrunOdemeSecenekResult;
    /**
     * Constructor method for SelectUrunOdemeSecenekResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfUrunOdemeSecenek $_selectUrunOdemeSecenekResult
     * @return TicimaxStructSelectUrunOdemeSecenekResponse
     */
    public function __construct($_selectUrunOdemeSecenekResult = NULL)
    {
        parent::__construct(array('SelectUrunOdemeSecenekResult'=>($_selectUrunOdemeSecenekResult instanceof TicimaxStructArrayOfUrunOdemeSecenek)?$_selectUrunOdemeSecenekResult:new TicimaxStructArrayOfUrunOdemeSecenek($_selectUrunOdemeSecenekResult)),false);
    }
    /**
     * Get SelectUrunOdemeSecenekResult value
     * @return TicimaxStructArrayOfUrunOdemeSecenek|null
     */
    public function getSelectUrunOdemeSecenekResult()
    {
        return $this->SelectUrunOdemeSecenekResult;
    }
    /**
     * Set SelectUrunOdemeSecenekResult value
     * @param TicimaxStructArrayOfUrunOdemeSecenek $_selectUrunOdemeSecenekResult the SelectUrunOdemeSecenekResult
     * @return TicimaxStructArrayOfUrunOdemeSecenek
     */
    public function setSelectUrunOdemeSecenekResult($_selectUrunOdemeSecenekResult)
    {
        return ($this->SelectUrunOdemeSecenekResult = $_selectUrunOdemeSecenekResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrunOdemeSecenekResponse
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
