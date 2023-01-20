<?php
/**
 * File for class TicimaxServiceSave
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceSave originally named Save
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceSave extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named SaveKategori
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveKategori $_ticimaxStructSaveKategori
     * @return TicimaxStructSaveKategoriResponse
     */
    public function SaveKategori(TicimaxStructSaveKategori $_ticimaxStructSaveKategori)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveKategori($_ticimaxStructSaveKategori));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveKategoriParent
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveKategoriParent $_ticimaxStructSaveKategoriParent
     * @return TicimaxStructSaveKategoriParentResponse
     */
    public function SaveKategoriParent(TicimaxStructSaveKategoriParent $_ticimaxStructSaveKategoriParent)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveKategoriParent($_ticimaxStructSaveKategoriParent));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveMarka
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveMarka $_ticimaxStructSaveMarka
     * @return TicimaxStructSaveMarkaResponse
     */
    public function SaveMarka(TicimaxStructSaveMarka $_ticimaxStructSaveMarka)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveMarka($_ticimaxStructSaveMarka));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveTedarikci
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveTedarikci $_ticimaxStructSaveTedarikci
     * @return TicimaxStructSaveTedarikciResponse
     */
    public function SaveTedarikci(TicimaxStructSaveTedarikci $_ticimaxStructSaveTedarikci)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveTedarikci($_ticimaxStructSaveTedarikci));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveEtiket
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveEtiket $_ticimaxStructSaveEtiket
     * @return TicimaxStructSaveEtiketResponse
     */
    public function SaveEtiket(TicimaxStructSaveEtiket $_ticimaxStructSaveEtiket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveEtiket($_ticimaxStructSaveEtiket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveParaBirimi
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveParaBirimi $_ticimaxStructSaveParaBirimi
     * @return TicimaxStructSaveParaBirimiResponse
     */
    public function SaveParaBirimi(TicimaxStructSaveParaBirimi $_ticimaxStructSaveParaBirimi)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveParaBirimi($_ticimaxStructSaveParaBirimi));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveTeknikDetayGrup
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveTeknikDetayGrup $_ticimaxStructSaveTeknikDetayGrup
     * @return TicimaxStructSaveTeknikDetayGrupResponse
     */
    public function SaveTeknikDetayGrup(TicimaxStructSaveTeknikDetayGrup $_ticimaxStructSaveTeknikDetayGrup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveTeknikDetayGrup($_ticimaxStructSaveTeknikDetayGrup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveTeknikDetayOzellik
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveTeknikDetayOzellik $_ticimaxStructSaveTeknikDetayOzellik
     * @return TicimaxStructSaveTeknikDetayOzellikResponse
     */
    public function SaveTeknikDetayOzellik(TicimaxStructSaveTeknikDetayOzellik $_ticimaxStructSaveTeknikDetayOzellik)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveTeknikDetayOzellik($_ticimaxStructSaveTeknikDetayOzellik));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveTeknikDetayDeger
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveTeknikDetayDeger $_ticimaxStructSaveTeknikDetayDeger
     * @return TicimaxStructSaveTeknikDetayDegerResponse
     */
    public function SaveTeknikDetayDeger(TicimaxStructSaveTeknikDetayDeger $_ticimaxStructSaveTeknikDetayDeger)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveTeknikDetayDeger($_ticimaxStructSaveTeknikDetayDeger));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveAsortiGrup
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveAsortiGrup $_ticimaxStructSaveAsortiGrup
     * @return TicimaxStructSaveAsortiGrupResponse
     */
    public function SaveAsortiGrup(TicimaxStructSaveAsortiGrup $_ticimaxStructSaveAsortiGrup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveAsortiGrup($_ticimaxStructSaveAsortiGrup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveAsortiMiktar
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveAsortiMiktar $_ticimaxStructSaveAsortiMiktar
     * @return TicimaxStructSaveAsortiMiktarResponse
     */
    public function SaveAsortiMiktar(TicimaxStructSaveAsortiMiktar $_ticimaxStructSaveAsortiMiktar)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveAsortiMiktar($_ticimaxStructSaveAsortiMiktar));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveUrun
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveUrun $_ticimaxStructSaveUrun
     * @return TicimaxStructSaveUrunResponse
     */
    public function SaveUrun(TicimaxStructSaveUrun $_ticimaxStructSaveUrun)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveUrun($_ticimaxStructSaveUrun));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveResim
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveResim $_ticimaxStructSaveResim
     * @return TicimaxStructSaveResimResponse
     */
    public function SaveResim(TicimaxStructSaveResim $_ticimaxStructSaveResim)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveResim($_ticimaxStructSaveResim));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveMagazaStok
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveMagazaStok $_ticimaxStructSaveMagazaStok
     * @return TicimaxStructSaveMagazaStokResponse
     */
    public function SaveMagazaStok(TicimaxStructSaveMagazaStok $_ticimaxStructSaveMagazaStok)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveMagazaStok($_ticimaxStructSaveMagazaStok));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveUrunKategori
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveUrunKategori $_ticimaxStructSaveUrunKategori
     * @return TicimaxStructSaveUrunKategoriResponse
     */
    public function SaveUrunKategori(TicimaxStructSaveUrunKategori $_ticimaxStructSaveUrunKategori)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveUrunKategori($_ticimaxStructSaveUrunKategori));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveUrunEtiket
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveUrunEtiket $_ticimaxStructSaveUrunEtiket
     * @return TicimaxStructSaveUrunEtiketResponse
     */
    public function SaveUrunEtiket(TicimaxStructSaveUrunEtiket $_ticimaxStructSaveUrunEtiket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveUrunEtiket($_ticimaxStructSaveUrunEtiket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SaveIlgiliUrun
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSaveIlgiliUrun $_ticimaxStructSaveIlgiliUrun
     * @return TicimaxStructSaveIlgiliUrunResponse
     */
    public function SaveIlgiliUrun(TicimaxStructSaveIlgiliUrun $_ticimaxStructSaveIlgiliUrun)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SaveIlgiliUrun($_ticimaxStructSaveIlgiliUrun));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructSaveAsortiGrupResponse|TicimaxStructSaveAsortiMiktarResponse|TicimaxStructSaveEtiketResponse|TicimaxStructSaveIlgiliUrunResponse|TicimaxStructSaveKategoriParentResponse|TicimaxStructSaveKategoriResponse|TicimaxStructSaveMagazaStokResponse|TicimaxStructSaveMarkaResponse|TicimaxStructSaveParaBirimiResponse|TicimaxStructSaveResimResponse|TicimaxStructSaveTedarikciResponse|TicimaxStructSaveTeknikDetayDegerResponse|TicimaxStructSaveTeknikDetayGrupResponse|TicimaxStructSaveTeknikDetayOzellikResponse|TicimaxStructSaveUrunEtiketResponse|TicimaxStructSaveUrunKategoriResponse|TicimaxStructSaveUrunResponse
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
