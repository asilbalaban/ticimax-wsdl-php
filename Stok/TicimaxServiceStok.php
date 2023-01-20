<?php
/**
 * File for class TicimaxServiceStok
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceStok originally named Stok
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceStok extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named StokAdediGuncelle
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructStokAdediGuncelle $_ticimaxStructStokAdediGuncelle
     * @return TicimaxStructStokAdediGuncelleResponse
     */
    public function StokAdediGuncelle(TicimaxStructStokAdediGuncelle $_ticimaxStructStokAdediGuncelle)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->StokAdediGuncelle($_ticimaxStructStokAdediGuncelle));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructStokAdediGuncelleResponse
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
