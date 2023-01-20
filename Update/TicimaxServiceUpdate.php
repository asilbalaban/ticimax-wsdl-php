<?php
/**
 * File for class TicimaxServiceUpdate
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceUpdate originally named Update
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceUpdate extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named UpdateKategoriDil
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateKategoriDil $_ticimaxStructUpdateKategoriDil
     * @return TicimaxStructUpdateKategoriDilResponse
     */
    public function UpdateKategoriDil(TicimaxStructUpdateKategoriDil $_ticimaxStructUpdateKategoriDil)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateKategoriDil($_ticimaxStructUpdateKategoriDil));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateTeknikDetayGrupDil
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateTeknikDetayGrupDil $_ticimaxStructUpdateTeknikDetayGrupDil
     * @return TicimaxStructUpdateTeknikDetayGrupDilResponse
     */
    public function UpdateTeknikDetayGrupDil(TicimaxStructUpdateTeknikDetayGrupDil $_ticimaxStructUpdateTeknikDetayGrupDil)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateTeknikDetayGrupDil($_ticimaxStructUpdateTeknikDetayGrupDil));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateTeknikDetayOzellikDil
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateTeknikDetayOzellikDil $_ticimaxStructUpdateTeknikDetayOzellikDil
     * @return TicimaxStructUpdateTeknikDetayOzellikDilResponse
     */
    public function UpdateTeknikDetayOzellikDil(TicimaxStructUpdateTeknikDetayOzellikDil $_ticimaxStructUpdateTeknikDetayOzellikDil)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateTeknikDetayOzellikDil($_ticimaxStructUpdateTeknikDetayOzellikDil));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateTeknikDetayDegerDil
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateTeknikDetayDegerDil $_ticimaxStructUpdateTeknikDetayDegerDil
     * @return TicimaxStructUpdateTeknikDetayDegerDilResponse
     */
    public function UpdateTeknikDetayDegerDil(TicimaxStructUpdateTeknikDetayDegerDil $_ticimaxStructUpdateTeknikDetayDegerDil)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateTeknikDetayDegerDil($_ticimaxStructUpdateTeknikDetayDegerDil));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateEkSecenekGrupDil
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateEkSecenekGrupDil $_ticimaxStructUpdateEkSecenekGrupDil
     * @return TicimaxStructUpdateEkSecenekGrupDilResponse
     */
    public function UpdateEkSecenekGrupDil(TicimaxStructUpdateEkSecenekGrupDil $_ticimaxStructUpdateEkSecenekGrupDil)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateEkSecenekGrupDil($_ticimaxStructUpdateEkSecenekGrupDil));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateEkSecenekDegerDil
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateEkSecenekDegerDil $_ticimaxStructUpdateEkSecenekDegerDil
     * @return TicimaxStructUpdateEkSecenekDegerDilResponse
     */
    public function UpdateEkSecenekDegerDil(TicimaxStructUpdateEkSecenekDegerDil $_ticimaxStructUpdateEkSecenekDegerDil)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateEkSecenekDegerDil($_ticimaxStructUpdateEkSecenekDegerDil));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateUrunDil
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateUrunDil $_ticimaxStructUpdateUrunDil
     * @return TicimaxStructUpdateUrunDilResponse
     */
    public function UpdateUrunDil(TicimaxStructUpdateUrunDil $_ticimaxStructUpdateUrunDil)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateUrunDil($_ticimaxStructUpdateUrunDil));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named UpdateUrl
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructUpdateUrl $_ticimaxStructUpdateUrl
     * @return TicimaxStructUpdateUrlResponse
     */
    public function UpdateUrl(TicimaxStructUpdateUrl $_ticimaxStructUpdateUrl)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateUrl($_ticimaxStructUpdateUrl));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructUpdateEkSecenekDegerDilResponse|TicimaxStructUpdateEkSecenekGrupDilResponse|TicimaxStructUpdateKategoriDilResponse|TicimaxStructUpdateTeknikDetayDegerDilResponse|TicimaxStructUpdateTeknikDetayGrupDilResponse|TicimaxStructUpdateTeknikDetayOzellikDilResponse|TicimaxStructUpdateUrlResponse|TicimaxStructUpdateUrunDilResponse
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
