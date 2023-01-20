<?php
/**
 * File for class TicimaxStructSelectUrunResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrunResponse originally named SelectUrunResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrunResponse extends TicimaxWsdlClass
{
    /**
     * The SelectUrunResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKarti
     */
    public $SelectUrunResult;
    /**
     * Constructor method for SelectUrunResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfUrunKarti $_selectUrunResult
     * @return TicimaxStructSelectUrunResponse
     */
    public function __construct($_selectUrunResult = NULL)
    {
        parent::__construct(array('SelectUrunResult'=>($_selectUrunResult instanceof TicimaxStructArrayOfUrunKarti)?$_selectUrunResult:new TicimaxStructArrayOfUrunKarti($_selectUrunResult)),false);
    }
    /**
     * Get SelectUrunResult value
     * @return TicimaxStructArrayOfUrunKarti|null
     */
    public function getSelectUrunResult()
    {
        return $this->SelectUrunResult;
    }
    /**
     * Set SelectUrunResult value
     * @param TicimaxStructArrayOfUrunKarti $_selectUrunResult the SelectUrunResult
     * @return TicimaxStructArrayOfUrunKarti
     */
    public function setSelectUrunResult($_selectUrunResult)
    {
        return ($this->SelectUrunResult = $_selectUrunResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrunResponse
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
