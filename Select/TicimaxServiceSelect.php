<?php
/**
 * File for class TicimaxServiceSelect
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceSelect originally named Select
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceSelect extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named SelectKategori
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectKategori $_ticimaxStructSelectKategori
     * @return TicimaxStructSelectKategoriResponse
     */
    public function SelectKategori(TicimaxStructSelectKategori $_ticimaxStructSelectKategori)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectKategori($_ticimaxStructSelectKategori));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectMarka
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectMarka $_ticimaxStructSelectMarka
     * @return TicimaxStructSelectMarkaResponse
     */
    public function SelectMarka(TicimaxStructSelectMarka $_ticimaxStructSelectMarka)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectMarka($_ticimaxStructSelectMarka));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectTedarikci
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectTedarikci $_ticimaxStructSelectTedarikci
     * @return TicimaxStructSelectTedarikciResponse
     */
    public function SelectTedarikci(TicimaxStructSelectTedarikci $_ticimaxStructSelectTedarikci)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectTedarikci($_ticimaxStructSelectTedarikci));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectEtiket
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectEtiket $_ticimaxStructSelectEtiket
     * @return TicimaxStructSelectEtiketResponse
     */
    public function SelectEtiket(TicimaxStructSelectEtiket $_ticimaxStructSelectEtiket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectEtiket($_ticimaxStructSelectEtiket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectParaBirimi
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectParaBirimi $_ticimaxStructSelectParaBirimi
     * @return TicimaxStructSelectParaBirimiResponse
     */
    public function SelectParaBirimi(TicimaxStructSelectParaBirimi $_ticimaxStructSelectParaBirimi)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectParaBirimi($_ticimaxStructSelectParaBirimi));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectTeknikDetayGrup
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectTeknikDetayGrup $_ticimaxStructSelectTeknikDetayGrup
     * @return TicimaxStructSelectTeknikDetayGrupResponse
     */
    public function SelectTeknikDetayGrup(TicimaxStructSelectTeknikDetayGrup $_ticimaxStructSelectTeknikDetayGrup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectTeknikDetayGrup($_ticimaxStructSelectTeknikDetayGrup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectTeknikDetayOzellik
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectTeknikDetayOzellik $_ticimaxStructSelectTeknikDetayOzellik
     * @return TicimaxStructSelectTeknikDetayOzellikResponse
     */
    public function SelectTeknikDetayOzellik(TicimaxStructSelectTeknikDetayOzellik $_ticimaxStructSelectTeknikDetayOzellik)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectTeknikDetayOzellik($_ticimaxStructSelectTeknikDetayOzellik));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectTeknikDetayDeger
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectTeknikDetayDeger $_ticimaxStructSelectTeknikDetayDeger
     * @return TicimaxStructSelectTeknikDetayDegerResponse
     */
    public function SelectTeknikDetayDeger(TicimaxStructSelectTeknikDetayDeger $_ticimaxStructSelectTeknikDetayDeger)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectTeknikDetayDeger($_ticimaxStructSelectTeknikDetayDeger));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectAsortiGrup
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectAsortiGrup $_ticimaxStructSelectAsortiGrup
     * @return TicimaxStructSelectAsortiGrupResponse
     */
    public function SelectAsortiGrup(TicimaxStructSelectAsortiGrup $_ticimaxStructSelectAsortiGrup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectAsortiGrup($_ticimaxStructSelectAsortiGrup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectAsortiMiktar
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectAsortiMiktar $_ticimaxStructSelectAsortiMiktar
     * @return TicimaxStructSelectAsortiMiktarResponse
     */
    public function SelectAsortiMiktar(TicimaxStructSelectAsortiMiktar $_ticimaxStructSelectAsortiMiktar)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectAsortiMiktar($_ticimaxStructSelectAsortiMiktar));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectEkSecenekGrup
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectEkSecenekGrup $_ticimaxStructSelectEkSecenekGrup
     * @return TicimaxStructSelectEkSecenekGrupResponse
     */
    public function SelectEkSecenekGrup(TicimaxStructSelectEkSecenekGrup $_ticimaxStructSelectEkSecenekGrup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectEkSecenekGrup($_ticimaxStructSelectEkSecenekGrup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectEkSecenekDeger
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectEkSecenekDeger $_ticimaxStructSelectEkSecenekDeger
     * @return TicimaxStructSelectEkSecenekDegerResponse
     */
    public function SelectEkSecenekDeger(TicimaxStructSelectEkSecenekDeger $_ticimaxStructSelectEkSecenekDeger)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectEkSecenekDeger($_ticimaxStructSelectEkSecenekDeger));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectUrun
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectUrun $_ticimaxStructSelectUrun
     * @return TicimaxStructSelectUrunResponse
     */
    public function SelectUrun(TicimaxStructSelectUrun $_ticimaxStructSelectUrun)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectUrun($_ticimaxStructSelectUrun));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectUrunCount
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectUrunCount $_ticimaxStructSelectUrunCount
     * @return TicimaxStructSelectUrunCountResponse
     */
    public function SelectUrunCount(TicimaxStructSelectUrunCount $_ticimaxStructSelectUrunCount)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectUrunCount($_ticimaxStructSelectUrunCount));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectVaryasyon
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectVaryasyon $_ticimaxStructSelectVaryasyon
     * @return TicimaxStructSelectVaryasyonResponse
     */
    public function SelectVaryasyon(TicimaxStructSelectVaryasyon $_ticimaxStructSelectVaryasyon)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectVaryasyon($_ticimaxStructSelectVaryasyon));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectVaryasyonCount
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectVaryasyonCount $_ticimaxStructSelectVaryasyonCount
     * @return TicimaxStructSelectVaryasyonCountResponse
     */
    public function SelectVaryasyonCount(TicimaxStructSelectVaryasyonCount $_ticimaxStructSelectVaryasyonCount)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectVaryasyonCount($_ticimaxStructSelectVaryasyonCount));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectMagazaStok
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectMagazaStok $_ticimaxStructSelectMagazaStok
     * @return TicimaxStructSelectMagazaStokResponse
     */
    public function SelectMagazaStok(TicimaxStructSelectMagazaStok $_ticimaxStructSelectMagazaStok)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectMagazaStok($_ticimaxStructSelectMagazaStok));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectUrunOdemeSecenek
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectUrunOdemeSecenek $_ticimaxStructSelectUrunOdemeSecenek
     * @return TicimaxStructSelectUrunOdemeSecenekResponse
     */
    public function SelectUrunOdemeSecenek(TicimaxStructSelectUrunOdemeSecenek $_ticimaxStructSelectUrunOdemeSecenek)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectUrunOdemeSecenek($_ticimaxStructSelectUrunOdemeSecenek));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectUrunYorum
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectUrunYorum $_ticimaxStructSelectUrunYorum
     * @return TicimaxStructSelectUrunYorumResponse
     */
    public function SelectUrunYorum(TicimaxStructSelectUrunYorum $_ticimaxStructSelectUrunYorum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectUrunYorum($_ticimaxStructSelectUrunYorum));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectUrunKategori
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectUrunKategori $_ticimaxStructSelectUrunKategori
     * @return TicimaxStructSelectUrunKategoriResponse
     */
    public function SelectUrunKategori(TicimaxStructSelectUrunKategori $_ticimaxStructSelectUrunKategori)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectUrunKategori($_ticimaxStructSelectUrunKategori));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectUrunEtiket
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectUrunEtiket $_ticimaxStructSelectUrunEtiket
     * @return TicimaxStructSelectUrunEtiketResponse
     */
    public function SelectUrunEtiket(TicimaxStructSelectUrunEtiket $_ticimaxStructSelectUrunEtiket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectUrunEtiket($_ticimaxStructSelectUrunEtiket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SelectIlgiliUrun
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructSelectIlgiliUrun $_ticimaxStructSelectIlgiliUrun
     * @return TicimaxStructSelectIlgiliUrunResponse
     */
    public function SelectIlgiliUrun(TicimaxStructSelectIlgiliUrun $_ticimaxStructSelectIlgiliUrun)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->SelectIlgiliUrun($_ticimaxStructSelectIlgiliUrun));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructSelectAsortiGrupResponse|TicimaxStructSelectAsortiMiktarResponse|TicimaxStructSelectEkSecenekDegerResponse|TicimaxStructSelectEkSecenekGrupResponse|TicimaxStructSelectEtiketResponse|TicimaxStructSelectIlgiliUrunResponse|TicimaxStructSelectKategoriResponse|TicimaxStructSelectMagazaStokResponse|TicimaxStructSelectMarkaResponse|TicimaxStructSelectParaBirimiResponse|TicimaxStructSelectTedarikciResponse|TicimaxStructSelectTeknikDetayDegerResponse|TicimaxStructSelectTeknikDetayGrupResponse|TicimaxStructSelectTeknikDetayOzellikResponse|TicimaxStructSelectUrunCountResponse|TicimaxStructSelectUrunEtiketResponse|TicimaxStructSelectUrunKategoriResponse|TicimaxStructSelectUrunOdemeSecenekResponse|TicimaxStructSelectUrunResponse|TicimaxStructSelectUrunYorumResponse|TicimaxStructSelectVaryasyonCountResponse|TicimaxStructSelectVaryasyonResponse
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
