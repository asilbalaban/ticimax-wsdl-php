<?php
/**
 * File for class TicimaxStructSelectIlgiliUrunResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectIlgiliUrunResponse originally named SelectIlgiliUrunResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectIlgiliUrunResponse extends TicimaxWsdlClass
{
    /**
     * The SelectIlgiliUrunResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfIlgiliUrun
     */
    public $SelectIlgiliUrunResult;
    /**
     * Constructor method for SelectIlgiliUrunResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfIlgiliUrun $_selectIlgiliUrunResult
     * @return TicimaxStructSelectIlgiliUrunResponse
     */
    public function __construct($_selectIlgiliUrunResult = NULL)
    {
        parent::__construct(array('SelectIlgiliUrunResult'=>($_selectIlgiliUrunResult instanceof TicimaxStructArrayOfIlgiliUrun)?$_selectIlgiliUrunResult:new TicimaxStructArrayOfIlgiliUrun($_selectIlgiliUrunResult)),false);
    }
    /**
     * Get SelectIlgiliUrunResult value
     * @return TicimaxStructArrayOfIlgiliUrun|null
     */
    public function getSelectIlgiliUrunResult()
    {
        return $this->SelectIlgiliUrunResult;
    }
    /**
     * Set SelectIlgiliUrunResult value
     * @param TicimaxStructArrayOfIlgiliUrun $_selectIlgiliUrunResult the SelectIlgiliUrunResult
     * @return TicimaxStructArrayOfIlgiliUrun
     */
    public function setSelectIlgiliUrunResult($_selectIlgiliUrunResult)
    {
        return ($this->SelectIlgiliUrunResult = $_selectIlgiliUrunResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectIlgiliUrunResponse
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
