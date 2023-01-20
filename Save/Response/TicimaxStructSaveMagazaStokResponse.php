<?php
/**
 * File for class TicimaxStructSaveMagazaStokResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveMagazaStokResponse originally named SaveMagazaStokResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveMagazaStokResponse extends TicimaxStructWebServisResponse
{
    /**
     * The SaveMagazaStokResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
     * @var WebServisResponse
     */
    public $SaveMagazaStokResult;
    /**
     * Constructor method for SaveMagazaStokResponse
     * @see parent::__construct()
     * @param WebServisResponse $_saveMagazaStokResult
     * @return TicimaxStructSaveMagazaStokResponse
     */
    public function __construct($_saveMagazaStokResult = NULL)
    {
        TicimaxWsdlClass::__construct(array('SaveMagazaStokResult'=>$_saveMagazaStokResult),false);
    }
    /**
     * Get SaveMagazaStokResult value
     * @return WebServisResponse|null
     */
    public function getSaveMagazaStokResult()
    {
        return $this->SaveMagazaStokResult;
    }
    /**
     * Set SaveMagazaStokResult value
     * @param WebServisResponse $_saveMagazaStokResult the SaveMagazaStokResult
     * @return WebServisResponse
     */
    public function setSaveMagazaStokResult($_saveMagazaStokResult)
    {
        return ($this->SaveMagazaStokResult = $_saveMagazaStokResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveMagazaStokResponse
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
