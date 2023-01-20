<?php
/**
 * File for class TicimaxStructVaryasyonFiltre
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructVaryasyonFiltre originally named VaryasyonFiltre
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructVaryasyonFiltre extends TicimaxWsdlClass
{
    /**
     * The Aktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Aktif;
    /**
     * The Barkod
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Barkod;
    /**
     * The MarketPlaceAktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var boolean
     */
    public $MarketPlaceAktif;
    /**
     * The MarketPlaceAktif2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var boolean
     */
    public $MarketPlaceAktif2;
    /**
     * The MarketPlaceAktif3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var boolean
     */
    public $MarketPlaceAktif3;
    /**
     * The StokGuncellemeTarihiBas
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $StokGuncellemeTarihiBas;
    /**
     * The StokGuncellemeTarihiSon
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $StokGuncellemeTarihiSon;
    /**
     * The StokKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $StokKodu;
    /**
     * The UrunID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunID;
    /**
     * The UrunKartiAktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var boolean
     */
    public $UrunKartiAktif;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * Constructor method for VaryasyonFiltre
     * @see parent::__construct()
     * @param int $_aktif
     * @param string $_barkod
     * @param boolean $_marketPlaceAktif
     * @param boolean $_marketPlaceAktif2
     * @param boolean $_marketPlaceAktif3
     * @param dateTime $_stokGuncellemeTarihiBas
     * @param dateTime $_stokGuncellemeTarihiSon
     * @param string $_stokKodu
     * @param int $_urunID
     * @param boolean $_urunKartiAktif
     * @param int $_urunKartiID
     * @return TicimaxStructVaryasyonFiltre
     */
    public function __construct($_aktif = NULL,$_barkod = NULL,$_marketPlaceAktif = NULL,$_marketPlaceAktif2 = NULL,$_marketPlaceAktif3 = NULL,$_stokGuncellemeTarihiBas = NULL,$_stokGuncellemeTarihiSon = NULL,$_stokKodu = NULL,$_urunID = NULL,$_urunKartiAktif = NULL,$_urunKartiID = NULL)
    {
        parent::__construct(array('Aktif'=>$_aktif,'Barkod'=>$_barkod,'MarketPlaceAktif'=>$_marketPlaceAktif,'MarketPlaceAktif2'=>$_marketPlaceAktif2,'MarketPlaceAktif3'=>$_marketPlaceAktif3,'StokGuncellemeTarihiBas'=>$_stokGuncellemeTarihiBas,'StokGuncellemeTarihiSon'=>$_stokGuncellemeTarihiSon,'StokKodu'=>$_stokKodu,'UrunID'=>$_urunID,'UrunKartiAktif'=>$_urunKartiAktif,'UrunKartiID'=>$_urunKartiID),false);
    }
    /**
     * Get Aktif value
     * @return int|null
     */
    public function getAktif()
    {
        return $this->Aktif;
    }
    /**
     * Set Aktif value
     * @param int $_aktif the Aktif
     * @return int
     */
    public function setAktif($_aktif)
    {
        return ($this->Aktif = $_aktif);
    }
    /**
     * Get Barkod value
     * @return string|null
     */
    public function getBarkod()
    {
        return $this->Barkod;
    }
    /**
     * Set Barkod value
     * @param string $_barkod the Barkod
     * @return string
     */
    public function setBarkod($_barkod)
    {
        return ($this->Barkod = $_barkod);
    }
    /**
     * Get MarketPlaceAktif value
     * @return boolean|null
     */
    public function getMarketPlaceAktif()
    {
        return $this->MarketPlaceAktif;
    }
    /**
     * Set MarketPlaceAktif value
     * @param boolean $_marketPlaceAktif the MarketPlaceAktif
     * @return boolean
     */
    public function setMarketPlaceAktif($_marketPlaceAktif)
    {
        return ($this->MarketPlaceAktif = $_marketPlaceAktif);
    }
    /**
     * Get MarketPlaceAktif2 value
     * @return boolean|null
     */
    public function getMarketPlaceAktif2()
    {
        return $this->MarketPlaceAktif2;
    }
    /**
     * Set MarketPlaceAktif2 value
     * @param boolean $_marketPlaceAktif2 the MarketPlaceAktif2
     * @return boolean
     */
    public function setMarketPlaceAktif2($_marketPlaceAktif2)
    {
        return ($this->MarketPlaceAktif2 = $_marketPlaceAktif2);
    }
    /**
     * Get MarketPlaceAktif3 value
     * @return boolean|null
     */
    public function getMarketPlaceAktif3()
    {
        return $this->MarketPlaceAktif3;
    }
    /**
     * Set MarketPlaceAktif3 value
     * @param boolean $_marketPlaceAktif3 the MarketPlaceAktif3
     * @return boolean
     */
    public function setMarketPlaceAktif3($_marketPlaceAktif3)
    {
        return ($this->MarketPlaceAktif3 = $_marketPlaceAktif3);
    }
    /**
     * Get StokGuncellemeTarihiBas value
     * @return dateTime|null
     */
    public function getStokGuncellemeTarihiBas()
    {
        return $this->StokGuncellemeTarihiBas;
    }
    /**
     * Set StokGuncellemeTarihiBas value
     * @param dateTime $_stokGuncellemeTarihiBas the StokGuncellemeTarihiBas
     * @return dateTime
     */
    public function setStokGuncellemeTarihiBas($_stokGuncellemeTarihiBas)
    {
        return ($this->StokGuncellemeTarihiBas = $_stokGuncellemeTarihiBas);
    }
    /**
     * Get StokGuncellemeTarihiSon value
     * @return dateTime|null
     */
    public function getStokGuncellemeTarihiSon()
    {
        return $this->StokGuncellemeTarihiSon;
    }
    /**
     * Set StokGuncellemeTarihiSon value
     * @param dateTime $_stokGuncellemeTarihiSon the StokGuncellemeTarihiSon
     * @return dateTime
     */
    public function setStokGuncellemeTarihiSon($_stokGuncellemeTarihiSon)
    {
        return ($this->StokGuncellemeTarihiSon = $_stokGuncellemeTarihiSon);
    }
    /**
     * Get StokKodu value
     * @return string|null
     */
    public function getStokKodu()
    {
        return $this->StokKodu;
    }
    /**
     * Set StokKodu value
     * @param string $_stokKodu the StokKodu
     * @return string
     */
    public function setStokKodu($_stokKodu)
    {
        return ($this->StokKodu = $_stokKodu);
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
     * Get UrunKartiAktif value
     * @return boolean|null
     */
    public function getUrunKartiAktif()
    {
        return $this->UrunKartiAktif;
    }
    /**
     * Set UrunKartiAktif value
     * @param boolean $_urunKartiAktif the UrunKartiAktif
     * @return boolean
     */
    public function setUrunKartiAktif($_urunKartiAktif)
    {
        return ($this->UrunKartiAktif = $_urunKartiAktif);
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
     * @return TicimaxStructVaryasyonFiltre
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
