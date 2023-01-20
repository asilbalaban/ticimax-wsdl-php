<?php
/**
 * File for class TicimaxStructGetProductStatusResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructGetProductStatusResponse originally named GetProductStatusResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructGetProductStatusResponse extends TicimaxWsdlClass
{
    /**
     * The GetProductStatusResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfSiparisUrunDurumlari
     */
    public $GetProductStatusResult;
    /**
     * Constructor method for GetProductStatusResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfSiparisUrunDurumlari $_getProductStatusResult
     * @return TicimaxStructGetProductStatusResponse
     */
    public function __construct($_getProductStatusResult = NULL)
    {
        parent::__construct(array('GetProductStatusResult'=>($_getProductStatusResult instanceof TicimaxStructArrayOfSiparisUrunDurumlari)?$_getProductStatusResult:new TicimaxStructArrayOfSiparisUrunDurumlari($_getProductStatusResult)),false);
    }
    /**
     * Get GetProductStatusResult value
     * @return TicimaxStructArrayOfSiparisUrunDurumlari|null
     */
    public function getGetProductStatusResult()
    {
        return $this->GetProductStatusResult;
    }
    /**
     * Set GetProductStatusResult value
     * @param TicimaxStructArrayOfSiparisUrunDurumlari $_getProductStatusResult the GetProductStatusResult
     * @return TicimaxStructArrayOfSiparisUrunDurumlari
     */
    public function setGetProductStatusResult($_getProductStatusResult)
    {
        return ($this->GetProductStatusResult = $_getProductStatusResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructGetProductStatusResponse
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
