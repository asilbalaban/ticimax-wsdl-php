<?php
/**
 * File for class TicimaxStructSaveUrun
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveUrun originally named SaveUrun
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveUrun extends TicimaxWsdlClass
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
     * The urunKartlari
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKarti
     */
    public $urunKartlari;
    /**
     * The ukAyar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunKartiAyar
     */
    public $ukAyar;
    /**
     * The vAyar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructVaryasyonAyar
     */
    public $vAyar;
    /**
     * Constructor method for SaveUrun
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructArrayOfUrunKarti $_urunKartlari
     * @param TicimaxStructUrunKartiAyar $_ukAyar
     * @param TicimaxStructVaryasyonAyar $_vAyar
     * @return TicimaxStructSaveUrun
     */
    public function __construct($_uyeKodu = NULL,$_urunKartlari = NULL,$_ukAyar = NULL,$_vAyar = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'urunKartlari'=>($_urunKartlari instanceof TicimaxStructArrayOfUrunKarti)?$_urunKartlari:new TicimaxStructArrayOfUrunKarti($_urunKartlari),'ukAyar'=>$_ukAyar,'vAyar'=>$_vAyar),false);
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
     * Get urunKartlari value
     * @return TicimaxStructArrayOfUrunKarti|null
     */
    public function getUrunKartlari()
    {
        return $this->urunKartlari;
    }
    /**
     * Set urunKartlari value
     * @param TicimaxStructArrayOfUrunKarti $_urunKartlari the urunKartlari
     * @return TicimaxStructArrayOfUrunKarti
     */
    public function setUrunKartlari($_urunKartlari)
    {
        return ($this->urunKartlari = $_urunKartlari);
    }
    /**
     * Get ukAyar value
     * @return TicimaxStructUrunKartiAyar|null
     */
    public function getUkAyar()
    {
        return $this->ukAyar;
    }
    /**
     * Set ukAyar value
     * @param TicimaxStructUrunKartiAyar $_ukAyar the ukAyar
     * @return TicimaxStructUrunKartiAyar
     */
    public function setUkAyar($_ukAyar)
    {
        return ($this->ukAyar = $_ukAyar);
    }
    /**
     * Get vAyar value
     * @return TicimaxStructVaryasyonAyar|null
     */
    public function getVAyar()
    {
        return $this->vAyar;
    }
    /**
     * Set vAyar value
     * @param TicimaxStructVaryasyonAyar $_vAyar the vAyar
     * @return TicimaxStructVaryasyonAyar
     */
    public function setVAyar($_vAyar)
    {
        return ($this->vAyar = $_vAyar);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveUrun
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
