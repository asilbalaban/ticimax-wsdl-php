<?php
/**
 * File for class TicimaxStructSaveMarkaResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveMarkaResponse originally named SaveMarkaResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveMarkaResponse extends TicimaxWsdlClass
{
    /**
     * The SaveMarkaResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveMarkaResult;
    /**
     * Constructor method for SaveMarkaResponse
     * @see parent::__construct()
     * @param int $_saveMarkaResult
     * @return TicimaxStructSaveMarkaResponse
     */
    public function __construct($_saveMarkaResult = NULL)
    {
        parent::__construct(array('SaveMarkaResult'=>$_saveMarkaResult),false);
    }
    /**
     * Get SaveMarkaResult value
     * @return int|null
     */
    public function getSaveMarkaResult()
    {
        return $this->SaveMarkaResult;
    }
    /**
     * Set SaveMarkaResult value
     * @param int $_saveMarkaResult the SaveMarkaResult
     * @return int
     */
    public function setSaveMarkaResult($_saveMarkaResult)
    {
        return ($this->SaveMarkaResult = $_saveMarkaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveMarkaResponse
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
