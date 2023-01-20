<?php
/**
 * File for class TicimaxStructSaveTedarikciResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveTedarikciResponse originally named SaveTedarikciResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveTedarikciResponse extends TicimaxWsdlClass
{
    /**
     * The SaveTedarikciResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveTedarikciResult;
    /**
     * Constructor method for SaveTedarikciResponse
     * @see parent::__construct()
     * @param int $_saveTedarikciResult
     * @return TicimaxStructSaveTedarikciResponse
     */
    public function __construct($_saveTedarikciResult = NULL)
    {
        parent::__construct(array('SaveTedarikciResult'=>$_saveTedarikciResult),false);
    }
    /**
     * Get SaveTedarikciResult value
     * @return int|null
     */
    public function getSaveTedarikciResult()
    {
        return $this->SaveTedarikciResult;
    }
    /**
     * Set SaveTedarikciResult value
     * @param int $_saveTedarikciResult the SaveTedarikciResult
     * @return int
     */
    public function setSaveTedarikciResult($_saveTedarikciResult)
    {
        return ($this->SaveTedarikciResult = $_saveTedarikciResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveTedarikciResponse
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
