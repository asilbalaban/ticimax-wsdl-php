<?php
/**
 * File for class TicimaxStructSaveAsortiMiktarResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveAsortiMiktarResponse originally named SaveAsortiMiktarResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveAsortiMiktarResponse extends TicimaxWsdlClass
{
    /**
     * The SaveAsortiMiktarResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructSaveResponse
     */
    public $SaveAsortiMiktarResult;
    /**
     * Constructor method for SaveAsortiMiktarResponse
     * @see parent::__construct()
     * @param TicimaxStructSaveResponse $_saveAsortiMiktarResult
     * @return TicimaxStructSaveAsortiMiktarResponse
     */
    public function __construct($_saveAsortiMiktarResult = NULL)
    {
        parent::__construct(array('SaveAsortiMiktarResult'=>$_saveAsortiMiktarResult),false);
    }
    /**
     * Get SaveAsortiMiktarResult value
     * @return TicimaxStructSaveResponse|null
     */
    public function getSaveAsortiMiktarResult()
    {
        return $this->SaveAsortiMiktarResult;
    }
    /**
     * Set SaveAsortiMiktarResult value
     * @param TicimaxStructSaveResponse $_saveAsortiMiktarResult the SaveAsortiMiktarResult
     * @return TicimaxStructSaveResponse
     */
    public function setSaveAsortiMiktarResult($_saveAsortiMiktarResult)
    {
        return ($this->SaveAsortiMiktarResult = $_saveAsortiMiktarResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveAsortiMiktarResponse
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
