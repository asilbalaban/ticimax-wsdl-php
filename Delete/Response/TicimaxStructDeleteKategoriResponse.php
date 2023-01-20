<?php
/**
 * File for class TicimaxStructDeleteKategoriResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructDeleteKategoriResponse originally named DeleteKategoriResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructDeleteKategoriResponse extends TicimaxWsdlClass
{
    /**
     * The DeleteKategoriResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $DeleteKategoriResult;
    /**
     * Constructor method for DeleteKategoriResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_deleteKategoriResult
     * @return TicimaxStructDeleteKategoriResponse
     */
    public function __construct($_deleteKategoriResult = NULL)
    {
        parent::__construct(array('DeleteKategoriResult'=>$_deleteKategoriResult),false);
    }
    /**
     * Get DeleteKategoriResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getDeleteKategoriResult()
    {
        return $this->DeleteKategoriResult;
    }
    /**
     * Set DeleteKategoriResult value
     * @param TicimaxStructWebServisResponse $_deleteKategoriResult the DeleteKategoriResult
     * @return TicimaxStructWebServisResponse
     */
    public function setDeleteKategoriResult($_deleteKategoriResult)
    {
        return ($this->DeleteKategoriResult = $_deleteKategoriResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructDeleteKategoriResponse
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
