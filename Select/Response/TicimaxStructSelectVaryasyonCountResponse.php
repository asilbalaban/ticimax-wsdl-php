<?php
/**
 * File for class TicimaxStructSelectVaryasyonCountResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectVaryasyonCountResponse originally named SelectVaryasyonCountResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectVaryasyonCountResponse extends TicimaxWsdlClass
{
    /**
     * The SelectVaryasyonCountResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SelectVaryasyonCountResult;
    /**
     * Constructor method for SelectVaryasyonCountResponse
     * @see parent::__construct()
     * @param int $_selectVaryasyonCountResult
     * @return TicimaxStructSelectVaryasyonCountResponse
     */
    public function __construct($_selectVaryasyonCountResult = NULL)
    {
        parent::__construct(array('SelectVaryasyonCountResult'=>$_selectVaryasyonCountResult),false);
    }
    /**
     * Get SelectVaryasyonCountResult value
     * @return int|null
     */
    public function getSelectVaryasyonCountResult()
    {
        return $this->SelectVaryasyonCountResult;
    }
    /**
     * Set SelectVaryasyonCountResult value
     * @param int $_selectVaryasyonCountResult the SelectVaryasyonCountResult
     * @return int
     */
    public function setSelectVaryasyonCountResult($_selectVaryasyonCountResult)
    {
        return ($this->SelectVaryasyonCountResult = $_selectVaryasyonCountResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectVaryasyonCountResponse
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
