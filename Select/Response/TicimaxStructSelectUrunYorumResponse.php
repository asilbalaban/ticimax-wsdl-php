<?php
/**
 * File for class TicimaxStructSelectUrunYorumResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrunYorumResponse originally named SelectUrunYorumResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrunYorumResponse extends TicimaxWsdlClass
{
    /**
     * The SelectUrunYorumResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunYorum
     */
    public $SelectUrunYorumResult;
    /**
     * Constructor method for SelectUrunYorumResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfUrunYorum $_selectUrunYorumResult
     * @return TicimaxStructSelectUrunYorumResponse
     */
    public function __construct($_selectUrunYorumResult = NULL)
    {
        parent::__construct(array('SelectUrunYorumResult'=>($_selectUrunYorumResult instanceof TicimaxStructArrayOfUrunYorum)?$_selectUrunYorumResult:new TicimaxStructArrayOfUrunYorum($_selectUrunYorumResult)),false);
    }
    /**
     * Get SelectUrunYorumResult value
     * @return TicimaxStructArrayOfUrunYorum|null
     */
    public function getSelectUrunYorumResult()
    {
        return $this->SelectUrunYorumResult;
    }
    /**
     * Set SelectUrunYorumResult value
     * @param TicimaxStructArrayOfUrunYorum $_selectUrunYorumResult the SelectUrunYorumResult
     * @return TicimaxStructArrayOfUrunYorum
     */
    public function setSelectUrunYorumResult($_selectUrunYorumResult)
    {
        return ($this->SelectUrunYorumResult = $_selectUrunYorumResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrunYorumResponse
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
