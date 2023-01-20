<?php
/**
 * File for class TicimaxStructSelectAsortiMiktarResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectAsortiMiktarResponse originally named SelectAsortiMiktarResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectAsortiMiktarResponse extends TicimaxWsdlClass
{
    /**
     * The SelectAsortiMiktarResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfAsortiMiktar
     */
    public $SelectAsortiMiktarResult;
    /**
     * Constructor method for SelectAsortiMiktarResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfAsortiMiktar $_selectAsortiMiktarResult
     * @return TicimaxStructSelectAsortiMiktarResponse
     */
    public function __construct($_selectAsortiMiktarResult = NULL)
    {
        parent::__construct(array('SelectAsortiMiktarResult'=>($_selectAsortiMiktarResult instanceof TicimaxStructArrayOfAsortiMiktar)?$_selectAsortiMiktarResult:new TicimaxStructArrayOfAsortiMiktar($_selectAsortiMiktarResult)),false);
    }
    /**
     * Get SelectAsortiMiktarResult value
     * @return TicimaxStructArrayOfAsortiMiktar|null
     */
    public function getSelectAsortiMiktarResult()
    {
        return $this->SelectAsortiMiktarResult;
    }
    /**
     * Set SelectAsortiMiktarResult value
     * @param TicimaxStructArrayOfAsortiMiktar $_selectAsortiMiktarResult the SelectAsortiMiktarResult
     * @return TicimaxStructArrayOfAsortiMiktar
     */
    public function setSelectAsortiMiktarResult($_selectAsortiMiktarResult)
    {
        return ($this->SelectAsortiMiktarResult = $_selectAsortiMiktarResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectAsortiMiktarResponse
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
