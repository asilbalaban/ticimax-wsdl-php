<?php
/**
 * File for class TicimaxServiceUrun
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceUrun originally named Urun
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceUrun extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named UrunResimYukle
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUrunResimYukle $_ticimaxStructUrunResimYukle
     * @return TicimaxStructUrunResimYukleResponse
     */
    public function UrunResimYukle(TicimaxStructUrunResimYukle $_ticimaxStructUrunResimYukle)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UrunResimYukle($_ticimaxStructUrunResimYukle));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UrunBarkodGuncelle
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUrunBarkodGuncelle $_ticimaxStructUrunBarkodGuncelle
     * @return TicimaxStructUrunBarkodGuncelleResponse
     */
    public function UrunBarkodGuncelle(TicimaxStructUrunBarkodGuncelle $_ticimaxStructUrunBarkodGuncelle)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UrunBarkodGuncelle($_ticimaxStructUrunBarkodGuncelle));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructUrunBarkodGuncelleResponse|TicimaxStructUrunResimYukleResponse
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
