<?php
/**
 * File for class TicimaxServiceVaryasyon
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceVaryasyon originally named Varyasyon
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceVaryasyon extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named VaryasyonGuncelle
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructVaryasyonGuncelle $_ticimaxStructVaryasyonGuncelle
     * @return TicimaxStructVaryasyonGuncelleResponse
     */
    public function VaryasyonGuncelle(TicimaxStructVaryasyonGuncelle $_ticimaxStructVaryasyonGuncelle)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->VaryasyonGuncelle($_ticimaxStructVaryasyonGuncelle));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructVaryasyonGuncelleResponse
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
