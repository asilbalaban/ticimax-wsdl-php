<?php
/**
 * File for class TicimaxStructSaveTeknikDetayOzellikResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveTeknikDetayOzellikResponse originally named SaveTeknikDetayOzellikResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveTeknikDetayOzellikResponse extends TicimaxWsdlClass
{
    /**
     * The SaveTeknikDetayOzellikResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveTeknikDetayOzellikResult;
    /**
     * Constructor method for SaveTeknikDetayOzellikResponse
     * @see parent::__construct()
     * @param int $_saveTeknikDetayOzellikResult
     * @return TicimaxStructSaveTeknikDetayOzellikResponse
     */
    public function __construct($_saveTeknikDetayOzellikResult = NULL)
    {
        parent::__construct(array('SaveTeknikDetayOzellikResult'=>$_saveTeknikDetayOzellikResult),false);
    }
    /**
     * Get SaveTeknikDetayOzellikResult value
     * @return int|null
     */
    public function getSaveTeknikDetayOzellikResult()
    {
        return $this->SaveTeknikDetayOzellikResult;
    }
    /**
     * Set SaveTeknikDetayOzellikResult value
     * @param int $_saveTeknikDetayOzellikResult the SaveTeknikDetayOzellikResult
     * @return int
     */
    public function setSaveTeknikDetayOzellikResult($_saveTeknikDetayOzellikResult)
    {
        return ($this->SaveTeknikDetayOzellikResult = $_saveTeknikDetayOzellikResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveTeknikDetayOzellikResponse
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
