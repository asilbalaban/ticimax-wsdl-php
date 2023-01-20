<?php
/**
 * File for class TicimaxStructSelectAsortiMiktar
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectAsortiMiktar originally named SelectAsortiMiktar
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectAsortiMiktar extends TicimaxWsdlClass
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
     * The asortiMiktarId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $asortiMiktarId;
    /**
     * Constructor method for SelectAsortiMiktar
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_asortiMiktarId
     * @return TicimaxStructSelectAsortiMiktar
     */
    public function __construct($_uyeKodu = NULL,$_asortiMiktarId = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'asortiMiktarId'=>$_asortiMiktarId),false);
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
     * Get asortiMiktarId value
     * @return int|null
     */
    public function getAsortiMiktarId()
    {
        return $this->asortiMiktarId;
    }
    /**
     * Set asortiMiktarId value
     * @param int $_asortiMiktarId the asortiMiktarId
     * @return int
     */
    public function setAsortiMiktarId($_asortiMiktarId)
    {
        return ($this->asortiMiktarId = $_asortiMiktarId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectAsortiMiktar
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
