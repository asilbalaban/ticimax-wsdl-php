<?php
/**
 * File for class TicimaxStructWebMagazaStok
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructWebMagazaStok originally named WebMagazaStok
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructWebMagazaStok extends TicimaxWsdlClass
{
    /**
     * The EksiStokAdedi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $EksiStokAdedi;
    /**
     * The MagazaKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $MagazaKodu;
    /**
     * The StokAdedi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $StokAdedi;
    /**
     * The TedarikciKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $TedarikciKodu;
    /**
     * The UrunID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunID;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * Constructor method for WebMagazaStok
     * @see parent::__construct()
     * @param double $_eksiStokAdedi
     * @param string $_magazaKodu
     * @param double $_stokAdedi
     * @param string $_tedarikciKodu
     * @param int $_urunID
     * @param int $_urunKartiID
     * @return TicimaxStructWebMagazaStok
     */
    public function __construct($_eksiStokAdedi = NULL,$_magazaKodu = NULL,$_stokAdedi = NULL,$_tedarikciKodu = NULL,$_urunID = NULL,$_urunKartiID = NULL)
    {
        parent::__construct(array('EksiStokAdedi'=>$_eksiStokAdedi,'MagazaKodu'=>$_magazaKodu,'StokAdedi'=>$_stokAdedi,'TedarikciKodu'=>$_tedarikciKodu,'UrunID'=>$_urunID,'UrunKartiID'=>$_urunKartiID),false);
    }
    /**
     * Get EksiStokAdedi value
     * @return double|null
     */
    public function getEksiStokAdedi()
    {
        return $this->EksiStokAdedi;
    }
    /**
     * Set EksiStokAdedi value
     * @param double $_eksiStokAdedi the EksiStokAdedi
     * @return double
     */
    public function setEksiStokAdedi($_eksiStokAdedi)
    {
        return ($this->EksiStokAdedi = $_eksiStokAdedi);
    }
    /**
     * Get MagazaKodu value
     * @return string|null
     */
    public function getMagazaKodu()
    {
        return $this->MagazaKodu;
    }
    /**
     * Set MagazaKodu value
     * @param string $_magazaKodu the MagazaKodu
     * @return string
     */
    public function setMagazaKodu($_magazaKodu)
    {
        return ($this->MagazaKodu = $_magazaKodu);
    }
    /**
     * Get StokAdedi value
     * @return double|null
     */
    public function getStokAdedi()
    {
        return $this->StokAdedi;
    }
    /**
     * Set StokAdedi value
     * @param double $_stokAdedi the StokAdedi
     * @return double
     */
    public function setStokAdedi($_stokAdedi)
    {
        return ($this->StokAdedi = $_stokAdedi);
    }
    /**
     * Get TedarikciKodu value
     * @return string|null
     */
    public function getTedarikciKodu()
    {
        return $this->TedarikciKodu;
    }
    /**
     * Set TedarikciKodu value
     * @param string $_tedarikciKodu the TedarikciKodu
     * @return string
     */
    public function setTedarikciKodu($_tedarikciKodu)
    {
        return ($this->TedarikciKodu = $_tedarikciKodu);
    }
    /**
     * Get UrunID value
     * @return int|null
     */
    public function getUrunID()
    {
        return $this->UrunID;
    }
    /**
     * Set UrunID value
     * @param int $_urunID the UrunID
     * @return int
     */
    public function setUrunID($_urunID)
    {
        return ($this->UrunID = $_urunID);
    }
    /**
     * Get UrunKartiID value
     * @return int|null
     */
    public function getUrunKartiID()
    {
        return $this->UrunKartiID;
    }
    /**
     * Set UrunKartiID value
     * @param int $_urunKartiID the UrunKartiID
     * @return int
     */
    public function setUrunKartiID($_urunKartiID)
    {
        return ($this->UrunKartiID = $_urunKartiID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructWebMagazaStok
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
