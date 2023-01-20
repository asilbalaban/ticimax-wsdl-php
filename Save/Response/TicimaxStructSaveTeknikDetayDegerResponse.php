<?php
/**
 * File for class TicimaxStructSaveTeknikDetayDegerResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveTeknikDetayDegerResponse originally named SaveTeknikDetayDegerResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveTeknikDetayDegerResponse extends TicimaxWsdlClass
{
    /**
     * The SaveTeknikDetayDegerResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveTeknikDetayDegerResult;
    /**
     * Constructor method for SaveTeknikDetayDegerResponse
     * @see parent::__construct()
     * @param int $_saveTeknikDetayDegerResult
     * @return TicimaxStructSaveTeknikDetayDegerResponse
     */
    public function __construct($_saveTeknikDetayDegerResult = NULL)
    {
        parent::__construct(array('SaveTeknikDetayDegerResult'=>$_saveTeknikDetayDegerResult),false);
    }
    /**
     * Get SaveTeknikDetayDegerResult value
     * @return int|null
     */
    public function getSaveTeknikDetayDegerResult()
    {
        return $this->SaveTeknikDetayDegerResult;
    }
    /**
     * Set SaveTeknikDetayDegerResult value
     * @param int $_saveTeknikDetayDegerResult the SaveTeknikDetayDegerResult
     * @return int
     */
    public function setSaveTeknikDetayDegerResult($_saveTeknikDetayDegerResult)
    {
        return ($this->SaveTeknikDetayDegerResult = $_saveTeknikDetayDegerResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveTeknikDetayDegerResponse
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
