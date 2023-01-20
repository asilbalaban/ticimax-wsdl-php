<?php
/**
 * File for class TicimaxStructGetTaksitSecenekleriResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructGetTaksitSecenekleriResponse originally named GetTaksitSecenekleriResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructGetTaksitSecenekleriResponse extends TicimaxWsdlClass
{
    /**
     * The GetTaksitSecenekleriResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunOdemeSecenekBanka
     */
    public $GetTaksitSecenekleriResult;
    /**
     * Constructor method for GetTaksitSecenekleriResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfUrunOdemeSecenekBanka $_getTaksitSecenekleriResult
     * @return TicimaxStructGetTaksitSecenekleriResponse
     */
    public function __construct($_getTaksitSecenekleriResult = NULL)
    {
        parent::__construct(array('GetTaksitSecenekleriResult'=>($_getTaksitSecenekleriResult instanceof TicimaxStructArrayOfUrunOdemeSecenekBanka)?$_getTaksitSecenekleriResult:new TicimaxStructArrayOfUrunOdemeSecenekBanka($_getTaksitSecenekleriResult)),false);
    }
    /**
     * Get GetTaksitSecenekleriResult value
     * @return TicimaxStructArrayOfUrunOdemeSecenekBanka|null
     */
    public function getGetTaksitSecenekleriResult()
    {
        return $this->GetTaksitSecenekleriResult;
    }
    /**
     * Set GetTaksitSecenekleriResult value
     * @param TicimaxStructArrayOfUrunOdemeSecenekBanka $_getTaksitSecenekleriResult the GetTaksitSecenekleriResult
     * @return TicimaxStructArrayOfUrunOdemeSecenekBanka
     */
    public function setGetTaksitSecenekleriResult($_getTaksitSecenekleriResult)
    {
        return ($this->GetTaksitSecenekleriResult = $_getTaksitSecenekleriResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructGetTaksitSecenekleriResponse
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
