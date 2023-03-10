<?php
/**
 * File for class TicimaxStructSelectUrunCountResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrunCountResponse originally named SelectUrunCountResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrunCountResponse extends TicimaxWsdlClass
{
    /**
     * The SelectUrunCountResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SelectUrunCountResult;
    /**
     * Constructor method for SelectUrunCountResponse
     * @see parent::__construct()
     * @param int $_selectUrunCountResult
     * @return TicimaxStructSelectUrunCountResponse
     */
    public function __construct($_selectUrunCountResult = NULL)
    {
        parent::__construct(array('SelectUrunCountResult'=>$_selectUrunCountResult),false);
    }
    /**
     * Get SelectUrunCountResult value
     * @return int|null
     */
    public function getSelectUrunCountResult()
    {
        return $this->SelectUrunCountResult;
    }
    /**
     * Set SelectUrunCountResult value
     * @param int $_selectUrunCountResult the SelectUrunCountResult
     * @return int
     */
    public function setSelectUrunCountResult($_selectUrunCountResult)
    {
        return ($this->SelectUrunCountResult = $_selectUrunCountResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrunCountResponse
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
