<?php
/**
 * File for class TicimaxStructSelectEkSecenekGrup
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectEkSecenekGrup originally named SelectEkSecenekGrup
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectEkSecenekGrup extends TicimaxWsdlClass
{
    /**
     * The UyeKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UyeKodu;
    /**
     * The dil
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $dil;
    /**
     * Constructor method for SelectEkSecenekGrup
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param string $_dil
     * @return TicimaxStructSelectEkSecenekGrup
     */
    public function __construct($_uyeKodu = NULL,$_dil = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'dil'=>$_dil),false);
    }
    /**
     * Get UyeKodu value
     * @return string|null
     */
    public function getUyeKodu()
    {
        return $this->UyeKodu;
    }
    /**
     * Set UyeKodu value
     * @param string $_uyeKodu the UyeKodu
     * @return string
     */
    public function setUyeKodu($_uyeKodu)
    {
        return ($this->UyeKodu = $_uyeKodu);
    }
    /**
     * Get dil value
     * @return string|null
     */
    public function getDil()
    {
        return $this->dil;
    }
    /**
     * Set dil value
     * @param string $_dil the dil
     * @return string
     */
    public function setDil($_dil)
    {
        return ($this->dil = $_dil);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectEkSecenekGrup
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
