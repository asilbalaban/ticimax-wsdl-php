<?php
/**
 * File for class TicimaxStructUpdateKategoriDilResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateKategoriDilResponse originally named UpdateKategoriDilResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateKategoriDilResponse extends TicimaxWsdlClass
{
    /**
     * The UpdateKategoriDilResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $UpdateKategoriDilResult;
    /**
     * Constructor method for UpdateKategoriDilResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_updateKategoriDilResult
     * @return TicimaxStructUpdateKategoriDilResponse
     */
    public function __construct($_updateKategoriDilResult = NULL)
    {
        parent::__construct(array('UpdateKategoriDilResult'=>$_updateKategoriDilResult),false);
    }
    /**
     * Get UpdateKategoriDilResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getUpdateKategoriDilResult()
    {
        return $this->UpdateKategoriDilResult;
    }
    /**
     * Set UpdateKategoriDilResult value
     * @param TicimaxStructWebServisResponse $_updateKategoriDilResult the UpdateKategoriDilResult
     * @return TicimaxStructWebServisResponse
     */
    public function setUpdateKategoriDilResult($_updateKategoriDilResult)
    {
        return ($this->UpdateKategoriDilResult = $_updateKategoriDilResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUpdateKategoriDilResponse
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
