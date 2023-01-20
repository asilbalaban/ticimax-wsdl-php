<?php
/**
 * File for class TicimaxStructSelectTeknikDetayGrup
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectTeknikDetayGrup originally named SelectTeknikDetayGrup
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectTeknikDetayGrup extends TicimaxWsdlClass
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
     * The teknikDetayGrupId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $teknikDetayGrupId;
    /**
     * The dil
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $dil;
    /**
     * Constructor method for SelectTeknikDetayGrup
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_teknikDetayGrupId
     * @param string $_dil
     * @return TicimaxStructSelectTeknikDetayGrup
     */
    public function __construct($_uyeKodu = NULL,$_teknikDetayGrupId = NULL,$_dil = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'teknikDetayGrupId'=>$_teknikDetayGrupId,'dil'=>$_dil),false);
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
     * Get teknikDetayGrupId value
     * @return int|null
     */
    public function getTeknikDetayGrupId()
    {
        return $this->teknikDetayGrupId;
    }
    /**
     * Set teknikDetayGrupId value
     * @param int $_teknikDetayGrupId the teknikDetayGrupId
     * @return int
     */
    public function setTeknikDetayGrupId($_teknikDetayGrupId)
    {
        return ($this->teknikDetayGrupId = $_teknikDetayGrupId);
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
     * @return TicimaxStructSelectTeknikDetayGrup
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
