<?php
/**
 * File for class TicimaxStructSaveKategoriParentResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveKategoriParentResponse originally named SaveKategoriParentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveKategoriParentResponse extends TicimaxWsdlClass
{
    /**
     * The SaveKategoriParentResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveKategoriParentResult;
    /**
     * Constructor method for SaveKategoriParentResponse
     * @see parent::__construct()
     * @param int $_saveKategoriParentResult
     * @return TicimaxStructSaveKategoriParentResponse
     */
    public function __construct($_saveKategoriParentResult = NULL)
    {
        parent::__construct(array('SaveKategoriParentResult'=>$_saveKategoriParentResult),false);
    }
    /**
     * Get SaveKategoriParentResult value
     * @return int|null
     */
    public function getSaveKategoriParentResult()
    {
        return $this->SaveKategoriParentResult;
    }
    /**
     * Set SaveKategoriParentResult value
     * @param int $_saveKategoriParentResult the SaveKategoriParentResult
     * @return int
     */
    public function setSaveKategoriParentResult($_saveKategoriParentResult)
    {
        return ($this->SaveKategoriParentResult = $_saveKategoriParentResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveKategoriParentResponse
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
