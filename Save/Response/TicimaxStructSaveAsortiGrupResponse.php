<?php
/**
 * File for class TicimaxStructSaveAsortiGrupResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveAsortiGrupResponse originally named SaveAsortiGrupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveAsortiGrupResponse extends TicimaxWsdlClass
{
    /**
     * The SaveAsortiGrupResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructSaveResponse
     */
    public $SaveAsortiGrupResult;
    /**
     * Constructor method for SaveAsortiGrupResponse
     * @see parent::__construct()
     * @param TicimaxStructSaveResponse $_saveAsortiGrupResult
     * @return TicimaxStructSaveAsortiGrupResponse
     */
    public function __construct($_saveAsortiGrupResult = NULL)
    {
        parent::__construct(array('SaveAsortiGrupResult'=>$_saveAsortiGrupResult),false);
    }
    /**
     * Get SaveAsortiGrupResult value
     * @return TicimaxStructSaveResponse|null
     */
    public function getSaveAsortiGrupResult()
    {
        return $this->SaveAsortiGrupResult;
    }
    /**
     * Set SaveAsortiGrupResult value
     * @param TicimaxStructSaveResponse $_saveAsortiGrupResult the SaveAsortiGrupResult
     * @return TicimaxStructSaveResponse
     */
    public function setSaveAsortiGrupResult($_saveAsortiGrupResult)
    {
        return ($this->SaveAsortiGrupResult = $_saveAsortiGrupResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveAsortiGrupResponse
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
