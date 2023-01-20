<?php
/**
 * File for class TicimaxStructStokAdediGuncelle
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructStokAdediGuncelle originally named StokAdediGuncelle
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructStokAdediGuncelle extends TicimaxWsdlClass
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
     * The urunler
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfVaryasyon
     */
    public $urunler;
    /**
     * Constructor method for StokAdediGuncelle
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructArrayOfVaryasyon $_urunler
     * @return TicimaxStructStokAdediGuncelle
     */
    public function __construct($_uyeKodu = NULL,$_urunler = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'urunler'=>($_urunler instanceof TicimaxStructArrayOfVaryasyon)?$_urunler:new TicimaxStructArrayOfVaryasyon($_urunler)),false);
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
     * Get urunler value
     * @return TicimaxStructArrayOfVaryasyon|null
     */
    public function getUrunler()
    {
        return $this->urunler;
    }
    /**
     * Set urunler value
     * @param TicimaxStructArrayOfVaryasyon $_urunler the urunler
     * @return TicimaxStructArrayOfVaryasyon
     */
    public function setUrunler($_urunler)
    {
        return ($this->urunler = $_urunler);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructStokAdediGuncelle
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
