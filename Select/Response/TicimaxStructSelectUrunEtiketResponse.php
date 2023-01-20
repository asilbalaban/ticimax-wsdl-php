<?php
/**
 * File for class TicimaxStructSelectUrunEtiketResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrunEtiketResponse originally named SelectUrunEtiketResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrunEtiketResponse extends TicimaxWsdlClass
{
    /**
     * The SelectUrunEtiketResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunEtiket
     */
    public $SelectUrunEtiketResult;
    /**
     * Constructor method for SelectUrunEtiketResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfUrunEtiket $_selectUrunEtiketResult
     * @return TicimaxStructSelectUrunEtiketResponse
     */
    public function __construct($_selectUrunEtiketResult = NULL)
    {
        parent::__construct(array('SelectUrunEtiketResult'=>($_selectUrunEtiketResult instanceof TicimaxStructArrayOfUrunEtiket)?$_selectUrunEtiketResult:new TicimaxStructArrayOfUrunEtiket($_selectUrunEtiketResult)),false);
    }
    /**
     * Get SelectUrunEtiketResult value
     * @return TicimaxStructArrayOfUrunEtiket|null
     */
    public function getSelectUrunEtiketResult()
    {
        return $this->SelectUrunEtiketResult;
    }
    /**
     * Set SelectUrunEtiketResult value
     * @param TicimaxStructArrayOfUrunEtiket $_selectUrunEtiketResult the SelectUrunEtiketResult
     * @return TicimaxStructArrayOfUrunEtiket
     */
    public function setSelectUrunEtiketResult($_selectUrunEtiketResult)
    {
        return ($this->SelectUrunEtiketResult = $_selectUrunEtiketResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrunEtiketResponse
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
