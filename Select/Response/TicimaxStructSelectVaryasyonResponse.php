<?php
/**
 * File for class TicimaxStructSelectVaryasyonResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectVaryasyonResponse originally named SelectVaryasyonResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectVaryasyonResponse extends TicimaxWsdlClass
{
    /**
     * The SelectVaryasyonResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfVaryasyon
     */
    public $SelectVaryasyonResult;
    /**
     * Constructor method for SelectVaryasyonResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfVaryasyon $_selectVaryasyonResult
     * @return TicimaxStructSelectVaryasyonResponse
     */
    public function __construct($_selectVaryasyonResult = NULL)
    {
        parent::__construct(array('SelectVaryasyonResult'=>($_selectVaryasyonResult instanceof TicimaxStructArrayOfVaryasyon)?$_selectVaryasyonResult:new TicimaxStructArrayOfVaryasyon($_selectVaryasyonResult)),false);
    }
    /**
     * Get SelectVaryasyonResult value
     * @return TicimaxStructArrayOfVaryasyon|null
     */
    public function getSelectVaryasyonResult()
    {
        return $this->SelectVaryasyonResult;
    }
    /**
     * Set SelectVaryasyonResult value
     * @param TicimaxStructArrayOfVaryasyon $_selectVaryasyonResult the SelectVaryasyonResult
     * @return TicimaxStructArrayOfVaryasyon
     */
    public function setSelectVaryasyonResult($_selectVaryasyonResult)
    {
        return ($this->SelectVaryasyonResult = $_selectVaryasyonResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectVaryasyonResponse
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
