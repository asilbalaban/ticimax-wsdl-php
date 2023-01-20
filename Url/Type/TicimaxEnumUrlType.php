<?php
/**
 * File for class TicimaxEnumUrlType
 * @package Ticimax
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxEnumUrlType originally named UrlType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxEnumUrlType extends TicimaxWsdlClass
{
    /**
     * Constant for value 'Kategori'
     * @return string 'Kategori'
     */
    const VALUE_KATEGORI = 'Kategori';
    /**
     * Constant for value 'Marka'
     * @return string 'Marka'
     */
    const VALUE_MARKA = 'Marka';
    /**
     * Constant for value 'Urun'
     * @return string 'Urun'
     */
    const VALUE_URUN = 'Urun';
    /**
     * Constant for value 'Tedarikci'
     * @return string 'Tedarikci'
     */
    const VALUE_TEDARIKCI = 'Tedarikci';
    /**
     * Return true if value is allowed
     * @uses TicimaxEnumUrlType::VALUE_KATEGORI
     * @uses TicimaxEnumUrlType::VALUE_MARKA
     * @uses TicimaxEnumUrlType::VALUE_URUN
     * @uses TicimaxEnumUrlType::VALUE_TEDARIKCI
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(TicimaxEnumUrlType::VALUE_KATEGORI,TicimaxEnumUrlType::VALUE_MARKA,TicimaxEnumUrlType::VALUE_URUN,TicimaxEnumUrlType::VALUE_TEDARIKCI));
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
