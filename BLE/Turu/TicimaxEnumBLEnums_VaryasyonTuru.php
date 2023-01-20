<?php
/**
 * File for class TicimaxEnumBLEnums_VaryasyonTuru
 * @package Ticimax
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxEnumBLEnums_VaryasyonTuru originally named BLEnums.VaryasyonTuru
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd3}
 * @package Ticimax
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxEnumBLEnums_VaryasyonTuru extends TicimaxWsdlClass
{
    /**
     * Constant for value 'Diger'
     * @return string 'Diger'
     */
    const VALUE_DIGER = 'Diger';
    /**
     * Constant for value 'Renk'
     * @return string 'Renk'
     */
    const VALUE_RENK = 'Renk';
    /**
     * Constant for value 'Beden'
     * @return string 'Beden'
     */
    const VALUE_BEDEN = 'Beden';
    /**
     * Constant for value 'Cinsiyet'
     * @return string 'Cinsiyet'
     */
    const VALUE_CINSIYET = 'Cinsiyet';
    /**
     * Constant for value 'Malzeme'
     * @return string 'Malzeme'
     */
    const VALUE_MALZEME = 'Malzeme';
    /**
     * Constant for value 'Desen'
     * @return string 'Desen'
     */
    const VALUE_DESEN = 'Desen';
    /**
     * Constant for value 'Durum'
     * @return string 'Durum'
     */
    const VALUE_DURUM = 'Durum';
    /**
     * Constant for value 'Sezon'
     * @return string 'Sezon'
     */
    const VALUE_SEZON = 'Sezon';
    /**
     * Return true if value is allowed
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_DIGER
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_RENK
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_BEDEN
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_CINSIYET
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_MALZEME
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_DESEN
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_DURUM
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::VALUE_SEZON
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(TicimaxEnumBLEnums_VaryasyonTuru::VALUE_DIGER,TicimaxEnumBLEnums_VaryasyonTuru::VALUE_RENK,TicimaxEnumBLEnums_VaryasyonTuru::VALUE_BEDEN,TicimaxEnumBLEnums_VaryasyonTuru::VALUE_CINSIYET,TicimaxEnumBLEnums_VaryasyonTuru::VALUE_MALZEME,TicimaxEnumBLEnums_VaryasyonTuru::VALUE_DESEN,TicimaxEnumBLEnums_VaryasyonTuru::VALUE_DURUM,TicimaxEnumBLEnums_VaryasyonTuru::VALUE_SEZON));
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
