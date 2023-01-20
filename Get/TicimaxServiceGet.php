<?php
/**
 * File for class TicimaxServiceGet
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceGet originally named Get
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceGet extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named GetTaksitSecenekleri
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructGetTaksitSecenekleri $_ticimaxStructGetTaksitSecenekleri
     * @return TicimaxStructGetTaksitSecenekleriResponse
     */
    public function GetTaksitSecenekleri(TicimaxStructGetTaksitSecenekleri $_ticimaxStructGetTaksitSecenekleri)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetTaksitSecenekleri($_ticimaxStructGetTaksitSecenekleri));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetProductStatus
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructGetProductStatus $_ticimaxStructGetProductStatus
     * @return TicimaxStructGetProductStatusResponse
     */
    public function GetProductStatus()
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetProductStatus());
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructGetProductStatusResponse|TicimaxStructGetTaksitSecenekleriResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
