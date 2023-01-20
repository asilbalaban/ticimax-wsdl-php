<?php
/**
 * File for class TicimaxStructSelectEtiketResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectEtiketResponse originally named SelectEtiketResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectEtiketResponse extends TicimaxWsdlClass
{
    /**
     * The SelectEtiketResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfEtiket
     */
    public $SelectEtiketResult;
    /**
     * Constructor method for SelectEtiketResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfEtiket $_selectEtiketResult
     * @return TicimaxStructSelectEtiketResponse
     */
    public function __construct($_selectEtiketResult = NULL)
    {
        parent::__construct(array('SelectEtiketResult'=>($_selectEtiketResult instanceof TicimaxStructArrayOfEtiket)?$_selectEtiketResult:new TicimaxStructArrayOfEtiket($_selectEtiketResult)),false);
    }
    /**
     * Get SelectEtiketResult value
     * @return TicimaxStructArrayOfEtiket|null
     */
    public function getSelectEtiketResult()
    {
        return $this->SelectEtiketResult;
    }
    /**
     * Set SelectEtiketResult value
     * @param TicimaxStructArrayOfEtiket $_selectEtiketResult the SelectEtiketResult
     * @return TicimaxStructArrayOfEtiket
     */
    public function setSelectEtiketResult($_selectEtiketResult)
    {
        return ($this->SelectEtiketResult = $_selectEtiketResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectEtiketResponse
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
