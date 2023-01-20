<?php
/**
 * File for class TicimaxStructSaveParaBirimiResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveParaBirimiResponse originally named SaveParaBirimiResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveParaBirimiResponse extends TicimaxWsdlClass
{
    /**
     * The SaveParaBirimiResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveParaBirimiResult;
    /**
     * Constructor method for SaveParaBirimiResponse
     * @see parent::__construct()
     * @param int $_saveParaBirimiResult
     * @return TicimaxStructSaveParaBirimiResponse
     */
    public function __construct($_saveParaBirimiResult = NULL)
    {
        parent::__construct(array('SaveParaBirimiResult'=>$_saveParaBirimiResult),false);
    }
    /**
     * Get SaveParaBirimiResult value
     * @return int|null
     */
    public function getSaveParaBirimiResult()
    {
        return $this->SaveParaBirimiResult;
    }
    /**
     * Set SaveParaBirimiResult value
     * @param int $_saveParaBirimiResult the SaveParaBirimiResult
     * @return int
     */
    public function setSaveParaBirimiResult($_saveParaBirimiResult)
    {
        return ($this->SaveParaBirimiResult = $_saveParaBirimiResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveParaBirimiResponse
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
