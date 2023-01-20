<?php
/**
 * File for class TicimaxStructVaryasyonGuncelle
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructVaryasyonGuncelle originally named VaryasyonGuncelle
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructVaryasyonGuncelle extends TicimaxWsdlClass
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
     * The urun
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructVaryasyon
     */
    public $urun;
    /**
     * The ayar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructVaryasyonAyar
     */
    public $ayar;
    /**
     * Constructor method for VaryasyonGuncelle
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructVaryasyon $_urun
     * @param TicimaxStructVaryasyonAyar $_ayar
     * @return TicimaxStructVaryasyonGuncelle
     */
    public function __construct($_uyeKodu = NULL,$_urun = NULL,$_ayar = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'urun'=>$_urun,'ayar'=>$_ayar),false);
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
     * Get urun value
     * @return TicimaxStructVaryasyon|null
     */
    public function getUrun()
    {
        return $this->urun;
    }
    /**
     * Set urun value
     * @param TicimaxStructVaryasyon $_urun the urun
     * @return TicimaxStructVaryasyon
     */
    public function setUrun($_urun)
    {
        return ($this->urun = $_urun);
    }
    /**
     * Get ayar value
     * @return TicimaxStructVaryasyonAyar|null
     */
    public function getAyar()
    {
        return $this->ayar;
    }
    /**
     * Set ayar value
     * @param TicimaxStructVaryasyonAyar $_ayar the ayar
     * @return TicimaxStructVaryasyonAyar
     */
    public function setAyar($_ayar)
    {
        return ($this->ayar = $_ayar);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructVaryasyonGuncelle
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
