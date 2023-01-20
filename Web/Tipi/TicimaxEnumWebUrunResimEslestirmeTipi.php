<?php
/**
 * File for class TicimaxEnumWebUrunResimEslestirmeTipi
 * @package Ticimax
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxEnumWebUrunResimEslestirmeTipi originally named WebUrunResimEslestirmeTipi
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxEnumWebUrunResimEslestirmeTipi extends TicimaxWsdlClass
{
    /**
     * Constant for value 'Id'
     * @return string 'Id'
     */
    const VALUE_ID = 'Id';
    /**
     * Constant for value 'StokKodu'
     * @return string 'StokKodu'
     */
    const VALUE_STOKKODU = 'StokKodu';
    /**
     * Constant for value 'Barkod'
     * @return string 'Barkod'
     */
    const VALUE_BARKOD = 'Barkod';
    /**
     * Return true if value is allowed
     * @uses TicimaxEnumWebUrunResimEslestirmeTipi::VALUE_ID
     * @uses TicimaxEnumWebUrunResimEslestirmeTipi::VALUE_STOKKODU
     * @uses TicimaxEnumWebUrunResimEslestirmeTipi::VALUE_BARKOD
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(TicimaxEnumWebUrunResimEslestirmeTipi::VALUE_ID,TicimaxEnumWebUrunResimEslestirmeTipi::VALUE_STOKKODU,TicimaxEnumWebUrunResimEslestirmeTipi::VALUE_BARKOD));
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
