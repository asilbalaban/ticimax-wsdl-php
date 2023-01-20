<?php
/**
 * File for class TicimaxServiceDelete
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceDelete originally named Delete
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceDelete extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named DeleteKategori
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructDeleteKategori $_ticimaxStructDeleteKategori
     * @return TicimaxStructDeleteKategoriResponse
     */
    public function DeleteKategori(TicimaxStructDeleteKategori $_ticimaxStructDeleteKategori)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteKategori($_ticimaxStructDeleteKategori));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteMarka
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructDeleteMarka $_ticimaxStructDeleteMarka
     * @return TicimaxStructDeleteMarkaResponse
     */
    public function DeleteMarka(TicimaxStructDeleteMarka $_ticimaxStructDeleteMarka)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteMarka($_ticimaxStructDeleteMarka));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteTedarikci
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructDeleteTedarikci $_ticimaxStructDeleteTedarikci
     * @return TicimaxStructDeleteTedarikciResponse
     */
    public function DeleteTedarikci(TicimaxStructDeleteTedarikci $_ticimaxStructDeleteTedarikci)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteTedarikci($_ticimaxStructDeleteTedarikci));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteUrunKategori
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructDeleteUrunKategori $_ticimaxStructDeleteUrunKategori
     * @return TicimaxStructDeleteUrunKategoriResponse
     */
    public function DeleteUrunKategori(TicimaxStructDeleteUrunKategori $_ticimaxStructDeleteUrunKategori)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteUrunKategori($_ticimaxStructDeleteUrunKategori));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteUrunEtiket
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructDeleteUrunEtiket $_ticimaxStructDeleteUrunEtiket
     * @return TicimaxStructDeleteUrunEtiketResponse
     */
    public function DeleteUrunEtiket(TicimaxStructDeleteUrunEtiket $_ticimaxStructDeleteUrunEtiket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteUrunEtiket($_ticimaxStructDeleteUrunEtiket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named DeleteIlgiliUrun
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructDeleteIlgiliUrun $_ticimaxStructDeleteIlgiliUrun
     * @return TicimaxStructDeleteIlgiliUrunResponse
     */
    public function DeleteIlgiliUrun(TicimaxStructDeleteIlgiliUrun $_ticimaxStructDeleteIlgiliUrun)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->DeleteIlgiliUrun($_ticimaxStructDeleteIlgiliUrun));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructDeleteIlgiliUrunResponse|TicimaxStructDeleteKategoriResponse|TicimaxStructDeleteMarkaResponse|TicimaxStructDeleteTedarikciResponse|TicimaxStructDeleteUrunEtiketResponse|TicimaxStructDeleteUrunKategoriResponse
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
