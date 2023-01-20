<?php
/**
 * File for class TicimaxStructSaveTeknikDetayGrupResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveTeknikDetayGrupResponse originally named SaveTeknikDetayGrupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveTeknikDetayGrupResponse extends TicimaxWsdlClass
{
    /**
     * The SaveTeknikDetayGrupResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveTeknikDetayGrupResult;
    /**
     * Constructor method for SaveTeknikDetayGrupResponse
     * @see parent::__construct()
     * @param int $_saveTeknikDetayGrupResult
     * @return TicimaxStructSaveTeknikDetayGrupResponse
     */
    public function __construct($_saveTeknikDetayGrupResult = NULL)
    {
        parent::__construct(array('SaveTeknikDetayGrupResult'=>$_saveTeknikDetayGrupResult),false);
    }
    /**
     * Get SaveTeknikDetayGrupResult value
     * @return int|null
     */
    public function getSaveTeknikDetayGrupResult()
    {
        return $this->SaveTeknikDetayGrupResult;
    }
    /**
     * Set SaveTeknikDetayGrupResult value
     * @param int $_saveTeknikDetayGrupResult the SaveTeknikDetayGrupResult
     * @return int
     */
    public function setSaveTeknikDetayGrupResult($_saveTeknikDetayGrupResult)
    {
        return ($this->SaveTeknikDetayGrupResult = $_saveTeknikDetayGrupResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveTeknikDetayGrupResponse
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
