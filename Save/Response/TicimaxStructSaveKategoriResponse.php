<?php
/**
 * File for class TicimaxStructSaveKategoriResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveKategoriResponse originally named SaveKategoriResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveKategoriResponse extends TicimaxWsdlClass
{
    /**
     * The SaveKategoriResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveKategoriResult;
    /**
     * Constructor method for SaveKategoriResponse
     * @see parent::__construct()
     * @param int $_saveKategoriResult
     * @return TicimaxStructSaveKategoriResponse
     */
    public function __construct($_saveKategoriResult = NULL)
    {
        parent::__construct(array('SaveKategoriResult'=>$_saveKategoriResult),false);
    }
    /**
     * Get SaveKategoriResult value
     * @return int|null
     */
    public function getSaveKategoriResult()
    {
        return $this->SaveKategoriResult;
    }
    /**
     * Set SaveKategoriResult value
     * @param int $_saveKategoriResult the SaveKategoriResult
     * @return int
     */
    public function setSaveKategoriResult($_saveKategoriResult)
    {
        return ($this->SaveKategoriResult = $_saveKategoriResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveKategoriResponse
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
